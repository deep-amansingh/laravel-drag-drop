<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function showTasks()
    {
        return view('home');
    }

    public function editTask($task_id) {
        $task = Task::find($task_id);
        return view('edit_task', compact('task'));
    }

    public function updateTask($task_id, Request $request) {
        $input = $request->only(['task_name']);
        $task = Task::find($task_id);
        $task->task_name = $input['task_name'];
        $task->save();
        return redirect()->to('/');
    }

    public function createTask() {
        return view('create_task');
    }

    public function saveTask(Request $request) {
        $input = $request->only(['task_name']);
        $task = new Task();
        $task->task_name = $input['task_name'];
        $task->priority = 0;
        $task->save();
        return redirect()->to('/');
    }
}
