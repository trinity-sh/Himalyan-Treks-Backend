<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookNowForm;

class BookNowController extends Controller
{
    //post function
    function bookNow(Request $req){
        $book = new BookNowForm;
        $book->name= $req->input('name');
        $book->email= $req->input('email');
        $book->mobile= $req->input('mobile');
        $book->mobile= $req->input('no_of_people');
        $book->message= $req->input('message');
        $book->save();
        return $book;
    }

    // function to get the data
    function bookNowList(){
        return BookNowForm::all();
    }
}
