<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d64aecf1d7fbf7a8b7acee602f5d6460f106163228cb84b6c90e33ec2a4a6877 extends Twig_Template
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
        $__internal_651a3b7b6e0ca50bf445d5b898b1b870585e343cf6d19e60a533fddf5f2dc783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651a3b7b6e0ca50bf445d5b898b1b870585e343cf6d19e60a533fddf5f2dc783->enter($__internal_651a3b7b6e0ca50bf445d5b898b1b870585e343cf6d19e60a533fddf5f2dc783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_12bf6ec5a65d189176cf9df776015b421dec4b5913cb83813f7875611db1cbc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bf6ec5a65d189176cf9df776015b421dec4b5913cb83813f7875611db1cbc2->enter($__internal_12bf6ec5a65d189176cf9df776015b421dec4b5913cb83813f7875611db1cbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_651a3b7b6e0ca50bf445d5b898b1b870585e343cf6d19e60a533fddf5f2dc783->leave($__internal_651a3b7b6e0ca50bf445d5b898b1b870585e343cf6d19e60a533fddf5f2dc783_prof);

        
        $__internal_12bf6ec5a65d189176cf9df776015b421dec4b5913cb83813f7875611db1cbc2->leave($__internal_12bf6ec5a65d189176cf9df776015b421dec4b5913cb83813f7875611db1cbc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
