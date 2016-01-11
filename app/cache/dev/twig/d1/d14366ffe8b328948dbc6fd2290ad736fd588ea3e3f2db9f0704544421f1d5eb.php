<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_cc2afbed8f69605308d84fc0b0baa50465cf4f07a9b7d576b83d74a33bd48d0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3562b7ea43b333a4345fee4faa07646238dce37ae7606510ac190bf7bf799ef3 = $this->env->getExtension("native_profiler");
        $__internal_3562b7ea43b333a4345fee4faa07646238dce37ae7606510ac190bf7bf799ef3->enter($__internal_3562b7ea43b333a4345fee4faa07646238dce37ae7606510ac190bf7bf799ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3562b7ea43b333a4345fee4faa07646238dce37ae7606510ac190bf7bf799ef3->leave($__internal_3562b7ea43b333a4345fee4faa07646238dce37ae7606510ac190bf7bf799ef3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
