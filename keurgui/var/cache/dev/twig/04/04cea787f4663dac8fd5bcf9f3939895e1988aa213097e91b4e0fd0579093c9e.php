<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_461f5f3ab5799418b8a44c42eb3e35e4209283f8063cd91ebf5fc6d131056ea7 extends Twig_Template
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
        $__internal_202ed28660c07ea42cfec85343519690562b4ee1ec3c9ce997149516a7fdba61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202ed28660c07ea42cfec85343519690562b4ee1ec3c9ce997149516a7fdba61->enter($__internal_202ed28660c07ea42cfec85343519690562b4ee1ec3c9ce997149516a7fdba61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_8d744f8958a7ed12396138539abd39c075d4c7a950b3003f3458d5c3dd2c50a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d744f8958a7ed12396138539abd39c075d4c7a950b3003f3458d5c3dd2c50a6->enter($__internal_8d744f8958a7ed12396138539abd39c075d4c7a950b3003f3458d5c3dd2c50a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_202ed28660c07ea42cfec85343519690562b4ee1ec3c9ce997149516a7fdba61->leave($__internal_202ed28660c07ea42cfec85343519690562b4ee1ec3c9ce997149516a7fdba61_prof);

        
        $__internal_8d744f8958a7ed12396138539abd39c075d4c7a950b3003f3458d5c3dd2c50a6->leave($__internal_8d744f8958a7ed12396138539abd39c075d4c7a950b3003f3458d5c3dd2c50a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
