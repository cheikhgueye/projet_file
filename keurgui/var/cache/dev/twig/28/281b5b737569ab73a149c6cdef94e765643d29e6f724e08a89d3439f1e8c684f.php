<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fb2881128d3ee5cd286108fe3802172f92989c444687df3e42b246b6aadc03f9 extends Twig_Template
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
        $__internal_551715ceafc2565b0af79f4468772ee1be2195ecdecb84efc8e7e4ac0e8bc99b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_551715ceafc2565b0af79f4468772ee1be2195ecdecb84efc8e7e4ac0e8bc99b->enter($__internal_551715ceafc2565b0af79f4468772ee1be2195ecdecb84efc8e7e4ac0e8bc99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_565b24edb731a2a9941345b8e9f0e64ed42b7c916b90f48a5f16f7debc0d2422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565b24edb731a2a9941345b8e9f0e64ed42b7c916b90f48a5f16f7debc0d2422->enter($__internal_565b24edb731a2a9941345b8e9f0e64ed42b7c916b90f48a5f16f7debc0d2422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_551715ceafc2565b0af79f4468772ee1be2195ecdecb84efc8e7e4ac0e8bc99b->leave($__internal_551715ceafc2565b0af79f4468772ee1be2195ecdecb84efc8e7e4ac0e8bc99b_prof);

        
        $__internal_565b24edb731a2a9941345b8e9f0e64ed42b7c916b90f48a5f16f7debc0d2422->leave($__internal_565b24edb731a2a9941345b8e9f0e64ed42b7c916b90f48a5f16f7debc0d2422_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
