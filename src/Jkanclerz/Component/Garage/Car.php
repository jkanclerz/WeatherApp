<?php

namespace Jkanclerz\Component\Garage;

class Car
{
	protected $model;
	
	public function __construct($model)
	{
		$this->model = $model;
	}
	
	public function getModel()
	{
		return $this->model;
	}
}
