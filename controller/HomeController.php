<?php
	class HomeController{
		public function init(){
	        $this->home(); 
	    }

		public function home(){
			require "view/home.php";
		}
	}
?>