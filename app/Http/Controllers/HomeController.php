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
    	$configuracion = $this->drupal->getRequest('config',false);
        $slider = $this->drupal->getRequest('slider',true);
    	$servicios = $this->drupal->getRequest('servicios',true);
    	return view('index',compact('configuracion','slider','servicios'));
    }
}
