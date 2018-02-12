<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_30c958ee7840b35341fdf123b70e81d350cd3829fafd0c08b8d998ffa8d169a3 extends Twig_Template
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
        $__internal_b7b67262ec0bd226fb24998ca406c28bbdf2164463781471c8deea590222a9e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b67262ec0bd226fb24998ca406c28bbdf2164463781471c8deea590222a9e9->enter($__internal_b7b67262ec0bd226fb24998ca406c28bbdf2164463781471c8deea590222a9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5768c3206a941753e8f1ce5455ecc714fbb5a7e53b0062cea75273d6c7b1435b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5768c3206a941753e8f1ce5455ecc714fbb5a7e53b0062cea75273d6c7b1435b->enter($__internal_5768c3206a941753e8f1ce5455ecc714fbb5a7e53b0062cea75273d6c7b1435b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b7b67262ec0bd226fb24998ca406c28bbdf2164463781471c8deea590222a9e9->leave($__internal_b7b67262ec0bd226fb24998ca406c28bbdf2164463781471c8deea590222a9e9_prof);

        
        $__internal_5768c3206a941753e8f1ce5455ecc714fbb5a7e53b0062cea75273d6c7b1435b->leave($__internal_5768c3206a941753e8f1ce5455ecc714fbb5a7e53b0062cea75273d6c7b1435b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
