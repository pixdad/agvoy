<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_b19c20c78783e9b7fb354fe1976c10f66a8a78293e9dc73f48b15074216dca9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_1c9edb277734ac287c78acb3e969adce2eefafccf1c5a4a56c408bbbe1b71548 = $this->env->getExtension("native_profiler");
        $__internal_1c9edb277734ac287c78acb3e969adce2eefafccf1c5a4a56c408bbbe1b71548->enter($__internal_1c9edb277734ac287c78acb3e969adce2eefafccf1c5a4a56c408bbbe1b71548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c9edb277734ac287c78acb3e969adce2eefafccf1c5a4a56c408bbbe1b71548->leave($__internal_1c9edb277734ac287c78acb3e969adce2eefafccf1c5a4a56c408bbbe1b71548_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3fc5b913921be980426a5111ecbdd09fbc54768f5c4e931efecd27f1450318f = $this->env->getExtension("native_profiler");
        $__internal_e3fc5b913921be980426a5111ecbdd09fbc54768f5c4e931efecd27f1450318f->enter($__internal_e3fc5b913921be980426a5111ecbdd09fbc54768f5c4e931efecd27f1450318f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e3fc5b913921be980426a5111ecbdd09fbc54768f5c4e931efecd27f1450318f->leave($__internal_e3fc5b913921be980426a5111ecbdd09fbc54768f5c4e931efecd27f1450318f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
