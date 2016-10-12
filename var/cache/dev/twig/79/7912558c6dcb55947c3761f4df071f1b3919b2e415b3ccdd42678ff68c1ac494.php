<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_79b25bb3000fd0fd6ca2a33d5afbcdc0a9ec62d5de933b901e10daff4b57e65f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_da97ac854f74fe6451a563889f96a80ac81d4e84d54fa065bc05fdc5bf65667f = $this->env->getExtension("native_profiler");
        $__internal_da97ac854f74fe6451a563889f96a80ac81d4e84d54fa065bc05fdc5bf65667f->enter($__internal_da97ac854f74fe6451a563889f96a80ac81d4e84d54fa065bc05fdc5bf65667f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da97ac854f74fe6451a563889f96a80ac81d4e84d54fa065bc05fdc5bf65667f->leave($__internal_da97ac854f74fe6451a563889f96a80ac81d4e84d54fa065bc05fdc5bf65667f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa477d5ebce20e128da868b23ff0ae1f0543247c24c978740929eae4d6e07e05 = $this->env->getExtension("native_profiler");
        $__internal_aa477d5ebce20e128da868b23ff0ae1f0543247c24c978740929eae4d6e07e05->enter($__internal_aa477d5ebce20e128da868b23ff0ae1f0543247c24c978740929eae4d6e07e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_aa477d5ebce20e128da868b23ff0ae1f0543247c24c978740929eae4d6e07e05->leave($__internal_aa477d5ebce20e128da868b23ff0ae1f0543247c24c978740929eae4d6e07e05_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
