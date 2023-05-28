<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    //namespace of User class of User.php Model
    use App\User;

    class UserController extends Controller{
        //get start
        public function index(){
            $allUsers=User::all();
            return $allUsers;
        }

        //post start
        public function formSubmit(){
            return view('userform.userform');
        }
        
        public function store(){
            return "User data stored successfully(post).";
        }

        //put start
        public function formUpdate(){
            return view('userform.userformupdate');
        }
        public function update(){
            return "User data updated successfully(put).";
        }

        //patch start
        public function updateName(){
            return "User name updated successfully(patch).";
        }

        //delete start
        public function delete(){
            return "User deleted successfully(delete).";
        }
    }
?>
