<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function home(){

        $todos = Todo::all();

        return view('todo.index')->with('todos',$todos);
    }

    public function show(Todo $todo){

        return view('todo.show')->with('todos', $todo);

    }

    public function destroy(Todo $todo){
        
        $todo->delete();

        session()->flash('success','Todo Deleted Successfully.');

        return redirect('/todo');
    }


}
