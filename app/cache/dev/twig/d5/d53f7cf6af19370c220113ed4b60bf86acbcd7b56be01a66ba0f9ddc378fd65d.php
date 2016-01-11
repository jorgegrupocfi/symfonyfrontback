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
        $__internal_607fe70b01c714ee8634c19f82c9b46c91e81632e73895855cd38e62bbe32a7d = $this->env->getExtension("native_profiler");
        $__internal_607fe70b01c714ee8634c19f82c9b46c91e81632e73895855cd38e62bbe32a7d->enter($__internal_607fe70b01c714ee8634c19f82c9b46c91e81632e73895855cd38e62bbe32a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Recipe:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_607fe70b01c714ee8634c19f82c9b46c91e81632e73895855cd38e62bbe32a7d->leave($__internal_607fe70b01c714ee8634c19f82c9b46c91e81632e73895855cd38e62bbe32a7d_prof);

    }

    // line 3
    public function block_sub_sidebar($context, array $blocks = array())
    {
        $__internal_8f62cfbf6fe1bb26539956140b8f64c8f79f6f6d362734794092e6d5369662fe = $this->env->getExtension("native_profiler");
        $__internal_8f62cfbf6fe1bb26539956140b8f64c8f79f6f6d362734794092e6d5369662fe->enter($__internal_8f62cfbf6fe1bb26539956140b8f64c8f79f6f6d362734794092e6d5369662fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_sidebar"));

        // line 4
        echo "<div id=\"submenu\">

\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("recipe_create");
        echo "\">Crear Nueva</a> | <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("karlos_recipes_list");
        echo "\">Recetas de Karlos</a>

</div>
";
        
        $__internal_8f62cfbf6fe1bb26539956140b8f64c8f79f6f6d362734794092e6d5369662fe->leave($__internal_8f62cfbf6fe1bb26539956140b8f64c8f79f6f6d362734794092e6d5369662fe_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad2e9da99bf70a8f068280a15ffd2ff22aeb1f15ec7b5afe57e3c17eb64c0e3e = $this->env->getExtension("native_profiler");
        $__internal_ad2e9da99bf70a8f068280a15ffd2ff22aeb1f15ec7b5afe57e3c17eb64c0e3e->enter($__internal_ad2e9da99bf70a8f068280a15ffd2ff22aeb1f15ec7b5afe57e3c17eb64c0e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de recetas";
        
        $__internal_ad2e9da99bf70a8f068280a15ffd2ff22aeb1f15ec7b5afe57e3c17eb64c0e3e->leave($__internal_ad2e9da99bf70a8f068280a15ffd2ff22aeb1f15ec7b5afe57e3c17eb64c0e3e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a5480fcde4fdcb961d1b8f81dd314508197f33da020f4589d62ab578bd970b9 = $this->env->getExtension("native_profiler");
        $__internal_2a5480fcde4fdcb961d1b8f81dd314508197f33da020f4589d62ab578bd970b9->enter($__internal_2a5480fcde4fdcb961d1b8f81dd314508197f33da020f4589d62ab578bd970b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2a5480fcde4fdcb961d1b8f81dd314508197f33da020f4589d62ab578bd970b9->leave($__internal_2a5480fcde4fdcb961d1b8f81dd314508197f33da020f4589d62ab578bd970b9_prof);

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
        return array (  102 => 22,  88 => 18,  84 => 16,  80 => 15,  77 => 14,  71 => 13,  59 => 11,  46 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block sub_sidebar %}*/
/* <div id="submenu">*/
/* */
/* 	<a href="{{ url('recipe_create') }}">Crear Nueva</a> | <a href="{{ url('karlos_recipes_list') }}">Recetas de Karlos</a>*/
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
