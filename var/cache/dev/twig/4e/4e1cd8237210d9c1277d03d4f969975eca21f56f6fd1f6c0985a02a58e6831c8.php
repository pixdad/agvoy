<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_bfbfcc91f00191bdd3d07265d5a91ea6218ac18e8315dccbbb3b62b457641120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_eb53020d1e3cba1b61212493781365b9424063fc5b488bc8fe7ddf5fd1395f74 = $this->env->getExtension("native_profiler");
        $__internal_eb53020d1e3cba1b61212493781365b9424063fc5b488bc8fe7ddf5fd1395f74->enter($__internal_eb53020d1e3cba1b61212493781365b9424063fc5b488bc8fe7ddf5fd1395f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb53020d1e3cba1b61212493781365b9424063fc5b488bc8fe7ddf5fd1395f74->leave($__internal_eb53020d1e3cba1b61212493781365b9424063fc5b488bc8fe7ddf5fd1395f74_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f9b1afd0a07239de8e57ecc5c12075c57ba8778ec85425c05711c152c1d72bf = $this->env->getExtension("native_profiler");
        $__internal_4f9b1afd0a07239de8e57ecc5c12075c57ba8778ec85425c05711c152c1d72bf->enter($__internal_4f9b1afd0a07239de8e57ecc5c12075c57ba8778ec85425c05711c152c1d72bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_4f9b1afd0a07239de8e57ecc5c12075c57ba8778ec85425c05711c152c1d72bf->leave($__internal_4f9b1afd0a07239de8e57ecc5c12075c57ba8778ec85425c05711c152c1d72bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
/*     {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
