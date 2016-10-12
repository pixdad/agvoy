<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_95c319029b8fec82893fa7597e2747977d5e5b50566173b7513dc22f825979a4 extends Twig_Template
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
        $__internal_d70dc58d54aaad970f824095a566db8514c16897d15c435f04902eebb0dab1ac = $this->env->getExtension("native_profiler");
        $__internal_d70dc58d54aaad970f824095a566db8514c16897d15c435f04902eebb0dab1ac->enter($__internal_d70dc58d54aaad970f824095a566db8514c16897d15c435f04902eebb0dab1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_d70dc58d54aaad970f824095a566db8514c16897d15c435f04902eebb0dab1ac->leave($__internal_d70dc58d54aaad970f824095a566db8514c16897d15c435f04902eebb0dab1ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
