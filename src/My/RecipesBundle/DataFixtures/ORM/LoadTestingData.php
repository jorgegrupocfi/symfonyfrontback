<?php

namespace My\RecipesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use My\RecipesBundle\Entity\Recipe;
use My\RecipesBundle\Entity\Author;
use My\RecipesBundle\Entity\Ingredient;

class LoadRecipeDataTesting implements FixtureInterface
{
	
	protected $ingredients_arr = array();
	
    public function load(ObjectManager $manager)
    {
    	
    	//Author
    	$author = new Author('Ramón', 'Nuñez Agüera');
    	$manager->persist($author);
    	
    	//Recipe
    	$recipe = new Recipe($author, 'Huevo frito', 'fácil', 'con patatas');
    	$manager->persist($recipe);
    	
    	//Ingredient
    	
    	$ingredients_arr = array('Huevo', 'Patatas', 'Ketchup');
    	
    	foreach ($ingredients_arr as $ingredient){
    		$ingredient_fix = new Ingredient($ingredient);
    		$manager->persist($ingredient_fix);
    		$recipe->addIngredient($ingredient_fix);
    	}
    	
        $manager->flush();
    }
};
