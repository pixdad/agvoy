<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_64cf52289ddeaa9814392c731100bb113b5875f8ca521531cd51243992e5a1cf extends Twig_Template
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
        $__internal_b08090a85a15a00468c90e2fff3b24b2cc65f48fd6fc9eb62de7e55f6c1c39ad = $this->env->getExtension("native_profiler");
        $__internal_b08090a85a15a00468c90e2fff3b24b2cc65f48fd6fc9eb62de7e55f6c1c39ad->enter($__internal_b08090a85a15a00468c90e2fff3b24b2cc65f48fd6fc9eb62de7e55f6c1c39ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b08090a85a15a00468c90e2fff3b24b2cc65f48fd6fc9eb62de7e55f6c1c39ad->leave($__internal_b08090a85a15a00468c90e2fff3b24b2cc65f48fd6fc9eb62de7e55f6c1c39ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
