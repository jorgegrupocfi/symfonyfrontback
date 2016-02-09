<?php

namespace My\RecipesBundle\Model;

use Doctrine\Common\Persistence\ObjectManager;

class Author {
	
	private $repository;
	
	public function __construct(ObjectManager $om) {
		$this->repository = $om->getRepository('MyRecipesBundle:Author');
	}
	
	public function show($id){
		return $this->repository->find($id);
	}
	
	public function obtienenombreautor($id)
	{
		$author = $this->repository->find($id);
		return $author->getName();
	}
	
}