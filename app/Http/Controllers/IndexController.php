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
}
