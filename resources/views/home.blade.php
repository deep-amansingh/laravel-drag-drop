@extends('layouts.app')
@section('title', 'Task Manager - Home')

@section('content')
    <div class="my-5 d-flex justify-content-around">
        <h1>Task List</h1>
        <a class="btn btn-primary" href="/task/create" role="button">Create Task</a>
    </div>

    @livewire('show-tasks')

@endsection