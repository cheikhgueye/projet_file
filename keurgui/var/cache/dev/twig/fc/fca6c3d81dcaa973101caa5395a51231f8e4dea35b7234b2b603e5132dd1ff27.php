<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2c556756761162533dea440c8f01289487fad4a90b8600ea756ffda09fe96d9e extends Twig_Template
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
        $__internal_fbecc25ec5abae5569d5f42227ee9227b46d306622452c3ad6b77ab2452b1cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbecc25ec5abae5569d5f42227ee9227b46d306622452c3ad6b77ab2452b1cd2->enter($__internal_fbecc25ec5abae5569d5f42227ee9227b46d306622452c3ad6b77ab2452b1cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4158ae316c8275d7e86f00b6a166c42031ef73caf9956ab44bc422fe1d4afe72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4158ae316c8275d7e86f00b6a166c42031ef73caf9956ab44bc422fe1d4afe72->enter($__internal_4158ae316c8275d7e86f00b6a166c42031ef73caf9956ab44bc422fe1d4afe72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fbecc25ec5abae5569d5f42227ee9227b46d306622452c3ad6b77ab2452b1cd2->leave($__internal_fbecc25ec5abae5569d5f42227ee9227b46d306622452c3ad6b77ab2452b1cd2_prof);

        
        $__internal_4158ae316c8275d7e86f00b6a166c42031ef73caf9956ab44bc422fe1d4afe72->leave($__internal_4158ae316c8275d7e86f00b6a166c42031ef73caf9956ab44bc422fe1d4afe72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
