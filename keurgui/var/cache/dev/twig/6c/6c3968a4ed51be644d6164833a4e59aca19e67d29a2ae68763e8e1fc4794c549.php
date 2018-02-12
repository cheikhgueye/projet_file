<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_eb72885369f044cf26452ce3f2ed960e1415d3e0ad8ced3f864f10955c6c6dda extends Twig_Template
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
        $__internal_c496ad262bf91dc3f322b1f88346c20c5c49495ab2f4ccb1c73e8de42c556e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c496ad262bf91dc3f322b1f88346c20c5c49495ab2f4ccb1c73e8de42c556e79->enter($__internal_c496ad262bf91dc3f322b1f88346c20c5c49495ab2f4ccb1c73e8de42c556e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_5b78d2be73337ded81ec8dcd42f3d662abfadc60adf310d4492f92e117258924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b78d2be73337ded81ec8dcd42f3d662abfadc60adf310d4492f92e117258924->enter($__internal_5b78d2be73337ded81ec8dcd42f3d662abfadc60adf310d4492f92e117258924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c496ad262bf91dc3f322b1f88346c20c5c49495ab2f4ccb1c73e8de42c556e79->leave($__internal_c496ad262bf91dc3f322b1f88346c20c5c49495ab2f4ccb1c73e8de42c556e79_prof);

        
        $__internal_5b78d2be73337ded81ec8dcd42f3d662abfadc60adf310d4492f92e117258924->leave($__internal_5b78d2be73337ded81ec8dcd42f3d662abfadc60adf310d4492f92e117258924_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
