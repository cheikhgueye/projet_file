<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8e51c29645ecf31152ca40fc06ccb4dbb15485fd9fd8e2d3869354e2d8e0d1ad extends Twig_Template
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
        $__internal_8c3d78e74e39cff2cd3631ab8782cd7c02c7fe11d8e2bad63a998186d1f44a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3d78e74e39cff2cd3631ab8782cd7c02c7fe11d8e2bad63a998186d1f44a64->enter($__internal_8c3d78e74e39cff2cd3631ab8782cd7c02c7fe11d8e2bad63a998186d1f44a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a31bdf7f21d9fc429e18897a680c3fa918baf33fbdb435432d3154471685f6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31bdf7f21d9fc429e18897a680c3fa918baf33fbdb435432d3154471685f6f0->enter($__internal_a31bdf7f21d9fc429e18897a680c3fa918baf33fbdb435432d3154471685f6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8c3d78e74e39cff2cd3631ab8782cd7c02c7fe11d8e2bad63a998186d1f44a64->leave($__internal_8c3d78e74e39cff2cd3631ab8782cd7c02c7fe11d8e2bad63a998186d1f44a64_prof);

        
        $__internal_a31bdf7f21d9fc429e18897a680c3fa918baf33fbdb435432d3154471685f6f0->leave($__internal_a31bdf7f21d9fc429e18897a680c3fa918baf33fbdb435432d3154471685f6f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
