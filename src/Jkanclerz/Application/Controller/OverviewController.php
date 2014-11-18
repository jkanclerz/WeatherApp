<?php

namespace Jkanclerz\Application\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class OverviewController
{
	protected $twig;
	
	public function __construct($twig)
	{
		$this->twig = $twig;
	}
	
	public function indexAction(Request $request)
	{
		return new Response(
			$this->twig->render(
				'index.html.twig',
				array(
					'name' => 'Kuba'
				)
			)
		);
	}
}
