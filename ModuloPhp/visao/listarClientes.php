<?php include ("../controle/controle_cliente.php") ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>listarClientes</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="application/javascript" src="../js/cliente.js" ></script>
</head>
	
	<?php
		// Instanciar classe cliente - Start
		$obj_cliente = new Cliente();
		// Instanciar classe cliente - End

		// Chama metodo - Start
		$arrayClientes = $obj_cliente -> busca();
		// Chama metodo - End
		
	?>
<body>	
	
	
	<table border="1">
		<tr>
			<td>Name</td>
			<td>Age</td>
			<td>Action</td>
		</tr>
		
		
	<?php
		foreach($arrayClientes as $value){ //laço do retorno
	?>
		
		<tr>
			<td><?php echo $value['nomeCliente'] ?> </td>
			<td><?php echo $value['idadeCliente'] ?> </td>
			<td> <input type="button" onClick="telaEditar(<?php echo $value['idCliente'] ?>)" value="Update">
			<input type="button" onClick="deletar(<?php echo $value['idCliente'] ?>)" value="Delete"></td>
		</tr>	
	<?php	
		}
	?>
	</table>
	<br>
	
	<input type="button" onClick="telaCadastrar();" value="Insert Screen">
	<form id="formulario" action="formEditarCadastro.php" method="POST">
	<input type="hidden" id="idFormulario" name="id">
	</form>
	
</body>
</html>