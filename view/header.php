<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<header>
		<nav class="navbar navbar-inverse navbar-default">
			<div class="container-fluid">
				<ul class="nav navbar-nav navbar-right">
				<?php
					if(!isset($_SESSION['usuario'])){
				?>
						<li class="active"><a href="?page=login"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
						<li class="active"><a href="?page=signup"><span class="glyphicon glyphicon-plus-sign"></span> Sign up</a></li>
				<?php
					}
					else{
				?>
						<li><a href="?page=login"><span class="glyphicon glyphicon-check"></span> Bem vindo,</a></li>
				<?php
					}
				?>
				</ul>
			</div>
		</nav>
	</header>

	<div class="container">
		<img src="images/logo.png">
	</div>