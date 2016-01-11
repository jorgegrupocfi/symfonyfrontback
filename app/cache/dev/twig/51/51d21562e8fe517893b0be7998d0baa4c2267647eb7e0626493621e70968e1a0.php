<?php

/* ::header.html.twig */
class __TwigTemplate_80fcc0b8225569698845d7f8af8a06b398cc4ee732526e3031e24b06f30deecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec65245e2710a2a51882cc4f3a12b2caa07a44dbfc0b3159a1cb7d262d3715c7 = $this->env->getExtension("native_profiler");
        $__internal_ec65245e2710a2a51882cc4f3a12b2caa07a44dbfc0b3159a1cb7d262d3715c7->enter($__internal_ec65245e2710a2a51882cc4f3a12b2caa07a44dbfc0b3159a1cb7d262d3715c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        // line 1
        echo "<meta charset=\"UTF-8\" />
<title>";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\"
\thref=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">";
        
        $__internal_ec65245e2710a2a51882cc4f3a12b2caa07a44dbfc0b3159a1cb7d262d3715c7->leave($__internal_ec65245e2710a2a51882cc4f3a12b2caa07a44dbfc0b3159a1cb7d262d3715c7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_52b0df527cf623f59392383a6552e9bf3ad897c40d6c47ca0b23959b1184e7c5 = $this->env->getExtension("native_profiler");
        $__internal_52b0df527cf623f59392383a6552e9bf3ad897c40d6c47ca0b23959b1184e7c5->enter($__internal_52b0df527cf623f59392383a6552e9bf3ad897c40d6c47ca0b23959b1184e7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Front Back Project";
        
        $__internal_52b0df527cf623f59392383a6552e9bf3ad897c40d6c47ca0b23959b1184e7c5->leave($__internal_52b0df527cf623f59392383a6552e9bf3ad897c40d6c47ca0b23959b1184e7c5_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2840a5ecac2d7e05a24099523b551c093beb205d74092950e807ef67d6838aad = $this->env->getExtension("native_profiler");
        $__internal_2840a5ecac2d7e05a24099523b551c093beb205d74092950e807ef67d6838aad->enter($__internal_2840a5ecac2d7e05a24099523b551c093beb205d74092950e807ef67d6838aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_2840a5ecac2d7e05a24099523b551c093beb205d74092950e807ef67d6838aad->leave($__internal_2840a5ecac2d7e05a24099523b551c093beb205d74092950e807ef67d6838aad_prof);

    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 4,  59 => 3,  47 => 2,  39 => 33,  33 => 31,  31 => 3,  27 => 2,  24 => 1,);
    }
}
/* <meta charset="UTF-8" />*/
/* <title>{% block title %}Symfony Front Back Project{% endblock %}</title>*/
/* {% block stylesheets %}*/
/* <style>*/
/*     body { background: #F5F5F5; font: 18px/1.5 sans-serif; }*/
/*     h1, h2 { line-height: 1.2; margin: 0 0 .5em; }*/
/*     h1 { font-size: 36px; }*/
/*     h2 { font-size: 21px; margin-bottom: 1em; }*/
/*     p { margin: 0 0 1em 0; }*/
/*     a { color: #0000F0; }*/
/*     a:hover { text-decoration: none; }*/
/*     code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }*/
/*     #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }*/
/*     #container { padding: 2em; }*/
/*     #welcome, #status { margin-bottom: 2em; }*/
/*     #welcome h1 span { display: block; font-size: 75%; }*/
/*     #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }*/
/*     #icon-book { display: none; }*/
/* */
/*     @media (min-width: 768px) {*/
/*         #wrapper { width: 80%; margin: 2em auto; }*/
/*         #icon-book { display: inline-block; }*/
/*         #status a, #next a { display: block; }*/
/* */
/*         @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* <link rel="stylesheet"*/
/* 	href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">*/
