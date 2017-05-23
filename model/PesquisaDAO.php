<?php
	class PesquisaDAO{
		public static function pesquisar($mensagem){
			require "connect.php";
			//$consulta = mysqli_query($link,"SELECT * FROM links WHERE nome LIKE %'$mensagem'% OR categoria LIKE %'$mensagem'%");
			$consulta = mysqli_query($link, "SELECT * FROM links WHERE nome LIKE '%{$mensagem}%' OR categoria LIKE '%{$mensagem}%'");
			return $consulta;
		}

		public static function login($user,$pass){
			require "connect.php";
			$consulta = mysqli_query($link, "SELECT usuario, id FROM users WHERE usuario = '$user' AND senha = '$pass' ORDER BY id DESC");
			if($consulta != False)
				return $consulta;
			else
				return False;
		}

		public static function pesquisaUser($mensagem,$id){
			require "connect.php";
			//$consulta = mysqli_query($link,"SELECT * FROM links WHERE nome LIKE %'$mensagem'% OR categoria LIKE %'$mensagem'%");
			$id = intval($id);
			$consulta = mysqli_query($link, "SELECT * FROM links WHERE nome LIKE '%{$mensagem}%' OR categoria LIKE '%{$mensagem}%' AND idUser = '$id' ORDER BY id DESC");
			return $consulta;
		}

		public static function pesquisaPostUser($user){
			require "connect.php";
			$consulta = mysqli_query($link, "SELECT * FROM links WHERE idUser = '$user' ORDER BY id DESC");
			if($consulta != False)
				return $consulta;
			else
				return False;
		}
	}
?>