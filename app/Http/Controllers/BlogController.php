<?php

namespace App\Http\Controllers;

use App\Models\BlogsForm;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    //
    function blogForm(Request $req)
    {
        $blog = new BlogsForm();
        $title = $req->input('title');
        $date = $req->input('date');
        $banner = $req->input('banner');
        $desp = $req->input('desp');

        $blog = array(
            'title' => $title, 'date' => $date, 'banner' => $banner, 'desp' => $desp
        );
        DB::table('blogforms')->insert($blog);
        return $blog;
    }

    function blogList()
    {
        return BlogsForm::all();
    }
    function blogDelete($id)
    {
        $data = BlogsForm::where('id', $id)->delete();
        if ($data) {
            return ["result" => "product has been deleted"];
        } else {
            return ["result" => "operation failed"];
        }
    }

      
    function getBlog($id){
        return BlogsForm::find($id);
    }

    function updateBlog($id, Request $req)
    {
        $blog = BlogsForm::find($id);
        $blog->title = $req->input('title');
        $blog->date = $req->input('date');
        $blog->banner = $req->input('banner');
        $blog->desp = $req->input('desp');
            
        $blog->save();
        return $blog;


    }
}
