<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function viewContato(){
        return view('site.contato');
    }
}
