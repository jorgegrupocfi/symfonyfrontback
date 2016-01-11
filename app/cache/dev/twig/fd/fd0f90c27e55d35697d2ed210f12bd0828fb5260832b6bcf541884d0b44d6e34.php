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
        $__internal_824583f85d9bc63ac4059e017a4bef33a9877676f5c04c8f8ac279e10c91acd5 = $this->env->getExtension("native_profiler");
        $__internal_824583f85d9bc63ac4059e017a4bef33a9877676f5c04c8f8ac279e10c91acd5->enter($__internal_824583f85d9bc63ac4059e017a4bef33a9877676f5c04c8f8ac279e10c91acd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Ingredient:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_824583f85d9bc63ac4059e017a4bef33a9877676f5c04c8f8ac279e10c91acd5->leave($__internal_824583f85d9bc63ac4059e017a4bef33a9877676f5c04c8f8ac279e10c91acd5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5bce22016d99181014ac7e7f0dcb0692f7d03e4737112a1caf4eeb5b032c281 = $this->env->getExtension("native_profiler");
        $__internal_f5bce22016d99181014ac7e7f0dcb0692f7d03e4737112a1caf4eeb5b032c281->enter($__internal_f5bce22016d99181014ac7e7f0dcb0692f7d03e4737112a1caf4eeb5b032c281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Crear un nuevo ingrediente";
        
        $__internal_f5bce22016d99181014ac7e7f0dcb0692f7d03e4737112a1caf4eeb5b032c281->leave($__internal_f5bce22016d99181014ac7e7f0dcb0692f7d03e4737112a1caf4eeb5b032c281_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e40f94e77c35039486daa55e3cebe26eced9703a087b3d2638fbcfc2d43e2869 = $this->env->getExtension("native_profiler");
        $__internal_e40f94e77c35039486daa55e3cebe26eced9703a087b3d2638fbcfc2d43e2869->enter($__internal_e40f94e77c35039486daa55e3cebe26eced9703a087b3d2638fbcfc2d43e2869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e40f94e77c35039486daa55e3cebe26eced9703a087b3d2638fbcfc2d43e2869->leave($__internal_e40f94e77c35039486daa55e3cebe26eced9703a087b3d2638fbcfc2d43e2869_prof);

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
