<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_87b83d9e73502cdab1f670eb601a425fb536d64989cb3664e80da1922e4b2856 extends Twig_Template
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
        $__internal_99b66d8377fc44be57ba887906f16691e91a1c4bd96ae0681c8b00c2bf0ef5fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b66d8377fc44be57ba887906f16691e91a1c4bd96ae0681c8b00c2bf0ef5fb->enter($__internal_99b66d8377fc44be57ba887906f16691e91a1c4bd96ae0681c8b00c2bf0ef5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_0d1c253fcc9184fcba7263cea565c69df43a932906a2e235caec2ebc4fae840f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1c253fcc9184fcba7263cea565c69df43a932906a2e235caec2ebc4fae840f->enter($__internal_0d1c253fcc9184fcba7263cea565c69df43a932906a2e235caec2ebc4fae840f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_99b66d8377fc44be57ba887906f16691e91a1c4bd96ae0681c8b00c2bf0ef5fb->leave($__internal_99b66d8377fc44be57ba887906f16691e91a1c4bd96ae0681c8b00c2bf0ef5fb_prof);

        
        $__internal_0d1c253fcc9184fcba7263cea565c69df43a932906a2e235caec2ebc4fae840f->leave($__internal_0d1c253fcc9184fcba7263cea565c69df43a932906a2e235caec2ebc4fae840f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
