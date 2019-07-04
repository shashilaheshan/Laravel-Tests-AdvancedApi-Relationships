<?php

namespace App\Repository\Todo;


class EloqueontTodo implements TodoRepository{
    /**
     * @var \App\Todo
     */
    private $todo;


    /**
     * EloqueontTodo constructor.
     * @param \App\Todo $todo
     */
    public function __construct(\App\Todo $todo)
    {
        $this->todo = $todo;
    }

    public function getTodos()
    {
        return $this->todo->all();
        // TODO: Implement getTodos() method.
    }

    public function getSingleTodo($id)
    {
        // TODO: Implement getSingleTodo() method.
        return $this->todo->find($id);
    }

    public function deleteTodo($id)
    {
        // TODO: Implement deleteTodo() method.
        return $this->todo->destroy($id);
    }

    public function updateTodo($id, array $data)
    {
        // TODO: Implement updateTodo() method.
        $record=$this->todo->find($id);

        return $record->update($data);
    }
}