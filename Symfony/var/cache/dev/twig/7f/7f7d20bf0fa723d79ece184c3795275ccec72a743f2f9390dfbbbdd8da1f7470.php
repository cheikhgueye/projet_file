<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_739443672a2f2d1c0f570404d87fe6e85ba34040fc62e4db92b7d39afc1a898a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739443672a2f2d1c0f570404d87fe6e85ba34040fc62e4db92b7d39afc1a898a->enter($__internal_739443672a2f2d1c0f570404d87fe6e85ba34040fc62e4db92b7d39afc1a898a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_10889b87cc5fc1aa9ac80a9775a573bec0647a07a49fc0b8cef9b8b953157882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10889b87cc5fc1aa9ac80a9775a573bec0647a07a49fc0b8cef9b8b953157882->enter($__internal_10889b87cc5fc1aa9ac80a9775a573bec0647a07a49fc0b8cef9b8b953157882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_739443672a2f2d1c0f570404d87fe6e85ba34040fc62e4db92b7d39afc1a898a->leave($__internal_739443672a2f2d1c0f570404d87fe6e85ba34040fc62e4db92b7d39afc1a898a_prof);

        
        $__internal_10889b87cc5fc1aa9ac80a9775a573bec0647a07a49fc0b8cef9b8b953157882->leave($__internal_10889b87cc5fc1aa9ac80a9775a573bec0647a07a49fc0b8cef9b8b953157882_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_824f8752da9c3098a03237dc92129ceacdd0995a56754ed199545e693ec591b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_824f8752da9c3098a03237dc92129ceacdd0995a56754ed199545e693ec591b7->enter($__internal_824f8752da9c3098a03237dc92129ceacdd0995a56754ed199545e693ec591b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0af3e288d10e466ecb04107c7b24b6e4454605803452c0f832c7648b28c0a373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af3e288d10e466ecb04107c7b24b6e4454605803452c0f832c7648b28c0a373->enter($__internal_0af3e288d10e466ecb04107c7b24b6e4454605803452c0f832c7648b28c0a373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0af3e288d10e466ecb04107c7b24b6e4454605803452c0f832c7648b28c0a373->leave($__internal_0af3e288d10e466ecb04107c7b24b6e4454605803452c0f832c7648b28c0a373_prof);

        
        $__internal_824f8752da9c3098a03237dc92129ceacdd0995a56754ed199545e693ec591b7->leave($__internal_824f8752da9c3098a03237dc92129ceacdd0995a56754ed199545e693ec591b7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b743f5d5cb4f7d48423f3c7b2cbdfa65b3430ed339103b0275ce84530e6caf1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b743f5d5cb4f7d48423f3c7b2cbdfa65b3430ed339103b0275ce84530e6caf1d->enter($__internal_b743f5d5cb4f7d48423f3c7b2cbdfa65b3430ed339103b0275ce84530e6caf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8bcb47a7be8a5fb784bbb762c8ffbae967d3416a79dd24b7c1df5d140e3abc85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcb47a7be8a5fb784bbb762c8ffbae967d3416a79dd24b7c1df5d140e3abc85->enter($__internal_8bcb47a7be8a5fb784bbb762c8ffbae967d3416a79dd24b7c1df5d140e3abc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8bcb47a7be8a5fb784bbb762c8ffbae967d3416a79dd24b7c1df5d140e3abc85->leave($__internal_8bcb47a7be8a5fb784bbb762c8ffbae967d3416a79dd24b7c1df5d140e3abc85_prof);

        
        $__internal_b743f5d5cb4f7d48423f3c7b2cbdfa65b3430ed339103b0275ce84530e6caf1d->leave($__internal_b743f5d5cb4f7d48423f3c7b2cbdfa65b3430ed339103b0275ce84530e6caf1d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5142b5bdc6b2e9303f42a7037fc411c6c6e89d96a0835e85e1f3ff87acaa229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5142b5bdc6b2e9303f42a7037fc411c6c6e89d96a0835e85e1f3ff87acaa229->enter($__internal_a5142b5bdc6b2e9303f42a7037fc411c6c6e89d96a0835e85e1f3ff87acaa229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_35386dbbf7cd37987c22fda695d8b9da11c139874d4379eab34813c9645292bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35386dbbf7cd37987c22fda695d8b9da11c139874d4379eab34813c9645292bd->enter($__internal_35386dbbf7cd37987c22fda695d8b9da11c139874d4379eab34813c9645292bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_35386dbbf7cd37987c22fda695d8b9da11c139874d4379eab34813c9645292bd->leave($__internal_35386dbbf7cd37987c22fda695d8b9da11c139874d4379eab34813c9645292bd_prof);

        
        $__internal_a5142b5bdc6b2e9303f42a7037fc411c6c6e89d96a0835e85e1f3ff87acaa229->leave($__internal_a5142b5bdc6b2e9303f42a7037fc411c6c6e89d96a0835e85e1f3ff87acaa229_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/projet_file_rouge/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
