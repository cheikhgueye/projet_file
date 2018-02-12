<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_c5c5509c37c03ea3118f740397bde6d06078b9b95afb28fa4ae81f0b8f303755 extends Twig_Template
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
        $__internal_a323dc8b6a00ef72270a2c110d73f25fec8f104789ea4cc69e3ce6bdb1d20ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a323dc8b6a00ef72270a2c110d73f25fec8f104789ea4cc69e3ce6bdb1d20ce2->enter($__internal_a323dc8b6a00ef72270a2c110d73f25fec8f104789ea4cc69e3ce6bdb1d20ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_8af0284431775819266ea7f3e7b200b96f12b3e8a6cc3626fa045b3ef06e50fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af0284431775819266ea7f3e7b200b96f12b3e8a6cc3626fa045b3ef06e50fe->enter($__internal_8af0284431775819266ea7f3e7b200b96f12b3e8a6cc3626fa045b3ef06e50fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a323dc8b6a00ef72270a2c110d73f25fec8f104789ea4cc69e3ce6bdb1d20ce2->leave($__internal_a323dc8b6a00ef72270a2c110d73f25fec8f104789ea4cc69e3ce6bdb1d20ce2_prof);

        
        $__internal_8af0284431775819266ea7f3e7b200b96f12b3e8a6cc3626fa045b3ef06e50fe->leave($__internal_8af0284431775819266ea7f3e7b200b96f12b3e8a6cc3626fa045b3ef06e50fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
