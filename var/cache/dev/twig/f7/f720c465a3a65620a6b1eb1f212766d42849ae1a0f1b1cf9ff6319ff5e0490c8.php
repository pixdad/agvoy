<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_fcfe4825cc88e0293a888f9538cb38a205a57df4f1287ee82d47ef264b3b3380 extends Twig_Template
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
        $__internal_1ef6a8ec4a33bc97cb4cc738f9e51112452b89ee768b6ec2f4722f40d8ac6654 = $this->env->getExtension("native_profiler");
        $__internal_1ef6a8ec4a33bc97cb4cc738f9e51112452b89ee768b6ec2f4722f40d8ac6654->enter($__internal_1ef6a8ec4a33bc97cb4cc738f9e51112452b89ee768b6ec2f4722f40d8ac6654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1ef6a8ec4a33bc97cb4cc738f9e51112452b89ee768b6ec2f4722f40d8ac6654->leave($__internal_1ef6a8ec4a33bc97cb4cc738f9e51112452b89ee768b6ec2f4722f40d8ac6654_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
