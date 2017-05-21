<?php
	class LoginController{
		public function init(){
			if(isset($_GET['page']) && $_GET['page'] == 'sair')
				$this->logout();
			else
				$this->login();
		}

		public function login(){
			require "connect.php";
			require "view/header.php";
			require "view/midLogin.php";
			require "view/bottom.php";
			if(isset($_POST['page']) && $_POST['page'] == 'login'){
				$user = $_POST['login'];
				$pass = $_POST['pass'];
				$consulta = PesquisaDAO::login($user,$pass);
				if($consulta != False){
					$consulta = mysqli_fetch_array($consulta);
					$_SESSION['usuario'] = $user;
					$_SESSION['id'] = $consulta['id'];
					header("Location:index.php");
				}
			} 
		}
		
		function logout(){
			unset($_SESSION['usuario']);
			unset($_SESSION['id']);
			session_destroy();
			header("Location:index.php");
		}
	}
?>