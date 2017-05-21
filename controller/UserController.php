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
				$nome = $_POST['nome'];
				$categoria = $_POST['categoria'];
				$link = $_POST['link'];
				if(CadastroDAO::addLink($_SESSION['id'],$nome,$categoria,$link))
					echo "<script>alert('Success!');</script>";
				else
					echo "<script>alert('Error!');</script>";
			}
		}
	}
?>