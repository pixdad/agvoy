<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_91a708b4500492a8d4c563ccf4e7614d9f5e188b95124e9cb09151f4bb070561 extends Twig_Template
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
        $__internal_613a7e7828baed81a2ac1b3b3e78b2cc4e60a65754d9d176f7308b1844ef5463 = $this->env->getExtension("native_profiler");
        $__internal_613a7e7828baed81a2ac1b3b3e78b2cc4e60a65754d9d176f7308b1844ef5463->enter($__internal_613a7e7828baed81a2ac1b3b3e78b2cc4e60a65754d9d176f7308b1844ef5463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_613a7e7828baed81a2ac1b3b3e78b2cc4e60a65754d9d176f7308b1844ef5463->leave($__internal_613a7e7828baed81a2ac1b3b3e78b2cc4e60a65754d9d176f7308b1844ef5463_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
