<?php
	class LoginController{
		public function init(){
			$this->login();
		}

		public function login(){
			require "connect.php";
			require "view/header.php";
			require "view/bottom.php";
		}
	}
?>