<?php

namespace My\RecipesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthorControllerTest extends WebTestCase
{
    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/es/authors-list');

        $this->assertTrue($crawler->filter('html:contains("Crear")')->count() > 0);
        
        $link_crear_nuevo = $crawler->selectLink('Crear Nuevo')->link();
        
        $uri = $link_crear_nuevo->getUri();
        
        //var_dump($uri);
        
        $this->assertEquals('http://localhost/author-create', $uri);
        
        $crawler = $client->click($link_crear_nuevo);
        
        $this->assertTrue($client->getResponse()->isSuccessful());
        
        $form = $crawler->selectButton('my_recipesbundle_author_save')->form();
        
        //var_dump($form);
        
        $crawler = $client->submit($form, array('my_recipesbundle_author[name]' => 'Nombre Autor Test', 'my_recipesbundle_author[surname]' => 'Apellido Autor Test'));
        
        //$this->assertTrue($crawler->filter('html:contains("no puede estar va")')->count() > 0);
        
        //var_dump($crawler);
        
        $this->assertTrue($client->getResponse()->isRedirect('/es/authors-list'));
        
    }
    
}