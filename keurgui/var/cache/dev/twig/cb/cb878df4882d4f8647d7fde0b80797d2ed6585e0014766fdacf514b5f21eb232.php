<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_b6792830c56feb53ab9b4eb6e5979d9d8f29352386f36c86dbbaa012cf8cf4e5 extends Twig_Template
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
        $__internal_59b2c4ef9b01a5e0b4fb4392f0c5d2c69b7ee34a4f1d11d51372868f7247e8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b2c4ef9b01a5e0b4fb4392f0c5d2c69b7ee34a4f1d11d51372868f7247e8f9->enter($__internal_59b2c4ef9b01a5e0b4fb4392f0c5d2c69b7ee34a4f1d11d51372868f7247e8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_2d6e519fe3333b409862ecdf905fd7bf0bd036ff16b577a176f12ab23ab2c920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6e519fe3333b409862ecdf905fd7bf0bd036ff16b577a176f12ab23ab2c920->enter($__internal_2d6e519fe3333b409862ecdf905fd7bf0bd036ff16b577a176f12ab23ab2c920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_59b2c4ef9b01a5e0b4fb4392f0c5d2c69b7ee34a4f1d11d51372868f7247e8f9->leave($__internal_59b2c4ef9b01a5e0b4fb4392f0c5d2c69b7ee34a4f1d11d51372868f7247e8f9_prof);

        
        $__internal_2d6e519fe3333b409862ecdf905fd7bf0bd036ff16b577a176f12ab23ab2c920->leave($__internal_2d6e519fe3333b409862ecdf905fd7bf0bd036ff16b577a176f12ab23ab2c920_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
