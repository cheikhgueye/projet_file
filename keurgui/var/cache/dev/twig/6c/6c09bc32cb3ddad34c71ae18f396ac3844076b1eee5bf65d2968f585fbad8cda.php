<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_e3992ce9264e3fb1d24dfc98b472ede588a23e702f96526400b6f36f62c57963 extends Twig_Template
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
        $__internal_b4ca7dcc7a0791ec8f4fa52db6189a6d2a82c0ab28d1524d258b9f94c777b046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ca7dcc7a0791ec8f4fa52db6189a6d2a82c0ab28d1524d258b9f94c777b046->enter($__internal_b4ca7dcc7a0791ec8f4fa52db6189a6d2a82c0ab28d1524d258b9f94c777b046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_e70fc0743623f3399d507de5066b03fab81443df83645b18a4a7138cf5f6e72c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70fc0743623f3399d507de5066b03fab81443df83645b18a4a7138cf5f6e72c->enter($__internal_e70fc0743623f3399d507de5066b03fab81443df83645b18a4a7138cf5f6e72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b4ca7dcc7a0791ec8f4fa52db6189a6d2a82c0ab28d1524d258b9f94c777b046->leave($__internal_b4ca7dcc7a0791ec8f4fa52db6189a6d2a82c0ab28d1524d258b9f94c777b046_prof);

        
        $__internal_e70fc0743623f3399d507de5066b03fab81443df83645b18a4a7138cf5f6e72c->leave($__internal_e70fc0743623f3399d507de5066b03fab81443df83645b18a4a7138cf5f6e72c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
