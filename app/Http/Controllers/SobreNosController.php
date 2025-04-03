<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function viewSobreNos(){
        return view('site.sobre-nos');
    }
}
