<?php

/* MyRecipesBundle:Default:show.html.twig */
class __TwigTemplate_f9915cbf2a1b9f6dbd4ef54931ac30c886cf67a79c07c3a1c8e28505fa4672d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyRecipesBundle:Default:show.html.twig", 1);
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
        $__internal_781614db54eaf095239e0bea235ba08282be2715f281a1bda1059cda50cffa38 = $this->env->getExtension("native_profiler");
        $__internal_781614db54eaf095239e0bea235ba08282be2715f281a1bda1059cda50cffa38->enter($__internal_781614db54eaf095239e0bea235ba08282be2715f281a1bda1059cda50cffa38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_781614db54eaf095239e0bea235ba08282be2715f281a1bda1059cda50cffa38->leave($__internal_781614db54eaf095239e0bea235ba08282be2715f281a1bda1059cda50cffa38_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc136bfa24e8fb89191630f3b58525c52333557dd5eaa98f709f1f592c7c9c6c = $this->env->getExtension("native_profiler");
        $__internal_bc136bfa24e8fb89191630f3b58525c52333557dd5eaa98f709f1f592c7c9c6c->enter($__internal_bc136bfa24e8fb89191630f3b58525c52333557dd5eaa98f709f1f592c7c9c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "name", array()), "html", null, true);
        
        $__internal_bc136bfa24e8fb89191630f3b58525c52333557dd5eaa98f709f1f592c7c9c6c->leave($__internal_bc136bfa24e8fb89191630f3b58525c52333557dd5eaa98f709f1f592c7c9c6c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f70ce982de0bfba74eb376a1ec07719f6d9b3ab1567df68dde5392a7173b97be = $this->env->getExtension("native_profiler");
        $__internal_f70ce982de0bfba74eb376a1ec07719f6d9b3ab1567df68dde5392a7173b97be->enter($__internal_f70ce982de0bfba74eb376a1ec07719f6d9b3ab1567df68dde5392a7173b97be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "name", array()), "html", null, true);
        echo "</h1>
\t<h2>Por ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "author", array()), "html", null, true);
        echo "</h2>

\t<p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "description", array()), "html", null, true);
        echo "</p>

\t<h3>Ingredients</h3>

\t<ul>
\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "ingredients", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 16
            echo "\t\t<li>
\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $context["ingredient"], "html", null, true);
            echo "
\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t</ul>

";
        
        $__internal_f70ce982de0bfba74eb376a1ec07719f6d9b3ab1567df68dde5392a7173b97be->leave($__internal_f70ce982de0bfba74eb376a1ec07719f6d9b3ab1567df68dde5392a7173b97be_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  80 => 17,  77 => 16,  73 => 15,  65 => 10,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}{{ recipe.name }}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* 	<h1>{{recipe.name}}</h1>*/
/* 	<h2>Por {{recipe.author}}</h2>*/
/* */
/* 	<p>{{ recipe.description }}</p>*/
/* */
/* 	<h3>Ingredients</h3>*/
/* */
/* 	<ul>*/
/* 		{% for ingredient in recipe.ingredients %}*/
/* 		<li>*/
/* 			{{ ingredient }}*/
/* 		</li>*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* */
/* {% endblock %}*/
