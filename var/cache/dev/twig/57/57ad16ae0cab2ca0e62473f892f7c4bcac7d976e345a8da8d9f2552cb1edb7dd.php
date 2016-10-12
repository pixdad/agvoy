<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_32a510ae63c58f5e4009ec06d601e516a687efb21693d52b1994d82a4a5d533b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_cda7560b2c180ec08e16c99ed7851eb4ced919403b96f1138620649da13d6ea6 = $this->env->getExtension("native_profiler");
        $__internal_cda7560b2c180ec08e16c99ed7851eb4ced919403b96f1138620649da13d6ea6->enter($__internal_cda7560b2c180ec08e16c99ed7851eb4ced919403b96f1138620649da13d6ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cda7560b2c180ec08e16c99ed7851eb4ced919403b96f1138620649da13d6ea6->leave($__internal_cda7560b2c180ec08e16c99ed7851eb4ced919403b96f1138620649da13d6ea6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b88dc8afffc99cccde633cdd6d6f8ba7f4e333db413702628e6ec1137f8f50b2 = $this->env->getExtension("native_profiler");
        $__internal_b88dc8afffc99cccde633cdd6d6f8ba7f4e333db413702628e6ec1137f8f50b2->enter($__internal_b88dc8afffc99cccde633cdd6d6f8ba7f4e333db413702628e6ec1137f8f50b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b88dc8afffc99cccde633cdd6d6f8ba7f4e333db413702628e6ec1137f8f50b2->leave($__internal_b88dc8afffc99cccde633cdd6d6f8ba7f4e333db413702628e6ec1137f8f50b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
