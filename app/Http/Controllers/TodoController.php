<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;


class TodoController extends Controller
{
    public function getTodos()
    {
        $todos = Todo::all();
        return $todos;
    }
    
    public function addTodo(Request $reqest)
    {
        $todo = new Todo;
        $todo->title = $reqest->title;
        $todo->save();
        
        $todos = Todo::all();
        return $todos;
    }
    
    public function deleteTodo(Request $reqest)
    {
        $todo = Todo::find($reqest->id);
        $todo->delete();
        
        $todos = Todo::all();
        return $todos;
    }
}
