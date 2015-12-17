<?php

namespace My\RecipesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class RecipeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	
        $builder
            ->add('name')
            ->add('difficulty')
            ->add('description');
        
        $builder->add('author', 'entity', array(
        		'class' => 'MyRecipesBundle:Author',
        		'choice_label' => function ($author) {
			        return $author->getNombreApellidos();
			    },
        ));
        
        $builder->add('ingredients', 'entity', array(
        		'class' => 'MyRecipesBundle:Ingredient',
        		'choice_label' => 'name',
        		'multiple' => true,
        ));
        
        $builder->add('save', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\RecipesBundle\Entity\Recipe',
        ));
        
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'my_recipesbundle_recipe';
    }
}
