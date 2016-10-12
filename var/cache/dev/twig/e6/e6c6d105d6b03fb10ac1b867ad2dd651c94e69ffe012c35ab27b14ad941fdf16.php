<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_7b87c9a76aac9fc84775c12fbc68fb90280c19912f9de4e7065f8511760e6e4f extends Twig_Template
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
        $__internal_235c046caeffdc595618e890982105f7dc370710c48e48871d72a4b2ee26696b = $this->env->getExtension("native_profiler");
        $__internal_235c046caeffdc595618e890982105f7dc370710c48e48871d72a4b2ee26696b->enter($__internal_235c046caeffdc595618e890982105f7dc370710c48e48871d72a4b2ee26696b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_235c046caeffdc595618e890982105f7dc370710c48e48871d72a4b2ee26696b->leave($__internal_235c046caeffdc595618e890982105f7dc370710c48e48871d72a4b2ee26696b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
