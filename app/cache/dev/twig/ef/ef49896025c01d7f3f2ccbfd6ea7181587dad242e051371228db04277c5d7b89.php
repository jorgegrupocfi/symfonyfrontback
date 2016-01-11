<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_f85fd75280fd2948d6895ae03b89f5de419bcdd2aed36d0f18de1e55b7db8f35 extends Twig_Template
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
        $__internal_fdf3d1e6e8b582a48775d75c1fe564e0ffe4e15e2e9e11c57b659729232ae1ec = $this->env->getExtension("native_profiler");
        $__internal_fdf3d1e6e8b582a48775d75c1fe564e0ffe4e15e2e9e11c57b659729232ae1ec->enter($__internal_fdf3d1e6e8b582a48775d75c1fe564e0ffe4e15e2e9e11c57b659729232ae1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_fdf3d1e6e8b582a48775d75c1fe564e0ffe4e15e2e9e11c57b659729232ae1ec->leave($__internal_fdf3d1e6e8b582a48775d75c1fe564e0ffe4e15e2e9e11c57b659729232ae1ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */
