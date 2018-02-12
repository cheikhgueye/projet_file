<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_faaae71398e3c5abdfdf142f0644c1e0af2c3b013ab2fc388c18d2f3c3cedf46 extends Twig_Template
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
        $__internal_da9c82a0f24826369f2ec5117706f501049635c8ecde370c83c3677a3e047744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da9c82a0f24826369f2ec5117706f501049635c8ecde370c83c3677a3e047744->enter($__internal_da9c82a0f24826369f2ec5117706f501049635c8ecde370c83c3677a3e047744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f209f08961594369f622cb824022bf938e757f7ec8e746244c9ab417e89555f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f209f08961594369f622cb824022bf938e757f7ec8e746244c9ab417e89555f1->enter($__internal_f209f08961594369f622cb824022bf938e757f7ec8e746244c9ab417e89555f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_da9c82a0f24826369f2ec5117706f501049635c8ecde370c83c3677a3e047744->leave($__internal_da9c82a0f24826369f2ec5117706f501049635c8ecde370c83c3677a3e047744_prof);

        
        $__internal_f209f08961594369f622cb824022bf938e757f7ec8e746244c9ab417e89555f1->leave($__internal_f209f08961594369f622cb824022bf938e757f7ec8e746244c9ab417e89555f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
