<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TreksForm;
use DB;

class TreksController extends Controller
{
    //
    function treksForm(Request $req)
    {
        $treks = new TreksForm;
        $title = $req->input('title');
        $days = $req->input('days');
        $price = $req->input('price');
        // file input
        $img = $req->file('img')->store("treksImages");
        $img_desp = $req->input('img_desp');
        $location = $req->input('location');
        $camp_location = $req->input('camp_location');
        $height = $req->input('height');
        $desp = $req->input('desp');
        $iternery = $req->input('iternery');
        $iternery_desp = $req->input('iternery_desp');
        // $treks->price_inclusion = $req->input('price_inclusion');
        // $treks->price_exclusion = $req->input('price_exclusion');
        $gallery_img1 = $req->file('gallery_img1')->store("treksImages/gallery");
        $gallery_img2 = $req->file('gallery_img2')->store("treksImages/gallery");
        $gallery_img3 = $req->file('gallery_img3')->store("treksImages/gallery");
        $gallery_img4 = $req->file('gallery_img4')->store("treksImages/gallery");
        $gallery_img5 = $req->file('gallery_img5')->store("treksImages/gallery");
        $gallery_img6 = $req->file('gallery_img6')->store("treksImages/gallery");

        $treks = array(
            'title' => $title, "days" => $days, "price" => $price, "img" => $img, "img_desp" => $img_desp, "location" => $location, "camp_location" => $camp_location, "height" => $height, "desp" => $desp, "iternery" => $iternery, "iternery_desp" => $iternery_desp, "gallery_img1" => $gallery_img1, "gallery_img1" => $gallery_img1, "gallery_img2" => $gallery_img2, "gallery_img3" => $gallery_img3, "gallery_img4" => $gallery_img4, "gallery_img5" => $gallery_img5, "gallery_img6" => $gallery_img6
        );
        DB::table('treksforms')->insert($treks);
        return $treks;
    }

    function treksList()
    {
        return TreksForm::all();
    }
}
