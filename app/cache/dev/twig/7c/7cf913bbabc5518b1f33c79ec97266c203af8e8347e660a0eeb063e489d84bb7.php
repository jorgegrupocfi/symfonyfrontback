<?php

/* base.html.twig */
class __TwigTemplate_9e058061a43957c9ca38af5e66e28eb2f3c7ce4c5d99fffce2cc255bcbd7f813 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sub_sidebar' => array($this, 'block_sub_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ad9cc61a7c957b997ebec450a6891d95a0d06a71ac6cb05ba2d97302150225e = $this->env->getExtension("native_profiler");
        $__internal_1ad9cc61a7c957b997ebec450a6891d95a0d06a71ac6cb05ba2d97302150225e->enter($__internal_1ad9cc61a7c957b997ebec450a6891d95a0d06a71ac6cb05ba2d97302150225e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->loadTemplate("::header.html.twig", "base.html.twig", 4)->display($context);
        // line 5
        echo "    </head>
    <body>
    
    <div id=\"content\">
    
\t    <div id=\"wrapper\">
\t    
\t\t    <div id=\"sidebar\">
\t\t    ";
        // line 13
        $this->loadTemplate("::sidebar.html.twig", "base.html.twig", 13)->display($context);
        echo "\t
\t\t    </div>
\t\t    
\t\t    <div id=\"sub_sidebar\">
\t\t    \t";
        // line 17
        $this->displayBlock('sub_sidebar', $context, $blocks);
        // line 18
        echo "\t\t    </div>
\t\t    
\t\t   \t<div id=\"container\">
\t\t        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "\t\t    </div>
\t\t    
\t\t    <div id=\"footer\">
\t\t    ";
        // line 25
        $this->loadTemplate("::footer.html.twig", "base.html.twig", 25)->display($context);
        // line 26
        echo "\t\t    </div>
    </div>
    
        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
        
        $__internal_1ad9cc61a7c957b997ebec450a6891d95a0d06a71ac6cb05ba2d97302150225e->leave($__internal_1ad9cc61a7c957b997ebec450a6891d95a0d06a71ac6cb05ba2d97302150225e_prof);

    }

    // line 17
    public function block_sub_sidebar($context, array $blocks = array())
    {
        $__internal_14c17ad05f9047ad2afff19fe5fd0ac2c151fb7b8f44ecd00b0cdd77114d9b0e = $this->env->getExtension("native_profiler");
        $__internal_14c17ad05f9047ad2afff19fe5fd0ac2c151fb7b8f44ecd00b0cdd77114d9b0e->enter($__internal_14c17ad05f9047ad2afff19fe5fd0ac2c151fb7b8f44ecd00b0cdd77114d9b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_sidebar"));

        
        $__internal_14c17ad05f9047ad2afff19fe5fd0ac2c151fb7b8f44ecd00b0cdd77114d9b0e->leave($__internal_14c17ad05f9047ad2afff19fe5fd0ac2c151fb7b8f44ecd00b0cdd77114d9b0e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcbc1765bad946d14895449e6b3b5946764598677624ce4d9b03fdb898b976f8 = $this->env->getExtension("native_profiler");
        $__internal_bcbc1765bad946d14895449e6b3b5946764598677624ce4d9b03fdb898b976f8->enter($__internal_bcbc1765bad946d14895449e6b3b5946764598677624ce4d9b03fdb898b976f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bcbc1765bad946d14895449e6b3b5946764598677624ce4d9b03fdb898b976f8->leave($__internal_bcbc1765bad946d14895449e6b3b5946764598677624ce4d9b03fdb898b976f8_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f21092f5bbd29e8331285e627814a192858adfafe7c6b5293e3e34791ba8765e = $this->env->getExtension("native_profiler");
        $__internal_f21092f5bbd29e8331285e627814a192858adfafe7c6b5293e3e34791ba8765e->enter($__internal_f21092f5bbd29e8331285e627814a192858adfafe7c6b5293e3e34791ba8765e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f21092f5bbd29e8331285e627814a192858adfafe7c6b5293e3e34791ba8765e->leave($__internal_f21092f5bbd29e8331285e627814a192858adfafe7c6b5293e3e34791ba8765e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  92 => 21,  81 => 17,  72 => 30,  70 => 29,  65 => 26,  63 => 25,  58 => 22,  56 => 21,  51 => 18,  49 => 17,  42 => 13,  32 => 5,  30 => 4,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         {% include '::header.html.twig' %}*/
/*     </head>*/
/*     <body>*/
/*     */
/*     <div id="content">*/
/*     */
/* 	    <div id="wrapper">*/
/* 	    */
/* 		    <div id="sidebar">*/
/* 		    {% include '::sidebar.html.twig' %}	*/
/* 		    </div>*/
/* 		    */
/* 		    <div id="sub_sidebar">*/
/* 		    	{% block sub_sidebar %}{% endblock %}*/
/* 		    </div>*/
/* 		    */
/* 		   	<div id="container">*/
/* 		        {% block body %}{% endblock %}*/
/* 		    </div>*/
/* 		    */
/* 		    <div id="footer">*/
/* 		    {% include '::footer.html.twig' %}*/
/* 		    </div>*/
/*     </div>*/
/*     */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
