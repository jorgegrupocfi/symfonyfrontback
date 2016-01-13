<?php

namespace My\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\UserBundle\Form\UserType;
use My\UserBundle\Entity\User;

class UserController extends Controller{

	protected $roles_choices;
	
	public function listAction() {
		
        $userManager = $this->container->get('fos_user.user_manager');
        $users = $userManager->findUsers();

        return $this->render('MyUserBundle:User:list.html.twig', array('users' => $users));
	
	}
	
	/*
	 * @Route('/usuarios/modify/{id}', name="usuario_modify")
	 * @Method({"POST"})
	 */
	public function modifyAction($id, Request $request) {
		
		$userManager = $this->get('fos_user.user_manager');
		$user = $userManager->findUserBy(array('id' => $id));
		
		// $roles_object = $this->get('security.role_hierarchy');
		
		if (!$user) {
			throw $this->createNotFoundException(
					'Usuario no encontrado - id ' . $id
					);
		}
		
		$form = $this->createForm(new UserType, $user);
		$form->handleRequest($request);
		
		
		if ($form->isValid()) {
		
		// para actualizar un usuario con FOS
		$userManager->updateUser($user);
		
		return $this->redirect($this->generateUrl('usuarios_list'));
		}
		
		return $this->render("MyUserBundle:User:form.html.twig",
				array(
						"form"=>$form->createView(),
						"user"=>$user,
				));
	}
	
}

