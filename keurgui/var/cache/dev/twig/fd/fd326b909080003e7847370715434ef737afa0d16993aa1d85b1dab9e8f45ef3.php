<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_861dadeaf6c10a30f5baaabe54b5e82ea91e7de449f70a468d22f1e054047d04 extends Twig_Template
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
        $__internal_7380064f3dbcf2922613d89488e9a49bba4fb218a387605cfdc5dae4cd7f908e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7380064f3dbcf2922613d89488e9a49bba4fb218a387605cfdc5dae4cd7f908e->enter($__internal_7380064f3dbcf2922613d89488e9a49bba4fb218a387605cfdc5dae4cd7f908e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_b29c3c69efe9ca095fe54032ffed9d1e5679e56706621bd0767d3e88e4c2ded9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29c3c69efe9ca095fe54032ffed9d1e5679e56706621bd0767d3e88e4c2ded9->enter($__internal_b29c3c69efe9ca095fe54032ffed9d1e5679e56706621bd0767d3e88e4c2ded9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7380064f3dbcf2922613d89488e9a49bba4fb218a387605cfdc5dae4cd7f908e->leave($__internal_7380064f3dbcf2922613d89488e9a49bba4fb218a387605cfdc5dae4cd7f908e_prof);

        
        $__internal_b29c3c69efe9ca095fe54032ffed9d1e5679e56706621bd0767d3e88e4c2ded9->leave($__internal_b29c3c69efe9ca095fe54032ffed9d1e5679e56706621bd0767d3e88e4c2ded9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
