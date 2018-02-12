<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ff0873ea27dd949a30659310db198e1ccff0864ac5f4064777a3e44ca8146459 extends Twig_Template
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
        $__internal_1abf0e3142beda0bf0bae84469685d6a329bbb28c110faee9a8de9f8c08ed8ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1abf0e3142beda0bf0bae84469685d6a329bbb28c110faee9a8de9f8c08ed8ff->enter($__internal_1abf0e3142beda0bf0bae84469685d6a329bbb28c110faee9a8de9f8c08ed8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_f48881828d5d4205fb026552babfac8e8d70f2895dec6083c9b28ada3394f774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48881828d5d4205fb026552babfac8e8d70f2895dec6083c9b28ada3394f774->enter($__internal_f48881828d5d4205fb026552babfac8e8d70f2895dec6083c9b28ada3394f774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1abf0e3142beda0bf0bae84469685d6a329bbb28c110faee9a8de9f8c08ed8ff->leave($__internal_1abf0e3142beda0bf0bae84469685d6a329bbb28c110faee9a8de9f8c08ed8ff_prof);

        
        $__internal_f48881828d5d4205fb026552babfac8e8d70f2895dec6083c9b28ada3394f774->leave($__internal_f48881828d5d4205fb026552babfac8e8d70f2895dec6083c9b28ada3394f774_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
