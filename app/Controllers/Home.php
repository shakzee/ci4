<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        myfunction();
        // echo form_open('','');
        // echo form_close();
        die('');
        // $data['id'] =  90;
        // $data['name'] =  'john';
        // $data['array'] =  ['user'=>'wick'];
        $id =  10;
        $name = 'john wick';
        return view('pages/home',compact('id','name'));
    }
}
