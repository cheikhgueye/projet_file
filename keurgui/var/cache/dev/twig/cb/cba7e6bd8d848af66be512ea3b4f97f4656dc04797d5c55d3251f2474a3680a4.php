<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e265d7ca409db64910dfa800c6af2ecdaf5509e2bd5aaff137814f67062d1011 extends Twig_Template
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
        $__internal_a8a83867432ef6f0d3b2f1cdd87725eb8162529ffe2b6942bb7709eb6387b9f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a83867432ef6f0d3b2f1cdd87725eb8162529ffe2b6942bb7709eb6387b9f9->enter($__internal_a8a83867432ef6f0d3b2f1cdd87725eb8162529ffe2b6942bb7709eb6387b9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e4d9cb2b3d14e05f26424424a0ab2e336d3946df9303666d47ff40b32fbb427a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d9cb2b3d14e05f26424424a0ab2e336d3946df9303666d47ff40b32fbb427a->enter($__internal_e4d9cb2b3d14e05f26424424a0ab2e336d3946df9303666d47ff40b32fbb427a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a8a83867432ef6f0d3b2f1cdd87725eb8162529ffe2b6942bb7709eb6387b9f9->leave($__internal_a8a83867432ef6f0d3b2f1cdd87725eb8162529ffe2b6942bb7709eb6387b9f9_prof);

        
        $__internal_e4d9cb2b3d14e05f26424424a0ab2e336d3946df9303666d47ff40b32fbb427a->leave($__internal_e4d9cb2b3d14e05f26424424a0ab2e336d3946df9303666d47ff40b32fbb427a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
