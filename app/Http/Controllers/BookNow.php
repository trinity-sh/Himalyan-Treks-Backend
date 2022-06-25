<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookNowModel;

class BookNow extends Controller
{
    //
    function bookNow(Request $req){
        return($req->input());
    }
}
