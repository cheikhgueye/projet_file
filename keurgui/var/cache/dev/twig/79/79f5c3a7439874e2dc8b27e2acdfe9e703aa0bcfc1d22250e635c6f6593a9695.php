<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_20796f7e87671d93ec4c08983f89e578cf54b85a23e1f1c50a2ae399bf3c0c50 extends Twig_Template
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
        $__internal_be7539fe27f2a410e4810652162515f0ca4dc53b3be0fb5a8531acb86fe11445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be7539fe27f2a410e4810652162515f0ca4dc53b3be0fb5a8531acb86fe11445->enter($__internal_be7539fe27f2a410e4810652162515f0ca4dc53b3be0fb5a8531acb86fe11445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_23dd98a47ea7fe2f35f4eaac3a4a363f0f3d356baebaf6a3cd84ac1c538fcfcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23dd98a47ea7fe2f35f4eaac3a4a363f0f3d356baebaf6a3cd84ac1c538fcfcb->enter($__internal_23dd98a47ea7fe2f35f4eaac3a4a363f0f3d356baebaf6a3cd84ac1c538fcfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["month"] ?? $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["day"] ?? $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_be7539fe27f2a410e4810652162515f0ca4dc53b3be0fb5a8531acb86fe11445->leave($__internal_be7539fe27f2a410e4810652162515f0ca4dc53b3be0fb5a8531acb86fe11445_prof);

        
        $__internal_23dd98a47ea7fe2f35f4eaac3a4a363f0f3d356baebaf6a3cd84ac1c538fcfcb->leave($__internal_23dd98a47ea7fe2f35f4eaac3a4a363f0f3d356baebaf6a3cd84ac1c538fcfcb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
