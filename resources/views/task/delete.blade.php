<!DOCTYPE html>
<html lang="pt-br">

<head>
    @section('title', 'Deletar Tarefa')
    @include('includes.head')
</head>

<body class="bg-light">

    @include('includes.navbar')

    <div class="container py-4">

        <div class="container-form">

            <h2 class="text-center">Deletar Tarefa</h2>
            <hr>
            <h4 class="text-center bold">Tem certeza que deseja excluir essa tarefa da lista?</h4>

            @foreach ($tasks as $task)
                @if ($task->checked)
                    @include('components.task-delete.del-task-checked')
                @elseif ($task->urgency)
                    @include('components.task-delete.del-task-urgent')
                @else   
                    @include('components.task-delete.del-task-default')
                @endif
            @endforeach

        </div>

    </div>
</html>