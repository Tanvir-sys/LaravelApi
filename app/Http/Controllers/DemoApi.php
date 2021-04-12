<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoApi extends Controller
{
    public function  getData(){
         return  ["Name"=> "Tanvir"] ;
    }
}
