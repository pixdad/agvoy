<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6534c816c51c09e712d984e8032b192e370801e2f699a22eb6f2da855db00177 extends Twig_Template
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
        $__internal_b957ac66029f7805ff1b8772db83b2a008c68b11fa4116a1548849e1a6350a4f = $this->env->getExtension("native_profiler");
        $__internal_b957ac66029f7805ff1b8772db83b2a008c68b11fa4116a1548849e1a6350a4f->enter($__internal_b957ac66029f7805ff1b8772db83b2a008c68b11fa4116a1548849e1a6350a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b957ac66029f7805ff1b8772db83b2a008c68b11fa4116a1548849e1a6350a4f->leave($__internal_b957ac66029f7805ff1b8772db83b2a008c68b11fa4116a1548849e1a6350a4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
