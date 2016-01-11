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
        $__internal_96503b08cb11b8a50a7262b37f3cad1504a4aceffd122b6f33a8ea454705ca4d = $this->env->getExtension("native_profiler");
        $__internal_96503b08cb11b8a50a7262b37f3cad1504a4aceffd122b6f33a8ea454705ca4d->enter($__internal_96503b08cb11b8a50a7262b37f3cad1504a4aceffd122b6f33a8ea454705ca4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sidebar.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('sidebar', $context, $blocks);
        
        $__internal_96503b08cb11b8a50a7262b37f3cad1504a4aceffd122b6f33a8ea454705ca4d->leave($__internal_96503b08cb11b8a50a7262b37f3cad1504a4aceffd122b6f33a8ea454705ca4d_prof);

    }

    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7f72a8dd1cf55d409946e86ee2ac39d6fa10c5d2454ce841cefc08ff6bc930ee = $this->env->getExtension("native_profiler");
        $__internal_7f72a8dd1cf55d409946e86ee2ac39d6fa10c5d2454ce841cefc08ff6bc930ee->enter($__internal_7f72a8dd1cf55d409946e86ee2ac39d6fa10c5d2454ce841cefc08ff6bc930ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_7f72a8dd1cf55d409946e86ee2ac39d6fa10c5d2454ce841cefc08ff6bc930ee->leave($__internal_7f72a8dd1cf55d409946e86ee2ac39d6fa10c5d2454ce841cefc08ff6bc930ee_prof);

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
