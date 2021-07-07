<?php
// Modulos - Start
include("../../controle/controle_cliente.php");
// Modulos - End

// Recebe valores - Start
$nomeCliente  = $_POST["nome"];
$idadeCliente = $_POST["idade"];
$idCliente    = $_POST["id"];

$acao         = $_POST["acao"];

//var_dump($_POST);exit();
// Recebe Valores - End

$obj_cliente = new Cliente();

if($acao == "insere"){
	
	//$nomeCliente  = $_POST["nome"];
	//$idadeCliente = $_POST["idade"];
	// Chama metodo - Start 
	$result = $obj_cliente->insere($nomeCliente,$idadeCliente);
	// Chama metodo - End
		
	
	
	
	
	
}else if($acao == "altera"){
	
	//$nomeCliente  = $_POST["nome"];
	//$idCliente  = $_POST["id"];
	//$idadeCliente = $_POST["idade"];

	// Chama metodo - Start 
	$result = $obj_cliente->atualizar($nomeCliente,$idadeCliente,$idCliente);
	

	
	
}else if($acao == "deletar"){
	
	//$idCliente    = $_POST["id"];
	// Chama metodo - Start 
	$result = $obj_cliente->deletar($idCliente);
	
}

?>