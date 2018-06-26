<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'BDconexao.php';
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	
	$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
	
	$result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
					'" .$dados['nome']. "',
					'" .$dados['email']. "',
					'" .$dados['usuario']. "',
					'" .$dados['senha']. "'
					)";
	$resultado_usario = mysqli_query($conn, $result_usuario);
	if(mysqli_insert_id($conn)){
		$_SESSION['msgcad'] = "Cadastrado com Sucesso!";
		header("Location: login.php");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar usuário";
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contratos - Cadastrar</title>
	</head>
	<body>
		<h2>Cadastrar</h2>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
		<form method="POST" action="">
			<label>Nome</label>
			<input type="text" name="nome" placeholder="Digite seu nome completo"><br><br>
			
			<label>E-mail</label>
			<input type="text" name="email" placeholder="Digite seu e-mail"><br><br>
			
			<label>Usuário</label>
			<input type="text" name="usuario" placeholder="Crie um usuário"><br><br>
			
			<label>Senha</label>
			<input type="password" name="senha" placeholder="Crie uma senha"><br><br>
			
			<input type="submit" name="btnCadUsuario" value="Cadastrar"><br><br>
			
			Já possui cadastro? <a href="login.php">Clique aqui</a> para entrar
		
		</form>
	</body>
</html>