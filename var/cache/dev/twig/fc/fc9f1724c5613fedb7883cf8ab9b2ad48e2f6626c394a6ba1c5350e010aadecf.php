<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2a3b4bf95fcd32f25000ba5d09310e94bed99fff983dc7fb126cc76af221b9d7 extends Twig_Template
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
        $__internal_ee9fffabde65b69c5c61901f2b006bc88180ae178b506e86970d5ed0520bfc35 = $this->env->getExtension("native_profiler");
        $__internal_ee9fffabde65b69c5c61901f2b006bc88180ae178b506e86970d5ed0520bfc35->enter($__internal_ee9fffabde65b69c5c61901f2b006bc88180ae178b506e86970d5ed0520bfc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ee9fffabde65b69c5c61901f2b006bc88180ae178b506e86970d5ed0520bfc35->leave($__internal_ee9fffabde65b69c5c61901f2b006bc88180ae178b506e86970d5ed0520bfc35_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
