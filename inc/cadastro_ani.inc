<form action="cadastro_animal.php" method="POST">
    <center><h3 class="transf">Informe os dados baixo:</h3></center>
    <div class=" container alinhar">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Nome do animal</label>
                <input type="text" class="form-control" name="nome_animal">
            </div>
            <div class="form-group col-md-4">
                <label>Tipo do animal</label>
                <input type="text" class="form-control" name="tipo">
            </div>
            <div class="form-group col-md-4">
                <label>Idade</label>
                <input type="number" class="form-control" name="idade">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nome do dono</label>
                <input type="text" class="form-control" name="nome_dono">
            </div>
            <div class="form-group col-md-6">
                <label>Telefone:</label>
                <input type="number" class="form-control" name="telefone">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a class="btn btn-primary" href="index.php" role="button">Voltar</a>
    </div>
</form>