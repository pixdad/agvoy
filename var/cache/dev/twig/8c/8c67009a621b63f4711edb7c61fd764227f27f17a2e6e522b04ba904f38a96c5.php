<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_bea3d61f8caa11e911d72ea43dab34bca8eb1b1d0ac99b205d85dd84c9566625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_5c1cd4c8a82eac2204f585657e94e02c0751094f9ffe49bc868eb465ac4cdf1e = $this->env->getExtension("native_profiler");
        $__internal_5c1cd4c8a82eac2204f585657e94e02c0751094f9ffe49bc868eb465ac4cdf1e->enter($__internal_5c1cd4c8a82eac2204f585657e94e02c0751094f9ffe49bc868eb465ac4cdf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c1cd4c8a82eac2204f585657e94e02c0751094f9ffe49bc868eb465ac4cdf1e->leave($__internal_5c1cd4c8a82eac2204f585657e94e02c0751094f9ffe49bc868eb465ac4cdf1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1a3c9bc67f165cb90a120aae64effda07f4ed545219f46b625f5a858bc6b409 = $this->env->getExtension("native_profiler");
        $__internal_f1a3c9bc67f165cb90a120aae64effda07f4ed545219f46b625f5a858bc6b409->enter($__internal_f1a3c9bc67f165cb90a120aae64effda07f4ed545219f46b625f5a858bc6b409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_f1a3c9bc67f165cb90a120aae64effda07f4ed545219f46b625f5a858bc6b409->leave($__internal_f1a3c9bc67f165cb90a120aae64effda07f4ed545219f46b625f5a858bc6b409_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
