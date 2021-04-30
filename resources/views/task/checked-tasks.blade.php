<!DOCTYPE html>
<html lang="pt-br">

<head>
    @section('title', 'Tarefas Feitas')
    @include('includes.head')
</head>

<body class="bg-light">

    @include('includes.navbar')

    <div class="container py-4">

        <div class="container-form">

            <h2 class="text-center">Lista de Tarefas</h2>

            <hr>

            @foreach ($tasks as $task)
                @include('components.task-get.task-checked')
            @endforeach

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

    <script>
        // $(document).ready(() => {
        //     $('.task-edit-button').on('click', (event) => {
        //         event.preventDefault();

        //         const taskId = document.querySelector('.task-edit-button').getAttribute('task-id');

        //         $.ajax({
        //             url: `/tasks/${taskId}`,
        //             type: 'PUT',
        //             data: {/* ... */}
        //         })
        //     });
        // });
    </script>

</body>
</html>