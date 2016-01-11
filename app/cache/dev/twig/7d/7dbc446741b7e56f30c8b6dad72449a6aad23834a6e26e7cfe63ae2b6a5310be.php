<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bb68bd63af443c255e0c661df4c741f980c88828ae1f3e3b305f07babfdd5bcf extends Twig_Template
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
        $__internal_9ebffadf8c096449c4944dcbfd21e9a08ed7472be7540ecd192654f1008f4874 = $this->env->getExtension("native_profiler");
        $__internal_9ebffadf8c096449c4944dcbfd21e9a08ed7472be7540ecd192654f1008f4874->enter($__internal_9ebffadf8c096449c4944dcbfd21e9a08ed7472be7540ecd192654f1008f4874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9ebffadf8c096449c4944dcbfd21e9a08ed7472be7540ecd192654f1008f4874->leave($__internal_9ebffadf8c096449c4944dcbfd21e9a08ed7472be7540ecd192654f1008f4874_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
