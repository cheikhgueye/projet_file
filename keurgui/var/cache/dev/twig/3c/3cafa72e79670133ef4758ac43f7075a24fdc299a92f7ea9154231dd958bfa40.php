<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_5541129330c794a2c5ca0f7ee646fcd2f3a580f159315d8d87c1eceb7e59ce03 extends Twig_Template
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
        $__internal_3dec93142419d60c65d36cb3be45d99826709036ba73c978339e025552dea9b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dec93142419d60c65d36cb3be45d99826709036ba73c978339e025552dea9b6->enter($__internal_3dec93142419d60c65d36cb3be45d99826709036ba73c978339e025552dea9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_392d4deac5e14b758dc92149acbd54405fba9d381e5d733d30c5df833ac054d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392d4deac5e14b758dc92149acbd54405fba9d381e5d733d30c5df833ac054d2->enter($__internal_392d4deac5e14b758dc92149acbd54405fba9d381e5d733d30c5df833ac054d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3dec93142419d60c65d36cb3be45d99826709036ba73c978339e025552dea9b6->leave($__internal_3dec93142419d60c65d36cb3be45d99826709036ba73c978339e025552dea9b6_prof);

        
        $__internal_392d4deac5e14b758dc92149acbd54405fba9d381e5d733d30c5df833ac054d2->leave($__internal_392d4deac5e14b758dc92149acbd54405fba9d381e5d733d30c5df833ac054d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
