<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6ac167ea16be2c64fa296301d070f07d30a620e61456586ff2fc078835db26e0 extends Twig_Template
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
        $__internal_02e11d3d5953ea61d0f35d18a0533c62bbbb309342d0f90155dd9db49777e4d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02e11d3d5953ea61d0f35d18a0533c62bbbb309342d0f90155dd9db49777e4d7->enter($__internal_02e11d3d5953ea61d0f35d18a0533c62bbbb309342d0f90155dd9db49777e4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_831fc2a8256928d2205ad0a0d7feedcd7c11866cc3d7b33c2f625618f892826d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831fc2a8256928d2205ad0a0d7feedcd7c11866cc3d7b33c2f625618f892826d->enter($__internal_831fc2a8256928d2205ad0a0d7feedcd7c11866cc3d7b33c2f625618f892826d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_02e11d3d5953ea61d0f35d18a0533c62bbbb309342d0f90155dd9db49777e4d7->leave($__internal_02e11d3d5953ea61d0f35d18a0533c62bbbb309342d0f90155dd9db49777e4d7_prof);

        
        $__internal_831fc2a8256928d2205ad0a0d7feedcd7c11866cc3d7b33c2f625618f892826d->leave($__internal_831fc2a8256928d2205ad0a0d7feedcd7c11866cc3d7b33c2f625618f892826d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
