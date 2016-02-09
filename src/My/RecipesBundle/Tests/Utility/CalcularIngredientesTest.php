<?php

namespace My\RecipesBundle\Tests\Utility;

use My\RecipesBundle\Utility\CalcularIngredientes;

class CalcularIngredientesTest extends \PHPUnit_Framework_TestCase{
	
	public function testCalcIngrPerso() {
				
		$calc = new CalcularIngredientes;
		$result = $calc->calcIngrPerso(5, 10);
		
		$this->assertEquals(50, $result);
	}
	
}