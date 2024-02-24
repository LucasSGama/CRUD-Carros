<h1>Cadastrar MARCA</h1>

<form action="?page=marca-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="nome_marca"></label>
        <input type="text" name="nome_marca" id="nome_marca" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>