<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogsForm extends Model
{
    public $table = "blogforms";
    use  HasFactory;

    protected $fillable = [
        'title',
        'date',
        'banner',
        'desp'
    ];

    public $timestamps=false;
}
