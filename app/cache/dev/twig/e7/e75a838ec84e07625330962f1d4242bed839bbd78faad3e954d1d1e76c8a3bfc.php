<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4e8c50a08e51593c02518926eaf63a46a9874439fb978b7d8eee5749e762559b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c32f475a75367c067676d29ce978206fd90c25fd7885518282a483f47385073 = $this->env->getExtension("native_profiler");
        $__internal_2c32f475a75367c067676d29ce978206fd90c25fd7885518282a483f47385073->enter($__internal_2c32f475a75367c067676d29ce978206fd90c25fd7885518282a483f47385073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c32f475a75367c067676d29ce978206fd90c25fd7885518282a483f47385073->leave($__internal_2c32f475a75367c067676d29ce978206fd90c25fd7885518282a483f47385073_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec289897bf2043a625da892e3ed019626cb906ea9102e76f02d5f669ced18bbe = $this->env->getExtension("native_profiler");
        $__internal_ec289897bf2043a625da892e3ed019626cb906ea9102e76f02d5f669ced18bbe->enter($__internal_ec289897bf2043a625da892e3ed019626cb906ea9102e76f02d5f669ced18bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ec289897bf2043a625da892e3ed019626cb906ea9102e76f02d5f669ced18bbe->leave($__internal_ec289897bf2043a625da892e3ed019626cb906ea9102e76f02d5f669ced18bbe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b84150cdae3ea98d2123da65d598c6a823fd7f64a0eb4063e479b4a6e4005601 = $this->env->getExtension("native_profiler");
        $__internal_b84150cdae3ea98d2123da65d598c6a823fd7f64a0eb4063e479b4a6e4005601->enter($__internal_b84150cdae3ea98d2123da65d598c6a823fd7f64a0eb4063e479b4a6e4005601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b84150cdae3ea98d2123da65d598c6a823fd7f64a0eb4063e479b4a6e4005601->leave($__internal_b84150cdae3ea98d2123da65d598c6a823fd7f64a0eb4063e479b4a6e4005601_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
