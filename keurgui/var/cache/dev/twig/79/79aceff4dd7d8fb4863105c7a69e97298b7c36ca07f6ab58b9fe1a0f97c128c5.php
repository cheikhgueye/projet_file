<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b3171da8c1dcb06a32cce641d5d2d90253805a9d39a800451e9f95a92ec7e493 extends Twig_Template
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
        $__internal_6f00325ec1df964a9463e6c01a60da7a92577ea637880ad24d27e4d9dadf2557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f00325ec1df964a9463e6c01a60da7a92577ea637880ad24d27e4d9dadf2557->enter($__internal_6f00325ec1df964a9463e6c01a60da7a92577ea637880ad24d27e4d9dadf2557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_0afb9910b6922ffac07dff022640da4d57b864c711459040c86d6c19f494e645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afb9910b6922ffac07dff022640da4d57b864c711459040c86d6c19f494e645->enter($__internal_0afb9910b6922ffac07dff022640da4d57b864c711459040c86d6c19f494e645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6f00325ec1df964a9463e6c01a60da7a92577ea637880ad24d27e4d9dadf2557->leave($__internal_6f00325ec1df964a9463e6c01a60da7a92577ea637880ad24d27e4d9dadf2557_prof);

        
        $__internal_0afb9910b6922ffac07dff022640da4d57b864c711459040c86d6c19f494e645->leave($__internal_0afb9910b6922ffac07dff022640da4d57b864c711459040c86d6c19f494e645_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
