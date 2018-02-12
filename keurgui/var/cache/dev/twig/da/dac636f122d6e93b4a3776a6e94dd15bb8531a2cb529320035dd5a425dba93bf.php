<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0b55371f676208aadf6802c0bb50106d3e3e70baffab92661f1020583554f032 extends Twig_Template
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
        $__internal_741b0f3650076c3f134dd5361d5ec3595b72f9302e1c1c7e2643877f96fc38e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_741b0f3650076c3f134dd5361d5ec3595b72f9302e1c1c7e2643877f96fc38e1->enter($__internal_741b0f3650076c3f134dd5361d5ec3595b72f9302e1c1c7e2643877f96fc38e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f2b24d666463c37745bf72e447dcb46e27c033f98041981275542f9c556fe65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b24d666463c37745bf72e447dcb46e27c033f98041981275542f9c556fe65b->enter($__internal_f2b24d666463c37745bf72e447dcb46e27c033f98041981275542f9c556fe65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_741b0f3650076c3f134dd5361d5ec3595b72f9302e1c1c7e2643877f96fc38e1->leave($__internal_741b0f3650076c3f134dd5361d5ec3595b72f9302e1c1c7e2643877f96fc38e1_prof);

        
        $__internal_f2b24d666463c37745bf72e447dcb46e27c033f98041981275542f9c556fe65b->leave($__internal_f2b24d666463c37745bf72e447dcb46e27c033f98041981275542f9c556fe65b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
