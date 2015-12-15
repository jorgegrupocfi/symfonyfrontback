<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7d2dbc663a44cf4fd3124bbe5ba478e94fa745f2ac33cd6248ad32edfd0ec777 extends Twig_Template
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
        $__internal_1b8e4d6cc64009601286bb5349548dc95d87e5f98175f1cc6774fc4fb9a0e965 = $this->env->getExtension("native_profiler");
        $__internal_1b8e4d6cc64009601286bb5349548dc95d87e5f98175f1cc6774fc4fb9a0e965->enter($__internal_1b8e4d6cc64009601286bb5349548dc95d87e5f98175f1cc6774fc4fb9a0e965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1b8e4d6cc64009601286bb5349548dc95d87e5f98175f1cc6774fc4fb9a0e965->leave($__internal_1b8e4d6cc64009601286bb5349548dc95d87e5f98175f1cc6774fc4fb9a0e965_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
