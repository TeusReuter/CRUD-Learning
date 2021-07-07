<?php include ("../controle/controle_cliente.php");?>
<?php $id = $_POST['id'];
//echo $id;

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Edição</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="application/javascript" src= "../js/cliente.js" ></script>
</head>
	<?php
	$obj_cliente = new Cliente();
	$arrayCliente = $obj_cliente -> busca($id);
	//var_dump($arrayCliente);
	?>
	
<body>
	
	<form method="POST" >
		Name:  <input type="text"   name="nome"  id="nome"  value="<?php echo $arrayCliente[0]['nomeCliente'] ?>"> <br>
		Age:   <input type="text"   name="idade" id="idade" value="<?php echo $arrayCliente[0]['idadeCliente'] ?>"> 
			   <input type="hidden" name="id"    id="id"    value="<?php echo $arrayCliente[0]['idCliente'] ?>">
		
		<input type="button" id="altera" onClick="editar()" value="Update">
		<input type="hidden" name="acao"  value="altera">
	
	</form>
	<br>
	
	
</body>
	
	
	
</html>