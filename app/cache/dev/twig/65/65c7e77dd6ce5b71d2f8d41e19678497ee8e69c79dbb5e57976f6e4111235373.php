<?php

/* default/index.html.twig */
class __TwigTemplate_db76de9866a942a19c526d8e8d36ae2dc34bc164f71920d7d3df14ebf13bcd46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edb159b81015f07c262881e2a17c0b2c31520759fa0727ab1b6e350aa04176af = $this->env->getExtension("native_profiler");
        $__internal_edb159b81015f07c262881e2a17c0b2c31520759fa0727ab1b6e350aa04176af->enter($__internal_edb159b81015f07c262881e2a17c0b2c31520759fa0727ab1b6e350aa04176af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edb159b81015f07c262881e2a17c0b2c31520759fa0727ab1b6e350aa04176af->leave($__internal_edb159b81015f07c262881e2a17c0b2c31520759fa0727ab1b6e350aa04176af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11b6fa0b91e51b1fa6135743dbc5a0d18239da594c00216261e964a5026a4cb6 = $this->env->getExtension("native_profiler");
        $__internal_11b6fa0b91e51b1fa6135743dbc5a0d18239da594c00216261e964a5026a4cb6->enter($__internal_11b6fa0b91e51b1fa6135743dbc5a0d18239da594c00216261e964a5026a4cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
        
            <div>
            \teste es el index de mi site
            </div>
            
        </div>
    </div>
";
        
        $__internal_11b6fa0b91e51b1fa6135743dbc5a0d18239da594c00216261e964a5026a4cb6->leave($__internal_11b6fa0b91e51b1fa6135743dbc5a0d18239da594c00216261e964a5026a4cb6_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*         */
/*             <div>*/
/*             	este es el index de mi site*/
/*             </div>*/
/*             */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
