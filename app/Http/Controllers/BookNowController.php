<?php

namespace App\Http\Controllers;
use App\Models\BookNowForm;
use Illuminate\Http\Request;


class BookNowController extends Controller
{
    //
    function bookNow(Request $req){
        $book = new BookNowForm;
        $book->name= $req->input('name');
        $book->email= $req->input('email');
        $book->mobile= $req->input('mobile');
        $book->message= $req->input('message');
        $book->save();
        return $book;
    }
}
