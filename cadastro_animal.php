<?php
    include "inc/comeco_html.inc";
    include "inc/cabecalho.inc";

    if(empty($_POST)){

        include "inc/cadastro_ani.inc";

    }else{
        $nome_animal = $_POST['nome_animal'];
        $tipo = $_POST['tipo'];
        $idade = $_POST['idade'];
        $nome_dono = $_POST['nome_dono'];
        $telefone = $_POST['telefone'];
        
        //Abrindo conexão com o BD
        include "inc/cabecalho_conexao.inc";
        
        $SQL = "INSERT INTO animais (nome, tipo, idade, nome_dono, telefone) 
                VALUE ('$nome_animal', '$idade', '$idade', '$nome_dono', '$telefone')";

        echo'<center><h2 class="">Animal cadastrado com sucesso!<h2>';
        echo'<a class=" btn btn-primary transf_2 " href="cadastro_animal.php" role="button">Cadastrar outro animal</a>';
        
        include "inc/rodape_conexao.inc";

        echo'</br><center><img src="img/feliz.png" width="270" height="240"></img></center>';
    }
    include "inc/rodape.inc";
    include "inc/fim_html.inc";
?>