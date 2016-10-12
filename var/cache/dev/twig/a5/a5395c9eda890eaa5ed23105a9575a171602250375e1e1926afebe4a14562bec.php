<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_ce092a352be55c8b098b0650712782f7e96b4b833f3d9ae84d53eb5402a89054 extends Twig_Template
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
        $__internal_4b50bcdbc8d13d328d4936b5342c18bb6fdbceb2d41ebc3a19c7d2bc769cc209 = $this->env->getExtension("native_profiler");
        $__internal_4b50bcdbc8d13d328d4936b5342c18bb6fdbceb2d41ebc3a19c7d2bc769cc209->enter($__internal_4b50bcdbc8d13d328d4936b5342c18bb6fdbceb2d41ebc3a19c7d2bc769cc209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4b50bcdbc8d13d328d4936b5342c18bb6fdbceb2d41ebc3a19c7d2bc769cc209->leave($__internal_4b50bcdbc8d13d328d4936b5342c18bb6fdbceb2d41ebc3a19c7d2bc769cc209_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
