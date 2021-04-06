<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index(){
        echo "<h1> fluent strings </h1>";

        $slice = Str::of('Hello to my world')->after('Hello to');
        echo $slice . '<br>';

        $slice2 = Str::of ('App\Controllers\Controller')->afterlast('\\');
        echo $slice2. '<br>';

        $string = Str::of('Hello')->append('Wprld');
        echo $string.'<br>';

        $result = Str::of('Laravel 8 dong')->lower();
        echo $result . '<br>';

        $replaced = Str::of('Laravel versi lama')->replace('versi','yang');
        echo $replaced.'<br>';

        $converted = Str::of('this is a title bruh')->title();
        echo $converted. '<br>';
    }
}
