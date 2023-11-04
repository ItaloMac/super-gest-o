<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\LogAcessoMiddleware;

class SobreNosController extends Controller
{
    public function constructor() {
        $this->middleware('log.acesso');
    }
    
    public function sobreNos() {
        return view('site.sobre-nos');
    }
}