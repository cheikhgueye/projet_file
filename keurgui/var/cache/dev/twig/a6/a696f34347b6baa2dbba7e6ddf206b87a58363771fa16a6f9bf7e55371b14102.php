<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ef0f9df450c21383b7e62128d363eea9b8d36a60cad1663dcf68ea2f776a9e18 extends Twig_Template
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
        $__internal_48204d04da40e0fcbe5ab56ef2659f7a04cc216d246a6df1c7e280081e4471b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48204d04da40e0fcbe5ab56ef2659f7a04cc216d246a6df1c7e280081e4471b8->enter($__internal_48204d04da40e0fcbe5ab56ef2659f7a04cc216d246a6df1c7e280081e4471b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d644fea07a059761108094e83ad7be42397e23a977fb33273ac1599ed4519344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d644fea07a059761108094e83ad7be42397e23a977fb33273ac1599ed4519344->enter($__internal_d644fea07a059761108094e83ad7be42397e23a977fb33273ac1599ed4519344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_48204d04da40e0fcbe5ab56ef2659f7a04cc216d246a6df1c7e280081e4471b8->leave($__internal_48204d04da40e0fcbe5ab56ef2659f7a04cc216d246a6df1c7e280081e4471b8_prof);

        
        $__internal_d644fea07a059761108094e83ad7be42397e23a977fb33273ac1599ed4519344->leave($__internal_d644fea07a059761108094e83ad7be42397e23a977fb33273ac1599ed4519344_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
