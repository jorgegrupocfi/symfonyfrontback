<?php

/* MyRecipesBundle:Recipe:show.html.twig */
class __TwigTemplate_5adbd57265fa7435c4b12948a0459f83c1ad95eb3ee345232545470d71ad77e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyRecipesBundle:Recipe:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cdb5e6803460a042b9d9f6e4ba34efe8b3c93641eb5b830676c5c225c420ff5 = $this->env->getExtension("native_profiler");
        $__internal_6cdb5e6803460a042b9d9f6e4ba34efe8b3c93641eb5b830676c5c225c420ff5->enter($__internal_6cdb5e6803460a042b9d9f6e4ba34efe8b3c93641eb5b830676c5c225c420ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Recipe:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cdb5e6803460a042b9d9f6e4ba34efe8b3c93641eb5b830676c5c225c420ff5->leave($__internal_6cdb5e6803460a042b9d9f6e4ba34efe8b3c93641eb5b830676c5c225c420ff5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ab75c7f7ca5acda9a693316511d8e95ee4450a5577db4fe26480735cf5b0889 = $this->env->getExtension("native_profiler");
        $__internal_7ab75c7f7ca5acda9a693316511d8e95ee4450a5577db4fe26480735cf5b0889->enter($__internal_7ab75c7f7ca5acda9a693316511d8e95ee4450a5577db4fe26480735cf5b0889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "name", array()), "html", null, true);
        
        $__internal_7ab75c7f7ca5acda9a693316511d8e95ee4450a5577db4fe26480735cf5b0889->leave($__internal_7ab75c7f7ca5acda9a693316511d8e95ee4450a5577db4fe26480735cf5b0889_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_78a926c0adcb8373429f318504508f4cd3d7f547b56fe448dbe453244b839236 = $this->env->getExtension("native_profiler");
        $__internal_78a926c0adcb8373429f318504508f4cd3d7f547b56fe448dbe453244b839236->enter($__internal_78a926c0adcb8373429f318504508f4cd3d7f547b56fe448dbe453244b839236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "name", array()), "html", null, true);
        echo "</h1>
\t<p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "description", array()), "html", null, true);
        echo "</p>
\t<h2>Por ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "surname", array()), "html", null, true);
        echo " </h2>
\t<h3>Ingredientes</h3>
\t<ul>
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "ingredients", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 13
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "name", array()), "html", null, true);
            echo "</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t</ul>
\t
\t
";
        
        $__internal_78a926c0adcb8373429f318504508f4cd3d7f547b56fe448dbe453244b839236->leave($__internal_78a926c0adcb8373429f318504508f4cd3d7f547b56fe448dbe453244b839236_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesBundle:Recipe:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  76 => 13,  72 => 12,  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}{{ recipe.name }}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* 	<h1>{{recipe.name}}</h1>*/
/* 	<p>{{ recipe.description }}</p>*/
/* 	<h2>Por {{author.name}} {{author.surname}} </h2>*/
/* 	<h3>Ingredientes</h3>*/
/* 	<ul>*/
/* 		{% for ingredient in recipe.ingredients %}*/
/* 			<li>{{ ingredient.name }}</li>*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* 	*/
/* 	*/
/* {% endblock %}*/
