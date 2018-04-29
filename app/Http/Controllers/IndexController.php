<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $images = [];
        for($i = 0 ; $i < 100; $i++) {
            $width = rand(1, 5);
            $height = rand(1, 5);
            array_push($images, 'https://picsum.photos/'.($width*100).'/'.($height*100).'/?random');
        }
        $view = view('index', compact('images'));
        return $view;
    }

    public function login(Request $request) {
        $password = '1234';
        if($request->input('password') == $password){
            return response('성공 했습니다.', 200)
                ->header('Contents-Type', 'text/plain')
                ->header('charset', 'utf-8');
        } else
            return response('실패 했습니다', 400)
                ->header('Contents-Type', 'text/plain')
                ->header('charset', 'utf-8');
    }
}
