<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_75b71c8c62eee82c72fa4f34ff4ef65f848d6eef8cb0eafc27d9a957de8d4807 extends Twig_Template
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
        $__internal_cf806fc845fd26b06934907bc0ba0202ff4a6a2459c79b300c192f188054062e = $this->env->getExtension("native_profiler");
        $__internal_cf806fc845fd26b06934907bc0ba0202ff4a6a2459c79b300c192f188054062e->enter($__internal_cf806fc845fd26b06934907bc0ba0202ff4a6a2459c79b300c192f188054062e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cf806fc845fd26b06934907bc0ba0202ff4a6a2459c79b300c192f188054062e->leave($__internal_cf806fc845fd26b06934907bc0ba0202ff4a6a2459c79b300c192f188054062e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
