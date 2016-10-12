<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1c8ddb599a497374b03191facc2488de11dbb545e74a32a4b0b58cb625f6d541 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c147540d09c283bac4c2926056e028dfccd97f0d1c5de5263240374a7f134e1 = $this->env->getExtension("native_profiler");
        $__internal_8c147540d09c283bac4c2926056e028dfccd97f0d1c5de5263240374a7f134e1->enter($__internal_8c147540d09c283bac4c2926056e028dfccd97f0d1c5de5263240374a7f134e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c147540d09c283bac4c2926056e028dfccd97f0d1c5de5263240374a7f134e1->leave($__internal_8c147540d09c283bac4c2926056e028dfccd97f0d1c5de5263240374a7f134e1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8265eee0ac6539f8d5914ac83cf65e474bd640114eff40f2fcffd326adf7a5ac = $this->env->getExtension("native_profiler");
        $__internal_8265eee0ac6539f8d5914ac83cf65e474bd640114eff40f2fcffd326adf7a5ac->enter($__internal_8265eee0ac6539f8d5914ac83cf65e474bd640114eff40f2fcffd326adf7a5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8265eee0ac6539f8d5914ac83cf65e474bd640114eff40f2fcffd326adf7a5ac->leave($__internal_8265eee0ac6539f8d5914ac83cf65e474bd640114eff40f2fcffd326adf7a5ac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe0f46f064045d948e101085a92cbc0919b47b6efda8b02929c39d74de84a771 = $this->env->getExtension("native_profiler");
        $__internal_fe0f46f064045d948e101085a92cbc0919b47b6efda8b02929c39d74de84a771->enter($__internal_fe0f46f064045d948e101085a92cbc0919b47b6efda8b02929c39d74de84a771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_fe0f46f064045d948e101085a92cbc0919b47b6efda8b02929c39d74de84a771->leave($__internal_fe0f46f064045d948e101085a92cbc0919b47b6efda8b02929c39d74de84a771_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
