<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model{

    use HasFactory;

    protected $fillable = [
        'title',
        'article',
        'picture',
        'video',
    ];


    protected $table = 'blogs';

}
