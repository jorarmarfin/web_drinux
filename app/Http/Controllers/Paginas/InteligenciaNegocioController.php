<?php

namespace App\Http\Controllers\Paginas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InteligenciaNegocioController extends Controller
{
    public function index()
    {
    	return view('templates.web.inteligencia');
    }
}
