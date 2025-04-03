<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojaController extends Controller
{
    public function viewLoja(){
        return view('site.loja');
    }
}
