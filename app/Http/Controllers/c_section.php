<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\home;
use App\section;
use Image;
use File;

class c_section extends Controller
{
    public function getlist($hid)
    {
        $home = home::findOrFail($hid);
    	$section = section::where('h_id',$hid)->get();
    	return view('admin.section.list',[
            'home'=>$home,
            'section'=>$section,
        ]);
    }

    public function postadd(Request $Request)
    {
        $this->validate($Request,['name' => 'Required'],[] );
        $section = new section;
        $section->name = $Request->name;
        $section->content = $Request->content;
        $section->h_id = $Request->hid;
        // thêm ảnh
        if ($Request->hasFile('img')) {
            $file = $Request->file('img');
            $filename = $file->getClientOriginalName();
            while(file_exists("data/home/".$filename)){
                $filename = str_random(4)."_".$filename;
            }
            $file->move('data/home', $filename);
            $section->img = $filename;
        }
        // thêm ảnh
        $section->save();
        return redirect('admin/home/edit/'.$Request->hid)->with('Alerts','Thành công');
    }

    public function getedit($hid, $id)
    {
        $home = home::findOrFail($hid);
        $section = section::findOrFail($id);
        return view('admin.section.edit',[
            'home'=>$home,
            'section'=>$section,
        ]);
    }

    public function postedit(Request $Request,$id)
    {
        $this->validate($Request,['name' => 'Required'],[] );
        $section = section::find($id);
        $section->name = $Request->name;
        $section->content = $Request->content;
        $section->h_id = $Request->hid;
        if ($Request->hasFile('img')) {
            // xóa ảnh cũ
            if(File::exists('data/home/'.$section->img)) {
                File::delete('data/home/'.$section->img); }
            // xóa xảnh cũ
            // thêm ảnh mới
            $file = $Request->file('img');
            $filename = $file->getClientOriginalName();
            while(file_exists("data/home/".$filename))
            {
                $filename = str_random(4)."_".$filename;
            }
            $file->move('data/home', $filename);
            $section->img = $filename;
            // thêm ảnh mới
        }
        $section->save();
        return redirect('admin/home/edit/'.$Request->hid)->with('Alerts','Thành công');
    }

    public function getdelete($hid, $id)
    {
        $section = section::find($id);
        // xóa ảnh
        if(File::exists('data/home/'.$section->img)) { File::delete('data/home/'.$section->img); }
        // xóa ảnh
        $section->delete();
        return redirect('admin/home/edit/'.$hid)->with('Success','Success');
    }
}
