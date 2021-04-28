<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-3">

    <!-- Logo -->
    <h3 class="navbar-brand">SimpleTask</h3>

    <!-- Menu Hamburguer -->
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navegacao">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navegação -->
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navegacao">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href=" {{route('get')}} " class="nav-link">Tarefas</a>
            </li>
            <li class="nav-item">
                <a href=" {{route('add')}} " class="nav-link">Adicionar</a>
            </li>
        </ul>
    </div>

</nav>