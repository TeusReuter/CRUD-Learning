<?php

class conexaoBD{
	
	function con(){
		
		$conectar = mysqli_connect("localhost","root","") or die (mysqli_error());
		// seleciona banco
		mysqli_select_db($conectar, "mvc") or die (mysql_error());
		
		return $conectar;
	}
	
}

// modelo - Start
	// conexão Banco
	//$conectar = mysqli_connect("localhost","root","") or die (mysqli_error());
	// selecione Banco
	//mysqli_select_db($conectar, "mvc") or die (mysql_error());
	// modelo - End
	
	//$sqli = "SELECT * FROM cliente";

	/*
	$resultado = mysqli_query($conectar, $sqli);

	while($dados = mysqli_fetch_assoc($resultado)){
		
		echo "nome:". $dados['nomeCliente'].'<br>';
		echo "idade:". $dados['idadeCliente'].'<br>';
		
	}
	*/

?>