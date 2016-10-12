<?php

/* AppBundle::agvoybase.html.twig */
class __TwigTemplate_136ea06d616a735f772b0bbbf23a0131eff90837eb9cab8d65082f05447883ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle::agvoybase.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'navbar' => array($this, 'block_navbar'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'headBanner' => array($this, 'block_headBanner'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98285d9b7df1b4f57e6ddbeed62ada4b2171cbb80ebc722986f588bda036b26a = $this->env->getExtension("native_profiler");
        $__internal_98285d9b7df1b4f57e6ddbeed62ada4b2171cbb80ebc722986f588bda036b26a->enter($__internal_98285d9b7df1b4f57e6ddbeed62ada4b2171cbb80ebc722986f588bda036b26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::agvoybase.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98285d9b7df1b4f57e6ddbeed62ada4b2171cbb80ebc722986f588bda036b26a->leave($__internal_98285d9b7df1b4f57e6ddbeed62ada4b2171cbb80ebc722986f588bda036b26a_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_692554b81d67a15633e226072950a242382e03456f01220c55aac508dac2cf26 = $this->env->getExtension("native_profiler");
        $__internal_692554b81d67a15633e226072950a242382e03456f01220c55aac508dac2cf26->enter($__internal_692554b81d67a15633e226072950a242382e03456f01220c55aac508dac2cf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('navbar', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('headBanner', $context, $blocks);
        // line 28
        echo "
";
        
        $__internal_692554b81d67a15633e226072950a242382e03456f01220c55aac508dac2cf26->leave($__internal_692554b81d67a15633e226072950a242382e03456f01220c55aac508dac2cf26_prof);

    }

    // line 7
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_041c68d64a76c9c78369fc068277fac4d999b283bbb10e6adf571dc421c04f8a = $this->env->getExtension("native_profiler");
        $__internal_041c68d64a76c9c78369fc068277fac4d999b283bbb10e6adf571dc421c04f8a->enter($__internal_041c68d64a76c9c78369fc068277fac4d999b283bbb10e6adf571dc421c04f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 8
        echo "        <nav class=\"navbar\">

            ";
        // line 10
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 22
        echo "        </nav>
    ";
        
        $__internal_041c68d64a76c9c78369fc068277fac4d999b283bbb10e6adf571dc421c04f8a->leave($__internal_041c68d64a76c9c78369fc068277fac4d999b283bbb10e6adf571dc421c04f8a_prof);

    }

    // line 10
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_0e66f54769fb71f9d07547675d26a8fd19126bb2bd688a836e1061294ab1dd74 = $this->env->getExtension("native_profiler");
        $__internal_0e66f54769fb71f9d07547675d26a8fd19126bb2bd688a836e1061294ab1dd74->enter($__internal_0e66f54769fb71f9d07547675d26a8fd19126bb2bd688a836e1061294ab1dd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 11
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("circuit_index");
        echo "\">Circuits</a></li>
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "login\">Login</a></li>
                ";
        // line 21
        echo "            ";
        
        $__internal_0e66f54769fb71f9d07547675d26a8fd19126bb2bd688a836e1061294ab1dd74->leave($__internal_0e66f54769fb71f9d07547675d26a8fd19126bb2bd688a836e1061294ab1dd74_prof);

    }

    // line 25
    public function block_headBanner($context, array $blocks = array())
    {
        $__internal_fcce7832fa88b93d4ead23f45b69b976a8a40b3a6384a7ddfba9ab5c0807103f = $this->env->getExtension("native_profiler");
        $__internal_fcce7832fa88b93d4ead23f45b69b976a8a40b3a6384a7ddfba9ab5c0807103f->enter($__internal_fcce7832fa88b93d4ead23f45b69b976a8a40b3a6384a7ddfba9ab5c0807103f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headBanner"));

        // line 26
        echo "            <h1>Agence de voyage virtuelle</h1>
    ";
        
        $__internal_fcce7832fa88b93d4ead23f45b69b976a8a40b3a6384a7ddfba9ab5c0807103f->leave($__internal_fcce7832fa88b93d4ead23f45b69b976a8a40b3a6384a7ddfba9ab5c0807103f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_af14dce923aa221afc60c6079d3c69021bc932af8c356b5f02915bd4fc9c3d41 = $this->env->getExtension("native_profiler");
        $__internal_af14dce923aa221afc60c6079d3c69021bc932af8c356b5f02915bd4fc9c3d41->enter($__internal_af14dce923aa221afc60c6079d3c69021bc932af8c356b5f02915bd4fc9c3d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        // line 36
        echo " 
";
        
        $__internal_af14dce923aa221afc60c6079d3c69021bc932af8c356b5f02915bd4fc9c3d41->leave($__internal_af14dce923aa221afc60c6079d3c69021bc932af8c356b5f02915bd4fc9c3d41_prof);

    }

    // line 34
    public function block_main($context, array $blocks = array())
    {
        $__internal_f2b5540855608622cc163509ed5a858f3e622180e12ff0874b008e00d75bce15 = $this->env->getExtension("native_profiler");
        $__internal_f2b5540855608622cc163509ed5a858f3e622180e12ff0874b008e00d75bce15->enter($__internal_f2b5540855608622cc163509ed5a858f3e622180e12ff0874b008e00d75bce15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 35
        echo "        
    ";
        
        $__internal_f2b5540855608622cc163509ed5a858f3e622180e12ff0874b008e00d75bce15->leave($__internal_f2b5540855608622cc163509ed5a858f3e622180e12ff0874b008e00d75bce15_prof);

    }

    // line 41
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2802d0b9271370d933acb99529205b35850d6dc34590259dd5653c702626eaeb = $this->env->getExtension("native_profiler");
        $__internal_2802d0b9271370d933acb99529205b35850d6dc34590259dd5653c702626eaeb->enter($__internal_2802d0b9271370d933acb99529205b35850d6dc34590259dd5653c702626eaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 42
        echo "    
";
        
        $__internal_2802d0b9271370d933acb99529205b35850d6dc34590259dd5653c702626eaeb->leave($__internal_2802d0b9271370d933acb99529205b35850d6dc34590259dd5653c702626eaeb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::agvoybase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 42,  155 => 41,  147 => 35,  141 => 34,  133 => 36,  130 => 34,  124 => 33,  116 => 26,  110 => 25,  103 => 21,  99 => 13,  95 => 12,  90 => 11,  84 => 10,  76 => 22,  74 => 10,  70 => 8,  64 => 7,  56 => 28,  54 => 25,  51 => 24,  49 => 7,  46 => 6,  40 => 5,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* */
/* {% block header %}*/
/* */
/*     {% block navbar %}*/
/*         <nav class="navbar">*/
/* */
/*             {% block header_navigation_links %}*/
/*                 <li><a href="{{ path('homepage') }}">Accueil</a></li>*/
/*                 <li><a href="{{ path('circuit_index') }}">Circuits</a></li>*/
/*                 <li><a href="{{ path('homepage') }}login">Login</a></li>*/
/*                 {# */
/*                 {% if is_granted('ROLE_ADMIN') %}*/
/*                     <li>*/
/*                         <a href="{{ path('admin_post_new') }}">Nouveau post</a>                         */
/*                     </li>*/
/*                 {% endif %}*/
/*                 #}*/
/*             {% endblock %}*/
/*         </nav>*/
/*     {% endblock %}*/
/* */
/*     {% block headBanner %}*/
/*             <h1>Agence de voyage virtuelle</h1>*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
/*     */
/* */
/* */
/* {% block body %}*/
/*     {% block main %}*/
/*         */
/*     {% endblock %} */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block footer %}*/
/*     */
/* {% endblock %}*/
