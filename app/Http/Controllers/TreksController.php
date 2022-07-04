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
        $iternery_day1 = $req->input('iternery_day1');
        $iternery_day1_desp = $req->input('iternery_day1_desp');
        $iternery_day2 = $req->input('iternery_day2');
        $iternery_day2_desp = $req->input('iternery_day2_desp');
        $iternery_day3 = $req->input('iternery_day3');
        $iternery_day3_desp = $req->input('iternery_day3_desp');
        $iternery_day4 = $req->input('iternery_day4');
        $iternery_day4_desp = $req->input('iternery_day4_desp');
        $iternery_day5 = $req->input('iternery_day5');
        $iternery_day5_desp = $req->input('iternery_day5_desp');
        $iternery_day6 = $req->input('iternery_day6');
        $iternery_day6_desp = $req->input('iternery_day6_desp');
        $iternery_day7 = $req->input('iternery_day7');
        $iternery_day7_desp = $req->input('iternery_day7_desp');
        $iternery_day8 = $req->input('iternery_day8');
        $iternery_day8_desp = $req->input('iternery_day8_desp');
        $iternery_day9 = $req->input('iternery_day9');
        $iternery_day9_desp = $req->input('iternery_day9_desp');
        $iternery_day10 = $req->input('iternery_day10');
        $iternery_day10_desp = $req->input('iternery_day10_desp');
        $iternery_day11 = $req->input('iternery_day11');
        $iternery_day11_desp = $req->input('iternery_day11_desp');
        $iternery_day12 = $req->input('iternery_day13');
        $iternery_day12_desp = $req->input('iternery_day12_desp');
        $iternery_day13 = $req->input('iternery_day13');
        $iternery_day13_desp = $req->input('iternery_day13_desp');
        $iternery_day14 = $req->input('iternery_day14');
        $iternery_day14_desp = $req->input('iternery_day14_desp');
        $iternery_day15 = $req->input('iternery_day15');
        $iternery_day15_desp = $req->input('iternery_day15_desp');
        $gallery_img1 = $req->file('gallery_img1')->store("treksImages/gallery");
        $gallery_img2 = $req->file('gallery_img2')->store("treksImages/gallery");
        $gallery_img3 = $req->file('gallery_img3')->store("treksImages/gallery");
        $gallery_img4 = $req->file('gallery_img4')->store("treksImages/gallery");
        $gallery_img5 = $req->file('gallery_img5')->store("treksImages/gallery");
        $gallery_img6 = $req->file('gallery_img6')->store("treksImages/gallery");

        $treks = array(
            'title' => $title, "days" => $days, "price" => $price, "img" => $img, "img_desp" => $img_desp, "location" => $location, "camp_location" => $camp_location, "height" => $height, "desp" => $desp, "iternery" => $iternery,
            "iternery_day1" =>  $iternery_day1, "iternery_day1_desp" => $iternery_day1_desp, "iternery_day2" =>  $iternery_day2, "iternery_day2_desp" => $iternery_day2_desp, "iternery_day3" =>  $iternery_day3, "iternery_day3_desp" => $iternery_day3_desp, "iternery_day4" =>  $iternery_day4, "iternery_day4_desp" => $iternery_day4_desp, "iternery_day5" =>  $iternery_day5, "iternery_day5_desp" => $iternery_day5_desp,
            "iternery_day6" =>  $iternery_day6, "iternery_day6_desp" => $iternery_day6_desp, "iternery_day7" =>  $iternery_day7, "iternery_day7_desp" => $iternery_day7_desp, "iternery_day8" =>  $iternery_day8, "iternery_day8_desp" => $iternery_day8_desp, "iternery_day9" =>  $iternery_day9, "iternery_day9_desp" => $iternery_day9_desp, "iternery_day10" =>  $iternery_day10, "iternery_day10_desp" => $iternery_day10_desp,
            "iternery_day11" =>  $iternery_day11, "iternery_day11_desp" => $iternery_day11_desp, "iternery_day12" =>  $iternery_day12, "iternery_day12_desp" => $iternery_day12_desp, "iternery_day13" =>  $iternery_day13, "iternery_day13_desp" => $iternery_day13_desp, "iternery_day14" =>  $iternery_day14, "iternery_day14_desp" => $iternery_day14_desp, "iternery_day15" =>  $iternery_day15, "iternery_day15_desp" => $iternery_day15_desp,
            "gallery_img1" => $gallery_img1, "gallery_img1" => $gallery_img1, "gallery_img2" => $gallery_img2, "gallery_img3" => $gallery_img3, "gallery_img4" => $gallery_img4, "gallery_img5" => $gallery_img5, "gallery_img6" => $gallery_img6
        );
        DB::table('treksforms')->insert($treks);
        return $treks;
    }

    function treksList()
    {
        return TreksForm::all();
    }
}
