<?php

/* ::footer.html.twig */
class __TwigTemplate_35ae7129c21e459ebd9e1fdb94a60fa3d70f627805ca577c1f1f49e5f98fa3c1 extends Twig_Template
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
        $__internal_24c94f00fc324ee8587a7dda562cf3f13d5cc2fb5bec2b634b2af1e672a491f7 = $this->env->getExtension("native_profiler");
        $__internal_24c94f00fc324ee8587a7dda562cf3f13d5cc2fb5bec2b634b2af1e672a491f7->enter($__internal_24c94f00fc324ee8587a7dda562cf3f13d5cc2fb5bec2b634b2af1e672a491f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

        // line 1
        echo "<footer>
    <hr>
    <p class=\"pull-right\">email de contacto: ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo "</p>
</footer>";
        
        $__internal_24c94f00fc324ee8587a7dda562cf3f13d5cc2fb5bec2b634b2af1e672a491f7->leave($__internal_24c94f00fc324ee8587a7dda562cf3f13d5cc2fb5bec2b634b2af1e672a491f7_prof);

    }

    public function getTemplateName()
    {
        return "::footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <footer>*/
/*     <hr>*/
/*     <p class="pull-right">email de contacto: {{ contact_email }}</p>*/
/* </footer>*/
