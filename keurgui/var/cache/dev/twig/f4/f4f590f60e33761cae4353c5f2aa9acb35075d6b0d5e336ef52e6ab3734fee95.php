<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0adefc645b1fe296573ae0a4b9c45393b7bd2dc03e6a71bd022a88a2537a369b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91b4315850c58470459ad30fc49d1e74e80b53717c7abf06de7c602b03bcddab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91b4315850c58470459ad30fc49d1e74e80b53717c7abf06de7c602b03bcddab->enter($__internal_91b4315850c58470459ad30fc49d1e74e80b53717c7abf06de7c602b03bcddab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_51fd1861b01897452677b2a6401585f9da276c620f4faf5404ecbf255077c099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fd1861b01897452677b2a6401585f9da276c620f4faf5404ecbf255077c099->enter($__internal_51fd1861b01897452677b2a6401585f9da276c620f4faf5404ecbf255077c099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91b4315850c58470459ad30fc49d1e74e80b53717c7abf06de7c602b03bcddab->leave($__internal_91b4315850c58470459ad30fc49d1e74e80b53717c7abf06de7c602b03bcddab_prof);

        
        $__internal_51fd1861b01897452677b2a6401585f9da276c620f4faf5404ecbf255077c099->leave($__internal_51fd1861b01897452677b2a6401585f9da276c620f4faf5404ecbf255077c099_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e582b0815c1442c4f59ad30fe3e211b51c0f52796d454dad47e7dd65fd49e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e582b0815c1442c4f59ad30fe3e211b51c0f52796d454dad47e7dd65fd49e5a->enter($__internal_1e582b0815c1442c4f59ad30fe3e211b51c0f52796d454dad47e7dd65fd49e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5832e13015f5286e1dad81af9e689315a9e6b0aa52542de0cc160d0066ba14cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5832e13015f5286e1dad81af9e689315a9e6b0aa52542de0cc160d0066ba14cb->enter($__internal_5832e13015f5286e1dad81af9e689315a9e6b0aa52542de0cc160d0066ba14cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5832e13015f5286e1dad81af9e689315a9e6b0aa52542de0cc160d0066ba14cb->leave($__internal_5832e13015f5286e1dad81af9e689315a9e6b0aa52542de0cc160d0066ba14cb_prof);

        
        $__internal_1e582b0815c1442c4f59ad30fe3e211b51c0f52796d454dad47e7dd65fd49e5a->leave($__internal_1e582b0815c1442c4f59ad30fe3e211b51c0f52796d454dad47e7dd65fd49e5a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f7c9c6345d94932c65abfe725a450f50be31c14cce14604701611fbcc5ba624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7c9c6345d94932c65abfe725a450f50be31c14cce14604701611fbcc5ba624->enter($__internal_7f7c9c6345d94932c65abfe725a450f50be31c14cce14604701611fbcc5ba624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d0b4684ae38c016a3b29c66f102f1da96f088eebe1f1f3445e6bd9df30d6ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0b4684ae38c016a3b29c66f102f1da96f088eebe1f1f3445e6bd9df30d6ede->enter($__internal_6d0b4684ae38c016a3b29c66f102f1da96f088eebe1f1f3445e6bd9df30d6ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6d0b4684ae38c016a3b29c66f102f1da96f088eebe1f1f3445e6bd9df30d6ede->leave($__internal_6d0b4684ae38c016a3b29c66f102f1da96f088eebe1f1f3445e6bd9df30d6ede_prof);

        
        $__internal_7f7c9c6345d94932c65abfe725a450f50be31c14cce14604701611fbcc5ba624->leave($__internal_7f7c9c6345d94932c65abfe725a450f50be31c14cce14604701611fbcc5ba624_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
