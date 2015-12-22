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
        $__internal_31afa1c09d4b450fa1ddcd133693a4daa19ba879284d47d6ecd91d9f495ca91f = $this->env->getExtension("native_profiler");
        $__internal_31afa1c09d4b450fa1ddcd133693a4daa19ba879284d47d6ecd91d9f495ca91f->enter($__internal_31afa1c09d4b450fa1ddcd133693a4daa19ba879284d47d6ecd91d9f495ca91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Recipe:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31afa1c09d4b450fa1ddcd133693a4daa19ba879284d47d6ecd91d9f495ca91f->leave($__internal_31afa1c09d4b450fa1ddcd133693a4daa19ba879284d47d6ecd91d9f495ca91f_prof);

    }

    // line 3
    public function block_sub_sidebar($context, array $blocks = array())
    {
        $__internal_4b797506db5cc60fc410a4c105bcbdeef48b177d1b807e8c54e706611220b0fa = $this->env->getExtension("native_profiler");
        $__internal_4b797506db5cc60fc410a4c105bcbdeef48b177d1b807e8c54e706611220b0fa->enter($__internal_4b797506db5cc60fc410a4c105bcbdeef48b177d1b807e8c54e706611220b0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_sidebar"));

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
        
        $__internal_4b797506db5cc60fc410a4c105bcbdeef48b177d1b807e8c54e706611220b0fa->leave($__internal_4b797506db5cc60fc410a4c105bcbdeef48b177d1b807e8c54e706611220b0fa_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_9467637f43a4211af035a36bd863260eb25b887033368c2b3f1026a746aab316 = $this->env->getExtension("native_profiler");
        $__internal_9467637f43a4211af035a36bd863260eb25b887033368c2b3f1026a746aab316->enter($__internal_9467637f43a4211af035a36bd863260eb25b887033368c2b3f1026a746aab316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de recetas";
        
        $__internal_9467637f43a4211af035a36bd863260eb25b887033368c2b3f1026a746aab316->leave($__internal_9467637f43a4211af035a36bd863260eb25b887033368c2b3f1026a746aab316_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_386f57e165db6aea83a2051949af5ab37c123ebbda2686be774a0ee0a989929c = $this->env->getExtension("native_profiler");
        $__internal_386f57e165db6aea83a2051949af5ab37c123ebbda2686be774a0ee0a989929c->enter($__internal_386f57e165db6aea83a2051949af5ab37c123ebbda2686be774a0ee0a989929c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_386f57e165db6aea83a2051949af5ab37c123ebbda2686be774a0ee0a989929c->leave($__internal_386f57e165db6aea83a2051949af5ab37c123ebbda2686be774a0ee0a989929c_prof);

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
