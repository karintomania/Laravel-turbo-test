<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TodoController extends Controller
{
    //
    public function get(){
        $tasks = Task::all();
        return view('todo.index', [
            'tasks' => $tasks,
            'count' => count($tasks),
        ]);
    }
}
