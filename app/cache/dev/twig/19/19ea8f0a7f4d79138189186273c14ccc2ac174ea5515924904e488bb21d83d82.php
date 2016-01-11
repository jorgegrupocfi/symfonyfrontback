<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_b32a6cf29b6ec8a010389b08b1d9f8a4808918bb89cee4ef4c446fc23cda1e6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f168e4366a850ecdf1fe3b1b18f5bb810d801bde866581580184980ace168e37 = $this->env->getExtension("native_profiler");
        $__internal_f168e4366a850ecdf1fe3b1b18f5bb810d801bde866581580184980ace168e37->enter($__internal_f168e4366a850ecdf1fe3b1b18f5bb810d801bde866581580184980ace168e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f168e4366a850ecdf1fe3b1b18f5bb810d801bde866581580184980ace168e37->leave($__internal_f168e4366a850ecdf1fe3b1b18f5bb810d801bde866581580184980ace168e37_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a00f2168ae6e44eb29dee6c7f66c8fde2abd85781cd04456731e3cb07079c9b6 = $this->env->getExtension("native_profiler");
        $__internal_a00f2168ae6e44eb29dee6c7f66c8fde2abd85781cd04456731e3cb07079c9b6->enter($__internal_a00f2168ae6e44eb29dee6c7f66c8fde2abd85781cd04456731e3cb07079c9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a00f2168ae6e44eb29dee6c7f66c8fde2abd85781cd04456731e3cb07079c9b6->leave($__internal_a00f2168ae6e44eb29dee6c7f66c8fde2abd85781cd04456731e3cb07079c9b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_524d4ae012242784cc845192738d014b0a66e5be68ebc057f133223896be229d = $this->env->getExtension("native_profiler");
        $__internal_524d4ae012242784cc845192738d014b0a66e5be68ebc057f133223896be229d->enter($__internal_524d4ae012242784cc845192738d014b0a66e5be68ebc057f133223896be229d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_524d4ae012242784cc845192738d014b0a66e5be68ebc057f133223896be229d->leave($__internal_524d4ae012242784cc845192738d014b0a66e5be68ebc057f133223896be229d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_37cbdf13f0757087ae98ff27cdf6bec35c6e6b277d1d441b31767cf8b9949324 = $this->env->getExtension("native_profiler");
        $__internal_37cbdf13f0757087ae98ff27cdf6bec35c6e6b277d1d441b31767cf8b9949324->enter($__internal_37cbdf13f0757087ae98ff27cdf6bec35c6e6b277d1d441b31767cf8b9949324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_37cbdf13f0757087ae98ff27cdf6bec35c6e6b277d1d441b31767cf8b9949324->leave($__internal_37cbdf13f0757087ae98ff27cdf6bec35c6e6b277d1d441b31767cf8b9949324_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_7aa850bce3809a0f6499558d64d267a9b5ab8513574113cc80e30c1865b920bc = $this->env->getExtension("native_profiler");
        $__internal_7aa850bce3809a0f6499558d64d267a9b5ab8513574113cc80e30c1865b920bc->enter($__internal_7aa850bce3809a0f6499558d64d267a9b5ab8513574113cc80e30c1865b920bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7aa850bce3809a0f6499558d64d267a9b5ab8513574113cc80e30c1865b920bc->leave($__internal_7aa850bce3809a0f6499558d64d267a9b5ab8513574113cc80e30c1865b920bc_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
