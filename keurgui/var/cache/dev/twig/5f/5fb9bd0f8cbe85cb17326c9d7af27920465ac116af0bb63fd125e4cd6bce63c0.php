<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_20ff6b87d20683dc40b7fc6eed1e1dd3db2c6fa6cc0890640874acdd382502aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22cb89c81c206ae736be0655d56b1c8b602f188969a01457f4f21b9d2109bd9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22cb89c81c206ae736be0655d56b1c8b602f188969a01457f4f21b9d2109bd9c->enter($__internal_22cb89c81c206ae736be0655d56b1c8b602f188969a01457f4f21b9d2109bd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_13065059f04d22e279bb7796ea4dabe351966a694050a29834d0d42b2c8d4a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13065059f04d22e279bb7796ea4dabe351966a694050a29834d0d42b2c8d4a67->enter($__internal_13065059f04d22e279bb7796ea4dabe351966a694050a29834d0d42b2c8d4a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_22cb89c81c206ae736be0655d56b1c8b602f188969a01457f4f21b9d2109bd9c->leave($__internal_22cb89c81c206ae736be0655d56b1c8b602f188969a01457f4f21b9d2109bd9c_prof);

        
        $__internal_13065059f04d22e279bb7796ea4dabe351966a694050a29834d0d42b2c8d4a67->leave($__internal_13065059f04d22e279bb7796ea4dabe351966a694050a29834d0d42b2c8d4a67_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
