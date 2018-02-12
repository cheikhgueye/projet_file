<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8112a8900da2cc47bbd917c809d4b6bddf9b36862305e2312015825753f99742 extends Twig_Template
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
        $__internal_a3a18539d0c6037fcc02cf249a32fb86573e0ae47f7e36712bca5389bd5d0faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a18539d0c6037fcc02cf249a32fb86573e0ae47f7e36712bca5389bd5d0faa->enter($__internal_a3a18539d0c6037fcc02cf249a32fb86573e0ae47f7e36712bca5389bd5d0faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_70ae76915cb02e3142568622118d9e4f20942caa0b0de9a4ddc35afea31d680f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ae76915cb02e3142568622118d9e4f20942caa0b0de9a4ddc35afea31d680f->enter($__internal_70ae76915cb02e3142568622118d9e4f20942caa0b0de9a4ddc35afea31d680f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a3a18539d0c6037fcc02cf249a32fb86573e0ae47f7e36712bca5389bd5d0faa->leave($__internal_a3a18539d0c6037fcc02cf249a32fb86573e0ae47f7e36712bca5389bd5d0faa_prof);

        
        $__internal_70ae76915cb02e3142568622118d9e4f20942caa0b0de9a4ddc35afea31d680f->leave($__internal_70ae76915cb02e3142568622118d9e4f20942caa0b0de9a4ddc35afea31d680f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
