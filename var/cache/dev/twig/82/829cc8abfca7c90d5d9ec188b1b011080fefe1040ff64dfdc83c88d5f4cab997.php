<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3c8ad6267c2258629485e76df82cadea011104d5d663a0cd780e42e3b5ee4e85 extends Twig_Template
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
        $__internal_1fcd8dbae2377339e8dcb94702e2cb8b5aeca4cf5575ed7c64474441b887e71c = $this->env->getExtension("native_profiler");
        $__internal_1fcd8dbae2377339e8dcb94702e2cb8b5aeca4cf5575ed7c64474441b887e71c->enter($__internal_1fcd8dbae2377339e8dcb94702e2cb8b5aeca4cf5575ed7c64474441b887e71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1fcd8dbae2377339e8dcb94702e2cb8b5aeca4cf5575ed7c64474441b887e71c->leave($__internal_1fcd8dbae2377339e8dcb94702e2cb8b5aeca4cf5575ed7c64474441b887e71c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
