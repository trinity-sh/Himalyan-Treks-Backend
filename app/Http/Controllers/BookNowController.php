<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookNowForm;
use DB;

class BookNowController extends Controller
{
    //post function
    function bookNow(Request $req){
        $book = new BookNowForm;
        $name= $req->input('name');
        $email= $req->input('email');
        $mobile= $req->input('mobile');
        $no_of_people= $req->input('no_of_people');
        $message= $req->input('message');
        
        $book = array(
            'name' => $name, 'email' => $email, 'mobile' => $mobile, 'no_of_people' => $no_of_people, 'message' => $message
        );
        DB::table('booknowforms')->insert($book);
        return $book;
    }

    // function to get the data
    function bookNowList(){
        return BookNowForm::all();
    }
    function bookingDelete($id)
    {
        $data = BookNowForm::where('id', $id)->delete();
        if ($data) {
            return ["result" => "product has been deleted"];
        } else {
            return ["result" => "operation failed"];
        }
    }
    
}
