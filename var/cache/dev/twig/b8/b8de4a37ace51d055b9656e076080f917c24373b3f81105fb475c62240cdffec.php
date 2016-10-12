<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_c0c73027ffefd147e19f74def993eae0672d12498b3d467549dfd321e3c09260 extends Twig_Template
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
        $__internal_c4e8fcb32e024a556e6bd8cf80deff958303a79d6376364224282ed76b50d6ea = $this->env->getExtension("native_profiler");
        $__internal_c4e8fcb32e024a556e6bd8cf80deff958303a79d6376364224282ed76b50d6ea->enter($__internal_c4e8fcb32e024a556e6bd8cf80deff958303a79d6376364224282ed76b50d6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c4e8fcb32e024a556e6bd8cf80deff958303a79d6376364224282ed76b50d6ea->leave($__internal_c4e8fcb32e024a556e6bd8cf80deff958303a79d6376364224282ed76b50d6ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
