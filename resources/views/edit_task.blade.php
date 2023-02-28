@extends('layouts.app')
@section('title', 'Task Manager - Edit Task')

@section('content')
<h1>Edit Task</h1>
<div>
    <form  action="/task/{{$task->id}}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="taskName">Task Name</label>
            <input type="text" name="task_name" value="{{ $task->task_name }}" class="form-control" id="taskName" aria-describedby="emailHelp" placeholder="Enter Task Name">
        </div>
            <button type="submit" class="btn btn-primary">Update</button>
      </form>
</div>
@endsection