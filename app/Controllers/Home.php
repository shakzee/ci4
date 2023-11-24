<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        helper('form');
        // $data['id'] =  90;
        // $data['name'] =  'john';
        // $data['array'] =  ['user'=>'wick'];
        $id =  10;
        $name = 'john wick';
        return view('pages/home',compact('id','name'));
    }
}
