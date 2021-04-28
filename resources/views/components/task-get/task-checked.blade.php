<div class="task-list-box m-4 bg-task-checked">
    <div class="task-btns">
        <a class="btn btn-sm btn-primary task-edit-button" href="{{ route('update', $task->id) }}" 
        task-id="{{ $task->id }}">
            <i class="fas fa-pen text-light"></i>
        </a> 
        <br>
        <a class="btn btn-sm btn-danger mt-1" href="{{ route('delete', $task->id) }}" task-id="{{ $task->id }}">
            <i class="fas fa-trash-alt text-light"></i>
        </a>
    </div>

    <h4> {{$task->title}} </h4>
    <p> {{$task->description}} </p>
    <p class="font-sm mb-1"> criado em: {{$task->created_at}} </p>
    <p class="font-sm mb-0"> modificação: {{$task->updated_at}} </p> 
</div>