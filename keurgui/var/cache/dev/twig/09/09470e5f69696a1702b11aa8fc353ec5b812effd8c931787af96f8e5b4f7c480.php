<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_36b4152c02b3b269b552b18f0600182f6d054853093bc1e44c40d7c86aafdf80 extends Twig_Template
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
        $__internal_8c16324785bb9028db22c07e0c144ec15efdcb48eefe8107bba8360513e36539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c16324785bb9028db22c07e0c144ec15efdcb48eefe8107bba8360513e36539->enter($__internal_8c16324785bb9028db22c07e0c144ec15efdcb48eefe8107bba8360513e36539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_2e7f97db13159c82c7e0f0633094227bf711a0ec958912eeaec484babbf8cf04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7f97db13159c82c7e0f0633094227bf711a0ec958912eeaec484babbf8cf04->enter($__internal_2e7f97db13159c82c7e0f0633094227bf711a0ec958912eeaec484babbf8cf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8c16324785bb9028db22c07e0c144ec15efdcb48eefe8107bba8360513e36539->leave($__internal_8c16324785bb9028db22c07e0c144ec15efdcb48eefe8107bba8360513e36539_prof);

        
        $__internal_2e7f97db13159c82c7e0f0633094227bf711a0ec958912eeaec484babbf8cf04->leave($__internal_2e7f97db13159c82c7e0f0633094227bf711a0ec958912eeaec484babbf8cf04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
