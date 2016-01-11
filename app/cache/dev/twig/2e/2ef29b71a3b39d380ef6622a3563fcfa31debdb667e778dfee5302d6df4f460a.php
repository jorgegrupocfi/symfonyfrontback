<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a3b595ea5d992f77472538756cc5155ffbe912192339197272ceb20e82a37e14 extends Twig_Template
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
        $__internal_885f046dc96688c2c685cd2d330b929c6432079322c5c84afb07dca196021995 = $this->env->getExtension("native_profiler");
        $__internal_885f046dc96688c2c685cd2d330b929c6432079322c5c84afb07dca196021995->enter($__internal_885f046dc96688c2c685cd2d330b929c6432079322c5c84afb07dca196021995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_885f046dc96688c2c685cd2d330b929c6432079322c5c84afb07dca196021995->leave($__internal_885f046dc96688c2c685cd2d330b929c6432079322c5c84afb07dca196021995_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
