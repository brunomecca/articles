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
		public static function addLink($id, $nome, $categoria, $link2, $data){
			require "connect.php";
			$idInt = intval($id);
			$consulta2 = mysqli_query($link, "INSERT INTO links(idUser, link, categoria, nome, data) VALUES ('$idInt','$link2','$categoria','$nome', '$data')");
			if($consulta2 != False)
				return True;
			else
				return False;
		}
	}
?>