<?php
namespace App\Repository\Todo;

interface TodoRepository{

    public function getTodos();
    public function getSingleTodo($id);
    public function deleteTodo($id);
    public function updateTodo($id,array $data);
}