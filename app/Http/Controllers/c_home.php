<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\home;
use App\images;
use Image;
use File;

class c_home extends Controller
{
    public function getlist()
    {
    	$home = home::get();
    	return view('admin.home.list',['home'=>$home]);
    }

    public function getadd()
    {
        $home = new home;
        $home->heading1 = 'Tiêu đề';
        $home->save();

        return redirect('admin/home/list')->with('Success','Thành công');
    }

    public function getedit($id)
    {
        $home = home::findOrFail($id);
        return view('admin.home.edit',['home'=>$home]);
    }

    public function postedit(Request $Request,$id)
    {
        $this->validate($Request,['heading1' => 'Required'],[] );
        $home = home::find($id);
        $home->heading1 = $Request->heading1;
        $home->heading2 = $Request->heading2;
        $home->content1 = $Request->content1;
        $home->content2 = $Request->content2;
        $home->content3 = $Request->content3;
        $home->content4 = $Request->content4;
        $home->note = $Request->note;
        if ($Request->hasFile('img')) {
            // xóa ảnh cũ
            if(File::exists('data/home/'.$home->img)) {
                File::delete('data/home/'.$home->img); }
            // xóa xảnh cũ
            // thêm ảnh mới
            $file = $Request->file('img');
            $filename = $file->getClientOriginalName();
            while(file_exists("data/home/".$filename))
            {
                $filename = str_random(4)."_".$filename;
            }
            $file->move('data/home', $filename);
            $home->img = $filename;
            // thêm ảnh mới
        }
        $home->save();

        if($Request->hasFile('images')){
            foreach ($Request->file('images') as $file) {
                $images = new images();
                if(isset($file)){
                    $images->h_id = $home->id;
                    $filename = $file->getClientOriginalName();
                    while(file_exists("data/home/".$filename)){
                        $filename = str_random(4)."_".$filename;
                    }
                    $file->move('data/home', $filename);
                    $images->img = $filename;
                    $images->save();
                }
            }
        }

        return redirect('admin/home/edit/'.$id)->with('Success','Thành công');
    }

    public function getdelete($id)
    {
        $home = home::find($id);
        // xóa ảnh
        if(File::exists('data/home/'.$home->img)) { File::delete('data/home/'.$home->img); }
        // xóa ảnh
        $home->delete();
        return redirect('admin/home/list')->with('Success','Success');
    }
}
