<?php
	require_once "controller/HomeController.php";
	require_once "controller/CadastroController.php";
	
	if(!isset($_GET['page']) || $_GET['page'] == ''){
		$controller = new HomeController();
	}
	else if(isset($_GET['page']) && $_GET['page'] == 'signup'){
		$controlelr = new CadastroController();
	}

	$controller->init();
?>