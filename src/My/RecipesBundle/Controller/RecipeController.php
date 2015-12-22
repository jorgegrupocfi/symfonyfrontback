<?php

namespace My\RecipesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\RecipesBundle\Form\RecipeType;
use My\RecipesBundle\Entity\Recipe;

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
	 * @Template()
	 */
	public function karloslistAction(){
		
		return $this->render('MyRecipesBundle:Recipe:list.html.twig', array(
				'recipes' => $this->get('my_recipes.recipes')->recetasdekarlos()
		));
	}
	
	/*
	 * @Route('/{id}', name="recipe_show", requirements={"id" = "\d+"})
	 * @Method({"GET"})
	 */
	public function showAction($id) {
		
		$recipe = $this->get('my_recipes.recipes')->show($id);
		$author = $recipe->getAuthor();
		$ingredients = $recipe->getIngredients();
		
		return $this->render('MyRecipesBundle:Recipe:show.html.twig', array(
				'recipe' => $recipe,
				'author' => $author,
				'ingredients' => $ingredients
		));
		
	}
	
	/*
	 * @Route('/recipe-create', name="recipe_create")
	 * @Method({"POST"})
	 */
	public function createAction(Request $request) {
		
		$recipe = new Recipe();
		
		$em = $this->getDoctrine()->getManager();
		$em->persist($recipe);
		
		$form = $this->createForm(new RecipeType, $recipe);
		$form->handleRequest($request);
		
		if($form->isValid()){
			$em->flush();
			return $this->redirect($this->generateUrl('recipes_list'));
		}
	
		//# http://brentertainment.com/other/docs/cookbook/form/twig_form_customization.html#cookbook-form-twig-two-methods
	
		return $this->render("MyRecipesBundle:Recipe:form.html.twig",
				array(
						"form"=>$form->createView()
				));
	
	}
	
	/*
	 * @Route('/recipe-modify/{id}', name="recipe_modify")
	 * @Method({"POST"})
	 */
	public function modifyAction($id, Request $request) {
		
		$em = $this->getDoctrine()->getManager();
		$recipe = $em->getRepository('MyRecipesBundle:Recipe')->find($id);
		
		if (!$recipe) {
			throw $this->createNotFoundException(
					'Receta no encontrada - id ' . $id
					);
		}
		
		$form = $this->createForm(new RecipeType, $recipe);
		$form->handleRequest($request);
		
		if ($form->isValid()) {
			$em->flush();
			return $this->redirect($this->generateUrl('recipe_show', array('id' => $id)));
		}
		
		return $this->render("MyRecipesBundle:Recipe:form.html.twig",
				array(
						"form"=>$form->createView()
				));
		
	}
	
}