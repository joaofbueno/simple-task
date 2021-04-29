<div class="task-list-box m-4 bg-task-default">
    <h4> {{$task->title}} </h4>
    <p> {{$task->description}} </p>
    <p class="font-sm mb-1"> criado em: {{$task->created_at}} </p>
    <p class="font-sm mb-0"> modificação: {{$task->updated_at}} </p> 
</div>

<a href="/api/tasks/delete/{{$task->id}}" class="btn btn-danger ms-4">Excluir</a>