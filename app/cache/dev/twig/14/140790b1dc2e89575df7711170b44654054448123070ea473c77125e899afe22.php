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
        $__internal_622777d9a058090746f1d92e89bd257f3589e0a0864c55316d673fef52c4b7bf = $this->env->getExtension("native_profiler");
        $__internal_622777d9a058090746f1d92e89bd257f3589e0a0864c55316d673fef52c4b7bf->enter($__internal_622777d9a058090746f1d92e89bd257f3589e0a0864c55316d673fef52c4b7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sidebar.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('sidebar', $context, $blocks);
        
        $__internal_622777d9a058090746f1d92e89bd257f3589e0a0864c55316d673fef52c4b7bf->leave($__internal_622777d9a058090746f1d92e89bd257f3589e0a0864c55316d673fef52c4b7bf_prof);

    }

    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_101ec41b3a3b0f32370561f6e4eeb65fe3922f2a154579c98a5f213c57eb5d9d = $this->env->getExtension("native_profiler");
        $__internal_101ec41b3a3b0f32370561f6e4eeb65fe3922f2a154579c98a5f213c57eb5d9d->enter($__internal_101ec41b3a3b0f32370561f6e4eeb65fe3922f2a154579c98a5f213c57eb5d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
</ul>
";
        
        $__internal_101ec41b3a3b0f32370561f6e4eeb65fe3922f2a154579c98a5f213c57eb5d9d->leave($__internal_101ec41b3a3b0f32370561f6e4eeb65fe3922f2a154579c98a5f213c57eb5d9d_prof);

    }

    public function getTemplateName()
    {
        return "::sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  46 => 6,  42 => 5,  38 => 3,  26 => 2,  23 => 1,);
    }
}
/* */
/* {% block sidebar %}*/
/* <h2>Sidebar</h2>*/
/* <ul class="list-inline">*/
/* <li><a href="{{ url('homepage')}}">Home</a></li>*/
/* <li><a href="{{ url('recipes_list') }}">Recetas</a></li>*/
/* <li><a href="{{ url('authors_list') }}">Autores</a></li>*/
/* </ul>*/
/* {% endblock %}*/
