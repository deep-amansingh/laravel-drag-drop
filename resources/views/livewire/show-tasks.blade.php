<div>
    <ul wire:sortable="updateTasPriority" class="list-group">
        @foreach ($tasks as $task)
            <li class="list-group-item" wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}">
                <div class="d-flex justify-content-around">
                    <h4 wire:sortable.handle>{{ $task->task_name }}</h4>
                    <div>
                        <button wire:click="editTask({{ $task->id }})">Edit</button>
                        <button wire:click="removeTask({{ $task->id }})">Remove</button>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
