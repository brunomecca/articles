<?php
	require_once "controller/HomeController.php";
	require_once "controller/CadastroController.php";
	require_once "model/PesquisaDAO.php";

	if(!isset($_GET['page']) || $_GET['page'] == ''){
		$controller = new HomeController();
		$controller->init();
	}
	else if(isset($_GET['page']) && $_GET['page'] == 'signup'){
		$controller = new CadastroController();
		$controller->init();
	}
	if(isset($_GET['pesquisa'])){
		$controller = new HomeController();
	}


?>