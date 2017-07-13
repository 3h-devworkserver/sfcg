<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'staffs';
    
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    
    protected $guarded = ['id'];

    public function project(){
        return $this->belongsTo('App\Project', 'project_code');
    }

}
