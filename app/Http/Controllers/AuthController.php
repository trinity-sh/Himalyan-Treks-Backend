<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function regiser(Request $req){
        $user = User::create([
            'name' => $req->input(key:'name'),
            'email' => $req->input(key:'email'),
            'password' => Hash::make($req->input(key:'password')),
        ]);
        return $user;
    }


    public function user(){
        return 'authonticated';
    }
}
