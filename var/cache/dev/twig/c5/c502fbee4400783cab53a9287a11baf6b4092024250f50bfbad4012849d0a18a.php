<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ee20f74205e7ff26bc468f72cab91a1ca95c2fe57890497a6fa3189a4d3fe6df extends Twig_Template
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
        $__internal_07acf7c8579b29a7f407425b3ec13750f82601afdc7cc765fc783bc86b22feb1 = $this->env->getExtension("native_profiler");
        $__internal_07acf7c8579b29a7f407425b3ec13750f82601afdc7cc765fc783bc86b22feb1->enter($__internal_07acf7c8579b29a7f407425b3ec13750f82601afdc7cc765fc783bc86b22feb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_07acf7c8579b29a7f407425b3ec13750f82601afdc7cc765fc783bc86b22feb1->leave($__internal_07acf7c8579b29a7f407425b3ec13750f82601afdc7cc765fc783bc86b22feb1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
