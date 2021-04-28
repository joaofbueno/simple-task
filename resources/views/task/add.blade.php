<!DOCTYPE html>
<html lang="pt-br">

<head>
    @section('title', 'Adicionar Tarefas')
    @include('includes.head')
</head>

<body class="bg-light">

    @include('includes.navbar')

    <div class="container py-4">

        <div class="container-form">
            <h3>Nova Tarefa</h3>

            @include('includes.add.form')
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

    <script>
        function requestCreateTask() {
            const data = {
                description: $('#title').val(),
            };

            // validação

            $.ajax({
                url: '/api/tasks',
                type: 'POST',
                data,
                success(response) {
                    // exibir alguma informação na view que diga para o cliente que uma nova tarefa foi criada
                    
                },
                error(err) {
                    // exibir alguma informação pro cliente que deu erro na criação da tarefa
                }
            })
        }
    </script>
</body>
</html>