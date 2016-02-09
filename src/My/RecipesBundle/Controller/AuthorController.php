<?php

namespace My\RecipesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\RecipesBundle\Entity\Author;
use My\RecipesBundle\Form\AuthorType;

//para borrar
//use My\RecipesBundle\Utility\NombreKarlosTest;
use Symfony\Component\Filesystem\Filesystem;

/*
 * @Route('/author')
 */
class AuthorController extends Controller{
	
	public function listAction() {
	
		//$test_model = $this->container->get('test.my_recipes.author.karlos');
		
		//$em = $this->getDoctrine()->getManager();
		$repository = $this->getDoctrine()->getRepository('MyRecipesBundle:Author');
		$authors = $repository->findAll();
		
		return $this->render('MyRecipesBundle:Author:list.html.twig', array('authors' => $authors));
	}
	
	/*
	 * @Route('/{id}', name="author_show", requirements={"id" = "\d+"})
	 * @Method({"GET"})
	 */
	public function showAction($id) {
		
		//$em = $this->getDoctrine()->getManager();
		
		$author = $this->get('my_recipes.author')->show($id);
		
		$solonombre = $this->get('my_recipes.author')->obtienenombreautor($id);
		
		return $this->render('MyRecipesBundle:Author:show.html.twig', array(
				'author' => $author,
				'solonombre' => $solonombre,
		));
		
	}
	
	/*
	 * @Route('/author-create', name="author_create")
	 * @Method({"POST"})
	 */
	public function createAction(Request $request) {
		
		$author = new Author;
		
		$form = $this->createForm(new AuthorType, $author);
		$form->handleRequest($request);
		
		if($form->isValid()){
			$em = $this->getDoctrine()->getManager();
			$em->persist($author);
			$em->flush(); 
			return $this->redirect($this->generateUrl('authors'));
		}
		
		//# http://brentertainment.com/other/docs/cookbook/form/twig_form_customization.html#cookbook-form-twig-two-methods
		
		return $this->render("MyRecipesBundle:Author:form.html.twig",
				array(
						"form"=>$form->createView()
				));
		
	}
	
	/*
	 * @Route('/author-modify', name="author_modify")
	 * @Method({"POST"})
	 */
	public function modifyAction($id, Request $request) {
	
		$em = $this->getDoctrine()->getManager();
		$author = $em->getRepository('MyRecipesBundle:Author')->find($id);
	
		if (!$author) {
			throw $this->createNotFoundException(
					'Autor no encontrado - id ' . $id
					);
		}
		
		$form = $this->createForm(new AuthorType, $author);
		$form->handleRequest($request);
	
		if($form->isValid()){
			$em->flush();
			return $this->redirect($this->generateUrl('authors'));
		}
	
		return $this->render("MyRecipesBundle:Author:form.html.twig",
				array(
						"form"=>$form->createView()
				));
	
	}
	
}