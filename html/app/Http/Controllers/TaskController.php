<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\View\ComponentAttributeBag;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks._create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'task' => 'required',
        ]);
        //
        $task = new Task();
        $task->task = $validated['task'];
        $task->save();

        return response()->turboStream([
            response()->turboStream()
                ->target('createTask')
                ->action('replace')
                ->view('tasks._create'),
            response()->turboStream()
                ->target('showTask')
                ->action('append')
                ->view('tasks._show', ['task' => $task]),
            response()->turboStream()
                ->target('taskCount')
                ->action('replace')
                ->view('components.tasks._count', ['count' => Task::count(), 'attributes' => new ComponentAttributeBag()]),
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('tasks._show', ['task' => Task::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('tasks._edit', ['task' => Task::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'task' => 'required',
        ]);
        $task = Task::find($id);
        $task->task = $validated['task'];
        $task->save();

        return response()->turboStream($task)
            ->action('replace')
            ->view('tasks._show', ['task' => $task]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return response()->turboStream([
            response()->turboStream()->remove($task),
            response()->turboStream()
                ->target('taskCount')
                ->action('replace')
                ->view('components.tasks._count', ['count' => Task::count(), 'attributes' => new ComponentAttributeBag()]),
        ]);

    }

}
