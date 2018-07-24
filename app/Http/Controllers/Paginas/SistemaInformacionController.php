<?php

namespace App\Http\Controllers\Paginas;

use Illuminate\Http\Request;
use App\Repositories\Drupal;
use App\Http\Controllers\Controller;

class SistemaInformacionController extends Controller
{
	private $drupal;

	function __construct(Drupal $drupal)
	{
		$this->drupal = $drupal;
	}
    public function index()
    {
    	$nodo = $this->drupal->getRequest('pagina',false,28);

    	return view('web.sistema',compact('nodo'));
    }
}
