<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b72ffc3b78fabe5eb522864346fc0fa09e889a19fe4d87b3a69a41d7cda8f2ad extends Twig_Template
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
        $__internal_cc3ed6143be0161ffe8180b22a87b4af3bafa570c9a1c20e871e6bf671a70734 = $this->env->getExtension("native_profiler");
        $__internal_cc3ed6143be0161ffe8180b22a87b4af3bafa570c9a1c20e871e6bf671a70734->enter($__internal_cc3ed6143be0161ffe8180b22a87b4af3bafa570c9a1c20e871e6bf671a70734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cc3ed6143be0161ffe8180b22a87b4af3bafa570c9a1c20e871e6bf671a70734->leave($__internal_cc3ed6143be0161ffe8180b22a87b4af3bafa570c9a1c20e871e6bf671a70734_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
