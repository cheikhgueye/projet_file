<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_cbcf65652fe7c331339dd73f6c9d340d341f832b65d4d1bbb447e832eef9b5a4 extends Twig_Template
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
        $__internal_a8326ed7c0ab21ccfc75aecabef8cd1b668a86385206a13012aa533f083baf89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8326ed7c0ab21ccfc75aecabef8cd1b668a86385206a13012aa533f083baf89->enter($__internal_a8326ed7c0ab21ccfc75aecabef8cd1b668a86385206a13012aa533f083baf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_60b04e83e459a01cf9f21bd8711cc0793ab6072da6b03ad9eea9db6b12e1b12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b04e83e459a01cf9f21bd8711cc0793ab6072da6b03ad9eea9db6b12e1b12d->enter($__internal_60b04e83e459a01cf9f21bd8711cc0793ab6072da6b03ad9eea9db6b12e1b12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a8326ed7c0ab21ccfc75aecabef8cd1b668a86385206a13012aa533f083baf89->leave($__internal_a8326ed7c0ab21ccfc75aecabef8cd1b668a86385206a13012aa533f083baf89_prof);

        
        $__internal_60b04e83e459a01cf9f21bd8711cc0793ab6072da6b03ad9eea9db6b12e1b12d->leave($__internal_60b04e83e459a01cf9f21bd8711cc0793ab6072da6b03ad9eea9db6b12e1b12d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
