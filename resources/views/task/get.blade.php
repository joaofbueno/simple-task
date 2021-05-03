<!DOCTYPE html>
<html lang="pt-br">

<head>
    @section('title', 'Listar Tarefas')
    @include('includes.head')
</head>

<body class="bg-light">

    @include('includes.navbar')

    <div class="container pb-4">

        <div class="container-form">

            <h2 class="text-center">Lista de Tarefas</h2>

            <hr>

            <div>
                @foreach ($tasks as $task)
                    @if ($task->checked)
                        @include('components.task-get.task-checked')
                    @elseif ($task->urgency)
                        @include('components.task-get.task-urgent')
                    @else   
                        @include('components.task-get.task-default')
                    @endif
                @endforeach
            </div>

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

<!-- <script>
    /** help */
    function log(message) {
        console.log('> ' + message)
    }

    /** app */
    const cards = document.querySelectorAll('.card')
    const dropzones = document.querySelectorAll('.dropzone')


    /** our cards */
    cards.forEach(card => {
        card.addEventListener('dragstart', dragstart)
        card.addEventListener('drag', drag)
        card.addEventListener('dragend', dragend)
    })

    function dragstart() {
        // log('CARD: Start dragging ')
        dropzones.forEach( dropzone => dropzone.classList.add('highlight'))

        // this = card
        this.classList.add('is-dragging')
    }

    function drag() {
        // log('CARD: Is dragging ')
    }

    function dragend() {
        // log('CARD: Stop drag! ')
        dropzones.forEach( dropzone => dropzone.classList.remove('highlight'))

        // this = card
        this.classList.remove('is-dragging')
    }

    /** place where we will drop cards */
    dropzones.forEach( dropzone => {
        dropzone.addEventListener('dragenter', dragenter)
        dropzone.addEventListener('dragover', dragover)
        dropzone.addEventListener('dragleave', dragleave)
        dropzone.addEventListener('drop', drop)
    })

    function dragenter() {
        // log('DROPZONE: Enter in zone ')
    }

    function dragover() {
        // this = dropzone
        this.classList.add('over')

        // get dragging card
        const cardBeingDragged = document.querySelector('.is-dragging')

        // this = dropzone
        this.appendChild(cardBeingDragged)
    }

    function dragleave() {
        // log('DROPZONE: Leave ')
        // this = dropzone
        this.classList.remove('over')

    }

    function drop() {
        // log('DROPZONE: dropped ')
        this.classList.remove('over')
    }
</script> -->

</body>
</html>