<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_80073f2089586bd8e0f272b8d034d031c1cb7d9db8509e8199fb1c30d110e057 extends Twig_Template
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
        $__internal_87873d68b3e3bf0f8305309c3dc8ca667313975799e0737b3cc287855ce8412d = $this->env->getExtension("native_profiler");
        $__internal_87873d68b3e3bf0f8305309c3dc8ca667313975799e0737b3cc287855ce8412d->enter($__internal_87873d68b3e3bf0f8305309c3dc8ca667313975799e0737b3cc287855ce8412d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_87873d68b3e3bf0f8305309c3dc8ca667313975799e0737b3cc287855ce8412d->leave($__internal_87873d68b3e3bf0f8305309c3dc8ca667313975799e0737b3cc287855ce8412d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
