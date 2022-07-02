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
        'iternery_desp',
        'price_inclusion',
        'price_exclusion',
        'gallery_img1',
        'gallery_img2',
        'gallery_img3',
        'gallery_img4',
        'gallery_img5',
        'gallery_img6',
    
    ];
}