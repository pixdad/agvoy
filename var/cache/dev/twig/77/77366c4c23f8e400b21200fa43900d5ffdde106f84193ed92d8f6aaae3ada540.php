<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_732627caa503e04b8e8771cfc1e116be98ca45aa6e57880526819155862bffda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25c6b114c8ea5284a178b1e283e1081764aad3bb79c86c846e1b58c0db075b25 = $this->env->getExtension("native_profiler");
        $__internal_25c6b114c8ea5284a178b1e283e1081764aad3bb79c86c846e1b58c0db075b25->enter($__internal_25c6b114c8ea5284a178b1e283e1081764aad3bb79c86c846e1b58c0db075b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_25c6b114c8ea5284a178b1e283e1081764aad3bb79c86c846e1b58c0db075b25->leave($__internal_25c6b114c8ea5284a178b1e283e1081764aad3bb79c86c846e1b58c0db075b25_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f6706e88cfc2b79184e1dedc8095adadc1e80bba7ba9faf536d477818690c2c = $this->env->getExtension("native_profiler");
        $__internal_6f6706e88cfc2b79184e1dedc8095adadc1e80bba7ba9faf536d477818690c2c->enter($__internal_6f6706e88cfc2b79184e1dedc8095adadc1e80bba7ba9faf536d477818690c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6f6706e88cfc2b79184e1dedc8095adadc1e80bba7ba9faf536d477818690c2c->leave($__internal_6f6706e88cfc2b79184e1dedc8095adadc1e80bba7ba9faf536d477818690c2c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
