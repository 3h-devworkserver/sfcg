<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NGO extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ngo';
    
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    
    protected $guarded = ['id'];

}
