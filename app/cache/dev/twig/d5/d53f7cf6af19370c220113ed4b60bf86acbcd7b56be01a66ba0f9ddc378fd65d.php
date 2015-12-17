<?php

/* MyRecipesBundle:Recipe:list.html.twig */
class __TwigTemplate_0a70ea14ffe6ce4b23008bed8525dccd1d8ae159b05a467d4e3a49ff9ae19e18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MyRecipesBundle:Recipe:list.html.twig", 1);
        $this->blocks = array(
            'sub_sidebar' => array($this, 'block_sub_sidebar'),
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
        $__internal_59c78a80fa3c462d7d757633b8cb58230746071d2cd051ee14ef09182dc2d8db = $this->env->getExtension("native_profiler");
        $__internal_59c78a80fa3c462d7d757633b8cb58230746071d2cd051ee14ef09182dc2d8db->enter($__internal_59c78a80fa3c462d7d757633b8cb58230746071d2cd051ee14ef09182dc2d8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Recipe:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59c78a80fa3c462d7d757633b8cb58230746071d2cd051ee14ef09182dc2d8db->leave($__internal_59c78a80fa3c462d7d757633b8cb58230746071d2cd051ee14ef09182dc2d8db_prof);

    }

    // line 3
    public function block_sub_sidebar($context, array $blocks = array())
    {
        $__internal_12be6803ad2e0c7e7b23e3dca5b53efd658d197c5bd3f0267e60d77ce6c70212 = $this->env->getExtension("native_profiler");
        $__internal_12be6803ad2e0c7e7b23e3dca5b53efd658d197c5bd3f0267e60d77ce6c70212->enter($__internal_12be6803ad2e0c7e7b23e3dca5b53efd658d197c5bd3f0267e60d77ce6c70212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_sidebar"));

        // line 4
        echo "<div id=\"submenu\">

\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("recipe_create");
        echo "\">Crear Nueva</a>

</div>
";
        
        $__internal_12be6803ad2e0c7e7b23e3dca5b53efd658d197c5bd3f0267e60d77ce6c70212->leave($__internal_12be6803ad2e0c7e7b23e3dca5b53efd658d197c5bd3f0267e60d77ce6c70212_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_f16ad042b4f2d01636ee3353895e19b708aa8e384378b3c27cd7537036984452 = $this->env->getExtension("native_profiler");
        $__internal_f16ad042b4f2d01636ee3353895e19b708aa8e384378b3c27cd7537036984452->enter($__internal_f16ad042b4f2d01636ee3353895e19b708aa8e384378b3c27cd7537036984452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de recetas";
        
        $__internal_f16ad042b4f2d01636ee3353895e19b708aa8e384378b3c27cd7537036984452->leave($__internal_f16ad042b4f2d01636ee3353895e19b708aa8e384378b3c27cd7537036984452_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1698c5e8ef716214fddfbc6f4750597c65c2ccb1f8f2ef49851a57b0aabb136 = $this->env->getExtension("native_profiler");
        $__internal_a1698c5e8ef716214fddfbc6f4750597c65c2ccb1f8f2ef49851a57b0aabb136->enter($__internal_a1698c5e8ef716214fddfbc6f4750597c65c2ccb1f8f2ef49851a57b0aabb136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<ul>
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) ? $context["recipes"] : $this->getContext($context, "recipes")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 16
            echo "
<li>
";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "name", array()), "html", null, true);
            echo " [<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("recipe_show", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">Show</a>] [<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("recipe_modify", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">Modify</a>] 
</li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</ul>
";
        
        $__internal_a1698c5e8ef716214fddfbc6f4750597c65c2ccb1f8f2ef49851a57b0aabb136->leave($__internal_a1698c5e8ef716214fddfbc6f4750597c65c2ccb1f8f2ef49851a57b0aabb136_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesBundle:Recipe:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  86 => 18,  82 => 16,  78 => 15,  75 => 14,  69 => 13,  57 => 11,  46 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block sub_sidebar %}*/
/* <div id="submenu">*/
/* */
/* 	<a href="{{ url('recipe_create') }}">Crear Nueva</a>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block title %}Listado de recetas{% endblock %}*/
/* */
/* {% block body %}*/
/* <ul>*/
/* {% for recipe in recipes %}*/
/* */
/* <li>*/
/* {{ recipe.name }} [<a href="{{ url('recipe_show', { 'id': recipe.id }) }}">Show</a>] [<a href="{{ url('recipe_modify', { 'id': recipe.id }) }}">Modify</a>] */
/* </li>*/
/* */
/* {% endfor %}*/
/* </ul>*/
/* {% endblock %}*/
