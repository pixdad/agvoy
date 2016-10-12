<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_854afc94f5fc33730ba7d995b1be7802a0227f4bb632b2691b5fb45888266795 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6df00e0209e3f6aac383f9564eb97037e3442979b3c2bb3ee0c7e7515f21905 = $this->env->getExtension("native_profiler");
        $__internal_b6df00e0209e3f6aac383f9564eb97037e3442979b3c2bb3ee0c7e7515f21905->enter($__internal_b6df00e0209e3f6aac383f9564eb97037e3442979b3c2bb3ee0c7e7515f21905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6df00e0209e3f6aac383f9564eb97037e3442979b3c2bb3ee0c7e7515f21905->leave($__internal_b6df00e0209e3f6aac383f9564eb97037e3442979b3c2bb3ee0c7e7515f21905_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d13264b4da3538824449c29aa975616fff76f8de992893a5011cd174165871aa = $this->env->getExtension("native_profiler");
        $__internal_d13264b4da3538824449c29aa975616fff76f8de992893a5011cd174165871aa->enter($__internal_d13264b4da3538824449c29aa975616fff76f8de992893a5011cd174165871aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d13264b4da3538824449c29aa975616fff76f8de992893a5011cd174165871aa->leave($__internal_d13264b4da3538824449c29aa975616fff76f8de992893a5011cd174165871aa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84ee12fef16f26e97e4edfecdae5bf1a2f9d64bd0a6caed1bc38bc1a183302c4 = $this->env->getExtension("native_profiler");
        $__internal_84ee12fef16f26e97e4edfecdae5bf1a2f9d64bd0a6caed1bc38bc1a183302c4->enter($__internal_84ee12fef16f26e97e4edfecdae5bf1a2f9d64bd0a6caed1bc38bc1a183302c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_84ee12fef16f26e97e4edfecdae5bf1a2f9d64bd0a6caed1bc38bc1a183302c4->leave($__internal_84ee12fef16f26e97e4edfecdae5bf1a2f9d64bd0a6caed1bc38bc1a183302c4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d91c0793a57bc01d8a1b61394f9f6d26600f1bc39cf5f765068a238d0b7ae8e = $this->env->getExtension("native_profiler");
        $__internal_5d91c0793a57bc01d8a1b61394f9f6d26600f1bc39cf5f765068a238d0b7ae8e->enter($__internal_5d91c0793a57bc01d8a1b61394f9f6d26600f1bc39cf5f765068a238d0b7ae8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5d91c0793a57bc01d8a1b61394f9f6d26600f1bc39cf5f765068a238d0b7ae8e->leave($__internal_5d91c0793a57bc01d8a1b61394f9f6d26600f1bc39cf5f765068a238d0b7ae8e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
