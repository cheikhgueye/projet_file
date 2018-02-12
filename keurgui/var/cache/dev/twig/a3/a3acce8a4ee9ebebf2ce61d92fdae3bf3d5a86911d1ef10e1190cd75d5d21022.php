<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a418ff641f70221803021b8f0f2ed2b524795fdb185be149b9985cc79ff02b02 extends Twig_Template
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
        $__internal_30a332ffffab5538eb7829d57374e73b921f506c32321af80f7d6d7ee5599d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a332ffffab5538eb7829d57374e73b921f506c32321af80f7d6d7ee5599d6f->enter($__internal_30a332ffffab5538eb7829d57374e73b921f506c32321af80f7d6d7ee5599d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_16927f31bc811f1841697939adc6f6f7bda74447e1fa13df43721005753e5578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16927f31bc811f1841697939adc6f6f7bda74447e1fa13df43721005753e5578->enter($__internal_16927f31bc811f1841697939adc6f6f7bda74447e1fa13df43721005753e5578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_30a332ffffab5538eb7829d57374e73b921f506c32321af80f7d6d7ee5599d6f->leave($__internal_30a332ffffab5538eb7829d57374e73b921f506c32321af80f7d6d7ee5599d6f_prof);

        
        $__internal_16927f31bc811f1841697939adc6f6f7bda74447e1fa13df43721005753e5578->leave($__internal_16927f31bc811f1841697939adc6f6f7bda74447e1fa13df43721005753e5578_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
