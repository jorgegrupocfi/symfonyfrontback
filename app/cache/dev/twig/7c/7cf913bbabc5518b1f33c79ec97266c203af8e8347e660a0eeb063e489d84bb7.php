<?php

/* base.html.twig */
class __TwigTemplate_9e058061a43957c9ca38af5e66e28eb2f3c7ce4c5d99fffce2cc255bcbd7f813 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5559500fa62ff620c7ac81a4a86c8640e84533b47062d2f16cbb3db7e7598f89 = $this->env->getExtension("native_profiler");
        $__internal_5559500fa62ff620c7ac81a4a86c8640e84533b47062d2f16cbb3db7e7598f89->enter($__internal_5559500fa62ff620c7ac81a4a86c8640e84533b47062d2f16cbb3db7e7598f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5559500fa62ff620c7ac81a4a86c8640e84533b47062d2f16cbb3db7e7598f89->leave($__internal_5559500fa62ff620c7ac81a4a86c8640e84533b47062d2f16cbb3db7e7598f89_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d29d50b23b8ab7f933ade849c7a21bf43d15b52cb87e51a9797a1c11b4a1993e = $this->env->getExtension("native_profiler");
        $__internal_d29d50b23b8ab7f933ade849c7a21bf43d15b52cb87e51a9797a1c11b4a1993e->enter($__internal_d29d50b23b8ab7f933ade849c7a21bf43d15b52cb87e51a9797a1c11b4a1993e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d29d50b23b8ab7f933ade849c7a21bf43d15b52cb87e51a9797a1c11b4a1993e->leave($__internal_d29d50b23b8ab7f933ade849c7a21bf43d15b52cb87e51a9797a1c11b4a1993e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_746067d485d1cea7db5c38db1ae71ead34cb69a85dab9c69035a9f5856dcf182 = $this->env->getExtension("native_profiler");
        $__internal_746067d485d1cea7db5c38db1ae71ead34cb69a85dab9c69035a9f5856dcf182->enter($__internal_746067d485d1cea7db5c38db1ae71ead34cb69a85dab9c69035a9f5856dcf182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_746067d485d1cea7db5c38db1ae71ead34cb69a85dab9c69035a9f5856dcf182->leave($__internal_746067d485d1cea7db5c38db1ae71ead34cb69a85dab9c69035a9f5856dcf182_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_97a150ab184c834a6fdecc265ca9f0c8f4cc2cc271ff7004d9862fd540a9fa71 = $this->env->getExtension("native_profiler");
        $__internal_97a150ab184c834a6fdecc265ca9f0c8f4cc2cc271ff7004d9862fd540a9fa71->enter($__internal_97a150ab184c834a6fdecc265ca9f0c8f4cc2cc271ff7004d9862fd540a9fa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_97a150ab184c834a6fdecc265ca9f0c8f4cc2cc271ff7004d9862fd540a9fa71->leave($__internal_97a150ab184c834a6fdecc265ca9f0c8f4cc2cc271ff7004d9862fd540a9fa71_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1469b1ad8775c5ce9d4f08a6243a084b305368c383f96abf376dfbaa2d6dba24 = $this->env->getExtension("native_profiler");
        $__internal_1469b1ad8775c5ce9d4f08a6243a084b305368c383f96abf376dfbaa2d6dba24->enter($__internal_1469b1ad8775c5ce9d4f08a6243a084b305368c383f96abf376dfbaa2d6dba24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1469b1ad8775c5ce9d4f08a6243a084b305368c383f96abf376dfbaa2d6dba24->leave($__internal_1469b1ad8775c5ce9d4f08a6243a084b305368c383f96abf376dfbaa2d6dba24_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
