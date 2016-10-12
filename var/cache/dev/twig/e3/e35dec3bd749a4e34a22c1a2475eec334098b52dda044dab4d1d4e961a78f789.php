<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f3396f20d9010b9016d19711fc74207ce66fbf78cfbb5e6e553946409c9fd7ac extends Twig_Template
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
        $__internal_9e3a02bc1813019a53177c1c0353e851fd9ee4a734da74a57d406fd045206757 = $this->env->getExtension("native_profiler");
        $__internal_9e3a02bc1813019a53177c1c0353e851fd9ee4a734da74a57d406fd045206757->enter($__internal_9e3a02bc1813019a53177c1c0353e851fd9ee4a734da74a57d406fd045206757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9e3a02bc1813019a53177c1c0353e851fd9ee4a734da74a57d406fd045206757->leave($__internal_9e3a02bc1813019a53177c1c0353e851fd9ee4a734da74a57d406fd045206757_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
