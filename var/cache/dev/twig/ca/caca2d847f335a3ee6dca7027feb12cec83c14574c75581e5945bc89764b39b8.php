<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6a7642f5a1b29d26dec4a1a16e268464a0cfaf43aecc2f89c2dd205553a5ef82 extends Twig_Template
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
        $__internal_688f167a917aee7f5ba869726904d696dec61c0dc47ab9b2af900602dd57cf85 = $this->env->getExtension("native_profiler");
        $__internal_688f167a917aee7f5ba869726904d696dec61c0dc47ab9b2af900602dd57cf85->enter($__internal_688f167a917aee7f5ba869726904d696dec61c0dc47ab9b2af900602dd57cf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_688f167a917aee7f5ba869726904d696dec61c0dc47ab9b2af900602dd57cf85->leave($__internal_688f167a917aee7f5ba869726904d696dec61c0dc47ab9b2af900602dd57cf85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
