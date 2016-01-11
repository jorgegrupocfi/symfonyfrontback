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
        $__internal_232cd2df4d8e82b04e99f203c04f1d37594d80a712c6d404ac0a00e9e255e114 = $this->env->getExtension("native_profiler");
        $__internal_232cd2df4d8e82b04e99f203c04f1d37594d80a712c6d404ac0a00e9e255e114->enter($__internal_232cd2df4d8e82b04e99f203c04f1d37594d80a712c6d404ac0a00e9e255e114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Ingredient:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_232cd2df4d8e82b04e99f203c04f1d37594d80a712c6d404ac0a00e9e255e114->leave($__internal_232cd2df4d8e82b04e99f203c04f1d37594d80a712c6d404ac0a00e9e255e114_prof);

    }

    // line 3
    public function block_sub_sidebar($context, array $blocks = array())
    {
        $__internal_76c9f5d15d1a0f0a722913317eec23d74b58ef988527c2e4bd04c1c6def34570 = $this->env->getExtension("native_profiler");
        $__internal_76c9f5d15d1a0f0a722913317eec23d74b58ef988527c2e4bd04c1c6def34570->enter($__internal_76c9f5d15d1a0f0a722913317eec23d74b58ef988527c2e4bd04c1c6def34570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_sidebar"));

        // line 4
        echo "<div id=\"submenu\">

\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("ingredient_create");
        echo "\">Crear Nuevo</a>

</div>
";
        
        $__internal_76c9f5d15d1a0f0a722913317eec23d74b58ef988527c2e4bd04c1c6def34570->leave($__internal_76c9f5d15d1a0f0a722913317eec23d74b58ef988527c2e4bd04c1c6def34570_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_01fbf618c4f5fd7ae23db8766c61e80222c75afc7bef9613af07987338807264 = $this->env->getExtension("native_profiler");
        $__internal_01fbf618c4f5fd7ae23db8766c61e80222c75afc7bef9613af07987338807264->enter($__internal_01fbf618c4f5fd7ae23db8766c61e80222c75afc7bef9613af07987338807264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de ingredientes";
        
        $__internal_01fbf618c4f5fd7ae23db8766c61e80222c75afc7bef9613af07987338807264->leave($__internal_01fbf618c4f5fd7ae23db8766c61e80222c75afc7bef9613af07987338807264_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5b20dad0a6f19faa8825d50834d75916529a14ca1b17536302dbbf3f388c3d3 = $this->env->getExtension("native_profiler");
        $__internal_d5b20dad0a6f19faa8825d50834d75916529a14ca1b17536302dbbf3f388c3d3->enter($__internal_d5b20dad0a6f19faa8825d50834d75916529a14ca1b17536302dbbf3f388c3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d5b20dad0a6f19faa8825d50834d75916529a14ca1b17536302dbbf3f388c3d3->leave($__internal_d5b20dad0a6f19faa8825d50834d75916529a14ca1b17536302dbbf3f388c3d3_prof);

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
