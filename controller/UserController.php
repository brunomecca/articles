<?php
	class UserController{
		public function init(){
			if(!isset($_SESSION['usuario']))
				header("Location:index.php");
			$this->addLink();
		}

		function addLink(){
			require "view/header.php";
			require "view/midAddLink.php";
			require "view/bottom.php";
			if(isset($_POST['page']) && $_POST['page'] == 'adiciona'){
				date_default_timezone_set('America/Sao_Paulo');
				$dia = date("d");
				$mes = date("m");
				$ano = date("Y");
				$data = $dia.'/'.$mes.'/'.$ano;
				$nome = $_POST['nome'];
				$categoria = $_POST['categoria'];
				$link = $_POST['link'];
				if(CadastroDAO::addLink($_SESSION['id'],$nome,$categoria,$link, $data))
					echo "<script>alert('Success!');</script>";
				else
					echo "<script>alert('Error!');</script>";
			}
		}

	}
?>