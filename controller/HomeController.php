<?php
	class HomeController{
		public function init(){
	        $this->home(); 
	    }

		public function home(){
			require "view/header.php";
			if(isset($_GET['pesquisa'])){
				$consulta = PesquisaDAO::pesquisar($_GET['pesquisa']);
				require "view/midPesquisa.php";
			}
			else{
				require "view/mid.php";
			}
			require "view/bottom.php";
		}
	}
?>