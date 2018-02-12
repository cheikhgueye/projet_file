<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_87b285c0a3e5e6b3300fb092bec114a5bc203ba8eb24986576ad6affea2c47cb extends Twig_Template
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
        $__internal_32b61fa9adefcd8a8b77719bdb237583bfbc836238e9c3d2f69facd7f6c1a621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b61fa9adefcd8a8b77719bdb237583bfbc836238e9c3d2f69facd7f6c1a621->enter($__internal_32b61fa9adefcd8a8b77719bdb237583bfbc836238e9c3d2f69facd7f6c1a621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_bb93bc6c744b893ae78b2c89b0ce71c93e4b04837d94aed95f2aa2726dea5af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb93bc6c744b893ae78b2c89b0ce71c93e4b04837d94aed95f2aa2726dea5af3->enter($__internal_bb93bc6c744b893ae78b2c89b0ce71c93e4b04837d94aed95f2aa2726dea5af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_32b61fa9adefcd8a8b77719bdb237583bfbc836238e9c3d2f69facd7f6c1a621->leave($__internal_32b61fa9adefcd8a8b77719bdb237583bfbc836238e9c3d2f69facd7f6c1a621_prof);

        
        $__internal_bb93bc6c744b893ae78b2c89b0ce71c93e4b04837d94aed95f2aa2726dea5af3->leave($__internal_bb93bc6c744b893ae78b2c89b0ce71c93e4b04837d94aed95f2aa2726dea5af3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
