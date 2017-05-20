<?php
	require_once "controller/HomeController.php";
	require_once "controller/CadastroController.php";
	require_once "controller/LoginController.php";
	require_once "model/PesquisaDAO.php";

	if(!isset($_GET['page']) || $_GET['page'] == ''){
		$controller = new HomeController();
	}
	else if(isset($_GET['page']) && $_GET['page'] == 'signup'){
		$controller = new CadastroController();
	}
	else if(isset($_GET['page']) && $_GET['page'] == 'login'){
		$controller = new LoginController();
	}
	if(isset($_GET['pesquisa'])){
		$controller = new HomeController();
	}

	$controller->init();

?>