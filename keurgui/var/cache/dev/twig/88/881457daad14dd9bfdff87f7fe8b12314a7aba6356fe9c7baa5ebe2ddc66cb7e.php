<?php

/* base.html.twig */
class __TwigTemplate_2e55ceb3e3a8172ee2bdb98420a739c71281e5768b9082c463522045b60e4555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28733d622b79a3e3849ba9f542c8f13714ecc3e4b0e5146169e20cc80d59afff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28733d622b79a3e3849ba9f542c8f13714ecc3e4b0e5146169e20cc80d59afff->enter($__internal_28733d622b79a3e3849ba9f542c8f13714ecc3e4b0e5146169e20cc80d59afff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_410ffb45f3a86978cb202d72dfc0a8597437fb416cb7e56eab338150d48ccece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410ffb45f3a86978cb202d72dfc0a8597437fb416cb7e56eab338150d48ccece->enter($__internal_410ffb45f3a86978cb202d72dfc0a8597437fb416cb7e56eab338150d48ccece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_28733d622b79a3e3849ba9f542c8f13714ecc3e4b0e5146169e20cc80d59afff->leave($__internal_28733d622b79a3e3849ba9f542c8f13714ecc3e4b0e5146169e20cc80d59afff_prof);

        
        $__internal_410ffb45f3a86978cb202d72dfc0a8597437fb416cb7e56eab338150d48ccece->leave($__internal_410ffb45f3a86978cb202d72dfc0a8597437fb416cb7e56eab338150d48ccece_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_92ebf0d2230c856800dff8e8e84e699964d1af09b4fde3f4204a2789ba0eb02c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ebf0d2230c856800dff8e8e84e699964d1af09b4fde3f4204a2789ba0eb02c->enter($__internal_92ebf0d2230c856800dff8e8e84e699964d1af09b4fde3f4204a2789ba0eb02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a71902a263c7438358f3afdc15c4b24cb13ef641b5978f94f73d9fddb186e97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71902a263c7438358f3afdc15c4b24cb13ef641b5978f94f73d9fddb186e97c->enter($__internal_a71902a263c7438358f3afdc15c4b24cb13ef641b5978f94f73d9fddb186e97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a71902a263c7438358f3afdc15c4b24cb13ef641b5978f94f73d9fddb186e97c->leave($__internal_a71902a263c7438358f3afdc15c4b24cb13ef641b5978f94f73d9fddb186e97c_prof);

        
        $__internal_92ebf0d2230c856800dff8e8e84e699964d1af09b4fde3f4204a2789ba0eb02c->leave($__internal_92ebf0d2230c856800dff8e8e84e699964d1af09b4fde3f4204a2789ba0eb02c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29014e7633e52870903b1da1b4f926e9deab84bf532c3102a64559032e79c008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29014e7633e52870903b1da1b4f926e9deab84bf532c3102a64559032e79c008->enter($__internal_29014e7633e52870903b1da1b4f926e9deab84bf532c3102a64559032e79c008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a349b94e4f7d6a7d06170c01b8cefad8dbc90b88c65f013174bda6987292a29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a349b94e4f7d6a7d06170c01b8cefad8dbc90b88c65f013174bda6987292a29c->enter($__internal_a349b94e4f7d6a7d06170c01b8cefad8dbc90b88c65f013174bda6987292a29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a349b94e4f7d6a7d06170c01b8cefad8dbc90b88c65f013174bda6987292a29c->leave($__internal_a349b94e4f7d6a7d06170c01b8cefad8dbc90b88c65f013174bda6987292a29c_prof);

        
        $__internal_29014e7633e52870903b1da1b4f926e9deab84bf532c3102a64559032e79c008->leave($__internal_29014e7633e52870903b1da1b4f926e9deab84bf532c3102a64559032e79c008_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fb04c0143f005db5a9a8fcc3bb084b6e5403ea16a915f9920f4d98f8a34c569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb04c0143f005db5a9a8fcc3bb084b6e5403ea16a915f9920f4d98f8a34c569->enter($__internal_1fb04c0143f005db5a9a8fcc3bb084b6e5403ea16a915f9920f4d98f8a34c569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_780d77e0cffd73315666722ed633a4f64b3c92d5ef9f4b074f787e1aad363b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780d77e0cffd73315666722ed633a4f64b3c92d5ef9f4b074f787e1aad363b68->enter($__internal_780d77e0cffd73315666722ed633a4f64b3c92d5ef9f4b074f787e1aad363b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_780d77e0cffd73315666722ed633a4f64b3c92d5ef9f4b074f787e1aad363b68->leave($__internal_780d77e0cffd73315666722ed633a4f64b3c92d5ef9f4b074f787e1aad363b68_prof);

        
        $__internal_1fb04c0143f005db5a9a8fcc3bb084b6e5403ea16a915f9920f4d98f8a34c569->leave($__internal_1fb04c0143f005db5a9a8fcc3bb084b6e5403ea16a915f9920f4d98f8a34c569_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ff07033a2a8be40054a8a5a955298531a785e958c994e9461d1f2024453eba95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff07033a2a8be40054a8a5a955298531a785e958c994e9461d1f2024453eba95->enter($__internal_ff07033a2a8be40054a8a5a955298531a785e958c994e9461d1f2024453eba95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_03271bd810ae13c9301fcff1d44769e3234a3a6b6b637f81895a927c27e53367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03271bd810ae13c9301fcff1d44769e3234a3a6b6b637f81895a927c27e53367->enter($__internal_03271bd810ae13c9301fcff1d44769e3234a3a6b6b637f81895a927c27e53367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_03271bd810ae13c9301fcff1d44769e3234a3a6b6b637f81895a927c27e53367->leave($__internal_03271bd810ae13c9301fcff1d44769e3234a3a6b6b637f81895a927c27e53367_prof);

        
        $__internal_ff07033a2a8be40054a8a5a955298531a785e958c994e9461d1f2024453eba95->leave($__internal_ff07033a2a8be40054a8a5a955298531a785e958c994e9461d1f2024453eba95_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/base.html.twig");
    }
}
