<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6ab0f02724fb96d4fe708115d279658ed039e4e37f61096828fdac73d468fd3c extends Twig_Template
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
        $__internal_d694b31695da6ba7e0ddbfb657180e19990ee4bc171e369ab8c8a3fd328b2581 = $this->env->getExtension("native_profiler");
        $__internal_d694b31695da6ba7e0ddbfb657180e19990ee4bc171e369ab8c8a3fd328b2581->enter($__internal_d694b31695da6ba7e0ddbfb657180e19990ee4bc171e369ab8c8a3fd328b2581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d694b31695da6ba7e0ddbfb657180e19990ee4bc171e369ab8c8a3fd328b2581->leave($__internal_d694b31695da6ba7e0ddbfb657180e19990ee4bc171e369ab8c8a3fd328b2581_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
