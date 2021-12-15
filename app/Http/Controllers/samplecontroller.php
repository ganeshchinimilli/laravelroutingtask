<?php

namespace App\Http\Controllers;


class samplecontroller extends Controller
{
    public function show(){
        echo "ganesh";
    }
    public function data($data){
        return $data;
    }
}
