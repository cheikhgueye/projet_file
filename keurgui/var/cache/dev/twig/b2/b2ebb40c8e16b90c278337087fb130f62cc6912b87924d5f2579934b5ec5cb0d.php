<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2391d66ca34f882b66090251ac42467ad52e566fcbe18bde25c509177b74a81d extends Twig_Template
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
        $__internal_073475f6812620febba5ad8e2d24d627e2bd496860af12fdc23a3b0b736b7309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_073475f6812620febba5ad8e2d24d627e2bd496860af12fdc23a3b0b736b7309->enter($__internal_073475f6812620febba5ad8e2d24d627e2bd496860af12fdc23a3b0b736b7309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_3c01e1ee0816428b27301e28c6e4fdd77e14bdf60901f12ee289266fe13d54d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c01e1ee0816428b27301e28c6e4fdd77e14bdf60901f12ee289266fe13d54d0->enter($__internal_3c01e1ee0816428b27301e28c6e4fdd77e14bdf60901f12ee289266fe13d54d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_073475f6812620febba5ad8e2d24d627e2bd496860af12fdc23a3b0b736b7309->leave($__internal_073475f6812620febba5ad8e2d24d627e2bd496860af12fdc23a3b0b736b7309_prof);

        
        $__internal_3c01e1ee0816428b27301e28c6e4fdd77e14bdf60901f12ee289266fe13d54d0->leave($__internal_3c01e1ee0816428b27301e28c6e4fdd77e14bdf60901f12ee289266fe13d54d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
