<?php

namespace App\Http\Controllers;

use App\Models\DiscountForm;
use Illuminate\Http\Request;

class DiscountTreksController extends Controller
{
    //

    function discountForm(Request $req){
        $trek = new DiscountForm;
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
        $gallery_img1 = $req->file('gallery_img1')->store("treksImages/gallery");
        $gallery_img2 = $req->file('gallery_img2')->store("treksImages/gallery");
        $gallery_img3 = $req->file('gallery_img3')->store("treksImages/gallery");
        $gallery_img4 = $req->file('gallery_img4')->store("treksImages/gallery");
        $gallery_img5 = $req->file('gallery_img5')->store("treksImages/gallery");
        $gallery_img6 = $req->file('gallery_img6')->store("treksImages/gallery");
        
        $trek = array(
            'title' => $title, 'days' => $days, 'price' => $price, 'img' => $img, 'img_desp' => $img_desp, 'title' => $title, 'location' => $location, 'camp_location' => $camp_location, 'height' => $height, 'desp' => $desp, 'iternery' => $iternery, 'gallery_img1' => $gallery_img1, 'gallery_img2' => $gallery_img2, 'gallery_img3' => $gallery_img3,'gallery_img4' => $gallery_img4, 'gallery_img5' => $gallery_img5, 'gallery_img6' => $gallery_img6,
        );
        DB::table('treksforms')->insert($trek);
        return $trek;
    }

    function discountList()
    {
        return DiscountForm::all();
    }

    function discountDelete($id)
    {
        $data = DiscountForm::where('id', $id)->delete();
        if ($data) {
            return ["result" => "product has been deleted"];
        } else {
            return ["result" => "operation failed"];
        }
    }

    function updateDiscount($id)
    {
        return DiscountForm::find($id);
    }
}
