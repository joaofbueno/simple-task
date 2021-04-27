<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Tarefa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-3">

        <!-- Logo -->
        <a href="" class="navbar-brand">SimpleTask</a>

        <!-- Menu Hamburguer -->
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navegacao">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navegação -->
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navegacao">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="" class="nav-link">Início</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Alterar</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container py-4">

        <div class="container-form">
            <h3>Nova Tarefa</h3>

            <form>
                <div class="mb-4 mt-4">
                    <label for="title" class="form-label">Digite o título da tarefa</label>
                    <input type="text" class="form-control" id="title">
                </div>
                <div class="mb-4">
                    <label for="description" class="form-label">Digite a descrição da tarefa</label>
                    <input type="text" class="form-control" id="description">
                </div>
                <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="urgency">
                    <label class="form-check-label" for="urgency">Tarefa urgente</label>
                </div>
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </form>
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