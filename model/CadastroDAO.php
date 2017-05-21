<?php
	class CadastroDAO{
		public static function cadastrar($nome, $email, $senha, $user){
			require "connect.php";
			//$consulta = mysqli_query($link,"SELECT * FROM links WHERE nome LIKE %'$mensagem'% OR categoria LIKE %'$mensagem'%");
			$consulta = mysqli_query($link, "INSERT INTO users(nome, usuario, senha, email) VALUES ('$nome','$user','$senha','$email')");
			if($consulta == True)
				return True;
			else
				return False;
		}
	}
?>