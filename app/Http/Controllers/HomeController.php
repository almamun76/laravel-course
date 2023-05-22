<?php
	//this file has been created manually
	namespace App\Http\Controllers;

	class HomeController extends Controller{
		
		public function index(){
			return "I am from HomeController.";	
		}

		public function contact(){
			return "I am from contact page.";	
		}
	}
?>