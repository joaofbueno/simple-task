<div class="task-list-box m-4 bg-task-default">                     
    <form>
        <div class="mb-4 mt-4">
            <input type="text" class="form-control" id="title" 
            value="{{$task->title}}">
        </div>
        <div class="mb-4">
            <input type="text" class="form-control" id="description" 
            value="{{$task->description}}">
        </div>
        <div class="mb-4 form-check">
            <input type="checkbox" class="form-check-input" id="urgency">
            <label class="form-check-label" for="urgency">Tarefa urgente</label>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</div>