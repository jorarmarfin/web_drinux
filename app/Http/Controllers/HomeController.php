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
        $slider = $this->drupal->getRequest('slider',true);
        $servicios = $this->drupal->getRequest('servicios',true);
        $eligenos = $this->drupal->getRequest('eligenos',true);
        $tecnologias = $this->drupal->getRequest('tecnologias',true);

        $porque = [];

    	return view('index',compact('slider','servicios',
            'eligenos','porque','tecnologias','footer1','copyright'));
    }
}
