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
        $__internal_3d01d7c9d1d212490433198f008c159315e66c67c775bdcde028a501897cef46 = $this->env->getExtension("native_profiler");
        $__internal_3d01d7c9d1d212490433198f008c159315e66c67c775bdcde028a501897cef46->enter($__internal_3d01d7c9d1d212490433198f008c159315e66c67c775bdcde028a501897cef46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3d01d7c9d1d212490433198f008c159315e66c67c775bdcde028a501897cef46->leave($__internal_3d01d7c9d1d212490433198f008c159315e66c67c775bdcde028a501897cef46_prof);

    }

    // line 17
    public function block_sub_sidebar($context, array $blocks = array())
    {
        $__internal_e83e65e53ae210d0aea6d1294f792db894f7a4caa96c8d697e813e7b0e9cadfb = $this->env->getExtension("native_profiler");
        $__internal_e83e65e53ae210d0aea6d1294f792db894f7a4caa96c8d697e813e7b0e9cadfb->enter($__internal_e83e65e53ae210d0aea6d1294f792db894f7a4caa96c8d697e813e7b0e9cadfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_sidebar"));

        
        $__internal_e83e65e53ae210d0aea6d1294f792db894f7a4caa96c8d697e813e7b0e9cadfb->leave($__internal_e83e65e53ae210d0aea6d1294f792db894f7a4caa96c8d697e813e7b0e9cadfb_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_b50b694457b4235320a967e2842787930287bf2733c7a8c1e4859002bc65acc0 = $this->env->getExtension("native_profiler");
        $__internal_b50b694457b4235320a967e2842787930287bf2733c7a8c1e4859002bc65acc0->enter($__internal_b50b694457b4235320a967e2842787930287bf2733c7a8c1e4859002bc65acc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b50b694457b4235320a967e2842787930287bf2733c7a8c1e4859002bc65acc0->leave($__internal_b50b694457b4235320a967e2842787930287bf2733c7a8c1e4859002bc65acc0_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0802129cd79db42993614e35713913c1548ad0b34109f0eae76974c87146f8c1 = $this->env->getExtension("native_profiler");
        $__internal_0802129cd79db42993614e35713913c1548ad0b34109f0eae76974c87146f8c1->enter($__internal_0802129cd79db42993614e35713913c1548ad0b34109f0eae76974c87146f8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0802129cd79db42993614e35713913c1548ad0b34109f0eae76974c87146f8c1->leave($__internal_0802129cd79db42993614e35713913c1548ad0b34109f0eae76974c87146f8c1_prof);

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
