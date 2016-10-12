<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fb2a529fae4fc836ed68e5793729ae4eccb2714b4e8b6cba0ccd56ae01c0f640 extends Twig_Template
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
        $__internal_fccf653d2962942d2c4f0cf50a6e3e061ab62d453109384243cff494a5a48374 = $this->env->getExtension("native_profiler");
        $__internal_fccf653d2962942d2c4f0cf50a6e3e061ab62d453109384243cff494a5a48374->enter($__internal_fccf653d2962942d2c4f0cf50a6e3e061ab62d453109384243cff494a5a48374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fccf653d2962942d2c4f0cf50a6e3e061ab62d453109384243cff494a5a48374->leave($__internal_fccf653d2962942d2c4f0cf50a6e3e061ab62d453109384243cff494a5a48374_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
