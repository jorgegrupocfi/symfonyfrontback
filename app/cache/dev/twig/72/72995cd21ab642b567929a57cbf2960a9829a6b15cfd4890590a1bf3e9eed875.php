<?php

/* ::sub_sidebar.html.twig */
class __TwigTemplate_1e2e6d5afb3083b3d886c69d352e913f0e76609ca0a6601b7ecdd260c282a4e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sub_sidebar' => array($this, 'block_sub_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03a2d7133f6a824ea52ce31e4d704e3a1f2964b8e91b6b73c3af5215e136eb82 = $this->env->getExtension("native_profiler");
        $__internal_03a2d7133f6a824ea52ce31e4d704e3a1f2964b8e91b6b73c3af5215e136eb82->enter($__internal_03a2d7133f6a824ea52ce31e4d704e3a1f2964b8e91b6b73c3af5215e136eb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sub_sidebar.html.twig"));

        // line 1
        $this->displayBlock('sub_sidebar', $context, $blocks);
        
        $__internal_03a2d7133f6a824ea52ce31e4d704e3a1f2964b8e91b6b73c3af5215e136eb82->leave($__internal_03a2d7133f6a824ea52ce31e4d704e3a1f2964b8e91b6b73c3af5215e136eb82_prof);

    }

    public function block_sub_sidebar($context, array $blocks = array())
    {
        $__internal_c6d316244b24dbc97750de6cdb11b04f4687877b8dccf1abf4891ce190d1bcbd = $this->env->getExtension("native_profiler");
        $__internal_c6d316244b24dbc97750de6cdb11b04f4687877b8dccf1abf4891ce190d1bcbd->enter($__internal_c6d316244b24dbc97750de6cdb11b04f4687877b8dccf1abf4891ce190d1bcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_sidebar"));

        // line 2
        echo "
";
        
        $__internal_c6d316244b24dbc97750de6cdb11b04f4687877b8dccf1abf4891ce190d1bcbd->leave($__internal_c6d316244b24dbc97750de6cdb11b04f4687877b8dccf1abf4891ce190d1bcbd_prof);

    }

    public function getTemplateName()
    {
        return "::sub_sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block sub_sidebar %}*/
/* */
/* {% endblock %}*/
