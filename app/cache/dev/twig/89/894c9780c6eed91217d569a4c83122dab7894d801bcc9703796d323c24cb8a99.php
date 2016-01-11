<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_153fe98a7d3a13d57f9465bd6c59bb4bf7365e1b6f198e7d0c8e8186b7dce1c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32510c3a1d1a34aa139d40a8412a4ca0a52b787722e1778d5a778a8934a6a9f2 = $this->env->getExtension("native_profiler");
        $__internal_32510c3a1d1a34aa139d40a8412a4ca0a52b787722e1778d5a778a8934a6a9f2->enter($__internal_32510c3a1d1a34aa139d40a8412a4ca0a52b787722e1778d5a778a8934a6a9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32510c3a1d1a34aa139d40a8412a4ca0a52b787722e1778d5a778a8934a6a9f2->leave($__internal_32510c3a1d1a34aa139d40a8412a4ca0a52b787722e1778d5a778a8934a6a9f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad4adbfd30e873e27c3128587b2d1f678921b0b3bf328b7ed344efd10980f17a = $this->env->getExtension("native_profiler");
        $__internal_ad4adbfd30e873e27c3128587b2d1f678921b0b3bf328b7ed344efd10980f17a->enter($__internal_ad4adbfd30e873e27c3128587b2d1f678921b0b3bf328b7ed344efd10980f17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ad4adbfd30e873e27c3128587b2d1f678921b0b3bf328b7ed344efd10980f17a->leave($__internal_ad4adbfd30e873e27c3128587b2d1f678921b0b3bf328b7ed344efd10980f17a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7560a7439b13a18aa14b613aef272d7c2e36eeb3bd236f8bdc2d826871ff1c1 = $this->env->getExtension("native_profiler");
        $__internal_c7560a7439b13a18aa14b613aef272d7c2e36eeb3bd236f8bdc2d826871ff1c1->enter($__internal_c7560a7439b13a18aa14b613aef272d7c2e36eeb3bd236f8bdc2d826871ff1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c7560a7439b13a18aa14b613aef272d7c2e36eeb3bd236f8bdc2d826871ff1c1->leave($__internal_c7560a7439b13a18aa14b613aef272d7c2e36eeb3bd236f8bdc2d826871ff1c1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_778d8da7e82962907f90359587cee90c28c7617bf006ea346d84b5fa3121384d = $this->env->getExtension("native_profiler");
        $__internal_778d8da7e82962907f90359587cee90c28c7617bf006ea346d84b5fa3121384d->enter($__internal_778d8da7e82962907f90359587cee90c28c7617bf006ea346d84b5fa3121384d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_778d8da7e82962907f90359587cee90c28c7617bf006ea346d84b5fa3121384d->leave($__internal_778d8da7e82962907f90359587cee90c28c7617bf006ea346d84b5fa3121384d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
