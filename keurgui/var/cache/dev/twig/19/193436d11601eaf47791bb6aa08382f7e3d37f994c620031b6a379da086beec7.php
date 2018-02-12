<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_677fcf8a40cd9c0bec4b254a1e8996e89056d420f08f29ec7a956bfbb92db10c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6af257a8e18b9fccf7324e47ac51f234977bf304c97d802c360b10fb3430187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6af257a8e18b9fccf7324e47ac51f234977bf304c97d802c360b10fb3430187->enter($__internal_d6af257a8e18b9fccf7324e47ac51f234977bf304c97d802c360b10fb3430187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_143ab6e6db0bacd1a97b21f218f89fd95d3858c428394d69e98d6cc3614c32ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143ab6e6db0bacd1a97b21f218f89fd95d3858c428394d69e98d6cc3614c32ae->enter($__internal_143ab6e6db0bacd1a97b21f218f89fd95d3858c428394d69e98d6cc3614c32ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6af257a8e18b9fccf7324e47ac51f234977bf304c97d802c360b10fb3430187->leave($__internal_d6af257a8e18b9fccf7324e47ac51f234977bf304c97d802c360b10fb3430187_prof);

        
        $__internal_143ab6e6db0bacd1a97b21f218f89fd95d3858c428394d69e98d6cc3614c32ae->leave($__internal_143ab6e6db0bacd1a97b21f218f89fd95d3858c428394d69e98d6cc3614c32ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e2b2e397f81b216d71b181d09377bff56f268d8a9fb2bbddd84955e4a823d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e2b2e397f81b216d71b181d09377bff56f268d8a9fb2bbddd84955e4a823d3c->enter($__internal_2e2b2e397f81b216d71b181d09377bff56f268d8a9fb2bbddd84955e4a823d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b7ef061e2fd7165301465a5928c700e20720fbe0571e5619d70e24406344a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7ef061e2fd7165301465a5928c700e20720fbe0571e5619d70e24406344a23->enter($__internal_9b7ef061e2fd7165301465a5928c700e20720fbe0571e5619d70e24406344a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9b7ef061e2fd7165301465a5928c700e20720fbe0571e5619d70e24406344a23->leave($__internal_9b7ef061e2fd7165301465a5928c700e20720fbe0571e5619d70e24406344a23_prof);

        
        $__internal_2e2b2e397f81b216d71b181d09377bff56f268d8a9fb2bbddd84955e4a823d3c->leave($__internal_2e2b2e397f81b216d71b181d09377bff56f268d8a9fb2bbddd84955e4a823d3c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e00b59b6cde6d2aaf3630a4bb207cfb740ff5b7bacf235003ac00d7d8d8ac840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00b59b6cde6d2aaf3630a4bb207cfb740ff5b7bacf235003ac00d7d8d8ac840->enter($__internal_e00b59b6cde6d2aaf3630a4bb207cfb740ff5b7bacf235003ac00d7d8d8ac840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc6ecd218864f9609dfa3333b5f4b48a64d41e50f965aa5adfa8ec94b4cedccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6ecd218864f9609dfa3333b5f4b48a64d41e50f965aa5adfa8ec94b4cedccd->enter($__internal_fc6ecd218864f9609dfa3333b5f4b48a64d41e50f965aa5adfa8ec94b4cedccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_fc6ecd218864f9609dfa3333b5f4b48a64d41e50f965aa5adfa8ec94b4cedccd->leave($__internal_fc6ecd218864f9609dfa3333b5f4b48a64d41e50f965aa5adfa8ec94b4cedccd_prof);

        
        $__internal_e00b59b6cde6d2aaf3630a4bb207cfb740ff5b7bacf235003ac00d7d8d8ac840->leave($__internal_e00b59b6cde6d2aaf3630a4bb207cfb740ff5b7bacf235003ac00d7d8d8ac840_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
