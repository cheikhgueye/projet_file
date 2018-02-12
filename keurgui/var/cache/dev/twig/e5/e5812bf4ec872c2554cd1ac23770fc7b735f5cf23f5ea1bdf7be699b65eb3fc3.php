<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_21e1384dbb5ce9486a9d17503df7b90e48bc1b6ea63609664f02070f7deb3d3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baceffb96b1074fdc4ac4a9e56a2aaf789fe4e197bafe1063395e0f6b6ce60ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baceffb96b1074fdc4ac4a9e56a2aaf789fe4e197bafe1063395e0f6b6ce60ac->enter($__internal_baceffb96b1074fdc4ac4a9e56a2aaf789fe4e197bafe1063395e0f6b6ce60ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0d70eabf024a2f3264a2b049347abf14f51b92ee09dececf91ba2da98d000049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d70eabf024a2f3264a2b049347abf14f51b92ee09dececf91ba2da98d000049->enter($__internal_0d70eabf024a2f3264a2b049347abf14f51b92ee09dececf91ba2da98d000049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_baceffb96b1074fdc4ac4a9e56a2aaf789fe4e197bafe1063395e0f6b6ce60ac->leave($__internal_baceffb96b1074fdc4ac4a9e56a2aaf789fe4e197bafe1063395e0f6b6ce60ac_prof);

        
        $__internal_0d70eabf024a2f3264a2b049347abf14f51b92ee09dececf91ba2da98d000049->leave($__internal_0d70eabf024a2f3264a2b049347abf14f51b92ee09dececf91ba2da98d000049_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_52aabd8cd44d15eb6cc3762e5b0e03cdf28a212341a8516a74cd534a891a8889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52aabd8cd44d15eb6cc3762e5b0e03cdf28a212341a8516a74cd534a891a8889->enter($__internal_52aabd8cd44d15eb6cc3762e5b0e03cdf28a212341a8516a74cd534a891a8889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fadd2112f5aa71f008f53327c7c93826d84070d4dac58fbd5b8f26a8097d438c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fadd2112f5aa71f008f53327c7c93826d84070d4dac58fbd5b8f26a8097d438c->enter($__internal_fadd2112f5aa71f008f53327c7c93826d84070d4dac58fbd5b8f26a8097d438c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fadd2112f5aa71f008f53327c7c93826d84070d4dac58fbd5b8f26a8097d438c->leave($__internal_fadd2112f5aa71f008f53327c7c93826d84070d4dac58fbd5b8f26a8097d438c_prof);

        
        $__internal_52aabd8cd44d15eb6cc3762e5b0e03cdf28a212341a8516a74cd534a891a8889->leave($__internal_52aabd8cd44d15eb6cc3762e5b0e03cdf28a212341a8516a74cd534a891a8889_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b19679581f7dd1bcb3e9505a2e2e43d3fdaa76e92e176e4756e2342b7f619e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b19679581f7dd1bcb3e9505a2e2e43d3fdaa76e92e176e4756e2342b7f619e0->enter($__internal_0b19679581f7dd1bcb3e9505a2e2e43d3fdaa76e92e176e4756e2342b7f619e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7f1e50507c6f6cb829dd98605b07a321c4f186d7b416625d55828fbdf0c4e0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1e50507c6f6cb829dd98605b07a321c4f186d7b416625d55828fbdf0c4e0b7->enter($__internal_7f1e50507c6f6cb829dd98605b07a321c4f186d7b416625d55828fbdf0c4e0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7f1e50507c6f6cb829dd98605b07a321c4f186d7b416625d55828fbdf0c4e0b7->leave($__internal_7f1e50507c6f6cb829dd98605b07a321c4f186d7b416625d55828fbdf0c4e0b7_prof);

        
        $__internal_0b19679581f7dd1bcb3e9505a2e2e43d3fdaa76e92e176e4756e2342b7f619e0->leave($__internal_0b19679581f7dd1bcb3e9505a2e2e43d3fdaa76e92e176e4756e2342b7f619e0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ab20b4c5a6dcd8c60a1a77630ca11293a9ada3ce1daebe3f630acaeb245fef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab20b4c5a6dcd8c60a1a77630ca11293a9ada3ce1daebe3f630acaeb245fef5->enter($__internal_0ab20b4c5a6dcd8c60a1a77630ca11293a9ada3ce1daebe3f630acaeb245fef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e7b01bb37f66aa719a0d622482caaa68cba12ec5a07f9f28c181fa0ca90cc4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7b01bb37f66aa719a0d622482caaa68cba12ec5a07f9f28c181fa0ca90cc4a->enter($__internal_8e7b01bb37f66aa719a0d622482caaa68cba12ec5a07f9f28c181fa0ca90cc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8e7b01bb37f66aa719a0d622482caaa68cba12ec5a07f9f28c181fa0ca90cc4a->leave($__internal_8e7b01bb37f66aa719a0d622482caaa68cba12ec5a07f9f28c181fa0ca90cc4a_prof);

        
        $__internal_0ab20b4c5a6dcd8c60a1a77630ca11293a9ada3ce1daebe3f630acaeb245fef5->leave($__internal_0ab20b4c5a6dcd8c60a1a77630ca11293a9ada3ce1daebe3f630acaeb245fef5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
