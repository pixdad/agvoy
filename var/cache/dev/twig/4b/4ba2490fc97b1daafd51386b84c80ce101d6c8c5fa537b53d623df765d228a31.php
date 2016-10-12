<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_cc4e3ded2a1be69ba9065c63fd0ee80da94543d1811f89f393c2348d793591f8 extends Twig_Template
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
        $__internal_a74b76d51f1c5e0905c8d485b6934c8b413b3f198256c65564216e6ec9ff4939 = $this->env->getExtension("native_profiler");
        $__internal_a74b76d51f1c5e0905c8d485b6934c8b413b3f198256c65564216e6ec9ff4939->enter($__internal_a74b76d51f1c5e0905c8d485b6934c8b413b3f198256c65564216e6ec9ff4939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a74b76d51f1c5e0905c8d485b6934c8b413b3f198256c65564216e6ec9ff4939->leave($__internal_a74b76d51f1c5e0905c8d485b6934c8b413b3f198256c65564216e6ec9ff4939_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
