<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_985b8e14142d559d9efd3fb7c15cc75ad3f8a322468752dceac3ccb26a762149 extends Twig_Template
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
        $__internal_22024db825e3ef221ca95b14174de0a34082deb231aa6ce296c42cc0147c464b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22024db825e3ef221ca95b14174de0a34082deb231aa6ce296c42cc0147c464b->enter($__internal_22024db825e3ef221ca95b14174de0a34082deb231aa6ce296c42cc0147c464b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_01445bb049cf282a1cf6665fe2fcbc47ae094c1792eb682cecb73dfaea060d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01445bb049cf282a1cf6665fe2fcbc47ae094c1792eb682cecb73dfaea060d16->enter($__internal_01445bb049cf282a1cf6665fe2fcbc47ae094c1792eb682cecb73dfaea060d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_22024db825e3ef221ca95b14174de0a34082deb231aa6ce296c42cc0147c464b->leave($__internal_22024db825e3ef221ca95b14174de0a34082deb231aa6ce296c42cc0147c464b_prof);

        
        $__internal_01445bb049cf282a1cf6665fe2fcbc47ae094c1792eb682cecb73dfaea060d16->leave($__internal_01445bb049cf282a1cf6665fe2fcbc47ae094c1792eb682cecb73dfaea060d16_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
