<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_fdaef4d5f838729ddfcf4be7d69febe4ffd83306b84aa4fe158a8a7871b6f226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdaef4d5f838729ddfcf4be7d69febe4ffd83306b84aa4fe158a8a7871b6f226->enter($__internal_fdaef4d5f838729ddfcf4be7d69febe4ffd83306b84aa4fe158a8a7871b6f226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3ea447dede0ffe29af48405cde2ae50375e98c73314fb9a1d23902767b3e31d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea447dede0ffe29af48405cde2ae50375e98c73314fb9a1d23902767b3e31d0->enter($__internal_3ea447dede0ffe29af48405cde2ae50375e98c73314fb9a1d23902767b3e31d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdaef4d5f838729ddfcf4be7d69febe4ffd83306b84aa4fe158a8a7871b6f226->leave($__internal_fdaef4d5f838729ddfcf4be7d69febe4ffd83306b84aa4fe158a8a7871b6f226_prof);

        
        $__internal_3ea447dede0ffe29af48405cde2ae50375e98c73314fb9a1d23902767b3e31d0->leave($__internal_3ea447dede0ffe29af48405cde2ae50375e98c73314fb9a1d23902767b3e31d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3eb15ad3919e1f5c6a74a9b5e61bbbfadfca0bcbd653cb3d4f5227eff6fa4d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb15ad3919e1f5c6a74a9b5e61bbbfadfca0bcbd653cb3d4f5227eff6fa4d7b->enter($__internal_3eb15ad3919e1f5c6a74a9b5e61bbbfadfca0bcbd653cb3d4f5227eff6fa4d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a2e71ea36a8a9e7ad57b3aefec311f0799277f38201f59c5f624f2e5201b684f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e71ea36a8a9e7ad57b3aefec311f0799277f38201f59c5f624f2e5201b684f->enter($__internal_a2e71ea36a8a9e7ad57b3aefec311f0799277f38201f59c5f624f2e5201b684f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a2e71ea36a8a9e7ad57b3aefec311f0799277f38201f59c5f624f2e5201b684f->leave($__internal_a2e71ea36a8a9e7ad57b3aefec311f0799277f38201f59c5f624f2e5201b684f_prof);

        
        $__internal_3eb15ad3919e1f5c6a74a9b5e61bbbfadfca0bcbd653cb3d4f5227eff6fa4d7b->leave($__internal_3eb15ad3919e1f5c6a74a9b5e61bbbfadfca0bcbd653cb3d4f5227eff6fa4d7b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b2e6632ec0c1e3145928bebc87c4dc6846b27055cbafabcb3dbcb3b61c376fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b2e6632ec0c1e3145928bebc87c4dc6846b27055cbafabcb3dbcb3b61c376fd->enter($__internal_9b2e6632ec0c1e3145928bebc87c4dc6846b27055cbafabcb3dbcb3b61c376fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_66f00d849c741d7701625ee4d591398b309f6ff17980a07ef90b513898821cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f00d849c741d7701625ee4d591398b309f6ff17980a07ef90b513898821cc9->enter($__internal_66f00d849c741d7701625ee4d591398b309f6ff17980a07ef90b513898821cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_66f00d849c741d7701625ee4d591398b309f6ff17980a07ef90b513898821cc9->leave($__internal_66f00d849c741d7701625ee4d591398b309f6ff17980a07ef90b513898821cc9_prof);

        
        $__internal_9b2e6632ec0c1e3145928bebc87c4dc6846b27055cbafabcb3dbcb3b61c376fd->leave($__internal_9b2e6632ec0c1e3145928bebc87c4dc6846b27055cbafabcb3dbcb3b61c376fd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_205dcb2a1ef9b789285ab0a012e2315bebd9e3af2fad2b23fecfd17522e97417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205dcb2a1ef9b789285ab0a012e2315bebd9e3af2fad2b23fecfd17522e97417->enter($__internal_205dcb2a1ef9b789285ab0a012e2315bebd9e3af2fad2b23fecfd17522e97417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d33626983dc8d2bdfe1170f2f14cb6b13ff4d1d38ced72764d3f00c17c4db074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33626983dc8d2bdfe1170f2f14cb6b13ff4d1d38ced72764d3f00c17c4db074->enter($__internal_d33626983dc8d2bdfe1170f2f14cb6b13ff4d1d38ced72764d3f00c17c4db074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d33626983dc8d2bdfe1170f2f14cb6b13ff4d1d38ced72764d3f00c17c4db074->leave($__internal_d33626983dc8d2bdfe1170f2f14cb6b13ff4d1d38ced72764d3f00c17c4db074_prof);

        
        $__internal_205dcb2a1ef9b789285ab0a012e2315bebd9e3af2fad2b23fecfd17522e97417->leave($__internal_205dcb2a1ef9b789285ab0a012e2315bebd9e3af2fad2b23fecfd17522e97417_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/projet_file_rouge/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
