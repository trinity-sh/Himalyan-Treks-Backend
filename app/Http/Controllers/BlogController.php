<?php

namespace App\Http\Controllers;

use App\Models\BlogsForm;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    function blogForm(Request $req){
        $blog = new BlogsForm();
        $title= $req->input('title');
        $date= $req->input('date');
        $banner= $req->file('banner')->store("blogs");
        $desp= $req->input('desp');
        
        $blog = array(
            'title' => $title, 'date' => $date, 'banner' => $banner, 'desp' => $desp
        );
        DB::table('blogforms')->insert($blog);
        return $blog;
       
    }

    function blogList(){
        return BlogsForm::all();
    }
}
