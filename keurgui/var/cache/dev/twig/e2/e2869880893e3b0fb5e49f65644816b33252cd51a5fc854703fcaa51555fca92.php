<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_265914e2c718878e4d260755ed908951e7235a1f562722ab92652e3ee89f73b3 extends Twig_Template
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
        $__internal_903031e6fb3d1966adb74815fbc71cfd3b55c3e462ffc7bc37f25cd623fda459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903031e6fb3d1966adb74815fbc71cfd3b55c3e462ffc7bc37f25cd623fda459->enter($__internal_903031e6fb3d1966adb74815fbc71cfd3b55c3e462ffc7bc37f25cd623fda459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_1cfb202b683f80abba8269851fcd5627d85e262a4c9e820cdb9652fd75d06e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cfb202b683f80abba8269851fcd5627d85e262a4c9e820cdb9652fd75d06e10->enter($__internal_1cfb202b683f80abba8269851fcd5627d85e262a4c9e820cdb9652fd75d06e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_903031e6fb3d1966adb74815fbc71cfd3b55c3e462ffc7bc37f25cd623fda459->leave($__internal_903031e6fb3d1966adb74815fbc71cfd3b55c3e462ffc7bc37f25cd623fda459_prof);

        
        $__internal_1cfb202b683f80abba8269851fcd5627d85e262a4c9e820cdb9652fd75d06e10->leave($__internal_1cfb202b683f80abba8269851fcd5627d85e262a4c9e820cdb9652fd75d06e10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
