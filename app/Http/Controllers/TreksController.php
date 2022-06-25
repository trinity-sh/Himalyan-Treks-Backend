<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TreksForm;

class TreksController extends Controller
{
    //
    function treksForm(Request $req)
    {
        $treks = new TreksForm;
        $treks->title = $req->input('title');
        $treks->days = $req->input('days');
        $treks->price = $req->input('price');
        // file input
        $treks->img = $req->file('img')->store("treksImages");
        $treks->location = $req->input('location');
        $treks->camp_location = $req->input('camp_location');
        $treks->height = $req->input('height');
        $treks->desp = $req->input('desp');
        $treks->iternery = $req->input('iternery');
        $treks->iternery_title = $req->input('iternery_title');
        $treks->iternery_desp = $req->input('iternery_desp');
        $treks->price_inclusion = $req->input('price_inclusion');
        $treks->price_exclusion = $req->input('price_exclusion');
        $treks->gallery_img1 = $req->file('gallery_img1')->store("treksImages/gallery");
        $treks->gallery_img2 = $req->file('gallery_img2')->store("treksImages/gallery");
        $treks->gallery_img3 = $req->file('gallery_img3')->store("treksImages/gallery");
        $treks->gallery_img4 = $req->file('gallery_img4')->store("treksImages/gallery");
        $treks->gallery_img5 = $req->file('gallery_img5')->store("treksImages/gallery");
        $treks->gallery_img6 = $req->file('gallery_img6')->store("treksImages/gallery");
        // $treks->gallery_img7 = $req->file('gallery_img7')->store("treksImages/gallery");
        // $treks->gallery_img8 = $req->file('gallery_img8')->store("treksImages/gallery");
        // $treks->gallery_img9 = $req->file('gallery_img9')->store("treksImages/gallery");
        // $treks->gallery_img10 = $req->file('gallery_img10')->store("treksImages/gallery");
        // $treks->gallery_img11= $req->file('gallery_img11')->store("treksImages/gallery");
        // $treks->gallery_img12= $req->file('gallery_img12')->store("treksImages/gallery");
        $treks->save();
        return $treks;
    }
}
