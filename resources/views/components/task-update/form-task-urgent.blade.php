<div class="task-list-box m-4 bg-task-urgent">                   
    <form action="/api/tasks/update/{{$task->id}}" method="POST">
        <div class="mb-4 mt-4">
            <input type="text" class="form-control" id="title" name="title"
            value="{{$task->title}}">
        </div>
        <div class="mb-4">
            <input type="text" class="form-control" id="description" name="description"
            value="{{$task->description}}">
        </div>

        <div class="row">
            <div class="mb-4 form-check col-md-6">
                <input type="checkbox" class="form-check-input ms-1" id="urgency" name="urgency">
                <label class="form-check-label ms-1" for="urgency">Tarefa urgente</label>
            </div>
            <div class="mb-4 form-check col-md-6">
                <input type="checkbox" class="form-check-input" id="checked" name="checked">
                <label class="form-check-label" for="checked">Tarefa concluida</label>
            </div>
        </div>
        <button class="btn btn-primary">Editar</button>
    </form>
</div>