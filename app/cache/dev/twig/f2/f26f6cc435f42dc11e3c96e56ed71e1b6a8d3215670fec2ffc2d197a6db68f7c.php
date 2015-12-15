<?php

/* MyRecipesBundle:Author:list.html.twig */
class __TwigTemplate_67cdae7608e36dbf7a17c7411709ed41764719861e8453721f9950d7e885dd1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MyRecipesBundle:Author:list.html.twig", 1);
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
        $__internal_917d721b81c702210584b1e42d9ba973f76db6103627420fa187112abcdd6cd5 = $this->env->getExtension("native_profiler");
        $__internal_917d721b81c702210584b1e42d9ba973f76db6103627420fa187112abcdd6cd5->enter($__internal_917d721b81c702210584b1e42d9ba973f76db6103627420fa187112abcdd6cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Author:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_917d721b81c702210584b1e42d9ba973f76db6103627420fa187112abcdd6cd5->leave($__internal_917d721b81c702210584b1e42d9ba973f76db6103627420fa187112abcdd6cd5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7821d53bcd923afeb8df45a44afcee19f145ec9b4c11ff7140713bc4f279ab2c = $this->env->getExtension("native_profiler");
        $__internal_7821d53bcd923afeb8df45a44afcee19f145ec9b4c11ff7140713bc4f279ab2c->enter($__internal_7821d53bcd923afeb8df45a44afcee19f145ec9b4c11ff7140713bc4f279ab2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de autores";
        
        $__internal_7821d53bcd923afeb8df45a44afcee19f145ec9b4c11ff7140713bc4f279ab2c->leave($__internal_7821d53bcd923afeb8df45a44afcee19f145ec9b4c11ff7140713bc4f279ab2c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e07a4c212a4d1fcd643d4f73cc07143d38fe397b952382a30bf0491fe262220 = $this->env->getExtension("native_profiler");
        $__internal_9e07a4c212a4d1fcd643d4f73cc07143d38fe397b952382a30bf0491fe262220->enter($__internal_9e07a4c212a4d1fcd643d4f73cc07143d38fe397b952382a30bf0491fe262220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<ul>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors")));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 8
            echo "
<li>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "surname", array()), "html", null, true);
            echo "</li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
";
        
        $__internal_9e07a4c212a4d1fcd643d4f73cc07143d38fe397b952382a30bf0491fe262220->leave($__internal_9e07a4c212a4d1fcd643d4f73cc07143d38fe397b952382a30bf0491fe262220_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesBundle:Author:list.html.twig";
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
/* {% block title %}Listado de autores{% endblock %}*/
/* */
/* {% block body %}*/
/* <ul>*/
/* {% for author in authors %}*/
/* */
/* <li>{{ author.name }} {{ author.surname }}</li>*/
/* */
/* {% endfor %}*/
/* </ul>*/
/* {% endblock %}*/
