<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['role'];

//    找到role为1的角色的的项目:Role::find(1)->project;
    public function project(){
        return $this->hasOne('App\Project');
    }
//    找到角色为1的用户：Role::fine(1)->users;
    public function users(){
        return $this->hasMany('App\User');
    }
//    找到角色为1的用户的培训记录:$role->logs;
    public function logs(){
        return $this->hasManyThrough('App\Log','App\User');
    }
}
