<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ffdedaf19e6bc17ea44134e2f3c0cc42fd0b7d3f4778ddf886016d2b6e840fd8 extends Twig_Template
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
        $__internal_3c42dd8eadbc0365ed7dd3943492bc77d0ff9e99fd2d9df60775dd6fb9d0f238 = $this->env->getExtension("native_profiler");
        $__internal_3c42dd8eadbc0365ed7dd3943492bc77d0ff9e99fd2d9df60775dd6fb9d0f238->enter($__internal_3c42dd8eadbc0365ed7dd3943492bc77d0ff9e99fd2d9df60775dd6fb9d0f238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3c42dd8eadbc0365ed7dd3943492bc77d0ff9e99fd2d9df60775dd6fb9d0f238->leave($__internal_3c42dd8eadbc0365ed7dd3943492bc77d0ff9e99fd2d9df60775dd6fb9d0f238_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
