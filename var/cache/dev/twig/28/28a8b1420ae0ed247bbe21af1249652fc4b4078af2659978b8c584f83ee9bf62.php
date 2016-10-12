<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_fcefb790f03346f433abc1a54d9a86de546790ea9c39bd007a7ed61194cc3a1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d75b5bcf6f1ee5a3e32e6394cde63638cf7e7550f32b978524d571b3fe07990b = $this->env->getExtension("native_profiler");
        $__internal_d75b5bcf6f1ee5a3e32e6394cde63638cf7e7550f32b978524d571b3fe07990b->enter($__internal_d75b5bcf6f1ee5a3e32e6394cde63638cf7e7550f32b978524d571b3fe07990b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d75b5bcf6f1ee5a3e32e6394cde63638cf7e7550f32b978524d571b3fe07990b->leave($__internal_d75b5bcf6f1ee5a3e32e6394cde63638cf7e7550f32b978524d571b3fe07990b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f28c23f6269c6ab41b9051519a079f0e5be008ab3fb0ca0afe0a32c8fb3ba435 = $this->env->getExtension("native_profiler");
        $__internal_f28c23f6269c6ab41b9051519a079f0e5be008ab3fb0ca0afe0a32c8fb3ba435->enter($__internal_f28c23f6269c6ab41b9051519a079f0e5be008ab3fb0ca0afe0a32c8fb3ba435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f28c23f6269c6ab41b9051519a079f0e5be008ab3fb0ca0afe0a32c8fb3ba435->leave($__internal_f28c23f6269c6ab41b9051519a079f0e5be008ab3fb0ca0afe0a32c8fb3ba435_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
