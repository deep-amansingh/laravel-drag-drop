@extends('layouts.app')
@section('title', 'Task Manager - Edit Task')

@section('content')
<h1>Create Task</h1>
<div>
    <form  action="/task/create" method="POST">
        @csrf
        <div class="form-group">
            <label for="taskName">Task Name</label>
            <input type="text" name="task_name" value="" class="form-control" id="taskName" aria-describedby="emailHelp" placeholder="Enter Task Name">
        </div>
            <button type="submit" class="btn btn-primary">Create Task</button>
      </form>
</div>
@endsection