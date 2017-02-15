<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['user_id','watching_at','video'];

    public function User(){
        return $this->belongsTo('App\User');
    }
}
