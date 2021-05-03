<div class="task-list-box m-4 bg-task-default">
    <!-- <div class="dropzone">
        <div class="card bg-task-default" draggable="true"> -->

            <div class="task-btns">
                <a class="btn btn-sm btn-primary task-edit-button" href=" {{ route('update', $task->id) }} " 
                task-id="{{ $task->id }}">
                    <i class="fas fa-pen text-light"></i>
                </a> 
                <br>
                <a class="btn btn-sm btn-danger mt-1" href="{{ route('delete', $task->id) }}" task-id="{{ $task->id }}">
                    <i class="fas fa-trash-alt text-light"></i>
                </a>
                <br>
                <a class="btn btn-sm btn-dark mt-1" href="tasks/move/{{ $task->id }}">
                    <i class="fas fa-arrow-up text-light"></i>
                </a>
            </div>

            <h4> {{$task->title}} </h4>
            <p> {{$task->description}} </p>
            <p class="font-sm mb-1"> criado em: {{ Date('d/m/Y à\s H:i', strtotime($task->created_at)) }} </p>
            <p class="font-sm mb-0"> modificação: {{ Date('d/m/Y à\s H:i', strtotime($task->updated_at)) }} </p> 
        
        <!-- </div>
    </div> -->
</div>