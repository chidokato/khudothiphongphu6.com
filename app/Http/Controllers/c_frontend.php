<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\themes;
use App\news;
use App\category;
use App\product;
use App\setting;
use App\city;
use App\home;
use App\images;
use Mail;


class c_frontend extends Controller
{
    function __construct()
    {
        $head_logo = themes::where('id',1)->first();
        $head_logo_trang = themes::where('id',2)->first();
        $head_setting = setting::where('id',1)->first();
        $head_category = category::orderBy('view','asc')->get();
        $news = news::orderBy('id','desc')->get();

        view()->share( [
            'head_logo'=>$head_logo,
            'head_logo_trang'=>$head_logo_trang,
            'head_setting'=>$head_setting,
            'head_category'=>$head_category,
            'news'=>$news,
        ]);
    }

    public function home()
    {
        $home_slider = themes::where('note','slide')->orderBy('id','desc')->get();
        $home_setting = themes::where('id',1)->first();
        $gioithieu = home::where('note','Giới thiệu')->first();
        $cdt = home::where('note','Chủ đầu tư')->first();
        $tongquan = home::where('note','Tổng quan')->first();
        $vitri = home::where('note','Vị trí')->first();
        $lienketvung = home::where('note','Liên kết vùng')->first();
        $tienich = home::where('note','Tiện ích')->first();
        $matbang = home::where('note','Mặt bằng')->first();
        $uudai = home::where('note','Ưu đãi')->first();
        $tiendo = home::where('note','Tiến độ')->first();
        $thucte = home::where('note','Thực tế')->first();

        
        
        return view('pages.home',[
            'home_slider'=>$home_slider,
            'home_setting'=>$home_setting,
            'gioithieu'=>$gioithieu,
            'cdt'=>$cdt,
            'tongquan'=>$tongquan,
            'vitri'=>$vitri,
            'lienketvung'=>$lienketvung,
            'tienich'=>$tienich,
            'matbang'=>$matbang,
            'uudai'=>$uudai,
            'tiendo'=>$tiendo,
            'thucte'=>$thucte,

           
            ]);
    }

    public function sitemap()
    {
        $sitemap_category = category::all();
        $sitemap_product = product::where('id',24)->get();
        $sitemap_news = news::all();
        return response()->view('pages.sitemap', [
            'sitemap_category' => $sitemap_category,
            'sitemap_product' => $sitemap_product,
            'sitemap_news' => $sitemap_news
            ])->header('Content-Type', 'text/xml');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function category($curl)
    {
        $category = category::where('slug',$curl)->first();
        $cat_id = $category["id"];
        
        if ($category["sort_by"]==1) {
            if($category["parent"] == 0)
            {
                $product = product::join('tbl_category', 'tbl_category.id', '=', 'tbl_product.cat_id')
                    ->select('tbl_product.*')
                    ->Where(function ($query) use ($cat_id){
                        return $query->where('tbl_product.status','true')->Where('cat_id',$cat_id);
                    })
                    ->orWhere(function ($query) use ($cat_id){
                        return $query->where('tbl_product.status','true')->Where('parent',$cat_id);
                    })
                    ->orWhere('parent',$cat_id)
                    ->orderBy('id','desc')
                    ->paginate(18);
            }
            else
            {
                $product=product::where('cat_id',$cat_id)->where('tbl_product.status','true')->orderBy('id','desc')->paginate(18);
            }

            if($category["hot"] == 1)
            {
                return view('pages.productpages',['category'=>$category,'product'=>$product]);
            }
            else
            {
                return view('pages.product',['category'=>$category,'product'=>$product]);
            }
        }

        if ($category["sort_by"]==2) {
            if($category["parent"] == 0)
            {
                $news = news::join('tbl_category', 'tbl_category.id', '=', 'tbl_news.cat_id')
                    ->select('tbl_news.*')
                    ->Where(function ($query) use ($cat_id){
                        return $query->where('tbl_news.status','true')->Where('cat_id',$cat_id);
                    })
                    ->orWhere(function ($query) use ($cat_id){
                        return $query->where('tbl_news.status','true')->Where('parent',$cat_id);
                    })
                    ->orWhere('parent',$cat_id)
                    ->orderBy('id','desc')
                    ->paginate(10);
            }
            else
            {
                $news = news::join('tbl_category', 'tbl_category.id', '=', 'tbl_news.cat_id')
                    ->select('tbl_news.*')
                    ->where('cat_id',$cat_id)->where('tbl_news.status','1')->orderBy('id','desc')->paginate(10);
            }
            return view('pages.news',['category'=>$category,'news'=>$news]);
        }

        if ($category["sort_by"]==3) {
            return view('pages.singlepage',['category'=>$category]);
        }
    }

    public function singleproduct($curl,$purl)
    {
        $singleproduct = product::where('slug',$purl)->first();
        $id = $singleproduct['id'];
        $singleproduct->hits = $singleproduct->hits + 1;
        $singleproduct->save();
        $lienquan = product::where('status','true')
            ->where('cat_id',$singleproduct->cat_id)
            ->whereNotin('id',[$id])
            ->take(8)
            ->get();
        return view('pages.singleproduct',[
            'singleproduct'=>$singleproduct,
            'lienquan'=>$lienquan
        ]);
    }

    public function singlenews($nurl)
    {
        $singlenews = news::where('slug',$nurl)->first();
        $id = $singlenews['id'];
        $tinlienquan = news::where('status','true')->where('cat_id',$singlenews->cat_id)->whereNotin('id',[$id])->take(10)->get();
        return view('pages.singlenews',['singlenews'=>$singlenews, 'tinlienquan'=>$tinlienquan]);
    }

	public function dangky(Request $Request)
    {
        $head_setting = setting::where('id',1)->first();
        $mail = $head_setting['email'];
		$this->validate($Request,['phone' => 'Required'],[] );
        $name = $Request->name;
        $phone = $Request->phone;
        $email = $Request->email;
        $link = $Request->link;
        $note = $Request->note;
		$date = date('m/d/Y h:i:s', time());
        
        Mail::send('email_feedback', array('name'=>$name,'phone'=>$phone,'email'=>$email,'link'=>$link,'note'=>$note,'date'=>$date), function($message)  use ($mail){
            $message->from($mail, 'Khu đô thị Phong Phú 6');
            $message->to($mail, 'Khu đô thị Phong Phú 6')->subject('Thông tin khách hàng');
        });
        //return view('pages.camon')->with('Alerts','Gửi thành công');
		return redirect('/')->with('Alerts','Thành công');
    }

}



