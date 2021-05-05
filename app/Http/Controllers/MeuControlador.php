<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos()
    {

        echo "<h1>Produtos</h1>";
        echo "<ol>";
        echo "<li>Item 1</li>";
        echo "<li>Item 2</li>";
        echo "<li>Item 3</li>";
        echo "</ol>";

    }

    public function aplicacao ()
    {
        return view('app');
    }

    public function user ()
    {
        return view('user');
    }

    public function profile ()
    {
        return view('profile');
    }

    public function multiplicar ($numero1, $numero2)
    {
        return $numero1*$numero2;
    }
}
