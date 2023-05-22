<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EduController extends Controller{
    public function getInfo(){
        $this->data['institute']='ABC';
        $this->data['lastDegree']='PQR';
        $this->data['result']='XYZ';
        return view('education.edu',$this->data);
    }
}
