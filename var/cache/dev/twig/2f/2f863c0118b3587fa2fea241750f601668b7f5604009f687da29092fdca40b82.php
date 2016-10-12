<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0d6bdb358b26b5db42d0f2e8bf5b025477bbc9087036fb85fb6b0e443e6d7d90 extends Twig_Template
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
        $__internal_a65ad77f3e10ee6d7f1e67f63a0f6a23ee67dbd093c3a6786236dd4dd313c5b4 = $this->env->getExtension("native_profiler");
        $__internal_a65ad77f3e10ee6d7f1e67f63a0f6a23ee67dbd093c3a6786236dd4dd313c5b4->enter($__internal_a65ad77f3e10ee6d7f1e67f63a0f6a23ee67dbd093c3a6786236dd4dd313c5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a65ad77f3e10ee6d7f1e67f63a0f6a23ee67dbd093c3a6786236dd4dd313c5b4->leave($__internal_a65ad77f3e10ee6d7f1e67f63a0f6a23ee67dbd093c3a6786236dd4dd313c5b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
