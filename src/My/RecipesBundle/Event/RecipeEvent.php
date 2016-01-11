<?php

namespace My\RecipesBundle\Event;

use My\RecipesBundle\Entity\Recipe;
use Symfony\Component\EventDispatcher\Event;

class RecipeEvent extends Event{
	
	private $recipe;
	
	public function __construct(Recipe $recipe){
		$this->recipe = $recipe;
	}
	
	public function getRecipe(){
		return $this->recipe;
	}
	
}