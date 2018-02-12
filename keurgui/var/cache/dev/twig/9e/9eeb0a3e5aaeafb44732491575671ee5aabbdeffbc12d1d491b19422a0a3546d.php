<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4257a3bc044176e81c80eb7faf8afd90d31b554d0540f49fc8d170dad08593ec extends Twig_Template
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
        $__internal_8051c9c5551a5b85191bdca691999c7fa70f5b94908c6b2129435b4f36f331dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8051c9c5551a5b85191bdca691999c7fa70f5b94908c6b2129435b4f36f331dc->enter($__internal_8051c9c5551a5b85191bdca691999c7fa70f5b94908c6b2129435b4f36f331dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d24f4aa1ac7fd2cb2951b3420ea188b1022f5ef8c7fb3889e4af26d1e74f9fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24f4aa1ac7fd2cb2951b3420ea188b1022f5ef8c7fb3889e4af26d1e74f9fd0->enter($__internal_d24f4aa1ac7fd2cb2951b3420ea188b1022f5ef8c7fb3889e4af26d1e74f9fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8051c9c5551a5b85191bdca691999c7fa70f5b94908c6b2129435b4f36f331dc->leave($__internal_8051c9c5551a5b85191bdca691999c7fa70f5b94908c6b2129435b4f36f331dc_prof);

        
        $__internal_d24f4aa1ac7fd2cb2951b3420ea188b1022f5ef8c7fb3889e4af26d1e74f9fd0->leave($__internal_d24f4aa1ac7fd2cb2951b3420ea188b1022f5ef8c7fb3889e4af26d1e74f9fd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
