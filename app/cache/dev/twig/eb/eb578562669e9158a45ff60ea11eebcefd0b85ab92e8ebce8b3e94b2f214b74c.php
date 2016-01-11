<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bad17606acc9ab28aaa94bedd47034f3202cbed339efbf79737166f6ad5e8f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4f70a6dcf19e847a83a8d04892f872b6e77bb2a79085860f154730b37b7821c = $this->env->getExtension("native_profiler");
        $__internal_d4f70a6dcf19e847a83a8d04892f872b6e77bb2a79085860f154730b37b7821c->enter($__internal_d4f70a6dcf19e847a83a8d04892f872b6e77bb2a79085860f154730b37b7821c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d4f70a6dcf19e847a83a8d04892f872b6e77bb2a79085860f154730b37b7821c->leave($__internal_d4f70a6dcf19e847a83a8d04892f872b6e77bb2a79085860f154730b37b7821c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b759f7a2b4cd4e56edd8aaf45902d21ea59e299c38bb00211a0b37e630f4acdb = $this->env->getExtension("native_profiler");
        $__internal_b759f7a2b4cd4e56edd8aaf45902d21ea59e299c38bb00211a0b37e630f4acdb->enter($__internal_b759f7a2b4cd4e56edd8aaf45902d21ea59e299c38bb00211a0b37e630f4acdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b759f7a2b4cd4e56edd8aaf45902d21ea59e299c38bb00211a0b37e630f4acdb->leave($__internal_b759f7a2b4cd4e56edd8aaf45902d21ea59e299c38bb00211a0b37e630f4acdb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
