<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index()
    {
        function comparison($a, $b, $c = false)
        {
            if ($c && $a === $b) {
                return "whats up";
            } elseif ($a != $b) {
                return "the parameters are NOT equal.";
            } elseif ($a == $b) {
                return "The parameters are equal!";
            }
        }

        print comparison(4, '4') . "<br>";
        print comparison(5, '5', true) . "<br>";
        print comparison(4, 4.0) . "<br>";
        print comparison(5, 5.0, true) . "<br>";
    }
}
