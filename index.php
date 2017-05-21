<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8');
	require_once "controller/HomeController.php";
	require_once "controller/CadastroController.php";
	require_once "controller/LoginController.php";
	require_once "controller/UserController.php";
	require_once "model/PesquisaDAO.php";
	require_once "model/CadastroDAO.php";

	if(!isset($_GET['page']) || $_GET['page'] == ''){
		$controller = new HomeController();
	}
	else if(isset($_GET['page']) && $_GET['page'] == 'signup'){
		$controller = new CadastroController();
	}
	else if(isset($_GET['page']) && $_GET['page'] == 'login' || $_GET['page'] == 'sair'){
		$controller = new LoginController();
	}
	else if(isset($_GET['page']) == 'link'){
		$controller = new UserController();
	}
	if(isset($_GET['pesquisa'])){
		$controller = new HomeController();
	}

	$controller->init();

?>