<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreToDoRequest;
use App\Http\Requests\UpdateToDoRequest;
use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = ToDo::all();

        return view('to_dos/index')
            ->with(['toDos' => $todos, 'todosTotal' => $todos->count()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return turbo_stream()
            ->target('todo-create')
            ->action('update')
            ->view('to_dos._form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreToDoRequest $request)
    {
        $todo = ToDo::create($request->validated());

        if ($request->wantsTurboStream()) {
            return turbo_stream([
                turbo_stream()
                    ->target('todo-create')
                    ->action('update')
                    ->view('to_dos._form'),
                turbo_stream($todo),
                turbo_stream()
                    ->target('todo-count')
                    ->action('update')
                    ->view('to_dos._count', ['todosTotal' => Todo::all()->count()])
            ]);
        }

        return redirect('/todos')->with('success', 'To do has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ToDo $toDo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ToDo $toDo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateToDoRequest $request, ToDo $toDo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, ToDo $todo)
    {
        $todo->delete();

        if ($request->wantsTurboStream()) {
            return turbo_stream([
                turbo_stream($todo),
                turbo_stream()
                    ->target('todo-count')
                    ->action('update')
                    ->view('to_dos._count', ['todosTotal' => Todo::all()->count()])
            ]);
        }

        return redirect('/todos')->with('success', 'To do has been deleted successfully.');
    }
}
