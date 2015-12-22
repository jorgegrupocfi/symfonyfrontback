<?php

namespace My\RecipesBundle\Model;

use Doctrine\Common\Persistence\ObjectManager;

class Recipes {
	
	private $repository;
	
	public function __construct(ObjectManager $om) {
		$this->repository = $om->getRepository('MyRecipesBundle:Recipe');
	}
	
	public function show($id){
		return $this->repository->find($id);
	}
	
	public function recetasdekarlos(){
		return $this->repository->recetasdekarlos();
	}
	
	
	
}