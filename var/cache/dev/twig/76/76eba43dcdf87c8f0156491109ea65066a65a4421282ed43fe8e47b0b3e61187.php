<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_17de09443a1cfdc0c161610394ec748c3a82ed9fc4430b8f70a6606cde902d2a extends Twig_Template
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
        $__internal_61a155a2f1fa2e78d2fd4b6e40ff8049688dfd58004196744f019d8ad57afd16 = $this->env->getExtension("native_profiler");
        $__internal_61a155a2f1fa2e78d2fd4b6e40ff8049688dfd58004196744f019d8ad57afd16->enter($__internal_61a155a2f1fa2e78d2fd4b6e40ff8049688dfd58004196744f019d8ad57afd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_61a155a2f1fa2e78d2fd4b6e40ff8049688dfd58004196744f019d8ad57afd16->leave($__internal_61a155a2f1fa2e78d2fd4b6e40ff8049688dfd58004196744f019d8ad57afd16_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
