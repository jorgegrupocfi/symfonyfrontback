<?php

namespace My\RecipesBundle\Tests\Model;

use My\RecipesBundle\Model\Author;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\Filesystem\Filesystem;

class NombreKarlosTest{
	
	protected $author;
	
	public function __construct(Author $author) {
		$this->author = $author;
	}
	
	public function testElNombreEsKarlos() {
		
		//$author = new Author();
		
		$result = $this->author->obtienenombreautor(7); //el id 7 pertenece al nombre Karlos
		
		$this->assertEquals('Karlos', $result);
	}
	
}