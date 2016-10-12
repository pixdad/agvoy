<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_edfa265213ac83d90989fbf5faeee134fa92be90e87155b769c93d174a7d760f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_a3004395ddcd3c5602c3a183974e838f242add558d0c799d5202cf2a82ceb77f = $this->env->getExtension("native_profiler");
        $__internal_a3004395ddcd3c5602c3a183974e838f242add558d0c799d5202cf2a82ceb77f->enter($__internal_a3004395ddcd3c5602c3a183974e838f242add558d0c799d5202cf2a82ceb77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3004395ddcd3c5602c3a183974e838f242add558d0c799d5202cf2a82ceb77f->leave($__internal_a3004395ddcd3c5602c3a183974e838f242add558d0c799d5202cf2a82ceb77f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54118fd26ccb83a71dbc19331ef7a32e926acfcd141405442a92c514a1968414 = $this->env->getExtension("native_profiler");
        $__internal_54118fd26ccb83a71dbc19331ef7a32e926acfcd141405442a92c514a1968414->enter($__internal_54118fd26ccb83a71dbc19331ef7a32e926acfcd141405442a92c514a1968414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_54118fd26ccb83a71dbc19331ef7a32e926acfcd141405442a92c514a1968414->leave($__internal_54118fd26ccb83a71dbc19331ef7a32e926acfcd141405442a92c514a1968414_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
