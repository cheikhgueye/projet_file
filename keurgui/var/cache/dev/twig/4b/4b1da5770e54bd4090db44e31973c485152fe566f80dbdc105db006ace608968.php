<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5824ee3bddf6f0c1a5bc2b2c58efc3c605b8ecce606dfaf2b3bace0bc0e8344a extends Twig_Template
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
        $__internal_b8d41c95594112600ddedcbf28e63d470bf67949433022f1f570aec877819946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d41c95594112600ddedcbf28e63d470bf67949433022f1f570aec877819946->enter($__internal_b8d41c95594112600ddedcbf28e63d470bf67949433022f1f570aec877819946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_a9018b2068d6007f154e8d0af4fac62bf782a4ff347088b1aa97c39686c1cf76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9018b2068d6007f154e8d0af4fac62bf782a4ff347088b1aa97c39686c1cf76->enter($__internal_a9018b2068d6007f154e8d0af4fac62bf782a4ff347088b1aa97c39686c1cf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b8d41c95594112600ddedcbf28e63d470bf67949433022f1f570aec877819946->leave($__internal_b8d41c95594112600ddedcbf28e63d470bf67949433022f1f570aec877819946_prof);

        
        $__internal_a9018b2068d6007f154e8d0af4fac62bf782a4ff347088b1aa97c39686c1cf76->leave($__internal_a9018b2068d6007f154e8d0af4fac62bf782a4ff347088b1aa97c39686c1cf76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
