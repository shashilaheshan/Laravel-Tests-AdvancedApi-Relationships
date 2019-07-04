<?php

namespace App\Http\Resources;

use App\Comment;
use App\Todo;
use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id'=>$this->id,
             'name'=>$this->getPostUser($this->user_id),
            'todo'=>$this->todo,
            'comments'=>$this->getComments($this->id)
        ];
    }

    public function getPostUser($id){

        return new TodoUser(User::find($id));


    }
    public function getComments($id){

        return   CommentResource::collection(Todo::find($id)->getComments);
    }
}
