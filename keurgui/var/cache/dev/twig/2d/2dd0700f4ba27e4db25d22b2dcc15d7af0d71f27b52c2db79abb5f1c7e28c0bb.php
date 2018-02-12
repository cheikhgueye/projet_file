<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c15d6b125d703cb18cf9cdb85211f4412cf458ee8481d54bc2ed87e45d848326 extends Twig_Template
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
        $__internal_376f164d11a243271f77d3385b800f8ad04f4f0bf8663bfe5ae2a2dba6b66a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376f164d11a243271f77d3385b800f8ad04f4f0bf8663bfe5ae2a2dba6b66a07->enter($__internal_376f164d11a243271f77d3385b800f8ad04f4f0bf8663bfe5ae2a2dba6b66a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_59697250c8f0b6215beeb2a47663bbc1a736a42937638fd4aa229c5e8a23c97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59697250c8f0b6215beeb2a47663bbc1a736a42937638fd4aa229c5e8a23c97f->enter($__internal_59697250c8f0b6215beeb2a47663bbc1a736a42937638fd4aa229c5e8a23c97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_376f164d11a243271f77d3385b800f8ad04f4f0bf8663bfe5ae2a2dba6b66a07->leave($__internal_376f164d11a243271f77d3385b800f8ad04f4f0bf8663bfe5ae2a2dba6b66a07_prof);

        
        $__internal_59697250c8f0b6215beeb2a47663bbc1a736a42937638fd4aa229c5e8a23c97f->leave($__internal_59697250c8f0b6215beeb2a47663bbc1a736a42937638fd4aa229c5e8a23c97f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
