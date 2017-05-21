<?php
	class CadastroController{
		public function init(){
			$this->cadastro();
		}

		public function cadastro(){
			require "connect.php";
			require "view/header.php";
			require "view/midCadastro.php";
			require "view/bottom.php";
			if(isset($_POST['page']) && $_POST['page'] == 'cadastro'){
				$nome = $_POST['name'];
				$email = $_POST['email'];
				$user = $_POST['usuario'];
				$senha = $_POST['senha'];
				$senha2 = $_POST['senha2'];
				if($senha != $senha2){
					echo "<script>alert('Passwords do not match!');</script>";
				}
				else{
					$ans = CadastroDAO::cadastrar($nome,$email,$senha,$user);
					if($ans == True){
						echo "<script>alert('Success!');</script>";
					}
					else
						echo "<script>alert('Error!');</script>";
				}
			}
		}
	}
?>