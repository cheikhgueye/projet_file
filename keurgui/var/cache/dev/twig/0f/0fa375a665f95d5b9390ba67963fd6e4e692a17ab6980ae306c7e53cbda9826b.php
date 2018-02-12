<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_86370072421e787916038258f3d8dded961d201f647049739647bd274d239f5e extends Twig_Template
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
        $__internal_9b0c5f947975726b706d41bfa9fa3171859d0459193baeeeba15e9cda9416e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0c5f947975726b706d41bfa9fa3171859d0459193baeeeba15e9cda9416e5d->enter($__internal_9b0c5f947975726b706d41bfa9fa3171859d0459193baeeeba15e9cda9416e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_bed2b95bea7ba5fedd234b35fd63c2c93583e01d7fc9e14b50680894e59a015f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed2b95bea7ba5fedd234b35fd63c2c93583e01d7fc9e14b50680894e59a015f->enter($__internal_bed2b95bea7ba5fedd234b35fd63c2c93583e01d7fc9e14b50680894e59a015f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_9b0c5f947975726b706d41bfa9fa3171859d0459193baeeeba15e9cda9416e5d->leave($__internal_9b0c5f947975726b706d41bfa9fa3171859d0459193baeeeba15e9cda9416e5d_prof);

        
        $__internal_bed2b95bea7ba5fedd234b35fd63c2c93583e01d7fc9e14b50680894e59a015f->leave($__internal_bed2b95bea7ba5fedd234b35fd63c2c93583e01d7fc9e14b50680894e59a015f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
