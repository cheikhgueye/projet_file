<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4fe8090cee8a0d59d94e4f8eca2e1ef52176346048a658f5d249b50155866f7d extends Twig_Template
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
        $__internal_0178be507d22fcf7c1c21f1ba1b79ec9fbc146c13db6f5f0721b9ec2504754d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0178be507d22fcf7c1c21f1ba1b79ec9fbc146c13db6f5f0721b9ec2504754d9->enter($__internal_0178be507d22fcf7c1c21f1ba1b79ec9fbc146c13db6f5f0721b9ec2504754d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_0248967d570feb83bf04b541def5ab6376a17c97a4612ac7ce581bd676669de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0248967d570feb83bf04b541def5ab6376a17c97a4612ac7ce581bd676669de8->enter($__internal_0248967d570feb83bf04b541def5ab6376a17c97a4612ac7ce581bd676669de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0178be507d22fcf7c1c21f1ba1b79ec9fbc146c13db6f5f0721b9ec2504754d9->leave($__internal_0178be507d22fcf7c1c21f1ba1b79ec9fbc146c13db6f5f0721b9ec2504754d9_prof);

        
        $__internal_0248967d570feb83bf04b541def5ab6376a17c97a4612ac7ce581bd676669de8->leave($__internal_0248967d570feb83bf04b541def5ab6376a17c97a4612ac7ce581bd676669de8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
