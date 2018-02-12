<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_082e3ba7f38dbc1aa67e42f9aa2aec7ad3522a5e39a550bbf96ffd02dad01fd7 extends Twig_Template
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
        $__internal_128e66b62022db708fc67817b139defc9b404983a1c3d84f74086bb6bfa2534e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_128e66b62022db708fc67817b139defc9b404983a1c3d84f74086bb6bfa2534e->enter($__internal_128e66b62022db708fc67817b139defc9b404983a1c3d84f74086bb6bfa2534e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_0e4e3ebde2310ac35039ab39ff0948f8e36bcc053e219ce92f079b4fe089aa5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4e3ebde2310ac35039ab39ff0948f8e36bcc053e219ce92f079b4fe089aa5b->enter($__internal_0e4e3ebde2310ac35039ab39ff0948f8e36bcc053e219ce92f079b4fe089aa5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_128e66b62022db708fc67817b139defc9b404983a1c3d84f74086bb6bfa2534e->leave($__internal_128e66b62022db708fc67817b139defc9b404983a1c3d84f74086bb6bfa2534e_prof);

        
        $__internal_0e4e3ebde2310ac35039ab39ff0948f8e36bcc053e219ce92f079b4fe089aa5b->leave($__internal_0e4e3ebde2310ac35039ab39ff0948f8e36bcc053e219ce92f079b4fe089aa5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
