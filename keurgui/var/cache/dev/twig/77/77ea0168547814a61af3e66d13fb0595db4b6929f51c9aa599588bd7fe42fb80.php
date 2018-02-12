<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_214f803ac63799fadaa3f891b4795b9934addf4cd337d11ee551f71dfd471b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_214f803ac63799fadaa3f891b4795b9934addf4cd337d11ee551f71dfd471b17->enter($__internal_214f803ac63799fadaa3f891b4795b9934addf4cd337d11ee551f71dfd471b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_5dd6889ef388393ec54d8f4a4fc65a79ea50197595183be7d74740e49fa986c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd6889ef388393ec54d8f4a4fc65a79ea50197595183be7d74740e49fa986c4->enter($__internal_5dd6889ef388393ec54d8f4a4fc65a79ea50197595183be7d74740e49fa986c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_214f803ac63799fadaa3f891b4795b9934addf4cd337d11ee551f71dfd471b17->leave($__internal_214f803ac63799fadaa3f891b4795b9934addf4cd337d11ee551f71dfd471b17_prof);

        
        $__internal_5dd6889ef388393ec54d8f4a4fc65a79ea50197595183be7d74740e49fa986c4->leave($__internal_5dd6889ef388393ec54d8f4a4fc65a79ea50197595183be7d74740e49fa986c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd29a7dec362b8a92a636bf4f24b2c9c9cd92c02840156f89ecf932bd0da158b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd29a7dec362b8a92a636bf4f24b2c9c9cd92c02840156f89ecf932bd0da158b->enter($__internal_cd29a7dec362b8a92a636bf4f24b2c9c9cd92c02840156f89ecf932bd0da158b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f058a6f45d2cad088a269138883f8fc05d1fe5354ced256d2a2803a44cd5728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f058a6f45d2cad088a269138883f8fc05d1fe5354ced256d2a2803a44cd5728->enter($__internal_6f058a6f45d2cad088a269138883f8fc05d1fe5354ced256d2a2803a44cd5728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6f058a6f45d2cad088a269138883f8fc05d1fe5354ced256d2a2803a44cd5728->leave($__internal_6f058a6f45d2cad088a269138883f8fc05d1fe5354ced256d2a2803a44cd5728_prof);

        
        $__internal_cd29a7dec362b8a92a636bf4f24b2c9c9cd92c02840156f89ecf932bd0da158b->leave($__internal_cd29a7dec362b8a92a636bf4f24b2c9c9cd92c02840156f89ecf932bd0da158b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0c7e2e013a2c971f885114c4c824560a257bb7a0fce887e55e0bbd1ca6a8827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c7e2e013a2c971f885114c4c824560a257bb7a0fce887e55e0bbd1ca6a8827->enter($__internal_a0c7e2e013a2c971f885114c4c824560a257bb7a0fce887e55e0bbd1ca6a8827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_228191e74c2fad39cc72fc29f619f2f0b88eb7a8da082005e8da1fa2b21cfab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228191e74c2fad39cc72fc29f619f2f0b88eb7a8da082005e8da1fa2b21cfab2->enter($__internal_228191e74c2fad39cc72fc29f619f2f0b88eb7a8da082005e8da1fa2b21cfab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_228191e74c2fad39cc72fc29f619f2f0b88eb7a8da082005e8da1fa2b21cfab2->leave($__internal_228191e74c2fad39cc72fc29f619f2f0b88eb7a8da082005e8da1fa2b21cfab2_prof);

        
        $__internal_a0c7e2e013a2c971f885114c4c824560a257bb7a0fce887e55e0bbd1ca6a8827->leave($__internal_a0c7e2e013a2c971f885114c4c824560a257bb7a0fce887e55e0bbd1ca6a8827_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_75b5c5af0954e5b3593192f973641093d618d86c48b39f5f9359bfa4311b22b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b5c5af0954e5b3593192f973641093d618d86c48b39f5f9359bfa4311b22b3->enter($__internal_75b5c5af0954e5b3593192f973641093d618d86c48b39f5f9359bfa4311b22b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_161d9cf1b30bbd3d477a332d44dcef41da2558d39e7959c39850a0953de4e1de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161d9cf1b30bbd3d477a332d44dcef41da2558d39e7959c39850a0953de4e1de->enter($__internal_161d9cf1b30bbd3d477a332d44dcef41da2558d39e7959c39850a0953de4e1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_161d9cf1b30bbd3d477a332d44dcef41da2558d39e7959c39850a0953de4e1de->leave($__internal_161d9cf1b30bbd3d477a332d44dcef41da2558d39e7959c39850a0953de4e1de_prof);

        
        $__internal_75b5c5af0954e5b3593192f973641093d618d86c48b39f5f9359bfa4311b22b3->leave($__internal_75b5c5af0954e5b3593192f973641093d618d86c48b39f5f9359bfa4311b22b3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
