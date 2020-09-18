<?php
	$pront = $_GET['pront'];

	include "inc/cabecalho_conexao.inc";
	
	$SQL = "DELETE FROM animais WHERE id=$pront";

	include "inc/rodape_conexao.inc";
	
	header('location:consulta_animal.php');
?>