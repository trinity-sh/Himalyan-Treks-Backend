<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountForm extends Model
{
    public $table = "discountforms";
    use HasFactory;
    protected $fillable = [
        'title',
        'days',
        'price',
        'img',
        'img_desp',
        'location',
        'camp_location',
        'height',
        'desp',
        'iternery',
        'iternery_day1',
        'iternery_day1_desp',
        'iternery_day2',
        'iternery_day2_desp',
        'iternery_day3',
        'iternery_day3_desp',
        'iternery_day4',
        'iternery_day4_desp',
        'iternery_day5',
        'iternery_day5_desp',
        'iternery_day6',
        'iternery_day6_desp',
        'iternery_day7',
        'iternery_day7_desp',
        'iternery_day8',
        'iternery_day8_desp',
        'iternery_day9',
        'iternery_day9_desp',
        'iternery_day10',
        'iternery_day10_desp',
        'iternery_day11',
        'iternery_day11_desp',
        'iternery_day12',
        'iternery_day12_desp',
        'iternery_day13',
        'iternery_day13_desp',
        'iternery_day14',
        'iternery_day14_desp',
        'iternery_day15',
        'iternery_day15_desp',
        'gallery_img1',
        'gallery_img2',
        'gallery_img3',
        'gallery_img4',
        'gallery_img5',
        'gallery_img6',
    
    ];
}
