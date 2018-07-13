<?php

namespace App\Http\Controllers;

use App\Repositories\Drupal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	private $drupal;

	public function __construct(Drupal $drupal)
	{
		$this->drupal = $drupal;
	}
    public function index()
    {
    	$configuracion = $this->drupal->getRequest('nid',false,4);
    	return view('index',compact('configuracion'));
    }
}
