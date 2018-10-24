<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateController extends Controller
{   
    public function __construct(){
        $this->middleware('auth')->only('index');  
        //default behavior it directs to do login, it creates layer of identification
        //$this->middleware('auth')->except('index');
    }
    public function index()
    {
      return "this is private";
    }
    public function show()
    {
      return "this is private show";
    }
}
