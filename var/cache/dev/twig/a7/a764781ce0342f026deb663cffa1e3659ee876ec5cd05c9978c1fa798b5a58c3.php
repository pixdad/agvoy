<?php

/* base.html.twig */
class __TwigTemplate_c362a0ad9f4fb29a7ed11ccbc8ba6b8b2e581010b2a6d0edd141e86e63108b75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e59f02e20b2758b26dc395ab73f469b2b57918601d67b041946c9e0ddf2c2ad7 = $this->env->getExtension("native_profiler");
        $__internal_e59f02e20b2758b26dc395ab73f469b2b57918601d67b041946c9e0ddf2c2ad7->enter($__internal_e59f02e20b2758b26dc395ab73f469b2b57918601d67b041946c9e0ddf2c2ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <header>
            ";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 21
        echo "        </header>
        
    \t<div>
            ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        </div>
    \t
        <footer>
            ";
        // line 39
        $this->displayBlock('footer', $context, $blocks);
        // line 42
        echo "        </footer>
        
        ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "    </body>
</html>
";
        
        $__internal_e59f02e20b2758b26dc395ab73f469b2b57918601d67b041946c9e0ddf2c2ad7->leave($__internal_e59f02e20b2758b26dc395ab73f469b2b57918601d67b041946c9e0ddf2c2ad7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_44ffa1884d3a9d91e7dd4993a579e55589fe1c79d15b54624eac3005aee685d6 = $this->env->getExtension("native_profiler");
        $__internal_44ffa1884d3a9d91e7dd4993a579e55589fe1c79d15b54624eac3005aee685d6->enter($__internal_44ffa1884d3a9d91e7dd4993a579e55589fe1c79d15b54624eac3005aee685d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_44ffa1884d3a9d91e7dd4993a579e55589fe1c79d15b54624eac3005aee685d6->leave($__internal_44ffa1884d3a9d91e7dd4993a579e55589fe1c79d15b54624eac3005aee685d6_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_232fc92ec9b9c881c7f80364f5476ea4425a5b7c3e7ecfb69138ca62fb6e22c7 = $this->env->getExtension("native_profiler");
        $__internal_232fc92ec9b9c881c7f80364f5476ea4425a5b7c3e7ecfb69138ca62fb6e22c7->enter($__internal_232fc92ec9b9c881c7f80364f5476ea4425a5b7c3e7ecfb69138ca62fb6e22c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        \t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_232fc92ec9b9c881c7f80364f5476ea4425a5b7c3e7ecfb69138ca62fb6e22c7->leave($__internal_232fc92ec9b9c881c7f80364f5476ea4425a5b7c3e7ecfb69138ca62fb6e22c7_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_a92443a99d1dae5170899692e3f099bb8c321ca5dacf634d343b3faa5c172767 = $this->env->getExtension("native_profiler");
        $__internal_a92443a99d1dae5170899692e3f099bb8c321ca5dacf634d343b3faa5c172767->enter($__internal_a92443a99d1dae5170899692e3f099bb8c321ca5dacf634d343b3faa5c172767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 19
        echo "                <p>HEADER</p>
            ";
        
        $__internal_a92443a99d1dae5170899692e3f099bb8c321ca5dacf634d343b3faa5c172767->leave($__internal_a92443a99d1dae5170899692e3f099bb8c321ca5dacf634d343b3faa5c172767_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_d78b5eb0eff82cbd79a4ffefd4c815dcd2c950b2b012477aa85ffa3329b1c7ab = $this->env->getExtension("native_profiler");
        $__internal_d78b5eb0eff82cbd79a4ffefd4c815dcd2c950b2b012477aa85ffa3329b1c7ab->enter($__internal_d78b5eb0eff82cbd79a4ffefd4c815dcd2c950b2b012477aa85ffa3329b1c7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 27
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 29
        $this->displayBlock('main', $context, $blocks);
        // line 30
        echo "                    </div>
                    
                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 33
        $this->displayBlock('sidebar', $context, $blocks);
        // line 34
        echo "                    </div>
            ";
        
        $__internal_d78b5eb0eff82cbd79a4ffefd4c815dcd2c950b2b012477aa85ffa3329b1c7ab->leave($__internal_d78b5eb0eff82cbd79a4ffefd4c815dcd2c950b2b012477aa85ffa3329b1c7ab_prof);

    }

    // line 29
    public function block_main($context, array $blocks = array())
    {
        $__internal_cfed74e4dba28220cc471aaf141ee5e9b87103eeb9305f959fef6b321ad77e18 = $this->env->getExtension("native_profiler");
        $__internal_cfed74e4dba28220cc471aaf141ee5e9b87103eeb9305f959fef6b321ad77e18->enter($__internal_cfed74e4dba28220cc471aaf141ee5e9b87103eeb9305f959fef6b321ad77e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_cfed74e4dba28220cc471aaf141ee5e9b87103eeb9305f959fef6b321ad77e18->leave($__internal_cfed74e4dba28220cc471aaf141ee5e9b87103eeb9305f959fef6b321ad77e18_prof);

    }

    // line 33
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d0c376bbd6b047cf057003f90dc65e37b936432be6d96f0943162d41747bfbe4 = $this->env->getExtension("native_profiler");
        $__internal_d0c376bbd6b047cf057003f90dc65e37b936432be6d96f0943162d41747bfbe4->enter($__internal_d0c376bbd6b047cf057003f90dc65e37b936432be6d96f0943162d41747bfbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo "SIDEBAR";
        
        $__internal_d0c376bbd6b047cf057003f90dc65e37b936432be6d96f0943162d41747bfbe4->leave($__internal_d0c376bbd6b047cf057003f90dc65e37b936432be6d96f0943162d41747bfbe4_prof);

    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2bd2c5672a5d7429694b5bbf126ced3abf4c5de62deb5bbda4cda7dd59dab1c8 = $this->env->getExtension("native_profiler");
        $__internal_2bd2c5672a5d7429694b5bbf126ced3abf4c5de62deb5bbda4cda7dd59dab1c8->enter($__internal_2bd2c5672a5d7429694b5bbf126ced3abf4c5de62deb5bbda4cda7dd59dab1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 40
        echo "                <p>FOOTER</p>
            ";
        
        $__internal_2bd2c5672a5d7429694b5bbf126ced3abf4c5de62deb5bbda4cda7dd59dab1c8->leave($__internal_2bd2c5672a5d7429694b5bbf126ced3abf4c5de62deb5bbda4cda7dd59dab1c8_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_98af208d472574345f5537ff8e2006279bbc141ad23eb6ee8ec98f4f386b0961 = $this->env->getExtension("native_profiler");
        $__internal_98af208d472574345f5537ff8e2006279bbc141ad23eb6ee8ec98f4f386b0961->enter($__internal_98af208d472574345f5537ff8e2006279bbc141ad23eb6ee8ec98f4f386b0961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "        \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        \t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_98af208d472574345f5537ff8e2006279bbc141ad23eb6ee8ec98f4f386b0961->leave($__internal_98af208d472574345f5537ff8e2006279bbc141ad23eb6ee8ec98f4f386b0961_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 46,  204 => 45,  198 => 44,  190 => 40,  184 => 39,  172 => 33,  161 => 29,  153 => 34,  151 => 33,  146 => 30,  144 => 29,  139 => 27,  135 => 25,  129 => 24,  121 => 19,  115 => 18,  105 => 10,  99 => 9,  87 => 7,  78 => 48,  76 => 44,  72 => 42,  70 => 39,  65 => 36,  63 => 24,  58 => 21,  56 => 18,  48 => 13,  45 => 12,  43 => 9,  38 => 7,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1"/>*/
/*         */
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*         	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />*/
/*         {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* */
/*         <header>*/
/*             {% block header %}*/
/*                 <p>HEADER</p>*/
/*             {% endblock %}*/
/*         </header>*/
/*         */
/*     	<div>*/
/*             {% block body %}*/
/*                 <div class="row">*/
/*                     <div id="main" class="col-sm-9">*/
/*                         {{ include('default/_flash_messages.html.twig') }}*/
/* */
/*                         {% block main %}{% endblock %}*/
/*                     </div>*/
/*                     */
/*                     <div id="sidebar" class="col-sm-3">*/
/*                         {% block sidebar %}SIDEBAR{% endblock %}*/
/*                     </div>*/
/*             {% endblock %}*/
/*         </div>*/
/*     	*/
/*         <footer>*/
/*             {% block footer %}*/
/*                 <p>FOOTER</p>*/
/*             {% endblock %}*/
/*         </footer>*/
/*         */
/*         {% block javascripts %}*/
/*         	<script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*         	<script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
