<!DOCTYPE html>
<html lang="pt-br">

<head>
    @section('title', 'Listar Tarefas')
    @include('includes.head')
</head>

<body class="bg-light">

    @include('includes.navbar')

    <div class="container py-4">

        <div class="container-form">

            <h2 class="text-center">Editar Tarefa</h2>

            <hr>

            @foreach ($tasks as $task)
                @if ($task->checked)
                    @include('components.task-update.form-task-checked')                 
                @elseif ($task->urgency)
                    @include('components.task-update.form-task-urgent')                   
                @else   
                    @include('components.task-update.form-task-default')  
                @endif
            @endforeach


        </div>

    </div>
</html>