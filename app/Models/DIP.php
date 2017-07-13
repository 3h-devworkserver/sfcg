<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DIP extends Model
{
     protected $table = 'posts';

     protected $fillable = [
        'title','subtitle', 'content', 'image','url', 'post_order','section','tab','badge','category'
    ];


}
