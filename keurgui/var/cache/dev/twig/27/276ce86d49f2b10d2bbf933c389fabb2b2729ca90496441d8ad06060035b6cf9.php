<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_55e0f62270db50765a96bef38db20071c9904ba008054b2892e2b7c2c26117af extends Twig_Template
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
        $__internal_112ff079a8030b43d788923e190b06449f848ba9c7e08678ed00274f3725c9b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112ff079a8030b43d788923e190b06449f848ba9c7e08678ed00274f3725c9b3->enter($__internal_112ff079a8030b43d788923e190b06449f848ba9c7e08678ed00274f3725c9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_9684d981f04a2dd0d4697f82d37925b301ba27d94cf8374eb693c141057d974e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9684d981f04a2dd0d4697f82d37925b301ba27d94cf8374eb693c141057d974e->enter($__internal_9684d981f04a2dd0d4697f82d37925b301ba27d94cf8374eb693c141057d974e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_112ff079a8030b43d788923e190b06449f848ba9c7e08678ed00274f3725c9b3->leave($__internal_112ff079a8030b43d788923e190b06449f848ba9c7e08678ed00274f3725c9b3_prof);

        
        $__internal_9684d981f04a2dd0d4697f82d37925b301ba27d94cf8374eb693c141057d974e->leave($__internal_9684d981f04a2dd0d4697f82d37925b301ba27d94cf8374eb693c141057d974e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
