<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_702bc38de10bce6c57dcb24fccd153e03fc4d4e5e0deee4233247bd7cd1ee769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_34d9a4d7cc9cc7f5d01ff3c7b65ef1c899a9172bf69dc46613a3afd1818ac1bd = $this->env->getExtension("native_profiler");
        $__internal_34d9a4d7cc9cc7f5d01ff3c7b65ef1c899a9172bf69dc46613a3afd1818ac1bd->enter($__internal_34d9a4d7cc9cc7f5d01ff3c7b65ef1c899a9172bf69dc46613a3afd1818ac1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34d9a4d7cc9cc7f5d01ff3c7b65ef1c899a9172bf69dc46613a3afd1818ac1bd->leave($__internal_34d9a4d7cc9cc7f5d01ff3c7b65ef1c899a9172bf69dc46613a3afd1818ac1bd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b14ad09494f07dbf844dda2885e7166b5cabf21df7303a51d8b034a5d959a4e9 = $this->env->getExtension("native_profiler");
        $__internal_b14ad09494f07dbf844dda2885e7166b5cabf21df7303a51d8b034a5d959a4e9->enter($__internal_b14ad09494f07dbf844dda2885e7166b5cabf21df7303a51d8b034a5d959a4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b14ad09494f07dbf844dda2885e7166b5cabf21df7303a51d8b034a5d959a4e9->leave($__internal_b14ad09494f07dbf844dda2885e7166b5cabf21df7303a51d8b034a5d959a4e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
