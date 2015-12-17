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
        $__internal_3127b0a584b5f670a84593a4bb35164ba8bee7af5cf00aa756d9a6413fa755ac = $this->env->getExtension("native_profiler");
        $__internal_3127b0a584b5f670a84593a4bb35164ba8bee7af5cf00aa756d9a6413fa755ac->enter($__internal_3127b0a584b5f670a84593a4bb35164ba8bee7af5cf00aa756d9a6413fa755ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Author:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3127b0a584b5f670a84593a4bb35164ba8bee7af5cf00aa756d9a6413fa755ac->leave($__internal_3127b0a584b5f670a84593a4bb35164ba8bee7af5cf00aa756d9a6413fa755ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_987bbe67f19165622488bf7677f161a6c8ba36e1fbe9bd08d5bf89c1f9055ae7 = $this->env->getExtension("native_profiler");
        $__internal_987bbe67f19165622488bf7677f161a6c8ba36e1fbe9bd08d5bf89c1f9055ae7->enter($__internal_987bbe67f19165622488bf7677f161a6c8ba36e1fbe9bd08d5bf89c1f9055ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Crear un nuevo autor";
        
        $__internal_987bbe67f19165622488bf7677f161a6c8ba36e1fbe9bd08d5bf89c1f9055ae7->leave($__internal_987bbe67f19165622488bf7677f161a6c8ba36e1fbe9bd08d5bf89c1f9055ae7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_677aa152b50237584ac1716c89675ea3b5d464a8dfdd2d30d9f29a31bb7348b9 = $this->env->getExtension("native_profiler");
        $__internal_677aa152b50237584ac1716c89675ea3b5d464a8dfdd2d30d9f29a31bb7348b9->enter($__internal_677aa152b50237584ac1716c89675ea3b5d464a8dfdd2d30d9f29a31bb7348b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_677aa152b50237584ac1716c89675ea3b5d464a8dfdd2d30d9f29a31bb7348b9->leave($__internal_677aa152b50237584ac1716c89675ea3b5d464a8dfdd2d30d9f29a31bb7348b9_prof);

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
