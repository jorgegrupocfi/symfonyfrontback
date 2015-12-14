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
        $__internal_3f47bb6f99bf9fb05753af2292bce9174a11b4535f51296f83f628afbdf1cab0 = $this->env->getExtension("native_profiler");
        $__internal_3f47bb6f99bf9fb05753af2292bce9174a11b4535f51296f83f628afbdf1cab0->enter($__internal_3f47bb6f99bf9fb05753af2292bce9174a11b4535f51296f83f628afbdf1cab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3f47bb6f99bf9fb05753af2292bce9174a11b4535f51296f83f628afbdf1cab0->leave($__internal_3f47bb6f99bf9fb05753af2292bce9174a11b4535f51296f83f628afbdf1cab0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce57f8d268f2ef894bbbc44d3ab4c6a9eab54e1c47ee268997f74e206a865b3a = $this->env->getExtension("native_profiler");
        $__internal_ce57f8d268f2ef894bbbc44d3ab4c6a9eab54e1c47ee268997f74e206a865b3a->enter($__internal_ce57f8d268f2ef894bbbc44d3ab4c6a9eab54e1c47ee268997f74e206a865b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome 999!";
        
        $__internal_ce57f8d268f2ef894bbbc44d3ab4c6a9eab54e1c47ee268997f74e206a865b3a->leave($__internal_ce57f8d268f2ef894bbbc44d3ab4c6a9eab54e1c47ee268997f74e206a865b3a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9db585e61ce44eae15f9e614302b88fe9cfe1101b50268b99ac5d6629a9bb4f2 = $this->env->getExtension("native_profiler");
        $__internal_9db585e61ce44eae15f9e614302b88fe9cfe1101b50268b99ac5d6629a9bb4f2->enter($__internal_9db585e61ce44eae15f9e614302b88fe9cfe1101b50268b99ac5d6629a9bb4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9db585e61ce44eae15f9e614302b88fe9cfe1101b50268b99ac5d6629a9bb4f2->leave($__internal_9db585e61ce44eae15f9e614302b88fe9cfe1101b50268b99ac5d6629a9bb4f2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f96143f8020410e09b543661a03d6518ae3b249c00ad5b6835cb526e93e1da83 = $this->env->getExtension("native_profiler");
        $__internal_f96143f8020410e09b543661a03d6518ae3b249c00ad5b6835cb526e93e1da83->enter($__internal_f96143f8020410e09b543661a03d6518ae3b249c00ad5b6835cb526e93e1da83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f96143f8020410e09b543661a03d6518ae3b249c00ad5b6835cb526e93e1da83->leave($__internal_f96143f8020410e09b543661a03d6518ae3b249c00ad5b6835cb526e93e1da83_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f3cbced4b1f91062cc1c915bc29f0c93d4a5772fe7cbf38245a4c51f958cf27 = $this->env->getExtension("native_profiler");
        $__internal_6f3cbced4b1f91062cc1c915bc29f0c93d4a5772fe7cbf38245a4c51f958cf27->enter($__internal_6f3cbced4b1f91062cc1c915bc29f0c93d4a5772fe7cbf38245a4c51f958cf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f3cbced4b1f91062cc1c915bc29f0c93d4a5772fe7cbf38245a4c51f958cf27->leave($__internal_6f3cbced4b1f91062cc1c915bc29f0c93d4a5772fe7cbf38245a4c51f958cf27_prof);

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
/*         <title>{% block title %}Welcome 999!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
