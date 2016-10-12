<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b13ca2c83058f8fee221f6c01bc42d2a151075ef7a6a3be168c87f9347835528 extends Twig_Template
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
        $__internal_7023063c0289fe6be708d1e8b3a672de8b4b73050c8c49329fac32e10ec94341 = $this->env->getExtension("native_profiler");
        $__internal_7023063c0289fe6be708d1e8b3a672de8b4b73050c8c49329fac32e10ec94341->enter($__internal_7023063c0289fe6be708d1e8b3a672de8b4b73050c8c49329fac32e10ec94341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7023063c0289fe6be708d1e8b3a672de8b4b73050c8c49329fac32e10ec94341->leave($__internal_7023063c0289fe6be708d1e8b3a672de8b4b73050c8c49329fac32e10ec94341_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
