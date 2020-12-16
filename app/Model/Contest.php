<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{

    protected $guarded = ['id'];

    // public function user(){
    //     return $this->belongsTo('App\User');
    // }


    public function challenges(){
        return $this->hasMany('App\Model\Challenge');
    }

}
