<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_6b44c31b73386065bbea04bd66e9000a09e17ab59d3369d5f05c7e0cb311137d extends Twig_Template
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
        $__internal_8201868565ec65a14b16a4f92939cfe0d53182e21e2c2287f7bb1881d66683b6 = $this->env->getExtension("native_profiler");
        $__internal_8201868565ec65a14b16a4f92939cfe0d53182e21e2c2287f7bb1881d66683b6->enter($__internal_8201868565ec65a14b16a4f92939cfe0d53182e21e2c2287f7bb1881d66683b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8201868565ec65a14b16a4f92939cfe0d53182e21e2c2287f7bb1881d66683b6->leave($__internal_8201868565ec65a14b16a4f92939cfe0d53182e21e2c2287f7bb1881d66683b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
