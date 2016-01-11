<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_dbde696d8d1fa1f0cb4f85fd387296cd4af036358b02ff17fd1576c67e24bc02 extends Twig_Template
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
        $__internal_86abd397b2a745bfd039ee3d3c1f5c36ee12f530edda5d4dcd25f6bb8b5801da = $this->env->getExtension("native_profiler");
        $__internal_86abd397b2a745bfd039ee3d3c1f5c36ee12f530edda5d4dcd25f6bb8b5801da->enter($__internal_86abd397b2a745bfd039ee3d3c1f5c36ee12f530edda5d4dcd25f6bb8b5801da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_86abd397b2a745bfd039ee3d3c1f5c36ee12f530edda5d4dcd25f6bb8b5801da->leave($__internal_86abd397b2a745bfd039ee3d3c1f5c36ee12f530edda5d4dcd25f6bb8b5801da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
