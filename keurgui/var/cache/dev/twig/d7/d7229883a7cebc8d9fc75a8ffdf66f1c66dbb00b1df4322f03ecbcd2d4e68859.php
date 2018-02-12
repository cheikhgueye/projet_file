<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_5e9379a8af3e8ebacb61bed713f032af66c7f6213fefe6cb7473c80fd01cfd36 extends Twig_Template
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
        $__internal_c85dabc9163fe64695c401669186d3fdb559ea4e15ac9909745cc1f58a3df3de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c85dabc9163fe64695c401669186d3fdb559ea4e15ac9909745cc1f58a3df3de->enter($__internal_c85dabc9163fe64695c401669186d3fdb559ea4e15ac9909745cc1f58a3df3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_567614a630773127df764f78d53efbe082fd8d5e7f94d1dbc9d99935364160d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567614a630773127df764f78d53efbe082fd8d5e7f94d1dbc9d99935364160d3->enter($__internal_567614a630773127df764f78d53efbe082fd8d5e7f94d1dbc9d99935364160d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c85dabc9163fe64695c401669186d3fdb559ea4e15ac9909745cc1f58a3df3de->leave($__internal_c85dabc9163fe64695c401669186d3fdb559ea4e15ac9909745cc1f58a3df3de_prof);

        
        $__internal_567614a630773127df764f78d53efbe082fd8d5e7f94d1dbc9d99935364160d3->leave($__internal_567614a630773127df764f78d53efbe082fd8d5e7f94d1dbc9d99935364160d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
