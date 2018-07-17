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
        $eligenos = $this->drupal->getRequest('eligenos',true);
        $porque = $this->drupal->getRequest('nid',false,13);
        $tecnologias = $this->drupal->getRequest('tecnologias',true);
        $footer1 = $this->drupal->getRequest('nid',false,20);
        $copyright = $this->drupal->getRequest('nid',false,21);
    	return view('index',compact('configuracion','slider','servicios',
            'eligenos','porque','tecnologias','footer1','copyright'));
    }
}
