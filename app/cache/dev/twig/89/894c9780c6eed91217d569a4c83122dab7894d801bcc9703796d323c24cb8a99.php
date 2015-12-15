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
        $__internal_b155c6f6da7bc31346137b0eb2650660fe238bb68d6579583ee7e174cb250cbf = $this->env->getExtension("native_profiler");
        $__internal_b155c6f6da7bc31346137b0eb2650660fe238bb68d6579583ee7e174cb250cbf->enter($__internal_b155c6f6da7bc31346137b0eb2650660fe238bb68d6579583ee7e174cb250cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b155c6f6da7bc31346137b0eb2650660fe238bb68d6579583ee7e174cb250cbf->leave($__internal_b155c6f6da7bc31346137b0eb2650660fe238bb68d6579583ee7e174cb250cbf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_94ad984265759bcea612cd446d450fe3677b292428779b5576875d47a8afaa3f = $this->env->getExtension("native_profiler");
        $__internal_94ad984265759bcea612cd446d450fe3677b292428779b5576875d47a8afaa3f->enter($__internal_94ad984265759bcea612cd446d450fe3677b292428779b5576875d47a8afaa3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_94ad984265759bcea612cd446d450fe3677b292428779b5576875d47a8afaa3f->leave($__internal_94ad984265759bcea612cd446d450fe3677b292428779b5576875d47a8afaa3f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c668f211d9a8776e7fa6f05bc332ccfdb06d29afa284149957d26e5381bed2b = $this->env->getExtension("native_profiler");
        $__internal_9c668f211d9a8776e7fa6f05bc332ccfdb06d29afa284149957d26e5381bed2b->enter($__internal_9c668f211d9a8776e7fa6f05bc332ccfdb06d29afa284149957d26e5381bed2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9c668f211d9a8776e7fa6f05bc332ccfdb06d29afa284149957d26e5381bed2b->leave($__internal_9c668f211d9a8776e7fa6f05bc332ccfdb06d29afa284149957d26e5381bed2b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e22921c24533ec70ab0dca68f5c42065072c1ebd055e3da07d60bd6e9cd98062 = $this->env->getExtension("native_profiler");
        $__internal_e22921c24533ec70ab0dca68f5c42065072c1ebd055e3da07d60bd6e9cd98062->enter($__internal_e22921c24533ec70ab0dca68f5c42065072c1ebd055e3da07d60bd6e9cd98062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e22921c24533ec70ab0dca68f5c42065072c1ebd055e3da07d60bd6e9cd98062->leave($__internal_e22921c24533ec70ab0dca68f5c42065072c1ebd055e3da07d60bd6e9cd98062_prof);

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
