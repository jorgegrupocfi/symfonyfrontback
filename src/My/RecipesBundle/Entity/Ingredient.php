<?php

namespace My\RecipesBundle\Entity;

class Ingredient {
	
	private $id;
	protected $name;
	
	public function __construct($name) {
		$this->name = $name;
	}
	
}


