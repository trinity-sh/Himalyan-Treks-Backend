<?php

namespace App\Http\Controllers;

use App\Models\BlogsForm;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    function blogForm(Request $req){
        $blog = new BlogsForm();
        $blog->title= $req->input('title');
        $blog->date= $req->input('date');
        $blog->banner= $req->file('banner')->store("blogs");
        $blog->desp= $req->input('desp');
        $blog->save();
        return $blog;
        return "hello";
    }
}
