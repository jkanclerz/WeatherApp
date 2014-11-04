<?php

namespace Jkanclerz\Component\Weather\Api;

use Buzz\Browser;

class OpenWeatherClient
{
	protected $browser;
	protected $url = 'http://api.openweathermap.org/data/2.5/weather';
	protected $format = 'json';
	
	public function __construct(Browser $browser)
	{
		$this->browser = $browser;
	}
	
	public function callApi($city)
	{
		$path = sprintf(
			'%s?q=%s',
			$this->url,
			$city
		);
		$response = $this->browser->get($path);
		
		return $response->getContent();
	}
}