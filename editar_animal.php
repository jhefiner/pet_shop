<?php
    include "inc/comeco_html.inc";
    include "inc/cabecalho.inc";
    if(empty($_POST)){
        include "inc/cabecalho_conexao.inc";

        $pront = $_GET['pront'];

        $SQL = "SELECT * FROM animais WHERE id = $pront";
		// Executa o comando SQL
		$dados_recuperados = mysqli_query($con, $SQL);

        if(mysqli_num_rows($dados_recuperados) > 0){
            while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
                $nome_animal = $resultado[1];
                $tipo = $resultado[2];
                $idade = $resultado[3];
                $nome_dono = $resultado[4];
                $telefone = $resultado[5];
            }

            echo'<form action="editar_animal.php" method="POST">
                    <center>
                        <h3 class="transf">Informe os dados baixo:</h3>
                    </center>
                    <div class="container alinhar">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="nome_edit">Altere o nome do animal:</label>
                                <input type="text" class="form-control" name="nome_animal_edit" id="nome_animal_edit" value="'.$nome_animal.'"/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nome_edit">Altere o tipo do animal:</label>
                                <input type="text" class="form-control" name="tipo_edit" id="tipo_edit" value="'.$tipo.'"/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="idade_edit">Altere a idade:</label>
                                <input type="number" class="form-control" name="idade_edit" id="idade_edit" value="'.$idade.'"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="endereco_edit">Altere o nome do dono:</label>
                                <input type="text" class="form-control" name="nome_dono_edit" id="nome_dono_edit" value="'.$nome_dono.'"/>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="endereco_edit">Altere o telefone:</label>
                                <input type="text"class="form-control" name="telefone_edit" id="telefone_edit" value="'.$telefone.'"/>
                            </div>
                        </div>
                        <input type=hidden name="id" value= "'.$pront.'"/>
                        <button type="submit" class="btn btn-primary">Alterar</button>
                        <a class="btn btn-primary" href="consulta_animal.php" role="button">Voltar</a>
                    </div>
                </form>';
        }
    }else{
        $nome_animal_edit = $_POST['nome_animal_edit'];
        $tipo_edit = $_POST['tipo_edit'];
        $idade_edit = $_POST['idade_edit'];
        $nome_dono_edit = $_POST['nome_dono_edit'];
        $telefone_edit = $_POST['telefone_edit'];
        $id = $_POST['id'];
                
        include "inc/cabecalho_conexao.inc";
                
        $SQL = "UPDATE animais SET nome='$nome_animal_edit', tipo='$tipo_edit', idade='$idade_edit', nome_dono='$nome_dono_edit', telefone='$telefone_edit' WHERE id=$id";

        echo'<center><h2 class="">Animal alterado com sucesso!<h2>';
        echo'<a class=" btn btn-primary transf_2 " href="consulta_animal.php" role="button">Voltar para o consultar</a>';
        
        include "inc/rodape_conexao.inc";

        echo'</br><center><img src="img/feliz.png" width="270" height="240"></img></center>';
    }
    include "inc/rodape.inc";
?>