<?php

/* ::base.html.twig */
class __TwigTemplate_2f60247e4bc291c6e9b47fad17c0aaf90f7c77adf29f4806a4afd23f83a7ec25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdb318c7b533da2dd9f5a78a8058ec93770710e5013e76827a4f1bb7c363e7b2 = $this->env->getExtension("native_profiler");
        $__internal_cdb318c7b533da2dd9f5a78a8058ec93770710e5013e76827a4f1bb7c363e7b2->enter($__internal_cdb318c7b533da2dd9f5a78a8058ec93770710e5013e76827a4f1bb7c363e7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
\t\t    <div id=\"sidebar\">
\t\t    ";
        // line 12
        $this->loadTemplate("::sidebar.html.twig", "::base.html.twig", 12)->display($context);
        echo "\t
\t\t    </div>
\t\t    
\t\t   \t<div id=\"container\">
\t\t        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "\t\t    </div>
\t\t    
\t\t    <div id=\"footer\">
\t\t    ";
        // line 20
        $this->loadTemplate("::footer.html.twig", "::base.html.twig", 20)->display($context);
        // line 21
        echo "\t\t    </div>
    </div>
    
        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_cdb318c7b533da2dd9f5a78a8058ec93770710e5013e76827a4f1bb7c363e7b2->leave($__internal_cdb318c7b533da2dd9f5a78a8058ec93770710e5013e76827a4f1bb7c363e7b2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_1431772eae6d0da3036b82e30572fad479ff7c0077c78ecbdb2f05b1e6cf5d5d = $this->env->getExtension("native_profiler");
        $__internal_1431772eae6d0da3036b82e30572fad479ff7c0077c78ecbdb2f05b1e6cf5d5d->enter($__internal_1431772eae6d0da3036b82e30572fad479ff7c0077c78ecbdb2f05b1e6cf5d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1431772eae6d0da3036b82e30572fad479ff7c0077c78ecbdb2f05b1e6cf5d5d->leave($__internal_1431772eae6d0da3036b82e30572fad479ff7c0077c78ecbdb2f05b1e6cf5d5d_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e142c1834171d697f0ca613f2cb56bac772442aa8e24c5132d63820c92575fa = $this->env->getExtension("native_profiler");
        $__internal_4e142c1834171d697f0ca613f2cb56bac772442aa8e24c5132d63820c92575fa->enter($__internal_4e142c1834171d697f0ca613f2cb56bac772442aa8e24c5132d63820c92575fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4e142c1834171d697f0ca613f2cb56bac772442aa8e24c5132d63820c92575fa->leave($__internal_4e142c1834171d697f0ca613f2cb56bac772442aa8e24c5132d63820c92575fa_prof);

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
        return array (  83 => 24,  72 => 16,  63 => 25,  61 => 24,  56 => 21,  54 => 20,  49 => 17,  47 => 16,  40 => 12,  31 => 5,  29 => 4,  24 => 1,);
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
/* 		    <div id="sidebar">*/
/* 		    {% include '::sidebar.html.twig' %}	*/
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
