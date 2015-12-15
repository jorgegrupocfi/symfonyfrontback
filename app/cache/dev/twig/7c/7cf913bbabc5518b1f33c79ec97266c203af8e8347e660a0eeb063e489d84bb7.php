<?php

/* base.html.twig */
class __TwigTemplate_9e058061a43957c9ca38af5e66e28eb2f3c7ce4c5d99fffce2cc255bcbd7f813 extends Twig_Template
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
        $__internal_4eb63dbf699c86e7bc83a6ed1fa39c658c5a0a84c9fce224fb43661486a4e24b = $this->env->getExtension("native_profiler");
        $__internal_4eb63dbf699c86e7bc83a6ed1fa39c658c5a0a84c9fce224fb43661486a4e24b->enter($__internal_4eb63dbf699c86e7bc83a6ed1fa39c658c5a0a84c9fce224fb43661486a4e24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t\t    <div id=\"sidebar\">
\t\t    ";
        // line 12
        $this->loadTemplate("::sidebar.html.twig", "base.html.twig", 12)->display($context);
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
        $this->loadTemplate("::footer.html.twig", "base.html.twig", 20)->display($context);
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
        
        $__internal_4eb63dbf699c86e7bc83a6ed1fa39c658c5a0a84c9fce224fb43661486a4e24b->leave($__internal_4eb63dbf699c86e7bc83a6ed1fa39c658c5a0a84c9fce224fb43661486a4e24b_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cc4a9e67d35ebf530f94baa5a6cbfd009e1fdd8851a6a3a26d87403212a0d41 = $this->env->getExtension("native_profiler");
        $__internal_6cc4a9e67d35ebf530f94baa5a6cbfd009e1fdd8851a6a3a26d87403212a0d41->enter($__internal_6cc4a9e67d35ebf530f94baa5a6cbfd009e1fdd8851a6a3a26d87403212a0d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6cc4a9e67d35ebf530f94baa5a6cbfd009e1fdd8851a6a3a26d87403212a0d41->leave($__internal_6cc4a9e67d35ebf530f94baa5a6cbfd009e1fdd8851a6a3a26d87403212a0d41_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9bf4e1d7570def3a297bf20c5a25950bcc867bded30745bcd1def493164d9fdc = $this->env->getExtension("native_profiler");
        $__internal_9bf4e1d7570def3a297bf20c5a25950bcc867bded30745bcd1def493164d9fdc->enter($__internal_9bf4e1d7570def3a297bf20c5a25950bcc867bded30745bcd1def493164d9fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9bf4e1d7570def3a297bf20c5a25950bcc867bded30745bcd1def493164d9fdc->leave($__internal_9bf4e1d7570def3a297bf20c5a25950bcc867bded30745bcd1def493164d9fdc_prof);

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
