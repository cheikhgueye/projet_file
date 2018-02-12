<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0d1dbe23241ca49b651935dd0eedf816007655fe2aa106e01f5e01308ee4727b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb0884844965057c6cd192222370c2404a408d010587ed40ff9107ec865576ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0884844965057c6cd192222370c2404a408d010587ed40ff9107ec865576ec->enter($__internal_eb0884844965057c6cd192222370c2404a408d010587ed40ff9107ec865576ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6cfe78f6a55a68f350f4bd5113ee184a0965ce81ed62b755825369a44d6c5fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfe78f6a55a68f350f4bd5113ee184a0965ce81ed62b755825369a44d6c5fe6->enter($__internal_6cfe78f6a55a68f350f4bd5113ee184a0965ce81ed62b755825369a44d6c5fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_eb0884844965057c6cd192222370c2404a408d010587ed40ff9107ec865576ec->leave($__internal_eb0884844965057c6cd192222370c2404a408d010587ed40ff9107ec865576ec_prof);

        
        $__internal_6cfe78f6a55a68f350f4bd5113ee184a0965ce81ed62b755825369a44d6c5fe6->leave($__internal_6cfe78f6a55a68f350f4bd5113ee184a0965ce81ed62b755825369a44d6c5fe6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6fc86965307806ef1d9cb096bec42f98101582da159126975763992bb4dbb32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6fc86965307806ef1d9cb096bec42f98101582da159126975763992bb4dbb32->enter($__internal_d6fc86965307806ef1d9cb096bec42f98101582da159126975763992bb4dbb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b3a2b07c8315dbffa0f8d9f615204923607f9643366db1099303be3084af5dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3a2b07c8315dbffa0f8d9f615204923607f9643366db1099303be3084af5dc->enter($__internal_4b3a2b07c8315dbffa0f8d9f615204923607f9643366db1099303be3084af5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4b3a2b07c8315dbffa0f8d9f615204923607f9643366db1099303be3084af5dc->leave($__internal_4b3a2b07c8315dbffa0f8d9f615204923607f9643366db1099303be3084af5dc_prof);

        
        $__internal_d6fc86965307806ef1d9cb096bec42f98101582da159126975763992bb4dbb32->leave($__internal_d6fc86965307806ef1d9cb096bec42f98101582da159126975763992bb4dbb32_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
