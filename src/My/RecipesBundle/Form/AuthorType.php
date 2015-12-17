<?php

namespace My\RecipesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AuthorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('required' => false))
            ->add('surname', 'text', array('required' => false))
            ->add('save', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\RecipesBundle\Entity\Author'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'my_recipesbundle_author';
    }
}

//# http://brentertainment.com/other/docs/cookbook/form/twig_form_customization.html#cookbook-form-twig-two-methods
