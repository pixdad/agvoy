<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8f4d1f858ef1ae95754446a62dfc36aad63f682bc9217efd44b9bedb96e186ad extends Twig_Template
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
        $__internal_95f379f3c526adc5242f530468671a62dba882a1f0b1abba92421e615e9d88f9 = $this->env->getExtension("native_profiler");
        $__internal_95f379f3c526adc5242f530468671a62dba882a1f0b1abba92421e615e9d88f9->enter($__internal_95f379f3c526adc5242f530468671a62dba882a1f0b1abba92421e615e9d88f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_95f379f3c526adc5242f530468671a62dba882a1f0b1abba92421e615e9d88f9->leave($__internal_95f379f3c526adc5242f530468671a62dba882a1f0b1abba92421e615e9d88f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
