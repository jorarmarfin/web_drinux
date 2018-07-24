<?php

namespace App\Repositories;

use GuzzleHttp\Client;
/**
* Clase de conexion con drupal
*/
class Drupal
{
	private $client;

	public function __construct()
	{
		$this->client = new Client([
			'base_uri' => 'http://drupal.drinux.com/'
		]);
	}

	public function getRequest($name,$isarray=false,$nid=null)
	{
		$cond = ['nid', 'pagina'];
		$retVal = (str_contains($name, $cond)) ? '/'.$nid : '' ;

		$sufijo = $retVal.'?_format=json';
		$url = '/api/drinux/'.$name.$sufijo;
		$response = $this->client->request('GET',$url);

		$data = json_decode($response->getBody()->getContents());

		if($isarray)return $data;
		else return $data[0];
	}
}