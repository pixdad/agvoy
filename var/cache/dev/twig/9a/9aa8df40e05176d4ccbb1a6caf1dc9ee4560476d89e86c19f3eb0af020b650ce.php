<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_491cf86944a47018c911121d948ce578ee0e85ff0c1b52d8eb019896b03ab3bf extends Twig_Template
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
        $__internal_5501dc1e7ff8bbf5c5cc35fd25e45ae4211b5e28e8236036811ddff8ee4aadb1 = $this->env->getExtension("native_profiler");
        $__internal_5501dc1e7ff8bbf5c5cc35fd25e45ae4211b5e28e8236036811ddff8ee4aadb1->enter($__internal_5501dc1e7ff8bbf5c5cc35fd25e45ae4211b5e28e8236036811ddff8ee4aadb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_5501dc1e7ff8bbf5c5cc35fd25e45ae4211b5e28e8236036811ddff8ee4aadb1->leave($__internal_5501dc1e7ff8bbf5c5cc35fd25e45ae4211b5e28e8236036811ddff8ee4aadb1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
