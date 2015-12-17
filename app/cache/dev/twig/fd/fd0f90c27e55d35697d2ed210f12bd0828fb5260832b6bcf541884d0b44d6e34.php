<?php

/* MyRecipesBundle:Ingredient:form.html.twig */
class __TwigTemplate_e4932a2c819a7c413c8d73b7fd9694d03fb4e37c7ecb0c409d071225fcb951a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MyRecipesBundle:Ingredient:form.html.twig", 1);
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
        $__internal_49bbeace17baf2ad849a91f3f5b528db17e6a3cb56e8b4e2e336b5455314437c = $this->env->getExtension("native_profiler");
        $__internal_49bbeace17baf2ad849a91f3f5b528db17e6a3cb56e8b4e2e336b5455314437c->enter($__internal_49bbeace17baf2ad849a91f3f5b528db17e6a3cb56e8b4e2e336b5455314437c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Ingredient:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49bbeace17baf2ad849a91f3f5b528db17e6a3cb56e8b4e2e336b5455314437c->leave($__internal_49bbeace17baf2ad849a91f3f5b528db17e6a3cb56e8b4e2e336b5455314437c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2cc39de3f407569dda9b4336eca31f18aba209baa4d42c55ed410cb2b252371 = $this->env->getExtension("native_profiler");
        $__internal_e2cc39de3f407569dda9b4336eca31f18aba209baa4d42c55ed410cb2b252371->enter($__internal_e2cc39de3f407569dda9b4336eca31f18aba209baa4d42c55ed410cb2b252371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Crear un nuevo ingrediente";
        
        $__internal_e2cc39de3f407569dda9b4336eca31f18aba209baa4d42c55ed410cb2b252371->leave($__internal_e2cc39de3f407569dda9b4336eca31f18aba209baa4d42c55ed410cb2b252371_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_735f2f733c77673b25eeb6d2ac318c27446772edbb63208d5374efed288e0c58 = $this->env->getExtension("native_profiler");
        $__internal_735f2f733c77673b25eeb6d2ac318c27446772edbb63208d5374efed288e0c58->enter($__internal_735f2f733c77673b25eeb6d2ac318c27446772edbb63208d5374efed288e0c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "ingredient-create")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row');
        echo "

";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_735f2f733c77673b25eeb6d2ac318c27446772edbb63208d5374efed288e0c58->leave($__internal_735f2f733c77673b25eeb6d2ac318c27446772edbb63208d5374efed288e0c58_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesBundle:Ingredient:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 13,  69 => 11,  65 => 10,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Crear un nuevo ingrediente{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {{ form_start(form, {'attr' : {'id' : 'ingredient-create'}}) }}*/
/* */
/* {{ form_errors(form) }}*/
/* {{ form_row(form.name) }}*/
/* {{ form_row(form.save) }}*/
/* */
/* {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
