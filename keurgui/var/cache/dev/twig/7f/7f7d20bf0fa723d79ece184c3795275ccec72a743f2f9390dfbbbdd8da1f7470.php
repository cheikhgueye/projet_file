<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_084f1ce5d681058d531a27ae92afe167f2b71fff0cfee7862c7e7904be1341d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084f1ce5d681058d531a27ae92afe167f2b71fff0cfee7862c7e7904be1341d4->enter($__internal_084f1ce5d681058d531a27ae92afe167f2b71fff0cfee7862c7e7904be1341d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_50ef353d4c03e0d1e39f00d384815daae8a0dc056b070cbb167a40304c7c5606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ef353d4c03e0d1e39f00d384815daae8a0dc056b070cbb167a40304c7c5606->enter($__internal_50ef353d4c03e0d1e39f00d384815daae8a0dc056b070cbb167a40304c7c5606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_084f1ce5d681058d531a27ae92afe167f2b71fff0cfee7862c7e7904be1341d4->leave($__internal_084f1ce5d681058d531a27ae92afe167f2b71fff0cfee7862c7e7904be1341d4_prof);

        
        $__internal_50ef353d4c03e0d1e39f00d384815daae8a0dc056b070cbb167a40304c7c5606->leave($__internal_50ef353d4c03e0d1e39f00d384815daae8a0dc056b070cbb167a40304c7c5606_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe7a9883b8f520fcb39269f1df673dd17184113d824088ef4f478e75fcf2154f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7a9883b8f520fcb39269f1df673dd17184113d824088ef4f478e75fcf2154f->enter($__internal_fe7a9883b8f520fcb39269f1df673dd17184113d824088ef4f478e75fcf2154f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dcd59dbde964d1f8c4abd2d59ac801b691bf18c2a4b986dfe31f64df840d1659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd59dbde964d1f8c4abd2d59ac801b691bf18c2a4b986dfe31f64df840d1659->enter($__internal_dcd59dbde964d1f8c4abd2d59ac801b691bf18c2a4b986dfe31f64df840d1659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dcd59dbde964d1f8c4abd2d59ac801b691bf18c2a4b986dfe31f64df840d1659->leave($__internal_dcd59dbde964d1f8c4abd2d59ac801b691bf18c2a4b986dfe31f64df840d1659_prof);

        
        $__internal_fe7a9883b8f520fcb39269f1df673dd17184113d824088ef4f478e75fcf2154f->leave($__internal_fe7a9883b8f520fcb39269f1df673dd17184113d824088ef4f478e75fcf2154f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd07949b56b76ccb8c0472b08e71cc1a084241f0ebde0b1db67caec7a31876bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd07949b56b76ccb8c0472b08e71cc1a084241f0ebde0b1db67caec7a31876bc->enter($__internal_dd07949b56b76ccb8c0472b08e71cc1a084241f0ebde0b1db67caec7a31876bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_93cdba9d14615570d746268f666a5cba3f0e4405d70cc50a1687c14876bad22d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93cdba9d14615570d746268f666a5cba3f0e4405d70cc50a1687c14876bad22d->enter($__internal_93cdba9d14615570d746268f666a5cba3f0e4405d70cc50a1687c14876bad22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_93cdba9d14615570d746268f666a5cba3f0e4405d70cc50a1687c14876bad22d->leave($__internal_93cdba9d14615570d746268f666a5cba3f0e4405d70cc50a1687c14876bad22d_prof);

        
        $__internal_dd07949b56b76ccb8c0472b08e71cc1a084241f0ebde0b1db67caec7a31876bc->leave($__internal_dd07949b56b76ccb8c0472b08e71cc1a084241f0ebde0b1db67caec7a31876bc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fe304fa89cb60d94018f205feced528d0009dc1a3fbeba29787b5cf9fda2dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe304fa89cb60d94018f205feced528d0009dc1a3fbeba29787b5cf9fda2dfe->enter($__internal_0fe304fa89cb60d94018f205feced528d0009dc1a3fbeba29787b5cf9fda2dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d26b1f0aa5b4031d0ab5132a6fd0a3c0f032fc4cb5f9f972949ad2cbda37a144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26b1f0aa5b4031d0ab5132a6fd0a3c0f032fc4cb5f9f972949ad2cbda37a144->enter($__internal_d26b1f0aa5b4031d0ab5132a6fd0a3c0f032fc4cb5f9f972949ad2cbda37a144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d26b1f0aa5b4031d0ab5132a6fd0a3c0f032fc4cb5f9f972949ad2cbda37a144->leave($__internal_d26b1f0aa5b4031d0ab5132a6fd0a3c0f032fc4cb5f9f972949ad2cbda37a144_prof);

        
        $__internal_0fe304fa89cb60d94018f205feced528d0009dc1a3fbeba29787b5cf9fda2dfe->leave($__internal_0fe304fa89cb60d94018f205feced528d0009dc1a3fbeba29787b5cf9fda2dfe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
