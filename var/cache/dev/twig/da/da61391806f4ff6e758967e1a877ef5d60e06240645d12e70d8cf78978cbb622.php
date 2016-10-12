<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_b61f2226408da19b5b792b5d00fa2e13586bcb2c2760972790e480666947a134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_ce357488c412ca8ac0e4a5e5eb3cae7fcef2cbdcff7c1da61396a9ede35af7e2 = $this->env->getExtension("native_profiler");
        $__internal_ce357488c412ca8ac0e4a5e5eb3cae7fcef2cbdcff7c1da61396a9ede35af7e2->enter($__internal_ce357488c412ca8ac0e4a5e5eb3cae7fcef2cbdcff7c1da61396a9ede35af7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce357488c412ca8ac0e4a5e5eb3cae7fcef2cbdcff7c1da61396a9ede35af7e2->leave($__internal_ce357488c412ca8ac0e4a5e5eb3cae7fcef2cbdcff7c1da61396a9ede35af7e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a227c01bb19b83423bee58361f93b241a1a6411873078e71f669fd8a42295fe = $this->env->getExtension("native_profiler");
        $__internal_7a227c01bb19b83423bee58361f93b241a1a6411873078e71f669fd8a42295fe->enter($__internal_7a227c01bb19b83423bee58361f93b241a1a6411873078e71f669fd8a42295fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_7a227c01bb19b83423bee58361f93b241a1a6411873078e71f669fd8a42295fe->leave($__internal_7a227c01bb19b83423bee58361f93b241a1a6411873078e71f669fd8a42295fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
