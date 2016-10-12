<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_6a16d28d75bbaa1b703646966140b18f68f52bd50597c2437c171fd838784ce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_102b2487c44a98415aec3742037035ea7a6e55a4a62298a19af4559dfe3252bc = $this->env->getExtension("native_profiler");
        $__internal_102b2487c44a98415aec3742037035ea7a6e55a4a62298a19af4559dfe3252bc->enter($__internal_102b2487c44a98415aec3742037035ea7a6e55a4a62298a19af4559dfe3252bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_102b2487c44a98415aec3742037035ea7a6e55a4a62298a19af4559dfe3252bc->leave($__internal_102b2487c44a98415aec3742037035ea7a6e55a4a62298a19af4559dfe3252bc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_853c2eca4ce4b536f3241d3a0e5f3e4da3e371bfba011f6feb4d885ef622aa76 = $this->env->getExtension("native_profiler");
        $__internal_853c2eca4ce4b536f3241d3a0e5f3e4da3e371bfba011f6feb4d885ef622aa76->enter($__internal_853c2eca4ce4b536f3241d3a0e5f3e4da3e371bfba011f6feb4d885ef622aa76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_853c2eca4ce4b536f3241d3a0e5f3e4da3e371bfba011f6feb4d885ef622aa76->leave($__internal_853c2eca4ce4b536f3241d3a0e5f3e4da3e371bfba011f6feb4d885ef622aa76_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
