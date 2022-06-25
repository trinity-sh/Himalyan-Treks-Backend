<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreksForm extends Model
{
   
    public $table = "treksforms";
    use HasFactory;
    protected $fillable = [
        'title'
    ];

    public $timestamps=false;
}
