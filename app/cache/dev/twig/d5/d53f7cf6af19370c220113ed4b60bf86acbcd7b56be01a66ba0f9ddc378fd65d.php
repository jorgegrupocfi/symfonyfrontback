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
        $__internal_755d8a451dd0c71fbe1de8f139f9e25870707e013ea7de748263bea7dcae263e = $this->env->getExtension("native_profiler");
        $__internal_755d8a451dd0c71fbe1de8f139f9e25870707e013ea7de748263bea7dcae263e->enter($__internal_755d8a451dd0c71fbe1de8f139f9e25870707e013ea7de748263bea7dcae263e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Recipe:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_755d8a451dd0c71fbe1de8f139f9e25870707e013ea7de748263bea7dcae263e->leave($__internal_755d8a451dd0c71fbe1de8f139f9e25870707e013ea7de748263bea7dcae263e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_100b5d87341ca5ed7a925aff8617bfd76678dd9552801aac9484fc85cd384108 = $this->env->getExtension("native_profiler");
        $__internal_100b5d87341ca5ed7a925aff8617bfd76678dd9552801aac9484fc85cd384108->enter($__internal_100b5d87341ca5ed7a925aff8617bfd76678dd9552801aac9484fc85cd384108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de recetas";
        
        $__internal_100b5d87341ca5ed7a925aff8617bfd76678dd9552801aac9484fc85cd384108->leave($__internal_100b5d87341ca5ed7a925aff8617bfd76678dd9552801aac9484fc85cd384108_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_41f2f2f3faeb6544656cd825f75454d4fb15fc5804af08c6cd144f0a6c7072b2 = $this->env->getExtension("native_profiler");
        $__internal_41f2f2f3faeb6544656cd825f75454d4fb15fc5804af08c6cd144f0a6c7072b2->enter($__internal_41f2f2f3faeb6544656cd825f75454d4fb15fc5804af08c6cd144f0a6c7072b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<ul>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) ? $context["recipes"] : $this->getContext($context, "recipes")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 8
            echo "
<li><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("recipe_show", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "name", array()), "html", null, true);
            echo "</a></li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
";
        
        $__internal_41f2f2f3faeb6544656cd825f75454d4fb15fc5804af08c6cd144f0a6c7072b2->leave($__internal_41f2f2f3faeb6544656cd825f75454d4fb15fc5804af08c6cd144f0a6c7072b2_prof);

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
        return array (  74 => 12,  63 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Listado de recetas{% endblock %}*/
/* */
/* {% block body %}*/
/* <ul>*/
/* {% for recipe in recipes %}*/
/* */
/* <li><a href="{{ url('recipe_show', { 'id': recipe.id }) }}">{{ recipe.name }}</a></li>*/
/* */
/* {% endfor %}*/
/* </ul>*/
/* {% endblock %}*/
