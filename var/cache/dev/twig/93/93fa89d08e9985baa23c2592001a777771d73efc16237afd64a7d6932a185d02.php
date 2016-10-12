<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9e2cc757cc1c84925d58a15410896facb0f9458c413fb8ff3ce5db0c4d858d39 extends Twig_Template
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
        $__internal_8d5189bb7f8bdf581e625663f09df6a6f330942e024ca227f3d34dece9df2137 = $this->env->getExtension("native_profiler");
        $__internal_8d5189bb7f8bdf581e625663f09df6a6f330942e024ca227f3d34dece9df2137->enter($__internal_8d5189bb7f8bdf581e625663f09df6a6f330942e024ca227f3d34dece9df2137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8d5189bb7f8bdf581e625663f09df6a6f330942e024ca227f3d34dece9df2137->leave($__internal_8d5189bb7f8bdf581e625663f09df6a6f330942e024ca227f3d34dece9df2137_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
