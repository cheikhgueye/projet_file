<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4d64a43aa44344f4e78bf66353e32933fe6511983eafe67145056b67db729a82 extends Twig_Template
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
        $__internal_92b26a1bf3b29bb3a43f596d61c93376b4bab3b9b763ef7926a38101380e76b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b26a1bf3b29bb3a43f596d61c93376b4bab3b9b763ef7926a38101380e76b6->enter($__internal_92b26a1bf3b29bb3a43f596d61c93376b4bab3b9b763ef7926a38101380e76b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7ce1f843b6f8973c080749da7689ed3b0db86ed766750934536f6caf7334e5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce1f843b6f8973c080749da7689ed3b0db86ed766750934536f6caf7334e5a1->enter($__internal_7ce1f843b6f8973c080749da7689ed3b0db86ed766750934536f6caf7334e5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_92b26a1bf3b29bb3a43f596d61c93376b4bab3b9b763ef7926a38101380e76b6->leave($__internal_92b26a1bf3b29bb3a43f596d61c93376b4bab3b9b763ef7926a38101380e76b6_prof);

        
        $__internal_7ce1f843b6f8973c080749da7689ed3b0db86ed766750934536f6caf7334e5a1->leave($__internal_7ce1f843b6f8973c080749da7689ed3b0db86ed766750934536f6caf7334e5a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
