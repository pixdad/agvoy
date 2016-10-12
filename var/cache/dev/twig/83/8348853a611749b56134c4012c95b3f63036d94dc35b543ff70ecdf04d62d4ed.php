<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_84c754309f7a54712f573eac66047adadd49e7c131a40a98238c4383d26815ca extends Twig_Template
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
        $__internal_d124196c8f10223f1dd0624f4183ee3a62aa0923752cd7f6b0ed1842e6fab4ef = $this->env->getExtension("native_profiler");
        $__internal_d124196c8f10223f1dd0624f4183ee3a62aa0923752cd7f6b0ed1842e6fab4ef->enter($__internal_d124196c8f10223f1dd0624f4183ee3a62aa0923752cd7f6b0ed1842e6fab4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d124196c8f10223f1dd0624f4183ee3a62aa0923752cd7f6b0ed1842e6fab4ef->leave($__internal_d124196c8f10223f1dd0624f4183ee3a62aa0923752cd7f6b0ed1842e6fab4ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
