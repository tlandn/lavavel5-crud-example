<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;

class TasksController extends Controller
{

    public function index() {
        $tasks = Task::all();
        return view('tasks.index')->withTasks($tasks);
    }

    public function create() {
        return view('tasks.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title'       => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        Task::create($input);

        \Session::flash('flash_message', 'Tarea agregada');

        return redirect()->back();
    }

    public function show($id) {
        $task = Task::findOrFail($id);

        return view('tasks.show')->withTask($task);
    }

    public function edit($id) {
        $task = Task::findOrFail($id);

        return view('tasks.edit')->withTask($task);
    }

    public function update($id, Request $request) {
        $task = Task::findOrFail($id);

        $this->validate($request, [
            'title'       => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();
        //$task->fill($input)->save();
        $task->update($input);

        \Session::flash('flash_message', 'Tarea Actualizada');

        return redirect()->back();
    }

    public function destroy($id) {
        $task = Task::findOrFail($id);

        $task->delete();
        \Session::flash('flash_message', 'Tarea borrada');

        return redirect()->route('tasks.index');
    }
}
