<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_9c6387b65aaaa5b796fc7a725b6ee47a8c1a70f847cd55ca23eca4c017a15df2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_8e4d96732f78e397e6d1982dc563a5491538a2084ace9aef846891d3af750a31 = $this->env->getExtension("native_profiler");
        $__internal_8e4d96732f78e397e6d1982dc563a5491538a2084ace9aef846891d3af750a31->enter($__internal_8e4d96732f78e397e6d1982dc563a5491538a2084ace9aef846891d3af750a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e4d96732f78e397e6d1982dc563a5491538a2084ace9aef846891d3af750a31->leave($__internal_8e4d96732f78e397e6d1982dc563a5491538a2084ace9aef846891d3af750a31_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8169bd10398688bc9a5a6fa150335cbad5fef19bad7f9000d57fa043c5079d43 = $this->env->getExtension("native_profiler");
        $__internal_8169bd10398688bc9a5a6fa150335cbad5fef19bad7f9000d57fa043c5079d43->enter($__internal_8169bd10398688bc9a5a6fa150335cbad5fef19bad7f9000d57fa043c5079d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8169bd10398688bc9a5a6fa150335cbad5fef19bad7f9000d57fa043c5079d43->leave($__internal_8169bd10398688bc9a5a6fa150335cbad5fef19bad7f9000d57fa043c5079d43_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
