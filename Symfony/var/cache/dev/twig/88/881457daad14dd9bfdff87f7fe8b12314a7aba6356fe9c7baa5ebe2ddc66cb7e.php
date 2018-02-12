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
        $__internal_bcd5d642c458e1001ed15d8e418facb222dff2c2b22480b564302584c0e50712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd5d642c458e1001ed15d8e418facb222dff2c2b22480b564302584c0e50712->enter($__internal_bcd5d642c458e1001ed15d8e418facb222dff2c2b22480b564302584c0e50712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7f81812b23a148254d4946d8d31266a9c12670a7c500ef23d67d99aa05e9bd24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f81812b23a148254d4946d8d31266a9c12670a7c500ef23d67d99aa05e9bd24->enter($__internal_7f81812b23a148254d4946d8d31266a9c12670a7c500ef23d67d99aa05e9bd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bcd5d642c458e1001ed15d8e418facb222dff2c2b22480b564302584c0e50712->leave($__internal_bcd5d642c458e1001ed15d8e418facb222dff2c2b22480b564302584c0e50712_prof);

        
        $__internal_7f81812b23a148254d4946d8d31266a9c12670a7c500ef23d67d99aa05e9bd24->leave($__internal_7f81812b23a148254d4946d8d31266a9c12670a7c500ef23d67d99aa05e9bd24_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2203b62bb2eb4cd4e457f7f239142fec6b2ed922a0879fedb201cd258338380b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2203b62bb2eb4cd4e457f7f239142fec6b2ed922a0879fedb201cd258338380b->enter($__internal_2203b62bb2eb4cd4e457f7f239142fec6b2ed922a0879fedb201cd258338380b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_44dae246305f1972a6fb9067b43cb732bdbb05ab363cfd9dc3f0a6e8c79b278b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44dae246305f1972a6fb9067b43cb732bdbb05ab363cfd9dc3f0a6e8c79b278b->enter($__internal_44dae246305f1972a6fb9067b43cb732bdbb05ab363cfd9dc3f0a6e8c79b278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_44dae246305f1972a6fb9067b43cb732bdbb05ab363cfd9dc3f0a6e8c79b278b->leave($__internal_44dae246305f1972a6fb9067b43cb732bdbb05ab363cfd9dc3f0a6e8c79b278b_prof);

        
        $__internal_2203b62bb2eb4cd4e457f7f239142fec6b2ed922a0879fedb201cd258338380b->leave($__internal_2203b62bb2eb4cd4e457f7f239142fec6b2ed922a0879fedb201cd258338380b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2954a38a0f9fc55b722fbe477418136f766a0541ad1968a578cd09806666553d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2954a38a0f9fc55b722fbe477418136f766a0541ad1968a578cd09806666553d->enter($__internal_2954a38a0f9fc55b722fbe477418136f766a0541ad1968a578cd09806666553d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5b856bb12e2d2dd9bd8c09237d9a139d9a89284a9696164fbbbd171caa59b856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b856bb12e2d2dd9bd8c09237d9a139d9a89284a9696164fbbbd171caa59b856->enter($__internal_5b856bb12e2d2dd9bd8c09237d9a139d9a89284a9696164fbbbd171caa59b856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5b856bb12e2d2dd9bd8c09237d9a139d9a89284a9696164fbbbd171caa59b856->leave($__internal_5b856bb12e2d2dd9bd8c09237d9a139d9a89284a9696164fbbbd171caa59b856_prof);

        
        $__internal_2954a38a0f9fc55b722fbe477418136f766a0541ad1968a578cd09806666553d->leave($__internal_2954a38a0f9fc55b722fbe477418136f766a0541ad1968a578cd09806666553d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c993bb9081672f29ae05605fbf0dc4afcc7080004855f0bebee7a30739f9287f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c993bb9081672f29ae05605fbf0dc4afcc7080004855f0bebee7a30739f9287f->enter($__internal_c993bb9081672f29ae05605fbf0dc4afcc7080004855f0bebee7a30739f9287f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd8060b5eac4cdc9d3189bb737627e9824f919784134906d45a2e57d0b898d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8060b5eac4cdc9d3189bb737627e9824f919784134906d45a2e57d0b898d9f->enter($__internal_fd8060b5eac4cdc9d3189bb737627e9824f919784134906d45a2e57d0b898d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fd8060b5eac4cdc9d3189bb737627e9824f919784134906d45a2e57d0b898d9f->leave($__internal_fd8060b5eac4cdc9d3189bb737627e9824f919784134906d45a2e57d0b898d9f_prof);

        
        $__internal_c993bb9081672f29ae05605fbf0dc4afcc7080004855f0bebee7a30739f9287f->leave($__internal_c993bb9081672f29ae05605fbf0dc4afcc7080004855f0bebee7a30739f9287f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7071ba2035d30637de7672615aa1151733ee9df05ee573e846d75c548e47013f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7071ba2035d30637de7672615aa1151733ee9df05ee573e846d75c548e47013f->enter($__internal_7071ba2035d30637de7672615aa1151733ee9df05ee573e846d75c548e47013f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_94a6340d953001b3a785033f011b588c54cadfa7bd6f4d9eece9b78dfac14bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a6340d953001b3a785033f011b588c54cadfa7bd6f4d9eece9b78dfac14bd0->enter($__internal_94a6340d953001b3a785033f011b588c54cadfa7bd6f4d9eece9b78dfac14bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_94a6340d953001b3a785033f011b588c54cadfa7bd6f4d9eece9b78dfac14bd0->leave($__internal_94a6340d953001b3a785033f011b588c54cadfa7bd6f4d9eece9b78dfac14bd0_prof);

        
        $__internal_7071ba2035d30637de7672615aa1151733ee9df05ee573e846d75c548e47013f->leave($__internal_7071ba2035d30637de7672615aa1151733ee9df05ee573e846d75c548e47013f_prof);

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
", "base.html.twig", "/var/www/html/projet_file_rouge/Symfony/app/Resources/views/base.html.twig");
    }
}
