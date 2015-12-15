<?php

/* MyRecipesBundle:Default:index.html.twig */
class __TwigTemplate_683be32ebad637e423b4725ca4582fe530c987b6a8e11bdc255678453192cda2 extends Twig_Template
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
        $__internal_adeabc3afe2061bf5d6d5d605a8548d08d384a1841de9d59cea775edd6a87430 = $this->env->getExtension("native_profiler");
        $__internal_adeabc3afe2061bf5d6d5d605a8548d08d384a1841de9d59cea775edd6a87430->enter($__internal_adeabc3afe2061bf5d6d5d605a8548d08d384a1841de9d59cea775edd6a87430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_adeabc3afe2061bf5d6d5d605a8548d08d384a1841de9d59cea775edd6a87430->leave($__internal_adeabc3afe2061bf5d6d5d605a8548d08d384a1841de9d59cea775edd6a87430_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesBundle:Default:index.html.twig";
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
/* Hello {{ name }}!*/
/* */
