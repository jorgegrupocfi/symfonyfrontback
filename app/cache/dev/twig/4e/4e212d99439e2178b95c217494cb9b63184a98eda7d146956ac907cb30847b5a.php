<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c883331854e2e34da148914e59e89c6bbac1c5fc5793c3e7274fcdfaf3e39a56 extends Twig_Template
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
        $__internal_ce0a7acb277cd2668e6535c114491b39c062caf824988d9a6886e357a0eae87e = $this->env->getExtension("native_profiler");
        $__internal_ce0a7acb277cd2668e6535c114491b39c062caf824988d9a6886e357a0eae87e->enter($__internal_ce0a7acb277cd2668e6535c114491b39c062caf824988d9a6886e357a0eae87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ce0a7acb277cd2668e6535c114491b39c062caf824988d9a6886e357a0eae87e->leave($__internal_ce0a7acb277cd2668e6535c114491b39c062caf824988d9a6886e357a0eae87e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
