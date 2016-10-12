<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8f58be12d5bdd19191aa686e7033ffc0acf14f131600ad58b010f1a3d6538e08 extends Twig_Template
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
        $__internal_406ce182791c444c84b67ede47cd3d2131e98e4d138f4cebad19e10c22898f62 = $this->env->getExtension("native_profiler");
        $__internal_406ce182791c444c84b67ede47cd3d2131e98e4d138f4cebad19e10c22898f62->enter($__internal_406ce182791c444c84b67ede47cd3d2131e98e4d138f4cebad19e10c22898f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_406ce182791c444c84b67ede47cd3d2131e98e4d138f4cebad19e10c22898f62->leave($__internal_406ce182791c444c84b67ede47cd3d2131e98e4d138f4cebad19e10c22898f62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
