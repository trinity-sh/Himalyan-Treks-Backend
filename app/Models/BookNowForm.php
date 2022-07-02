<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookNowForm extends Model
{
    public $table = "booknowforms";
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'no_of_people',
        'mobile',
        'message'
    ];

    public $timestamps=false;
}

