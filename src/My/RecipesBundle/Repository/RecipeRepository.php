<?php

namespace My\RecipesBundle\Repository;

use Doctrine\ORM\EntityRepository;

class RecipeRepository extends EntityRepository{
	
	public function recetasdekarlos(){
		
		return $this->getEntityManager()
			->createQuery(
			'SELECT r
			FROM MyRecipesBundle:Recipe r
			JOIN r.author a
			WHERE a.name = :name')
			->setParameter('name', 'Karlos')
			->getResult();		
			
	}
	
}