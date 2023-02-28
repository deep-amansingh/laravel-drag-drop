<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class ShowTasks extends Component
{
    public $task_name, $priority;

    public function render()
    {
        $tasks = Task::orderBy('priority')->select('id','task_name','priority','created_at')->get();
        return view('livewire.show-tasks', compact('tasks'));
    }

    public function updateTasPriority($tasks) {
        foreach($tasks as $task) {
            Task::where('id',$task['value'])->update(['priority'=>$task['order']]);
        }
        $tasks = Task::orderBy('priority', 'desc')->select('id','task_name','priority','created_at')->get();
        return view('livewire.show-tasks', compact('tasks'));
    }

    public function removeTask($task_id) {
        Task::destroy($task_id);
        $tasks = Task::orderBy('priority')->select('id','task_name','priority','created_at')->get();
        return view('livewire.show-tasks', compact('tasks'));
    }

    public function editTask($task_id) {
        return redirect()->to('/task/'.$task_id);
    }
}
