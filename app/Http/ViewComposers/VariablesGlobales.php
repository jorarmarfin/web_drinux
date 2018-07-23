<?php
namespace App\Http\ViewComposers;

use App\Repositories\Drupal;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;

class VariablesGlobales
{
	public function compose(View $view)
	{
		$drupal = new Drupal();
		$configuracion = $drupal->getRequest('config',false);
		$footer1 = $drupal->getRequest('nid',false,20);
        $copyright = $drupal->getRequest('nid',false,21);

		$view->with(compact('configuracion','footer1','copyright'));
	}
}