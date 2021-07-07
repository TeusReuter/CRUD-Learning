// JavaScript Document
function telaListar(){
	
	//console.log('Foi para a tela de cadastro');
	window.location.href = 'listarClientes.php';
		
	
		
}
	


function telaCadastrar(){
	
	window.location.href = 'formCadastro.php';
	
		
}

function telaEditar(valor){
	
	//console.log('Foi para a tela de cadastro');
	//window.location.href = 'formEditarCadastro.php?id='+id;
	$('#idFormulario').val(valor);
	
	$('#formulario').submit();
	
}

function editar(){
	
	//nome  = document.getElementById("nome").value;
	//idade = document.getElementById("idade").value;
	//id  = document.getElementById("id").value;
	
	nome = $('#nome').val();
	idade = $('#idade').val();
	id = $('#id').val();
	
	$.ajax({
	
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"altera", nome:nome, idade:idade, id:id},
		
		success:function(data){
		alert('Successfully updated!');
		telaListar();	
			
		}
		
	});
	
	
		
	
}
	
	


function cadastrar(){
	
	nome = $('#nome').val();
	idade = $('#idade').val();
	
	$.ajax({
	
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"insere", nome:nome, idade:idade},
		
		success:function(data){
			
			alert("Successfully inserted!");
			telaListar();
				
			
		}
		
	});
	
	
	
	
}

function deletar(valor){
	
	var result = confirm("Are you sure you want to delete?");

	if(result == true){
	
	$.ajax({
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"deletar",id:valor},
		
		success:function(data){
			
			//console.log("deletado");
			//window.location.href = 'listarClientes.php';
			
			window.location.href = 'listarClientes.php';
			alert ('Sucessfully deleted!');
			
			
			
		}
		
	});
	
	}else{
		alert('You canceled the action!');	
	}
	
}