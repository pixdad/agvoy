<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_38b28243377e30d5571f7a8e5876bf8bdd34d0998a2d822eca679dc394e4a1af extends Twig_Template
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
        $__internal_c3d87914f883df342a07b41017df44a5db0fab9ab12c9ad58d5c7ae08357c798 = $this->env->getExtension("native_profiler");
        $__internal_c3d87914f883df342a07b41017df44a5db0fab9ab12c9ad58d5c7ae08357c798->enter($__internal_c3d87914f883df342a07b41017df44a5db0fab9ab12c9ad58d5c7ae08357c798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c3d87914f883df342a07b41017df44a5db0fab9ab12c9ad58d5c7ae08357c798->leave($__internal_c3d87914f883df342a07b41017df44a5db0fab9ab12c9ad58d5c7ae08357c798_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1886ce72f5fd7a2eff8729cb39fdc155da280d5a12292e084b3b9115b02778e0 = $this->env->getExtension("native_profiler");
        $__internal_1886ce72f5fd7a2eff8729cb39fdc155da280d5a12292e084b3b9115b02778e0->enter($__internal_1886ce72f5fd7a2eff8729cb39fdc155da280d5a12292e084b3b9115b02778e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1886ce72f5fd7a2eff8729cb39fdc155da280d5a12292e084b3b9115b02778e0->leave($__internal_1886ce72f5fd7a2eff8729cb39fdc155da280d5a12292e084b3b9115b02778e0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_83773d5f6591ac958d60662371b1720c6a25a50f1b7cd31bcfd8a404f4d607d0 = $this->env->getExtension("native_profiler");
        $__internal_83773d5f6591ac958d60662371b1720c6a25a50f1b7cd31bcfd8a404f4d607d0->enter($__internal_83773d5f6591ac958d60662371b1720c6a25a50f1b7cd31bcfd8a404f4d607d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_83773d5f6591ac958d60662371b1720c6a25a50f1b7cd31bcfd8a404f4d607d0->leave($__internal_83773d5f6591ac958d60662371b1720c6a25a50f1b7cd31bcfd8a404f4d607d0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7c325e4b56d2f384080824bcd146808ae7eca52f4be814fc8064cda9d9d7646a = $this->env->getExtension("native_profiler");
        $__internal_7c325e4b56d2f384080824bcd146808ae7eca52f4be814fc8064cda9d9d7646a->enter($__internal_7c325e4b56d2f384080824bcd146808ae7eca52f4be814fc8064cda9d9d7646a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7c325e4b56d2f384080824bcd146808ae7eca52f4be814fc8064cda9d9d7646a->leave($__internal_7c325e4b56d2f384080824bcd146808ae7eca52f4be814fc8064cda9d9d7646a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
