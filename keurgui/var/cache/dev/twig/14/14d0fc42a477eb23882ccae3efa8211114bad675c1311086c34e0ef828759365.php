<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e0835100dc8fb60fbbb9b19da1ae616908da570530466ec847800beab9c7944c extends Twig_Template
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
        $__internal_7a76b58586d90c359b21489b043b77b97c2ab79e61ae1fb2cf46c6d704d5806a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a76b58586d90c359b21489b043b77b97c2ab79e61ae1fb2cf46c6d704d5806a->enter($__internal_7a76b58586d90c359b21489b043b77b97c2ab79e61ae1fb2cf46c6d704d5806a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_bc2c31c3b5790477af88668ffcbd4eeebabbfbd9a41eac65f36ea70129ab96a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2c31c3b5790477af88668ffcbd4eeebabbfbd9a41eac65f36ea70129ab96a4->enter($__internal_bc2c31c3b5790477af88668ffcbd4eeebabbfbd9a41eac65f36ea70129ab96a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7a76b58586d90c359b21489b043b77b97c2ab79e61ae1fb2cf46c6d704d5806a->leave($__internal_7a76b58586d90c359b21489b043b77b97c2ab79e61ae1fb2cf46c6d704d5806a_prof);

        
        $__internal_bc2c31c3b5790477af88668ffcbd4eeebabbfbd9a41eac65f36ea70129ab96a4->leave($__internal_bc2c31c3b5790477af88668ffcbd4eeebabbfbd9a41eac65f36ea70129ab96a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
