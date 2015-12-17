<?php

namespace My\RecipesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\RecipesBundle\Entity\Ingredient;
use My\RecipesBundle\Form\IngredientType;

/*
 * @Route('/ingredient')
 */
class IngredientController extends Controller{
	
	public function listAction() {
	
		$em = $this->getDoctrine()->getManager();
		$repository = $this->getDoctrine()->getRepository('MyRecipesBundle:Ingredient');
		$ingredients = $repository->findAll();
		
		return $this->render('MyRecipesBundle:Ingredient:list.html.twig', array('ingredients' => $ingredients));
	}
	
	/*
	 * @Route('/{id}', name="ingredient_show", requirements={"id" = "\d+"})
	 * @Method({"GET"})
	 */
	public function showAction($id) {
		
		$em = $this->getDoctrine()->getManager();
		
	}
	
	/*
	 * @Route('/ingredient-create', name="ingredient_create")
	 * @Method({"POST"})
	 */
	public function createAction(Request $request) {
		
		$ingredient = new Ingredient;
		
		$form = $this->createForm(new IngredientType, $ingredient);
		$form->handleRequest($request);
		
		if($form->isValid()){
			$em = $this->getDoctrine()->getManager();
			$em->persist($ingredient);
			$em->flush(); 
			return $this->redirect($this->generateUrl('ingredients_list'));
		}
		
		//# http://brentertainment.com/other/docs/cookbook/form/twig_form_customization.html#cookbook-form-twig-two-methods
		
		return $this->render("MyRecipesBundle:Ingredient:form.html.twig",
				array(
						"form"=>$form->createView()
				));
		
	}
	
	/*
	 * @Route('/ingredient-modify', name="ingredient_modify")
	 * @Method({"POST"})
	 */
	public function modifyAction($id, Request $request) {
	
		$em = $this->getDoctrine()->getManager();
		$ingredient = $em->getRepository('MyRecipesBundle:Ingredient')->find($id);
		
		if (!$ingredient) {
			throw $this->createNotFoundException(
					'Ingrediente no encontrado - id ' . $id
					);
		}
		
		$form = $this->createForm(new IngredientType, $ingredient);
		$form->handleRequest($request);
	
		if($form->isValid()){
			$em->flush();
			return $this->redirect($this->generateUrl('ingredients_list'));
		}
		
		return $this->render("MyRecipesBundle:Ingredient:form.html.twig",
				array(
						"form"=>$form->createView()
				));
	
	}
	
}