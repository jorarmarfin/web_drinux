<?php

namespace App\Http\Controllers\Paginas;

use App\Http\Controllers\Controller;
use App\Repositories\Drupal;
use Illuminate\Http\Request;

class AplicacionMovilController extends Controller
{
	private $drupal;

	function __construct(Drupal $drupal)
	{
		$this->drupal = $drupal;
	}
    public function index()
    {
    	$nodo = $this->drupal->getRequest('pagina',false,26);

    	return view('web.appmovil',compact('nodo'));
    }
}
