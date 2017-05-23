<?php
	class HomeController{
		public function init(){
	        $this->home(); 
	    }

		public function home(){
			require "view/header.php";
			if(isset($_GET['pesquisa'])){
				if(isset($_SESSION['id']))
					$consulta = PesquisaDAO::pesquisaUser($_GET['pesquisa'], $_SESSION['id']);
				else
					$consulta = PesquisaDAO::pesquisar($_GET['pesquisa']);
				require "view/midPesquisa.php";
			}
			else{
				if(isset($_SESSION['id']))
					$consulta = PesquisaDAO::pesquisaPostUser($_SESSION['id']);
				require "view/mid.php";
			}
			require "view/bottom.php";
		}
	}
?>