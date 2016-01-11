<?php

/* MyRecipesBundle:Recipe:form.html.twig */
class __TwigTemplate_e3cc2c46b87a98e7fbf68456f978c247477f6de82fda0cbec901e1c1c3eb8f09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MyRecipesBundle:Recipe:form.html.twig", 1);
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
        $__internal_ccdc1358d1e9ce2f05d4f491284ee698c9c4c6734aabc44939b8cbe3039e6446 = $this->env->getExtension("native_profiler");
        $__internal_ccdc1358d1e9ce2f05d4f491284ee698c9c4c6734aabc44939b8cbe3039e6446->enter($__internal_ccdc1358d1e9ce2f05d4f491284ee698c9c4c6734aabc44939b8cbe3039e6446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Recipe:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccdc1358d1e9ce2f05d4f491284ee698c9c4c6734aabc44939b8cbe3039e6446->leave($__internal_ccdc1358d1e9ce2f05d4f491284ee698c9c4c6734aabc44939b8cbe3039e6446_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_087a9abfa0ab8363768ac88b476c326d56ead10299e7cb11c0af3fc74f618d06 = $this->env->getExtension("native_profiler");
        $__internal_087a9abfa0ab8363768ac88b476c326d56ead10299e7cb11c0af3fc74f618d06->enter($__internal_087a9abfa0ab8363768ac88b476c326d56ead10299e7cb11c0af3fc74f618d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Crear una nueva receta";
        
        $__internal_087a9abfa0ab8363768ac88b476c326d56ead10299e7cb11c0af3fc74f618d06->leave($__internal_087a9abfa0ab8363768ac88b476c326d56ead10299e7cb11c0af3fc74f618d06_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_550b7b3b03ec34f3688437a2f1f18b92f75acfd95a960e87a13a60bd299e038d = $this->env->getExtension("native_profiler");
        $__internal_550b7b3b03ec34f3688437a2f1f18b92f75acfd95a960e87a13a60bd299e038d->enter($__internal_550b7b3b03ec34f3688437a2f1f18b92f75acfd95a960e87a13a60bd299e038d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "recipe-create")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "difficulty", array()), 'row');
        echo "
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "
";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingredients", array()), 'row');
        echo "
";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row');
        echo "

";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_550b7b3b03ec34f3688437a2f1f18b92f75acfd95a960e87a13a60bd299e038d->leave($__internal_550b7b3b03ec34f3688437a2f1f18b92f75acfd95a960e87a13a60bd299e038d_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesBundle:Recipe:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  85 => 15,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Crear una nueva receta{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {{ form_start(form, {'attr' : {'id' : 'recipe-create'}}) }}*/
/* */
/* {{ form_errors(form) }}*/
/* {{ form_row(form.name) }}*/
/* {{ form_row(form.difficulty) }}*/
/* {{ form_row(form.description) }}*/
/* {{ form_row(form.author) }}*/
/* {{ form_row(form.ingredients) }}*/
/* {{ form_row(form.save) }}*/
/* */
/* {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
