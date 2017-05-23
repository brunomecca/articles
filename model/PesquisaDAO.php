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

		public static function pesquisaUser($mensagem,$id2){
			require "connect.php";
			//$consulta = mysqli_query($link,"SELECT * FROM links WHERE nome LIKE %'$mensagem'% OR categoria LIKE %'$mensagem'%");
			$consulta = mysqli_query($link, "SELECT * FROM links WHERE idUser = '$id2' AND (nome LIKE '%{$mensagem}%' OR categoria LIKE '%{$mensagem}%') ORDER BY id DESC");
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

		public static function remove($id){
			require "connect.php";
			$consulta = mysqli_query($link,"DELETE FROM links WHERE id = '$id'");
		}

		public static function returnIdUser($id){
			require "connect.php";
			$consulta = mysqli_query($link,"SELECT idUser FROM links WHERE id = '$id'");
			$a = mysqli_fetch_array($consulta);
			return $a['idUser'];
		}
	}
?>