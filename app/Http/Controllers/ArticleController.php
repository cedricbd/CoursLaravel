<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($n)
    {
        return View::make('article')->with('numero', $n);
    }
}
