<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        if ($request->hasCookie('txt')) {
            $txt = 'Cookie:' . $request->cookie('txt');
        } else {
            $txt = 'クッキーはありません';
        }
        return view('hello.index', ['txt' => $txt]);
    }
    public function post(Request $request)
    {
        $rules = [
            'txt' => 'required'
        ];
        $this->validate($request, $rules);
        $txt = $request->txt;
        $response = response()->view('hello.index', ['txt' => $txt . 'をクッキーに保存しました']);
        $response->cookie('txt', $txt, 100);
        return $response;
    }
}
