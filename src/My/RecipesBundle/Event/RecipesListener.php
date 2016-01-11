<?php

namespace My\RecipesBundle\Event;

use My\RecipesBundle\Entity\Recipe;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

class RecipesListener {
	
	private $logger;
	private $recipe;
	
	public function __construct(LoggerInterface $logger){
		$this->logger = $logger;
	}
	
	public function onRecipeCreate(RecipeEvent $event){
		
		$recipe = $event->getRecipe();
		$this->escribeLog($recipe);
		
	}
	
	public function escribeLog(Recipe $recipe){
		
		$this->logger->info("la receta [". $recipe->getName() ."] ha sido creada");
	}
	
	
}
