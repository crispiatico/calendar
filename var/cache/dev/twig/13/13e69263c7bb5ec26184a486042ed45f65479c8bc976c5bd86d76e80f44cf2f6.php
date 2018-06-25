<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_838f0458a95bc722a0e0d81ed59dfd619e1dde0d1239712f4e74e34f18587df3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30e9e1f83406dea2e52bba60c9b346d4f98608260a0bc97f0a30e086f50ee8c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e9e1f83406dea2e52bba60c9b346d4f98608260a0bc97f0a30e086f50ee8c4->enter($__internal_30e9e1f83406dea2e52bba60c9b346d4f98608260a0bc97f0a30e086f50ee8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_841c95f2946070db2b97c2723351ffe301d20e4529d972eb5164e5372f228d52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841c95f2946070db2b97c2723351ffe301d20e4529d972eb5164e5372f228d52->enter($__internal_841c95f2946070db2b97c2723351ffe301d20e4529d972eb5164e5372f228d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30e9e1f83406dea2e52bba60c9b346d4f98608260a0bc97f0a30e086f50ee8c4->leave($__internal_30e9e1f83406dea2e52bba60c9b346d4f98608260a0bc97f0a30e086f50ee8c4_prof);

        
        $__internal_841c95f2946070db2b97c2723351ffe301d20e4529d972eb5164e5372f228d52->leave($__internal_841c95f2946070db2b97c2723351ffe301d20e4529d972eb5164e5372f228d52_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_acef9f91987f765402bc8166abf72b678584669afbe4622c09325c477126eb82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acef9f91987f765402bc8166abf72b678584669afbe4622c09325c477126eb82->enter($__internal_acef9f91987f765402bc8166abf72b678584669afbe4622c09325c477126eb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7c4c50945b309a5aa42850070fa6e157d062fe0b55af4806024c661dd37fe39d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c4c50945b309a5aa42850070fa6e157d062fe0b55af4806024c661dd37fe39d->enter($__internal_7c4c50945b309a5aa42850070fa6e157d062fe0b55af4806024c661dd37fe39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_7c4c50945b309a5aa42850070fa6e157d062fe0b55af4806024c661dd37fe39d->leave($__internal_7c4c50945b309a5aa42850070fa6e157d062fe0b55af4806024c661dd37fe39d_prof);

        
        $__internal_acef9f91987f765402bc8166abf72b678584669afbe4622c09325c477126eb82->leave($__internal_acef9f91987f765402bc8166abf72b678584669afbe4622c09325c477126eb82_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3140d806ac06794ad6fd7fe9a3f529c90395dcb701f7b0f73dccc1b232923cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3140d806ac06794ad6fd7fe9a3f529c90395dcb701f7b0f73dccc1b232923cd8->enter($__internal_3140d806ac06794ad6fd7fe9a3f529c90395dcb701f7b0f73dccc1b232923cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8a681c1d24c439dccdf74d11718c3a9f6b1bbf50ab728ece926ded11ff031a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a681c1d24c439dccdf74d11718c3a9f6b1bbf50ab728ece926ded11ff031a73->enter($__internal_8a681c1d24c439dccdf74d11718c3a9f6b1bbf50ab728ece926ded11ff031a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8a681c1d24c439dccdf74d11718c3a9f6b1bbf50ab728ece926ded11ff031a73->leave($__internal_8a681c1d24c439dccdf74d11718c3a9f6b1bbf50ab728ece926ded11ff031a73_prof);

        
        $__internal_3140d806ac06794ad6fd7fe9a3f529c90395dcb701f7b0f73dccc1b232923cd8->leave($__internal_3140d806ac06794ad6fd7fe9a3f529c90395dcb701f7b0f73dccc1b232923cd8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/var/www/html/symfonycalendar/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
