<?php include ("../controle/controle_cliente.php")?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Cadastro</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="application/javascript" src= "../js/cliente.js" ></script>
</head>
<body>
	
	
	
	<form method="POST" >
		Name: <input type="text" id="nome"  name="nome"> <br>
		Age: <input type="text" id="idade" name="idade" > 
		
		<input type="button" id= "Inserir" onClick="cadastrar()" value="Insert">
		<input type="hidden" name="acao" value="insere">
	
	</form>
	<br>
	<input type="button"  onClick="telaListar();" value="Client Screen">
	
</body>

</html>