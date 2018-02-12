<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_06ef1dbd48a05af1c20f37149d71bdd3e05a5dd589169893b742105c8906c788 extends Twig_Template
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
        $__internal_7e00456c3983ef86cb78c3cb3a37d5ffcaf2ef1f4694ce202736e263d8ac400e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e00456c3983ef86cb78c3cb3a37d5ffcaf2ef1f4694ce202736e263d8ac400e->enter($__internal_7e00456c3983ef86cb78c3cb3a37d5ffcaf2ef1f4694ce202736e263d8ac400e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_35c01ee749a365964e9ae39a16247ea54c9cfac7176374754ecd169596cb20ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c01ee749a365964e9ae39a16247ea54c9cfac7176374754ecd169596cb20ff->enter($__internal_35c01ee749a365964e9ae39a16247ea54c9cfac7176374754ecd169596cb20ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_7e00456c3983ef86cb78c3cb3a37d5ffcaf2ef1f4694ce202736e263d8ac400e->leave($__internal_7e00456c3983ef86cb78c3cb3a37d5ffcaf2ef1f4694ce202736e263d8ac400e_prof);

        
        $__internal_35c01ee749a365964e9ae39a16247ea54c9cfac7176374754ecd169596cb20ff->leave($__internal_35c01ee749a365964e9ae39a16247ea54c9cfac7176374754ecd169596cb20ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
