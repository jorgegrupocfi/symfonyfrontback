<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b2966adb52b05c580b4652a09f88a755342956d28e762e692744b519c9207fba extends Twig_Template
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
        $__internal_4fb1b28a77f269f853235fc3113ee4434fe93587b6b1caba7d51a30cd71796eb = $this->env->getExtension("native_profiler");
        $__internal_4fb1b28a77f269f853235fc3113ee4434fe93587b6b1caba7d51a30cd71796eb->enter($__internal_4fb1b28a77f269f853235fc3113ee4434fe93587b6b1caba7d51a30cd71796eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4fb1b28a77f269f853235fc3113ee4434fe93587b6b1caba7d51a30cd71796eb->leave($__internal_4fb1b28a77f269f853235fc3113ee4434fe93587b6b1caba7d51a30cd71796eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
