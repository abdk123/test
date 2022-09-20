<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function show(){
        // $obj = new \stdClass();
        // $obj -> id = 1;
        // $obj -> name = 'abd alrahman';
        // $obj -> age = 37;
        
        $data = ['a', 'b', 'c'];
        return view('welcome',compact('data'));
    }
}
