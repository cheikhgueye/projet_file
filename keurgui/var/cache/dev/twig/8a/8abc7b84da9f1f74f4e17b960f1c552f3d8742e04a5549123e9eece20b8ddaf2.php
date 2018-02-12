<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c275990dd9bc54376236e359e1ce1c2b09adc40120e8ed266d1a4cb7828b886a extends Twig_Template
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
        $__internal_fd4018c2918c61181f6506f58afe65f575ab6a2e4d94ffdf6fe099c9b937724c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4018c2918c61181f6506f58afe65f575ab6a2e4d94ffdf6fe099c9b937724c->enter($__internal_fd4018c2918c61181f6506f58afe65f575ab6a2e4d94ffdf6fe099c9b937724c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_594c3e747843fd9d3c1f3805dcbc28ae5540205086e901c1fe65c536f3012146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594c3e747843fd9d3c1f3805dcbc28ae5540205086e901c1fe65c536f3012146->enter($__internal_594c3e747843fd9d3c1f3805dcbc28ae5540205086e901c1fe65c536f3012146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_fd4018c2918c61181f6506f58afe65f575ab6a2e4d94ffdf6fe099c9b937724c->leave($__internal_fd4018c2918c61181f6506f58afe65f575ab6a2e4d94ffdf6fe099c9b937724c_prof);

        
        $__internal_594c3e747843fd9d3c1f3805dcbc28ae5540205086e901c1fe65c536f3012146->leave($__internal_594c3e747843fd9d3c1f3805dcbc28ae5540205086e901c1fe65c536f3012146_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
