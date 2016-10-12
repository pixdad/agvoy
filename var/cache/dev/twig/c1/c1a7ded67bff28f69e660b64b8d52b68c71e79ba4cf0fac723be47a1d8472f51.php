<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_52986551bab79491598c9722e4d7a96c527c01359e4a0da67997ec805d721a3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_e8f7683dfdc15fedc68de03a4a19d93ba057f4423cf2cb19efb94987d97cbde8 = $this->env->getExtension("native_profiler");
        $__internal_e8f7683dfdc15fedc68de03a4a19d93ba057f4423cf2cb19efb94987d97cbde8->enter($__internal_e8f7683dfdc15fedc68de03a4a19d93ba057f4423cf2cb19efb94987d97cbde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8f7683dfdc15fedc68de03a4a19d93ba057f4423cf2cb19efb94987d97cbde8->leave($__internal_e8f7683dfdc15fedc68de03a4a19d93ba057f4423cf2cb19efb94987d97cbde8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9b506a16b37cfb7f68a0ad1299ba911603b4f8a18b95f0448a9664ef2d54d01 = $this->env->getExtension("native_profiler");
        $__internal_c9b506a16b37cfb7f68a0ad1299ba911603b4f8a18b95f0448a9664ef2d54d01->enter($__internal_c9b506a16b37cfb7f68a0ad1299ba911603b4f8a18b95f0448a9664ef2d54d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c9b506a16b37cfb7f68a0ad1299ba911603b4f8a18b95f0448a9664ef2d54d01->leave($__internal_c9b506a16b37cfb7f68a0ad1299ba911603b4f8a18b95f0448a9664ef2d54d01_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
