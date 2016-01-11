<?php

/* :default:index.html.twig */
class __TwigTemplate_f8fcda191c1a6415642100fcb00d2b8269f96f1b00d729d052b89acc202f1c9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9a05a18190b655e4dce5351663287ad74e7ecb6b1afb5d91807175950b9ec36 = $this->env->getExtension("native_profiler");
        $__internal_f9a05a18190b655e4dce5351663287ad74e7ecb6b1afb5d91807175950b9ec36->enter($__internal_f9a05a18190b655e4dce5351663287ad74e7ecb6b1afb5d91807175950b9ec36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9a05a18190b655e4dce5351663287ad74e7ecb6b1afb5d91807175950b9ec36->leave($__internal_f9a05a18190b655e4dce5351663287ad74e7ecb6b1afb5d91807175950b9ec36_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_596d23501fde672e89fd2ea8852829f4839343ddc478efbb5577bc988f14976e = $this->env->getExtension("native_profiler");
        $__internal_596d23501fde672e89fd2ea8852829f4839343ddc478efbb5577bc988f14976e->enter($__internal_596d23501fde672e89fd2ea8852829f4839343ddc478efbb5577bc988f14976e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
        
            <div>
            \teste es el index de mi site
            </div>
            
        </div>
    </div>
";
        
        $__internal_596d23501fde672e89fd2ea8852829f4839343ddc478efbb5577bc988f14976e->leave($__internal_596d23501fde672e89fd2ea8852829f4839343ddc478efbb5577bc988f14976e_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*         */
/*             <div>*/
/*             	este es el index de mi site*/
/*             </div>*/
/*             */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
