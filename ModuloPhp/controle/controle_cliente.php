<?php
// Load modelo - Start

// arquivos de controle tem q ter ($_SERVER['DOCUMENT_ROOT']
include ($_SERVER['DOCUMENT_ROOT']."/modelo/conexaoBD.php");


// Load modelo - End
/*
$nomeCliente  = $_POST["nome"];
$idadeCliente = $_POST["idade"];
//$idCliente    = $_POST["id"];

$acao         = $_POST["acao"];

if($acao = "insere"){
	
	$sqlInsert = "INSERT INTO cliente ( nomeCliente, idadeCliente) VALUES ('".$nomeCliente."',".$idadeCliente.");";
	mysqli_query($conectar,$sqlInsert);
	
	
	echo 'INSERT';
	
	// conectar com o banco aqui
	
	
	
	
}else if($acao = "editar"){
	
	echo'UPDATE';

}else if ($acao = "busca"){
	
	
	
	
	
	//echo 'SELECT';

}else if($acao = "deleta"){
	
	echo 'deleta';

}

*/

class Cliente{
	
	function busca($id = false){
		
		
		// instrução sql select - Start
		
		$obj_con = new ConexaoBD();
		$conectar = $obj_con -> con();
		
		$sql = "SELECT * FROM cliente ";
		if($id > 0){
			
		$sql .= "WHERE idCliente = ".$id;
			
		}

		
		$resultado = mysqli_query($conectar,$sql);
		$r = 0;
		while($dados = mysqli_fetch_assoc($resultado)){
			
			$row[$r]['idCliente'] = $dados['idCliente'];
			$row[$r]['nomeCliente'] = $dados['nomeCliente'];
			$row[$r]['idadeCliente'] = $dados['idadeCliente'];
			$r++;
			
		}
		// instrução sql select - End
		 
	
		return $row;
		}
		// return $resultado; // Enviar valor para a Instancia(tela)
		
	
	function insere($nome, $idade){
		
		$obj_con = new ConexaoBD();
		$conectar = $obj_con -> con();
	
		// montar a instrução SQL e execultar
		$sqlInsert= "INSERT INTO cliente  (
		nomeCliente,
		idadeCliente
		)VALUES (
		'".$nome."',
		".$idade.");
		";
		$resultado = mysqli_query($conectar,$sqlInsert) or die(mysqli_error($conectar));
		
		if($resultado === false){
			
			return false;
			
		}else{
		
			return true;
		
		}
		
		
		
		}	
	
	function atualizar($nome, $idade, $id){
		$resultado = true;
		
		$obj_con = new ConexaoBD();
		$conectar = $obj_con -> con();
		
		$sqlUpdate= "
		UPDATE cliente SET nomeCliente ='".$nome."', idadeCliente =".$idade." 
		WHERE idCliente = ".$id;
		
		 mysqli_query($conectar,$sqlUpdate) or die($resultado = false);
		
		//return $sqlUpdate;
		
	}
	
	function deletar($id){
		
		
		$obj_con = new ConexaoBD();
		$conectar = $obj_con -> con();
		
		$sqlDelete= "
		DELETE FROM cliente WHERE idCliente = ".$id;
		
		$resultado = mysqli_query($conectar,$sqlDelete) or die($resultado = false);
		
		if($resultado === false){
			
			return false;
			
		}else{
		
			return true;
		
			}
		
		}
	
	}


?>