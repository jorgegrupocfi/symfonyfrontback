<?php

/* MyRecipesBundle:Author:form.html.twig */
class __TwigTemplate_bf293024eea9d3b2c1c4a46846fac34fd19e6a430ddd2ea096b47067cdef13d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MyRecipesBundle:Author:form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3db255be44bb900675d2b8b390fab7c53e629446f87a36de8efdc9787e46863 = $this->env->getExtension("native_profiler");
        $__internal_f3db255be44bb900675d2b8b390fab7c53e629446f87a36de8efdc9787e46863->enter($__internal_f3db255be44bb900675d2b8b390fab7c53e629446f87a36de8efdc9787e46863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Author:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3db255be44bb900675d2b8b390fab7c53e629446f87a36de8efdc9787e46863->leave($__internal_f3db255be44bb900675d2b8b390fab7c53e629446f87a36de8efdc9787e46863_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_33ad2fe69f7fe1ccf5fbda1b7ebd1760cd734d92760cf52ff17a3a056a27322f = $this->env->getExtension("native_profiler");
        $__internal_33ad2fe69f7fe1ccf5fbda1b7ebd1760cd734d92760cf52ff17a3a056a27322f->enter($__internal_33ad2fe69f7fe1ccf5fbda1b7ebd1760cd734d92760cf52ff17a3a056a27322f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Crear un nuevo autor";
        
        $__internal_33ad2fe69f7fe1ccf5fbda1b7ebd1760cd734d92760cf52ff17a3a056a27322f->leave($__internal_33ad2fe69f7fe1ccf5fbda1b7ebd1760cd734d92760cf52ff17a3a056a27322f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1375a9e8db4e283873bd65e5ee184c4d9077fa363deab1ad8ce3b46ce585bd8b = $this->env->getExtension("native_profiler");
        $__internal_1375a9e8db4e283873bd65e5ee184c4d9077fa363deab1ad8ce3b46ce585bd8b->enter($__internal_1375a9e8db4e283873bd65e5ee184c4d9077fa363deab1ad8ce3b46ce585bd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "author-create")));
        echo "

";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surname", array()), 'row');
        echo "
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row');
        echo "


";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_1375a9e8db4e283873bd65e5ee184c4d9077fa363deab1ad8ce3b46ce585bd8b->leave($__internal_1375a9e8db4e283873bd65e5ee184c4d9077fa363deab1ad8ce3b46ce585bd8b_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesBundle:Author:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 15,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Crear un nuevo autor{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {{ form_start(form, {'attr' : {'id' : 'author-create'}}) }}*/
/* */
/* {{ form_errors(form) }}*/
/* {{ form_row(form.name) }}*/
/* {{ form_row(form.surname) }}*/
/* {{ form_row(form.save) }}*/
/* */
/* */
/* {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
