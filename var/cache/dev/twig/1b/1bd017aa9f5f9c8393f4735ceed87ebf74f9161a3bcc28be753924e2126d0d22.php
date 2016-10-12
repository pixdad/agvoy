<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e25fd51ee55933b9d36915f71173185b39b0e3002e6228590f41af7872f9ad13 extends Twig_Template
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
        $__internal_bd0d0f68e46289b786bc427706837b3ac258f1b18f1351a025147d3967802aab = $this->env->getExtension("native_profiler");
        $__internal_bd0d0f68e46289b786bc427706837b3ac258f1b18f1351a025147d3967802aab->enter($__internal_bd0d0f68e46289b786bc427706837b3ac258f1b18f1351a025147d3967802aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_bd0d0f68e46289b786bc427706837b3ac258f1b18f1351a025147d3967802aab->leave($__internal_bd0d0f68e46289b786bc427706837b3ac258f1b18f1351a025147d3967802aab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
