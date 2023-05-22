<?php
	//this file has been created manually
	namespace App\Http\Controllers;

	class HomeController extends Controller{
		
		public function index(){
			//will display index.blade.php file located inside home folder
			
			$name="Abdullah Al Mamun";
			$address="Dhaka";
			$contact="123456789";
			//pass the individual variables as associative array as 2nd parameter of view() function
			// return view('home.index', ['nm'=>$name,'ad'=>$address,'con'=>$contact]);
			
			//alternate way
			$data=['nm'=>$name,'ad'=>$address,'con'=>$contact];
			return view('home.index',$data);
		}
	}
?>