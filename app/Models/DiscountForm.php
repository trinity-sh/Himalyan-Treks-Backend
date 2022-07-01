<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountForm extends Model
{
    public $table = "discountforms";
    use HasFactory;
   
    public $timestamps=false;
}
