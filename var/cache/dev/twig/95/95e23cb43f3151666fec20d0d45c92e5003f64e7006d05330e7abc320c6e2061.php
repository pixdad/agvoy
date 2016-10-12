<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_aa190af99c4d35174de69beacb35bdf35542dbab13e70781350f48166f5ef277 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a7544f28aa87eecf745bd4cfcbba9a6277db99f9569aad0c0c5eb319973d967 = $this->env->getExtension("native_profiler");
        $__internal_9a7544f28aa87eecf745bd4cfcbba9a6277db99f9569aad0c0c5eb319973d967->enter($__internal_9a7544f28aa87eecf745bd4cfcbba9a6277db99f9569aad0c0c5eb319973d967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9a7544f28aa87eecf745bd4cfcbba9a6277db99f9569aad0c0c5eb319973d967->leave($__internal_9a7544f28aa87eecf745bd4cfcbba9a6277db99f9569aad0c0c5eb319973d967_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_af0859b8d777f7d981d97633472fa6407e74f661fa9fd2e25d3748519f67d192 = $this->env->getExtension("native_profiler");
        $__internal_af0859b8d777f7d981d97633472fa6407e74f661fa9fd2e25d3748519f67d192->enter($__internal_af0859b8d777f7d981d97633472fa6407e74f661fa9fd2e25d3748519f67d192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_af0859b8d777f7d981d97633472fa6407e74f661fa9fd2e25d3748519f67d192->leave($__internal_af0859b8d777f7d981d97633472fa6407e74f661fa9fd2e25d3748519f67d192_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_05b8b477f0cb206b1d455ee6424ba02925a86c1499d4411ac4cfde881b6aab79 = $this->env->getExtension("native_profiler");
        $__internal_05b8b477f0cb206b1d455ee6424ba02925a86c1499d4411ac4cfde881b6aab79->enter($__internal_05b8b477f0cb206b1d455ee6424ba02925a86c1499d4411ac4cfde881b6aab79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_05b8b477f0cb206b1d455ee6424ba02925a86c1499d4411ac4cfde881b6aab79->leave($__internal_05b8b477f0cb206b1d455ee6424ba02925a86c1499d4411ac4cfde881b6aab79_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c7ab9444402d94067dfa9bd513d2caf3e9f016b26061b8d8d3674b475841d47d = $this->env->getExtension("native_profiler");
        $__internal_c7ab9444402d94067dfa9bd513d2caf3e9f016b26061b8d8d3674b475841d47d->enter($__internal_c7ab9444402d94067dfa9bd513d2caf3e9f016b26061b8d8d3674b475841d47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c7ab9444402d94067dfa9bd513d2caf3e9f016b26061b8d8d3674b475841d47d->leave($__internal_c7ab9444402d94067dfa9bd513d2caf3e9f016b26061b8d8d3674b475841d47d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
