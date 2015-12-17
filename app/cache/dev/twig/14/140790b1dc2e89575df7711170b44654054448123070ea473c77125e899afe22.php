<?php

/* ::sidebar.html.twig */
class __TwigTemplate_b365aeb7a751d15d0d3d02e247d1410fa45fa596571c489e0b2cbabd988a1dea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f31e0c60a87b052c9dd34be0360eaf2edffebf500c959c0f3b57ae4763b8180 = $this->env->getExtension("native_profiler");
        $__internal_2f31e0c60a87b052c9dd34be0360eaf2edffebf500c959c0f3b57ae4763b8180->enter($__internal_2f31e0c60a87b052c9dd34be0360eaf2edffebf500c959c0f3b57ae4763b8180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sidebar.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('sidebar', $context, $blocks);
        
        $__internal_2f31e0c60a87b052c9dd34be0360eaf2edffebf500c959c0f3b57ae4763b8180->leave($__internal_2f31e0c60a87b052c9dd34be0360eaf2edffebf500c959c0f3b57ae4763b8180_prof);

    }

    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2a8deed8bcdd1c0aea8cd9f10adf789721fe990fa20dcf1ac70a3efd30cc5784 = $this->env->getExtension("native_profiler");
        $__internal_2a8deed8bcdd1c0aea8cd9f10adf789721fe990fa20dcf1ac70a3efd30cc5784->enter($__internal_2a8deed8bcdd1c0aea8cd9f10adf789721fe990fa20dcf1ac70a3efd30cc5784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 3
        echo "<h2>Sidebar</h2>
<ul class=\"list-inline\">
<li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\">Home</a></li>
<li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("recipes_list");
        echo "\">Recetas</a></li>
<li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("authors_list");
        echo "\">Autores</a></li>
<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("ingredients_list");
        echo "\">Ingredientes</a></li>
</ul>
";
        
        $__internal_2a8deed8bcdd1c0aea8cd9f10adf789721fe990fa20dcf1ac70a3efd30cc5784->leave($__internal_2a8deed8bcdd1c0aea8cd9f10adf789721fe990fa20dcf1ac70a3efd30cc5784_prof);

    }

    public function getTemplateName()
    {
        return "::sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  50 => 7,  46 => 6,  42 => 5,  38 => 3,  26 => 2,  23 => 1,);
    }
}
/* */
/* {% block sidebar %}*/
/* <h2>Sidebar</h2>*/
/* <ul class="list-inline">*/
/* <li><a href="{{ url('homepage')}}">Home</a></li>*/
/* <li><a href="{{ url('recipes_list') }}">Recetas</a></li>*/
/* <li><a href="{{ url('authors_list') }}">Autores</a></li>*/
/* <li><a href="{{ url('ingredients_list') }}">Ingredientes</a></li>*/
/* </ul>*/
/* {% endblock %}*/
