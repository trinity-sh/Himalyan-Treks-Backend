<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountForm extends Model
{
    use HasFactory;
    public $table = "discountforms";
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
        'gallery_img1',
        'gallery_img2',
        'gallery_img3',
        'gallery_img4',
        'gallery_img5',
        'gallery_img6',

    ];
    public $timestamps=false;
}
