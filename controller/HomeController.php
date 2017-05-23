<?php
	class HomeController{
		public function init(){
			if(isset($_GET['done']) && isset($_SESSION['id'])){
				if($_SESSION['id'] == PesquisaDAO::returnIdUser($_GET['done']))
					$this->remove($_GET['done']);
			}
			else
	        	$this->home(); 
	    }

		public function home(){
			require "view/header.php";
			$consulta = False;
			if(isset($_GET['pesquisa'])){
				if(isset($_SESSION['id'])){
					$consulta = PesquisaDAO::pesquisaUser($_GET['pesquisa'], $_SESSION['id']);
				}
				else{
					$consulta = PesquisaDAO::pesquisar($_GET['pesquisa']);

				}
				require "view/midPesquisa.php";
			}
			else{
				if(isset($_SESSION['id']))
					$consulta = PesquisaDAO::pesquisaPostUser($_SESSION['id']);
				require "view/mid.php";
			}
			require "view/bottom.php";
		}

		function remove($id){
			PesquisaDAO::remove($id);
			echo "<script>alert('Success!');</script>";
			$this->home();
		}
	}
?>