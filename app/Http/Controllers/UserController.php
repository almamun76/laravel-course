<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    //namespace of User class of User.php Model
    use App\User;

    class UserController extends Controller{
        public function create(){
            //keys must be same as the field name of table uses
            $data=[
                'name'=>'Masud',
                'email'=>'masud@gmail.com',
                'password'=>'1234'
            ];

            //to use the User class of the model User.php
            //namespace of this class must be use
            User::create($data);
            return "Created Successfully";
        }

        public function showAllUser(){
            //User::all means retrieve all data from users table
            //$allUsers=User::all(); means all retieved data will store into $allUsers variable
            $allUsers=User::all();

            return $allUsers;
        }

        public function showSelectedUsers($id)
        {
            //find($id) means, select * from users where $id=id_value;
            $selectedUser=User::find($id);

            return $selectedUser;
        }

        public function deleteUser($id){
            $deleteUser=User::findOrFail($id);
            $deleteUser->delete();

            return "Deleted";
        }
    }
?>
