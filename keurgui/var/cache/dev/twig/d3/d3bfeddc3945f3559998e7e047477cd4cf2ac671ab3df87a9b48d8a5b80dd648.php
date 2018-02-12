<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d1a728eb9c9b48c4846b6bf05ac0fac924c037de06b706f786bd07d305bbbb84 extends Twig_Template
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
        $__internal_5f5270238dc4b917fae98b3b8e628e19e5ce6dfa2d8edf0d8104959d7b173e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f5270238dc4b917fae98b3b8e628e19e5ce6dfa2d8edf0d8104959d7b173e8e->enter($__internal_5f5270238dc4b917fae98b3b8e628e19e5ce6dfa2d8edf0d8104959d7b173e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_91f1f1c90baa9898012b2fd817450b3c2eb7c82404e1b82843be477b5b1519f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f1f1c90baa9898012b2fd817450b3c2eb7c82404e1b82843be477b5b1519f1->enter($__internal_91f1f1c90baa9898012b2fd817450b3c2eb7c82404e1b82843be477b5b1519f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5f5270238dc4b917fae98b3b8e628e19e5ce6dfa2d8edf0d8104959d7b173e8e->leave($__internal_5f5270238dc4b917fae98b3b8e628e19e5ce6dfa2d8edf0d8104959d7b173e8e_prof);

        
        $__internal_91f1f1c90baa9898012b2fd817450b3c2eb7c82404e1b82843be477b5b1519f1->leave($__internal_91f1f1c90baa9898012b2fd817450b3c2eb7c82404e1b82843be477b5b1519f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
