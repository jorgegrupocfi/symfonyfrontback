<?php

/* MyRecipesBundle:Ingredient:list.html.twig */
class __TwigTemplate_22a3216ce061fcab0ca25a7cc52e36a519a6a2a62eab037173b8b25acd69602b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MyRecipesBundle:Ingredient:list.html.twig", 1);
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
        $__internal_333d91b03c59bb51838d8fea7005c98465fc1e5d20c67fd79f1e53f1dec6ec22 = $this->env->getExtension("native_profiler");
        $__internal_333d91b03c59bb51838d8fea7005c98465fc1e5d20c67fd79f1e53f1dec6ec22->enter($__internal_333d91b03c59bb51838d8fea7005c98465fc1e5d20c67fd79f1e53f1dec6ec22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Ingredient:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_333d91b03c59bb51838d8fea7005c98465fc1e5d20c67fd79f1e53f1dec6ec22->leave($__internal_333d91b03c59bb51838d8fea7005c98465fc1e5d20c67fd79f1e53f1dec6ec22_prof);

    }

    // line 3
    public function block_sub_sidebar($context, array $blocks = array())
    {
        $__internal_1b9c0c47bc7496eb8d16adabb16f419e1375c8afb6a54a88e4088a3625120855 = $this->env->getExtension("native_profiler");
        $__internal_1b9c0c47bc7496eb8d16adabb16f419e1375c8afb6a54a88e4088a3625120855->enter($__internal_1b9c0c47bc7496eb8d16adabb16f419e1375c8afb6a54a88e4088a3625120855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_sidebar"));

        // line 4
        echo "<div id=\"submenu\">

\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("ingredient_create");
        echo "\">Crear Nuevo</a>

</div>
";
        
        $__internal_1b9c0c47bc7496eb8d16adabb16f419e1375c8afb6a54a88e4088a3625120855->leave($__internal_1b9c0c47bc7496eb8d16adabb16f419e1375c8afb6a54a88e4088a3625120855_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a469a90a78a7164b87483d574245b39b8293078432fedf4e0a530a54f93aaa4 = $this->env->getExtension("native_profiler");
        $__internal_8a469a90a78a7164b87483d574245b39b8293078432fedf4e0a530a54f93aaa4->enter($__internal_8a469a90a78a7164b87483d574245b39b8293078432fedf4e0a530a54f93aaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de ingredientes";
        
        $__internal_8a469a90a78a7164b87483d574245b39b8293078432fedf4e0a530a54f93aaa4->leave($__internal_8a469a90a78a7164b87483d574245b39b8293078432fedf4e0a530a54f93aaa4_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_496ee51b65d418fc2b0dee497449f5303c0d48d973fce831283d29efde35212e = $this->env->getExtension("native_profiler");
        $__internal_496ee51b65d418fc2b0dee497449f5303c0d48d973fce831283d29efde35212e->enter($__internal_496ee51b65d418fc2b0dee497449f5303c0d48d973fce831283d29efde35212e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<ul>
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ingredients"]) ? $context["ingredients"] : $this->getContext($context, "ingredients")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 16
            echo "
<li>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "name", array()), "html", null, true);
            echo " [<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ingredient_modify", array("id" => $this->getAttribute($context["ingredient"], "id", array()))), "html", null, true);
            echo "\">Modify</a>]</li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>
";
        
        $__internal_496ee51b65d418fc2b0dee497449f5303c0d48d973fce831283d29efde35212e->leave($__internal_496ee51b65d418fc2b0dee497449f5303c0d48d973fce831283d29efde35212e_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesBundle:Ingredient:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 20,  85 => 17,  82 => 16,  78 => 15,  75 => 14,  69 => 13,  57 => 11,  46 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block sub_sidebar %}*/
/* <div id="submenu">*/
/* */
/* 	<a href="{{ url('ingredient_create') }}">Crear Nuevo</a>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block title %}Listado de ingredientes{% endblock %}*/
/* */
/* {% block body %}*/
/* <ul>*/
/* {% for ingredient in ingredients %}*/
/* */
/* <li>{{ ingredient.name }} [<a href="{{ url('ingredient_modify', { 'id': ingredient.id }) }}">Modify</a>]</li>*/
/* */
/* {% endfor %}*/
/* </ul>*/
/* {% endblock %}*/
