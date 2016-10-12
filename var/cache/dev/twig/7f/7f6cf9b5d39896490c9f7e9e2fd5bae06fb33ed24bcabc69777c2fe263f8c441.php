<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_970e5b185e8a39a15403fdec56f60ee0b6fbac3a1798ccce5f947e9f3b608e95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a7b7f37714d4037bce44a49435658943c6ae7327d3dcd245f25719ed0bba16e = $this->env->getExtension("native_profiler");
        $__internal_7a7b7f37714d4037bce44a49435658943c6ae7327d3dcd245f25719ed0bba16e->enter($__internal_7a7b7f37714d4037bce44a49435658943c6ae7327d3dcd245f25719ed0bba16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7a7b7f37714d4037bce44a49435658943c6ae7327d3dcd245f25719ed0bba16e->leave($__internal_7a7b7f37714d4037bce44a49435658943c6ae7327d3dcd245f25719ed0bba16e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
