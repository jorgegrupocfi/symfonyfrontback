<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_cc25edaada6189c5df4b6acff48744d7a095e83466278abdb83e9a4b8620355c extends Twig_Template
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
        $__internal_7fee7f3e0884fb66584a519571bd27d239e978e95e77320720e26d8fb2157267 = $this->env->getExtension("native_profiler");
        $__internal_7fee7f3e0884fb66584a519571bd27d239e978e95e77320720e26d8fb2157267->enter($__internal_7fee7f3e0884fb66584a519571bd27d239e978e95e77320720e26d8fb2157267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7fee7f3e0884fb66584a519571bd27d239e978e95e77320720e26d8fb2157267->leave($__internal_7fee7f3e0884fb66584a519571bd27d239e978e95e77320720e26d8fb2157267_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
