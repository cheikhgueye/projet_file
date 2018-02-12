<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7cbdcfd944e2a629591858f73617c46cf0c53abdfef368f67b135fbef3d7c027 extends Twig_Template
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
        $__internal_58179f8c1a4f00efa10f36af748a61baa6fea9b91e3724ffdd8db7ca8fe44b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58179f8c1a4f00efa10f36af748a61baa6fea9b91e3724ffdd8db7ca8fe44b05->enter($__internal_58179f8c1a4f00efa10f36af748a61baa6fea9b91e3724ffdd8db7ca8fe44b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_459072a45dadc7d34fb450c66958f5906a4dde2b8bc522dbb096df12f41202bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459072a45dadc7d34fb450c66958f5906a4dde2b8bc522dbb096df12f41202bd->enter($__internal_459072a45dadc7d34fb450c66958f5906a4dde2b8bc522dbb096df12f41202bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_58179f8c1a4f00efa10f36af748a61baa6fea9b91e3724ffdd8db7ca8fe44b05->leave($__internal_58179f8c1a4f00efa10f36af748a61baa6fea9b91e3724ffdd8db7ca8fe44b05_prof);

        
        $__internal_459072a45dadc7d34fb450c66958f5906a4dde2b8bc522dbb096df12f41202bd->leave($__internal_459072a45dadc7d34fb450c66958f5906a4dde2b8bc522dbb096df12f41202bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
