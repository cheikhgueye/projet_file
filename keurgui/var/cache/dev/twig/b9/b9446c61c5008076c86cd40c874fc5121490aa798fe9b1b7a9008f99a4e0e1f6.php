<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_61fbc2fc0d30f73c3429752d395b11b9ab056c75c4793d1f410a05f4d5e9f696 extends Twig_Template
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
        $__internal_1a71cbda5f667f45f70913cccabcdced707cd34581a33c4fc053f911fd50a324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a71cbda5f667f45f70913cccabcdced707cd34581a33c4fc053f911fd50a324->enter($__internal_1a71cbda5f667f45f70913cccabcdced707cd34581a33c4fc053f911fd50a324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_5c695533061381f39de663dc7b30a2836d957798b7dce480ae93de6e704d2cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c695533061381f39de663dc7b30a2836d957798b7dce480ae93de6e704d2cdf->enter($__internal_5c695533061381f39de663dc7b30a2836d957798b7dce480ae93de6e704d2cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1a71cbda5f667f45f70913cccabcdced707cd34581a33c4fc053f911fd50a324->leave($__internal_1a71cbda5f667f45f70913cccabcdced707cd34581a33c4fc053f911fd50a324_prof);

        
        $__internal_5c695533061381f39de663dc7b30a2836d957798b7dce480ae93de6e704d2cdf->leave($__internal_5c695533061381f39de663dc7b30a2836d957798b7dce480ae93de6e704d2cdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
