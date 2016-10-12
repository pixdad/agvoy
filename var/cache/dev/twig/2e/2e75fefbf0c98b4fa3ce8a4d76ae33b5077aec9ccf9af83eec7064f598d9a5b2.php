<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_8164ca9b86e15da8ae2ed7f9cb88b4b8a8db74dc7efdb6ab16ad8d2a4e21b5ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_ac62401ee6be755af4bb982c18658763198446c39bf9d4302b1fc9d09795f5c8 = $this->env->getExtension("native_profiler");
        $__internal_ac62401ee6be755af4bb982c18658763198446c39bf9d4302b1fc9d09795f5c8->enter($__internal_ac62401ee6be755af4bb982c18658763198446c39bf9d4302b1fc9d09795f5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac62401ee6be755af4bb982c18658763198446c39bf9d4302b1fc9d09795f5c8->leave($__internal_ac62401ee6be755af4bb982c18658763198446c39bf9d4302b1fc9d09795f5c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00170de53752637c5a682b1134b4282c972d0e235c485cdec5583a55ac23eb2a = $this->env->getExtension("native_profiler");
        $__internal_00170de53752637c5a682b1134b4282c972d0e235c485cdec5583a55ac23eb2a->enter($__internal_00170de53752637c5a682b1134b4282c972d0e235c485cdec5583a55ac23eb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_00170de53752637c5a682b1134b4282c972d0e235c485cdec5583a55ac23eb2a->leave($__internal_00170de53752637c5a682b1134b4282c972d0e235c485cdec5583a55ac23eb2a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
