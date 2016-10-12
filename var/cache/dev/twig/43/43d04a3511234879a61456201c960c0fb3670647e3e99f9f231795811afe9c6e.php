<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_39370a777ef1f2a36836d3546ca2ff58b353df39b80602c829a81b1f0c1aea10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_c86041c0b02ed852bcd2ea270344bb40cc2fee174808f7044ca1378f2740b114 = $this->env->getExtension("native_profiler");
        $__internal_c86041c0b02ed852bcd2ea270344bb40cc2fee174808f7044ca1378f2740b114->enter($__internal_c86041c0b02ed852bcd2ea270344bb40cc2fee174808f7044ca1378f2740b114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c86041c0b02ed852bcd2ea270344bb40cc2fee174808f7044ca1378f2740b114->leave($__internal_c86041c0b02ed852bcd2ea270344bb40cc2fee174808f7044ca1378f2740b114_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_074228fa0e4647ed0cab2b6bb064e5ba4e4a2edae26da330faf1dbb83451f591 = $this->env->getExtension("native_profiler");
        $__internal_074228fa0e4647ed0cab2b6bb064e5ba4e4a2edae26da330faf1dbb83451f591->enter($__internal_074228fa0e4647ed0cab2b6bb064e5ba4e4a2edae26da330faf1dbb83451f591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_074228fa0e4647ed0cab2b6bb064e5ba4e4a2edae26da330faf1dbb83451f591->leave($__internal_074228fa0e4647ed0cab2b6bb064e5ba4e4a2edae26da330faf1dbb83451f591_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
