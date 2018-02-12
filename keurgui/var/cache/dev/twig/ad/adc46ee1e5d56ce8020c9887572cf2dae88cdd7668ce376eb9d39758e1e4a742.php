<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e6e1fde474e9114d9bfb09fe0f177791c6e5f88025bb540963bb3fab3fe3e687 extends Twig_Template
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
        $__internal_9f143e06881a694fc494861df2edb848cef639eeb91cba29109b4bb2d37771e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f143e06881a694fc494861df2edb848cef639eeb91cba29109b4bb2d37771e3->enter($__internal_9f143e06881a694fc494861df2edb848cef639eeb91cba29109b4bb2d37771e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a350fd3b2385a77d333a50586bfe5097478f969f3fdb37e507fe16c4f79f7a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a350fd3b2385a77d333a50586bfe5097478f969f3fdb37e507fe16c4f79f7a38->enter($__internal_a350fd3b2385a77d333a50586bfe5097478f969f3fdb37e507fe16c4f79f7a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9f143e06881a694fc494861df2edb848cef639eeb91cba29109b4bb2d37771e3->leave($__internal_9f143e06881a694fc494861df2edb848cef639eeb91cba29109b4bb2d37771e3_prof);

        
        $__internal_a350fd3b2385a77d333a50586bfe5097478f969f3fdb37e507fe16c4f79f7a38->leave($__internal_a350fd3b2385a77d333a50586bfe5097478f969f3fdb37e507fe16c4f79f7a38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
