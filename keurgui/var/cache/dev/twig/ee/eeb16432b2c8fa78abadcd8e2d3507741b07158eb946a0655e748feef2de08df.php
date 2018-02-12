<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_b47fe2c892026d47628c0b02ffcfb5295d5601f5ca7303c90906caacf263f3fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_807439f0fe6a4c13cafd12d94ba2869d64ac5d6b05d2fd294b2015088b8c6dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807439f0fe6a4c13cafd12d94ba2869d64ac5d6b05d2fd294b2015088b8c6dc6->enter($__internal_807439f0fe6a4c13cafd12d94ba2869d64ac5d6b05d2fd294b2015088b8c6dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_72e7c19221b34f37243608c6d79b2a5e7a8d54603174b2d0f2a386cdbf0122d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e7c19221b34f37243608c6d79b2a5e7a8d54603174b2d0f2a386cdbf0122d8->enter($__internal_72e7c19221b34f37243608c6d79b2a5e7a8d54603174b2d0f2a386cdbf0122d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_807439f0fe6a4c13cafd12d94ba2869d64ac5d6b05d2fd294b2015088b8c6dc6->leave($__internal_807439f0fe6a4c13cafd12d94ba2869d64ac5d6b05d2fd294b2015088b8c6dc6_prof);

        
        $__internal_72e7c19221b34f37243608c6d79b2a5e7a8d54603174b2d0f2a386cdbf0122d8->leave($__internal_72e7c19221b34f37243608c6d79b2a5e7a8d54603174b2d0f2a386cdbf0122d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_754c1c5afc3f3ea9bb43c9a1e40333ca6236656d00498de3ef94e8b810614df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754c1c5afc3f3ea9bb43c9a1e40333ca6236656d00498de3ef94e8b810614df1->enter($__internal_754c1c5afc3f3ea9bb43c9a1e40333ca6236656d00498de3ef94e8b810614df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c6da09b6738c1805a01e4d409db14ac4820587ef3e9ce4b01c85cafdb6cb5a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6da09b6738c1805a01e4d409db14ac4820587ef3e9ce4b01c85cafdb6cb5a43->enter($__internal_c6da09b6738c1805a01e4d409db14ac4820587ef3e9ce4b01c85cafdb6cb5a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c6da09b6738c1805a01e4d409db14ac4820587ef3e9ce4b01c85cafdb6cb5a43->leave($__internal_c6da09b6738c1805a01e4d409db14ac4820587ef3e9ce4b01c85cafdb6cb5a43_prof);

        
        $__internal_754c1c5afc3f3ea9bb43c9a1e40333ca6236656d00498de3ef94e8b810614df1->leave($__internal_754c1c5afc3f3ea9bb43c9a1e40333ca6236656d00498de3ef94e8b810614df1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
