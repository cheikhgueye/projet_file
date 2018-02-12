<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1c6583a3802cc4ec5bd06566411351863a2ea7fd7ce003c750084ebe3d9cc08d extends Twig_Template
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
        $__internal_94aaaa640c6874cbe8fec1e3934259f4c5207cdd908dc56b849bd67310883ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94aaaa640c6874cbe8fec1e3934259f4c5207cdd908dc56b849bd67310883ff1->enter($__internal_94aaaa640c6874cbe8fec1e3934259f4c5207cdd908dc56b849bd67310883ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_797106495767a0b8e28717ad21432a87788ce7c486a125ec358798ab78f3db46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797106495767a0b8e28717ad21432a87788ce7c486a125ec358798ab78f3db46->enter($__internal_797106495767a0b8e28717ad21432a87788ce7c486a125ec358798ab78f3db46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_94aaaa640c6874cbe8fec1e3934259f4c5207cdd908dc56b849bd67310883ff1->leave($__internal_94aaaa640c6874cbe8fec1e3934259f4c5207cdd908dc56b849bd67310883ff1_prof);

        
        $__internal_797106495767a0b8e28717ad21432a87788ce7c486a125ec358798ab78f3db46->leave($__internal_797106495767a0b8e28717ad21432a87788ce7c486a125ec358798ab78f3db46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
