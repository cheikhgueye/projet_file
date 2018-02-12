<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_721c27c2e1f68748db39269a6fdb456738d2c98a0bb5aacb61790c20838e1b48 extends Twig_Template
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
        $__internal_6c486c6353d5af053d8c2f1754325cc086cf735b0fb6832e2bc8aa29a99016d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c486c6353d5af053d8c2f1754325cc086cf735b0fb6832e2bc8aa29a99016d0->enter($__internal_6c486c6353d5af053d8c2f1754325cc086cf735b0fb6832e2bc8aa29a99016d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_e7d53a6f1c8bc7c72fc1ccfb56fe9b07b0429e24ea2d9467484c5607e2c12b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d53a6f1c8bc7c72fc1ccfb56fe9b07b0429e24ea2d9467484c5607e2c12b6c->enter($__internal_e7d53a6f1c8bc7c72fc1ccfb56fe9b07b0429e24ea2d9467484c5607e2c12b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6c486c6353d5af053d8c2f1754325cc086cf735b0fb6832e2bc8aa29a99016d0->leave($__internal_6c486c6353d5af053d8c2f1754325cc086cf735b0fb6832e2bc8aa29a99016d0_prof);

        
        $__internal_e7d53a6f1c8bc7c72fc1ccfb56fe9b07b0429e24ea2d9467484c5607e2c12b6c->leave($__internal_e7d53a6f1c8bc7c72fc1ccfb56fe9b07b0429e24ea2d9467484c5607e2c12b6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
