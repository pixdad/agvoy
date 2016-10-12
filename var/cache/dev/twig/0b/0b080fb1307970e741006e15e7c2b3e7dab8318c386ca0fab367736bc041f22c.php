<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e1a934087cf7b430eef6205ed8d5522a8b2be097b36d9fc322ee122a7ca4a39e extends Twig_Template
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
        $__internal_eefca87b0abf22c0cdff88b6e9b298b2dbd8ddcf47df9afe15fa61d1aa4746bc = $this->env->getExtension("native_profiler");
        $__internal_eefca87b0abf22c0cdff88b6e9b298b2dbd8ddcf47df9afe15fa61d1aa4746bc->enter($__internal_eefca87b0abf22c0cdff88b6e9b298b2dbd8ddcf47df9afe15fa61d1aa4746bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_eefca87b0abf22c0cdff88b6e9b298b2dbd8ddcf47df9afe15fa61d1aa4746bc->leave($__internal_eefca87b0abf22c0cdff88b6e9b298b2dbd8ddcf47df9afe15fa61d1aa4746bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
