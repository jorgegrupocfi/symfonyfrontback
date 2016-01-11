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
        $__internal_4e046016c17f4862f9ec2c1affc6daf832ae56d6dc5a7de7af5902224045687e = $this->env->getExtension("native_profiler");
        $__internal_4e046016c17f4862f9ec2c1affc6daf832ae56d6dc5a7de7af5902224045687e->enter($__internal_4e046016c17f4862f9ec2c1affc6daf832ae56d6dc5a7de7af5902224045687e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Author:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e046016c17f4862f9ec2c1affc6daf832ae56d6dc5a7de7af5902224045687e->leave($__internal_4e046016c17f4862f9ec2c1affc6daf832ae56d6dc5a7de7af5902224045687e_prof);

    }

    // line 3
    public function block_sub_sidebar($context, array $blocks = array())
    {
        $__internal_d9a8d88a7357c2a76a7a132ac849163e1d7c2bb23d1d7b6bd3ee2a963b10466a = $this->env->getExtension("native_profiler");
        $__internal_d9a8d88a7357c2a76a7a132ac849163e1d7c2bb23d1d7b6bd3ee2a963b10466a->enter($__internal_d9a8d88a7357c2a76a7a132ac849163e1d7c2bb23d1d7b6bd3ee2a963b10466a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_sidebar"));

        // line 4
        echo "<div id=\"submenu\">

\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("author_create");
        echo "\">Crear Nuevo</a>

</div>
";
        
        $__internal_d9a8d88a7357c2a76a7a132ac849163e1d7c2bb23d1d7b6bd3ee2a963b10466a->leave($__internal_d9a8d88a7357c2a76a7a132ac849163e1d7c2bb23d1d7b6bd3ee2a963b10466a_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_527a71a59fa899650c2cefab93931d931da80dd839c83243eb0381856572040d = $this->env->getExtension("native_profiler");
        $__internal_527a71a59fa899650c2cefab93931d931da80dd839c83243eb0381856572040d->enter($__internal_527a71a59fa899650c2cefab93931d931da80dd839c83243eb0381856572040d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de autores";
        
        $__internal_527a71a59fa899650c2cefab93931d931da80dd839c83243eb0381856572040d->leave($__internal_527a71a59fa899650c2cefab93931d931da80dd839c83243eb0381856572040d_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_60ad63274eca6388f1b6210e2b936cb6f26447294e484a4013c4a680583d3185 = $this->env->getExtension("native_profiler");
        $__internal_60ad63274eca6388f1b6210e2b936cb6f26447294e484a4013c4a680583d3185->enter($__internal_60ad63274eca6388f1b6210e2b936cb6f26447294e484a4013c4a680583d3185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<ul>
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors")));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 16
            echo "
<li>
";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "NombreApellidos", array()), "html", null, true);
            echo " [<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("author_modify", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\">Modify</a>]
</li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</ul>
";
        
        $__internal_60ad63274eca6388f1b6210e2b936cb6f26447294e484a4013c4a680583d3185->leave($__internal_60ad63274eca6388f1b6210e2b936cb6f26447294e484a4013c4a680583d3185_prof);

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
        return array (  98 => 22,  86 => 18,  82 => 16,  78 => 15,  75 => 14,  69 => 13,  57 => 11,  46 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block sub_sidebar %}*/
/* <div id="submenu">*/
/* */
/* 	<a href="{{ url('author_create') }}">Crear Nuevo</a>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block title %}Listado de autores{% endblock %}*/
/* */
/* {% block body %}*/
/* <ul>*/
/* {% for author in authors %}*/
/* */
/* <li>*/
/* {{ author.NombreApellidos }} [<a href="{{ url('author_modify', { 'id': author.id }) }}">Modify</a>]*/
/* </li>*/
/* */
/* {% endfor %}*/
/* </ul>*/
/* {% endblock %}*/
