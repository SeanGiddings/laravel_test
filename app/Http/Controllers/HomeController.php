<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index()
    {
        $titleList = [
          'laravel',
          // 'butt',
          // 'fart',
          'lol'
        ];

        return view('welcome', ['titles' => $titleList]);
    }
}
