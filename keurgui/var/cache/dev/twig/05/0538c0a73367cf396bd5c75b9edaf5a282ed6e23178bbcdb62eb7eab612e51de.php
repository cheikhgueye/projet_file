<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_8a2427f87d3ddc80142aff48b489624dd29f9f476062b6b987b47a33464f25e2 extends Twig_Template
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
        $__internal_43623810fc601960f54b4720739d779b4dc1af7c4af50f0b389553796c54f1b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43623810fc601960f54b4720739d779b4dc1af7c4af50f0b389553796c54f1b0->enter($__internal_43623810fc601960f54b4720739d779b4dc1af7c4af50f0b389553796c54f1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_e9b55406a8072a14476eb7cb6274f7946f37aeb03f2e2f6ab35396c819232efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b55406a8072a14476eb7cb6274f7946f37aeb03f2e2f6ab35396c819232efb->enter($__internal_e9b55406a8072a14476eb7cb6274f7946f37aeb03f2e2f6ab35396c819232efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_43623810fc601960f54b4720739d779b4dc1af7c4af50f0b389553796c54f1b0->leave($__internal_43623810fc601960f54b4720739d779b4dc1af7c4af50f0b389553796c54f1b0_prof);

        
        $__internal_e9b55406a8072a14476eb7cb6274f7946f37aeb03f2e2f6ab35396c819232efb->leave($__internal_e9b55406a8072a14476eb7cb6274f7946f37aeb03f2e2f6ab35396c819232efb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
