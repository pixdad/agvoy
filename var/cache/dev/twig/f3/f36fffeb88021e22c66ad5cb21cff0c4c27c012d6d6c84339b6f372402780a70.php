<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_bfc623160d9a4153da47eb32a8de3e18fceaa62894be20e3f4d903f2c06e2506 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf624154cd5a5ffd15b4ed9603bb970fc3f2dfcab84aec5a5d27417f140a3f67 = $this->env->getExtension("native_profiler");
        $__internal_cf624154cd5a5ffd15b4ed9603bb970fc3f2dfcab84aec5a5d27417f140a3f67->enter($__internal_cf624154cd5a5ffd15b4ed9603bb970fc3f2dfcab84aec5a5d27417f140a3f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf624154cd5a5ffd15b4ed9603bb970fc3f2dfcab84aec5a5d27417f140a3f67->leave($__internal_cf624154cd5a5ffd15b4ed9603bb970fc3f2dfcab84aec5a5d27417f140a3f67_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d17bd607ff9d3634f52abc487c976033c93200bd1a3bdd9ffdd2d00d50cb6cd8 = $this->env->getExtension("native_profiler");
        $__internal_d17bd607ff9d3634f52abc487c976033c93200bd1a3bdd9ffdd2d00d50cb6cd8->enter($__internal_d17bd607ff9d3634f52abc487c976033c93200bd1a3bdd9ffdd2d00d50cb6cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d17bd607ff9d3634f52abc487c976033c93200bd1a3bdd9ffdd2d00d50cb6cd8->leave($__internal_d17bd607ff9d3634f52abc487c976033c93200bd1a3bdd9ffdd2d00d50cb6cd8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
