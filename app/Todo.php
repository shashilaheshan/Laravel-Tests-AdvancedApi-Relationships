<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

    protected $fillable =['todo','user_id'];

    public function getpostuser(){
        return $this->belongsTo('\App\User','id');
    }

    public function getComments(){

        return $this->hasMany('\App\Comment','todo_id');
    }
}
