<form method="POST" action="{{ route('add-api') }}">
    <div class="mb-4 mt-4">
        <label for="title" class="form-label">Digite o título da tarefa</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-4">
        <label for="description" class="form-label">Digite a descrição da tarefa</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="mb-4 form-check">
        <input type="checkbox" class="form-check-input" id="urgency" name="urgency">
        <label class="form-check-label" for="urgency">Tarefa urgente</label>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>