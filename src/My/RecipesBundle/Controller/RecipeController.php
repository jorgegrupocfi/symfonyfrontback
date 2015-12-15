<?php

namespace My\RecipesBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/*
 * @Route('/recipe')
 */
class RecipeController extends Controller{
	
	public function listAction() {
	
		$em = $this->getDoctrine()->getManager();
		
		$repository = $this->getDoctrine()->getRepository('MyRecipesBundle:Recipe');
		
		$recipes = $repository->findAll();
		
		return $this->render('MyRecipesBundle:Recipe:list.html.twig', array('recipes' => $recipes));
		
	}
	
	/*
	 * @Route('/{id}', name="recipe_show", requirements={"id" = "\d+"})
	 * @Method({"GET"})
	 */
	public function showAction($id) {
		
		$em = $this->getDoctrine()->getManager();
		$recipe = $em->getRepository('MyRecipesBundle:Recipe')->find($id);
		$author = $recipe->getAuthor();
		$ingredients = $recipe->getIngredients();
		
		return $this->render('MyRecipesBundle:Recipe:show.html.twig', array(
				'recipe' => $recipe,
				'author' => $author,
				'ingredients' => $ingredients
		));
	}
	
}