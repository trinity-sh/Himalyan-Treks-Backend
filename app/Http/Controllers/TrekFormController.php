<?php

namespace App\Http\Controllers;

use App\Models\TrekForm;
use Illuminate\Http\Request;
use DB;

class TrekFormController extends Controller
{
    //    public $table = "discountforms";

    function addTreks(Request $req){
        $trek = new TrekForm();
        $title = $req->input('title');
        $days = $req->input('days');
        $price = $req->input('price');
        // file input
        $img = $req->input('img');
        $img_desp = $req->input('img_desp');
        $location = $req->input('location');
        $camp_location = $req->input('camp_location');
        $height = $req->input('height');
        $desp = $req->input('desp');
        $iternery = $req->input('iternery');
        $gallery_img1 = $req->input('gallery_img1');
        $gallery_img2 = $req->input('gallery_img2');
        $gallery_img3 = $req->input('gallery_img3');
        $gallery_img4 = $req->input('gallery_img4');
        $gallery_img5 = $req->input('gallery_img5');
        $gallery_img6 = $req->input('gallery_img6');
        
        $trek = array(
            'title' => $title, 'days' => $days, 'price' => $price, 'img' => $img, 'img_desp' => $img_desp, 'title' => $title, 'location' => $location, 'camp_location' => $camp_location, 'height' => $height, 'desp' => $desp, 'iternery' => $iternery, 'gallery_img1' => $gallery_img1, 'gallery_img2' => $gallery_img2, 'gallery_img3' => $gallery_img3,'gallery_img4' => $gallery_img4, 'gallery_img5' => $gallery_img5, 'gallery_img6' => $gallery_img6,
        );
        DB::table('treksforms')->insert($trek);
        return $trek;
    }

    function treksList()
    {
        return TrekForm::all();
    }

    function trekDelete($id)
    {
        $data = TrekForm::where('id', $id)->delete();
        if ($data) {
            return ["result" => "product has been deleted"];
        } else {
            return ["result" => "operation failed"];
        }
    }

    function getTrek($id){
        return TrekForm::find($id);
    }

    function updateTreks($id, Request $req)
    {
        $trek = TrekForm::find($id);
        $trek->title = $req->input('title');
        $trek->days = $req->input('days');
        $trek->price = $req->input('price');
        // file input
        $trek->img = $req->input('img');
        $trek->img_desp = $req->input('img_desp');
        $trek->location = $req->input('location');
        $trek->camp_location = $req->input('camp_location');
        $trek->height = $req->input('height');
        $trek->desp = $req->input('desp');
        $trek->iternery = $req->input('iternery');
        $trek->gallery_img1 = $req->input('gallery_img1');
        $trek->gallery_img2 = $req->input('gallery_img2');
        $trek->gallery_img3 = $req->input('gallery_img3');
        $trek->gallery_img4 = $req->input('gallery_img4');
        $trek->gallery_img5 = $req->input('gallery_img5');
        $trek->gallery_img6 = $req->input('gallery_img6');
        
        $trek->save();
        return $trek;


    }
}
