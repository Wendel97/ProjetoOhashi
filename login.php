<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contratos</title>
	</head>
	<body>
		<h2>Login</h2>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			if(isset($_SESSION['msgcad'])){
				echo $_SESSION['msgcad'];
				unset($_SESSION['msgcad']);
			}
		?>
		<form method="POST" action="validacao.php">
			<label>Usuário</label>
			<input type="text" name="usuario" placeholder="Digite seu usuário"><br><br>
			
			<label>Senha</label>
			<input type="password" name="senha" placeholder="Digite sua senha"><br><br>
			
			<input type="submit" name="btnLogin" value="Entrar">
			
			<h4>Você ainda não é cadastrado?</h4>
			<a href="cadastrar.php">Cadastre-se</a>
		
		</form>
		<br><br><br>
	</body>
</html>