<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Resources\TodoResource;
use App\Todo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TodoController extends Controller
{
    /**
     * @var \TodoRepository
     */
    /**
     * @var EloqueontTodo|TodoRepository
     */
    private $todo;


    /**
     * TodoController constructor.
     * @param EloqueontTodo $todo
     */
    public function __construct(\App\Repository\Todo\EloqueontTodo $todo)
    {

        $this->todo = $todo;
    }

    public function get(){

       // $todos=Todo::find(20)->getpostuser;
       // $todos=User::find(19)->todos;
        //$comments=Comment::find(20)->getCommentsForTodo;
        //$comments=Todo::find(20)->getComments;
        //$comments=User::find(10)->comments;
        $comments=Comment::find(30)->getCommentUser;
       // dd($comments->name);
//        dd($this->todo->updateTodo(1,[
//            'todo'=>'shashila heshan'
//        ]));
      return  TodoResource::collection(Todo::all());

    }

    public function upload(Request $request){
        if($request->hasFile('file')){
            $path=Storage::putFile('public/docs',$request->file('file'));
            dd($path);
        }


    }

}
