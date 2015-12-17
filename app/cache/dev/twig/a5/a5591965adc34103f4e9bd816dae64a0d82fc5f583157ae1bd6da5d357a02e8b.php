<?php

/* ::base.html.twig */
class __TwigTemplate_2f60247e4bc291c6e9b47fad17c0aaf90f7c77adf29f4806a4afd23f83a7ec25 extends Twig_Template
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
        $__internal_711f1c8cb18075a763f2145268f850672ca4b7ffdefd30dda51173498327bb7a = $this->env->getExtension("native_profiler");
        $__internal_711f1c8cb18075a763f2145268f850672ca4b7ffdefd30dda51173498327bb7a->enter($__internal_711f1c8cb18075a763f2145268f850672ca4b7ffdefd30dda51173498327bb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->loadTemplate("::header.html.twig", "::base.html.twig", 4)->display($context);
        // line 5
        echo "    </head>
    <body>
    
    <div id=\"content\">
    
\t    <div id=\"wrapper\">
\t    
\t\t    <div id=\"sidebar\">
\t\t    ";
        // line 13
        $this->loadTemplate("::sidebar.html.twig", "::base.html.twig", 13)->display($context);
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
        $this->loadTemplate("::footer.html.twig", "::base.html.twig", 25)->display($context);
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
        
        $__internal_711f1c8cb18075a763f2145268f850672ca4b7ffdefd30dda51173498327bb7a->leave($__internal_711f1c8cb18075a763f2145268f850672ca4b7ffdefd30dda51173498327bb7a_prof);

    }

    // line 17
    public function block_sub_sidebar($context, array $blocks = array())
    {
        $__internal_4fce3d9bb471d6d863ef684c8a1b757ca204cfc1cd6a5310b7f36fbd496c2e5b = $this->env->getExtension("native_profiler");
        $__internal_4fce3d9bb471d6d863ef684c8a1b757ca204cfc1cd6a5310b7f36fbd496c2e5b->enter($__internal_4fce3d9bb471d6d863ef684c8a1b757ca204cfc1cd6a5310b7f36fbd496c2e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_sidebar"));

        
        $__internal_4fce3d9bb471d6d863ef684c8a1b757ca204cfc1cd6a5310b7f36fbd496c2e5b->leave($__internal_4fce3d9bb471d6d863ef684c8a1b757ca204cfc1cd6a5310b7f36fbd496c2e5b_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_738e85a7ad2722696992fd3a22576047c953bf3218034edcc2e55a175b7e0bac = $this->env->getExtension("native_profiler");
        $__internal_738e85a7ad2722696992fd3a22576047c953bf3218034edcc2e55a175b7e0bac->enter($__internal_738e85a7ad2722696992fd3a22576047c953bf3218034edcc2e55a175b7e0bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_738e85a7ad2722696992fd3a22576047c953bf3218034edcc2e55a175b7e0bac->leave($__internal_738e85a7ad2722696992fd3a22576047c953bf3218034edcc2e55a175b7e0bac_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d39f7e2d6bc75711c01a4ef728cb95cd845be587f5ce2e1de3717883535311db = $this->env->getExtension("native_profiler");
        $__internal_d39f7e2d6bc75711c01a4ef728cb95cd845be587f5ce2e1de3717883535311db->enter($__internal_d39f7e2d6bc75711c01a4ef728cb95cd845be587f5ce2e1de3717883535311db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d39f7e2d6bc75711c01a4ef728cb95cd845be587f5ce2e1de3717883535311db->leave($__internal_d39f7e2d6bc75711c01a4ef728cb95cd845be587f5ce2e1de3717883535311db_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
