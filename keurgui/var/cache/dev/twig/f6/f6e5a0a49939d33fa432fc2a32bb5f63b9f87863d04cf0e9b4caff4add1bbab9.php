<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_90aa7d27b5422ef3dabff398945722b09baa1cdca485189c8e6c2148e539afd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0aafff8bc50ccd2159125468a13195b0f5f5624675e1e64e389b66d288ce400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0aafff8bc50ccd2159125468a13195b0f5f5624675e1e64e389b66d288ce400->enter($__internal_e0aafff8bc50ccd2159125468a13195b0f5f5624675e1e64e389b66d288ce400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e1e89c02b6d7321a3c22d1c6f01779f82691eeec561931fd3c4d1c236eed281a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e89c02b6d7321a3c22d1c6f01779f82691eeec561931fd3c4d1c236eed281a->enter($__internal_e1e89c02b6d7321a3c22d1c6f01779f82691eeec561931fd3c4d1c236eed281a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0aafff8bc50ccd2159125468a13195b0f5f5624675e1e64e389b66d288ce400->leave($__internal_e0aafff8bc50ccd2159125468a13195b0f5f5624675e1e64e389b66d288ce400_prof);

        
        $__internal_e1e89c02b6d7321a3c22d1c6f01779f82691eeec561931fd3c4d1c236eed281a->leave($__internal_e1e89c02b6d7321a3c22d1c6f01779f82691eeec561931fd3c4d1c236eed281a_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9706c1761b7defa6ebac8ae2c89cf0a563047b0d3b588081169793fbde58c1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9706c1761b7defa6ebac8ae2c89cf0a563047b0d3b588081169793fbde58c1e1->enter($__internal_9706c1761b7defa6ebac8ae2c89cf0a563047b0d3b588081169793fbde58c1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_28d99ca795aa18edef5d558b73f15f92bec038371a05a670bacee878e97ed494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d99ca795aa18edef5d558b73f15f92bec038371a05a670bacee878e97ed494->enter($__internal_28d99ca795aa18edef5d558b73f15f92bec038371a05a670bacee878e97ed494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_28d99ca795aa18edef5d558b73f15f92bec038371a05a670bacee878e97ed494->leave($__internal_28d99ca795aa18edef5d558b73f15f92bec038371a05a670bacee878e97ed494_prof);

        
        $__internal_9706c1761b7defa6ebac8ae2c89cf0a563047b0d3b588081169793fbde58c1e1->leave($__internal_9706c1761b7defa6ebac8ae2c89cf0a563047b0d3b588081169793fbde58c1e1_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8f8ec14cf41a050dc7636a84998f93e4996178a35aa461bf5f87a558e0ef308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f8ec14cf41a050dc7636a84998f93e4996178a35aa461bf5f87a558e0ef308->enter($__internal_b8f8ec14cf41a050dc7636a84998f93e4996178a35aa461bf5f87a558e0ef308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fe270f49e91e26b2f78660b8ae394c5defe687a4ddb6af3bfbf3e24db8184440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe270f49e91e26b2f78660b8ae394c5defe687a4ddb6af3bfbf3e24db8184440->enter($__internal_fe270f49e91e26b2f78660b8ae394c5defe687a4ddb6af3bfbf3e24db8184440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_fe270f49e91e26b2f78660b8ae394c5defe687a4ddb6af3bfbf3e24db8184440->leave($__internal_fe270f49e91e26b2f78660b8ae394c5defe687a4ddb6af3bfbf3e24db8184440_prof);

        
        $__internal_b8f8ec14cf41a050dc7636a84998f93e4996178a35aa461bf5f87a558e0ef308->leave($__internal_b8f8ec14cf41a050dc7636a84998f93e4996178a35aa461bf5f87a558e0ef308_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
