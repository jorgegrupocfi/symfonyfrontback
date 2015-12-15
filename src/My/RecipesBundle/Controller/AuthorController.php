<?php

namespace My\RecipesBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/*
 * @Route('/author')
 */
class AuthorController extends Controller{
	
	public function listAction() {
	
		$em = $this->getDoctrine()->getManager();
		$repository = $this->getDoctrine()->getRepository('MyRecipesBundle:Author');
		$authors = $repository->findAll();
		
		return $this->render('MyRecipesBundle:Author:list.html.twig', array('authors' => $authors));
	}
	
	/*
	 * @Route('/{id}', name="author_show", requirements={"id" = "\d+"})
	 * @Method({"GET"})
	 */
	public function showAction($id) {
		
		$em = $this->getDoctrine()->getManager();
		
	}
	
}