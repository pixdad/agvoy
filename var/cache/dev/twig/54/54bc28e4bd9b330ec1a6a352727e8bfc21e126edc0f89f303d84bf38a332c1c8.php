<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7d74979c82b73c40a71ca587b40321ab41a03b3eff525d95043abf37bf9391e3 extends Twig_Template
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
        $__internal_820a840cb9f3db5da52d737dfc3359a211f532610ac8a9322ed671d7b55e93d1 = $this->env->getExtension("native_profiler");
        $__internal_820a840cb9f3db5da52d737dfc3359a211f532610ac8a9322ed671d7b55e93d1->enter($__internal_820a840cb9f3db5da52d737dfc3359a211f532610ac8a9322ed671d7b55e93d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_820a840cb9f3db5da52d737dfc3359a211f532610ac8a9322ed671d7b55e93d1->leave($__internal_820a840cb9f3db5da52d737dfc3359a211f532610ac8a9322ed671d7b55e93d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
