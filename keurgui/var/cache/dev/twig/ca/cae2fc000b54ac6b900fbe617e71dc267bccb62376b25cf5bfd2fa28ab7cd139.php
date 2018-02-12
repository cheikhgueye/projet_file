<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_28c1e93d0342186140e2e76f9818b9af4a14d62e0ab8cc1c5bcc1fad88a5e4ae extends Twig_Template
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
        $__internal_db26e367a9ef7c3d14033ea56786c6ebc63465099908a1c364d1d82a99c0852a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db26e367a9ef7c3d14033ea56786c6ebc63465099908a1c364d1d82a99c0852a->enter($__internal_db26e367a9ef7c3d14033ea56786c6ebc63465099908a1c364d1d82a99c0852a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_dc88570a24c77469be0fa5cb27b89c99070d203e212bb4a048c20cd6b8ae8987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc88570a24c77469be0fa5cb27b89c99070d203e212bb4a048c20cd6b8ae8987->enter($__internal_dc88570a24c77469be0fa5cb27b89c99070d203e212bb4a048c20cd6b8ae8987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_db26e367a9ef7c3d14033ea56786c6ebc63465099908a1c364d1d82a99c0852a->leave($__internal_db26e367a9ef7c3d14033ea56786c6ebc63465099908a1c364d1d82a99c0852a_prof);

        
        $__internal_dc88570a24c77469be0fa5cb27b89c99070d203e212bb4a048c20cd6b8ae8987->leave($__internal_dc88570a24c77469be0fa5cb27b89c99070d203e212bb4a048c20cd6b8ae8987_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
