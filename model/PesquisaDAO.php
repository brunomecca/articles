<?php
	class PesquisaDAO{
		public static function pesquisar($mensagem){
			require "connect.php";
			//$consulta = mysqli_query($link,"SELECT * FROM links WHERE nome LIKE %'$mensagem'% OR categoria LIKE %'$mensagem'%");
			$consulta = mysqli_query($link, "SELECT * FROM links WHERE nome LIKE '%{$mensagem}%' OR categoria LIKE '%{$mensagem}%'");
			return $consulta;
		}
	}
?>