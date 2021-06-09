<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $data=['cat','dog','pig'];
        return view('hello.test',compact('data'));
    }
    //
}
