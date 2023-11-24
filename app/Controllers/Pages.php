<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo 'pages class/controller';
        //return view('welcome_message');
    }

  public function about(){
    echo 'about method in pages controller..';
    }
    public function user($one,$two){
        $id =  $one;
        $name = $two;
        return view('pages/home',compact('id','name'));
        }
}
