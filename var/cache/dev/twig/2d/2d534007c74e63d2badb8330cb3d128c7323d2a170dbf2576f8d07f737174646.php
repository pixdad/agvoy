<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f70868558b06449e33251e691894332de4f75094000ddcd840cf712311c07381 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_134ba306bcc1b45ace90e018dd583838248209114ba0d43624ea8a51b8651ae5 = $this->env->getExtension("native_profiler");
        $__internal_134ba306bcc1b45ace90e018dd583838248209114ba0d43624ea8a51b8651ae5->enter($__internal_134ba306bcc1b45ace90e018dd583838248209114ba0d43624ea8a51b8651ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_134ba306bcc1b45ace90e018dd583838248209114ba0d43624ea8a51b8651ae5->leave($__internal_134ba306bcc1b45ace90e018dd583838248209114ba0d43624ea8a51b8651ae5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_94d05a983fce98c75a6f712b71f8fd9a52c14e37acb059c53d5e65635927c5bd = $this->env->getExtension("native_profiler");
        $__internal_94d05a983fce98c75a6f712b71f8fd9a52c14e37acb059c53d5e65635927c5bd->enter($__internal_94d05a983fce98c75a6f712b71f8fd9a52c14e37acb059c53d5e65635927c5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_94d05a983fce98c75a6f712b71f8fd9a52c14e37acb059c53d5e65635927c5bd->leave($__internal_94d05a983fce98c75a6f712b71f8fd9a52c14e37acb059c53d5e65635927c5bd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bd74c2e700f6ac8d36058a9dc82b26c1b531c88f629bc2d774415d04e5da340 = $this->env->getExtension("native_profiler");
        $__internal_6bd74c2e700f6ac8d36058a9dc82b26c1b531c88f629bc2d774415d04e5da340->enter($__internal_6bd74c2e700f6ac8d36058a9dc82b26c1b531c88f629bc2d774415d04e5da340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6bd74c2e700f6ac8d36058a9dc82b26c1b531c88f629bc2d774415d04e5da340->leave($__internal_6bd74c2e700f6ac8d36058a9dc82b26c1b531c88f629bc2d774415d04e5da340_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff5e556838e74d277309f64bb0af8a824e91581e034e4ed9d56628a7449c0dfa = $this->env->getExtension("native_profiler");
        $__internal_ff5e556838e74d277309f64bb0af8a824e91581e034e4ed9d56628a7449c0dfa->enter($__internal_ff5e556838e74d277309f64bb0af8a824e91581e034e4ed9d56628a7449c0dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ff5e556838e74d277309f64bb0af8a824e91581e034e4ed9d56628a7449c0dfa->leave($__internal_ff5e556838e74d277309f64bb0af8a824e91581e034e4ed9d56628a7449c0dfa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
