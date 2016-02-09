<?php

namespace My\RecipesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
    public function testNoAdminNoPrivileges()
    {
        $client = static::createClient();
        
        $crawler = $client->request('GET', '/usuarios/list');
        
        $this->assertTrue($client->getResponse()->isRedirect('http://localhost/login'));
        
        $crawler = $client->followRedirect();
        
        $this->assertTrue($crawler->filter('html:contains("Nombre de usuario")')->count() > 0);
        
        $form = $crawler->selectButton('_submit')->form();
        
        $crawler = $client->submit($form, array('_username' => 'andresruiperez', '_password' => 'inventada'));
        
        $this->assertTrue($client->getResponse()->isRedirect('http://localhost/login'));
        
        $crawler = $client->followRedirect();
        
        //var_dump($crawler);
        
        $this->assertTrue($crawler->filter('html:contains("Credenciales no válidas")')->count() > 0);
        
        $form = $crawler->selectButton('_submit')->form();
        $crawler = $client->submit($form, array('_username' => 'andresruiperez', '_password' => 'publica'));
        
        $this->assertTrue($client->getResponse()->isRedirect('http://localhost/usuarios/list'));
        
        $crawler = $client->followRedirect();
        
        $this->assertTrue($crawler->filter('html:contains("Access Denied.")')->count() > 0);
        
    }
    
    public function testAdminWithPrivileges() {
    	
    	$client = static::createClient();
        
        $crawler = $client->request('GET', '/usuarios/list');
        
        $this->assertTrue($client->getResponse()->isRedirect('http://localhost/login'));
        
        $crawler = $client->followRedirect();
        
        $this->assertTrue($crawler->filter('html:contains("Nombre de usuario")')->count() > 0);
        
        $form = $crawler->selectButton('_submit')->form();
        
        $crawler = $client->submit($form, array('_username' => 'jorgegrupocfi', '_password' => 'publica'));
        
        $this->assertTrue($client->getResponse()->isRedirect('http://localhost/usuarios/list'));
        
        $crawler = $client->followRedirect();
        
        //var_dump($crawler);
        
        $this->assertTrue($crawler->filter('html:contains("Menú de gestión de usuarios")')->count() > 0);
        
    }
    
}