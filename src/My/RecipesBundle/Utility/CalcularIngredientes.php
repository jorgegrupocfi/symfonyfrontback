<?php

namespace My\RecipesBundle\Utility;

class CalcularIngredientes{
	
	public function calcIngrPerso($num_pers, $cant_ingr) {
		return $num_pers * $cant_ingr;
	}
	
}