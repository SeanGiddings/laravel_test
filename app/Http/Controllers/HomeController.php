<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index()
    {
        // function add($a, $b)
        // {
        //     return $a + $b;
        // }
        function subtract(&$numberOne, $numberTwo)
        {
            $numberOne = 20;
            $numberOne = $numberOne - $numberTwo;
            // return $c - $d;
        }
        // function multiply($a, $b)
        // {
        //     return $a * $b;
        // }
        // function divide($a, $b)
        // {
        //     return $a / $b;
        // }
        $testVariable = 1;
        $testVariable2 = 34;
        // print add($testVariable, 3) . '<br>';
        subtract($testVariable, $testVariable2) . '<br>';
        echo $testVariable;
        // echo $testVariable;
        // echo $testVariable2;
        // print multiply(6, 11) . '<br>';
        // print divide(25, 5) . '<br>';
    }
}
