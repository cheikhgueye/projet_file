<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_caf28bd504e39a14b3d135e01f3e9c87f72b70187f2c6a11eb14f3d4da448945 extends Twig_Template
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
        $__internal_3e7720d519fb83c7853ea175cedf988de590dcb4c7e1dc30acc101770a6155ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7720d519fb83c7853ea175cedf988de590dcb4c7e1dc30acc101770a6155ff->enter($__internal_3e7720d519fb83c7853ea175cedf988de590dcb4c7e1dc30acc101770a6155ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_1e1926ce92ce242aa2bf18454cab869ea99109ae860faa8a627c8bd7d6c4d520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1926ce92ce242aa2bf18454cab869ea99109ae860faa8a627c8bd7d6c4d520->enter($__internal_1e1926ce92ce242aa2bf18454cab869ea99109ae860faa8a627c8bd7d6c4d520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3e7720d519fb83c7853ea175cedf988de590dcb4c7e1dc30acc101770a6155ff->leave($__internal_3e7720d519fb83c7853ea175cedf988de590dcb4c7e1dc30acc101770a6155ff_prof);

        
        $__internal_1e1926ce92ce242aa2bf18454cab869ea99109ae860faa8a627c8bd7d6c4d520->leave($__internal_1e1926ce92ce242aa2bf18454cab869ea99109ae860faa8a627c8bd7d6c4d520_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
