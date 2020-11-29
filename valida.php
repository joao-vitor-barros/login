<?php
	session_start();
	include_once("conexao.php"); 

	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['email']);
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		//$senha = md5($senha);

		$result_usuario = "SELECT * FROM login WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);

		if (empty($resultado)) {
			$_SESSION['loginErro'] = "Usuário ou senha invalido";
			header("Location: index.php");
		}elseif (isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['email'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			
			$_SESSION['usuarioEmail'] = $resultado['email'];
			$_SESSION['usuarioSenha'] = $resultado['senha'];
			header("Location: administrativo.php");
		
		}else{
			$_SESSION['loginErro'] = "Usuário ou senha invalido";
			header("Location: index.php");
		}


	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: index.php");
	}

?>