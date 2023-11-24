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

    public function myform(){
        echo form_open('send-data',['id'=>'myid']);
        echo form_input(['name'=>'xyz','id'=>'xyz'],'namehere');
        echo form_textarea(['name'=>'abc','id'=>'xyz'],'here is my value');
        $sizes = [
            'small'=>'small',
            'large'=>'large',
            'medium'=>'medium',
        ];
        echo form_dropdown('size',$sizes,'large');
        echo form_checkbox('myname','ss',false);
        echo form_radio('myradio','aa',true);
        echo form_password('kkk','kkk');
        echo form_close('');
    }
}
