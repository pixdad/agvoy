<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_33148973ce25dd304078d4cca16996ea241bff6edc7072a626620b5c1c3486d9 extends Twig_Template
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
        $__internal_27cf35515f69808a6aa663b14f535ed956fe7288daa766fdc2917208a40a286d = $this->env->getExtension("native_profiler");
        $__internal_27cf35515f69808a6aa663b14f535ed956fe7288daa766fdc2917208a40a286d->enter($__internal_27cf35515f69808a6aa663b14f535ed956fe7288daa766fdc2917208a40a286d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_27cf35515f69808a6aa663b14f535ed956fe7288daa766fdc2917208a40a286d->leave($__internal_27cf35515f69808a6aa663b14f535ed956fe7288daa766fdc2917208a40a286d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
