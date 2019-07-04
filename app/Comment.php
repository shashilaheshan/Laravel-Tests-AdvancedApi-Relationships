<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function getCommentsForTodo(){

        return $this->belongsTo('\App\Todo','todo_id');
    }
    public function getCommentUser(){

        return $this->belongsTo('\App\User','id');
    }
}
