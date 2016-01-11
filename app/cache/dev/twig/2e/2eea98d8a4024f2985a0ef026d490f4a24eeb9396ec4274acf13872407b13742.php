<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e8e6f8469da0022fa3ca7c4299cbbe1fffcebe44a230c46423423630cb5b021a extends Twig_Template
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
        $__internal_33c1725a63bdc3c7655aba202a20203d8ab8e717a8dc3abdf93c1402cfacfbb2 = $this->env->getExtension("native_profiler");
        $__internal_33c1725a63bdc3c7655aba202a20203d8ab8e717a8dc3abdf93c1402cfacfbb2->enter($__internal_33c1725a63bdc3c7655aba202a20203d8ab8e717a8dc3abdf93c1402cfacfbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_33c1725a63bdc3c7655aba202a20203d8ab8e717a8dc3abdf93c1402cfacfbb2->leave($__internal_33c1725a63bdc3c7655aba202a20203d8ab8e717a8dc3abdf93c1402cfacfbb2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
