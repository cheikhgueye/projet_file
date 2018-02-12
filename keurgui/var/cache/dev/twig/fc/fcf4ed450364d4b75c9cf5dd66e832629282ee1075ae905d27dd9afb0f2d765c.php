<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_93a67d472801803f5e692b102ec63da6633362e9ef9ef637cc7b7ee451cc229c extends Twig_Template
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
        $__internal_532872556092489e979f56493054f38516137c8f15a0b6672d6405f1a531b765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532872556092489e979f56493054f38516137c8f15a0b6672d6405f1a531b765->enter($__internal_532872556092489e979f56493054f38516137c8f15a0b6672d6405f1a531b765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ac347db530b789c96d4537fa2c683b817e740889c565cb404ccc647c1a66a031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac347db530b789c96d4537fa2c683b817e740889c565cb404ccc647c1a66a031->enter($__internal_ac347db530b789c96d4537fa2c683b817e740889c565cb404ccc647c1a66a031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_532872556092489e979f56493054f38516137c8f15a0b6672d6405f1a531b765->leave($__internal_532872556092489e979f56493054f38516137c8f15a0b6672d6405f1a531b765_prof);

        
        $__internal_ac347db530b789c96d4537fa2c683b817e740889c565cb404ccc647c1a66a031->leave($__internal_ac347db530b789c96d4537fa2c683b817e740889c565cb404ccc647c1a66a031_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
