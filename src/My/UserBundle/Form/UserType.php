<?php

namespace My\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
	
	private $role;
	
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	
       $builder->add('roles', 'choice', array(
            'choices' =>  array('Administrador' => 'ROLE_ADMIN', 'Usuario' => 'ROLE_USUARIO'),
        	'required' => true,
        	'multiple' => true,
        	'choices_as_values' => true,
         ));
         
       $builder->add('active', 'checkbox', array(
       		'required'  => false
       ));
        
       $builder->add('save', 'submit');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\UserBundle\Entity\User',
        ));
        
    }
    
    /**
     * @return string
     */
    public function getName()
    {
    	return 'my_userbundle_user';
    }
}

//# http://brentertainment.com/other/docs/cookbook/form/twig_form_customization.html#cookbook-form-twig-two-methods
