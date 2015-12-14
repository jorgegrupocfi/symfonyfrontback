<?php

namespace My\RecipesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use My\RecipesBundle\Entity\Recipe;
use My\RecipesBundle\Entity\Author;

class LoadRecipeDataTesting implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
    	
    	//Author
    	$authorTest = new Author('Pepe', 'Domingo Castaño');
    	    	
    	// Recipe
        $recipeTest = new Recipe($authorTest, 'Receta 1', 'difícil', 'Esta es una receta insertada mediante data fixture');
        
        $manager->persist($recipeTest);
        $manager->flush();
    }
};
