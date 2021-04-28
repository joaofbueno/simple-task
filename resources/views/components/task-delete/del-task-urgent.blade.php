<div class="task-list-box m-4 bg-task-urgent">
    <h4> {{$task->title}} </h4>
    <p> {{$task->description}} </p>
    <p class="font-sm mb-1"> criado em: {{$task->created_at}} </p>
    <p class="font-sm mb-0"> modificação: {{$task->updated_at}} </p> 
</div>