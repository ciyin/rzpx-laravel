<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['role_id','projects'];
    public function Role(){
        return $this->belongsTo('App\Role');
    }
}
