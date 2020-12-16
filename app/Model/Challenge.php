<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = ['id'];
  

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function contest(){
        return $this->belongsTo('App\Model\Contest');

    }
}
