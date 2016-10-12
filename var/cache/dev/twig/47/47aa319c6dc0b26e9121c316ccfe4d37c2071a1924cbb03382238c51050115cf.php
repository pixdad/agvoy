<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_551081ec3a9367b0a4d7484756c6a93b294d31a5337f423fa0736925417b721d extends Twig_Template
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
        $__internal_134fe7f9e6322b93268473caed41d1c70ce3e695993bea313010ab5dc7c7cc63 = $this->env->getExtension("native_profiler");
        $__internal_134fe7f9e6322b93268473caed41d1c70ce3e695993bea313010ab5dc7c7cc63->enter($__internal_134fe7f9e6322b93268473caed41d1c70ce3e695993bea313010ab5dc7c7cc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_134fe7f9e6322b93268473caed41d1c70ce3e695993bea313010ab5dc7c7cc63->leave($__internal_134fe7f9e6322b93268473caed41d1c70ce3e695993bea313010ab5dc7c7cc63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
