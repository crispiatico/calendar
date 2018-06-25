<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_cfed31b5c3d7ab6f06e6d9ff5a7dc0f2824da8e148a85cc7c7a3f1310440b8ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81626e934ecfb52994e3389d0389ed0b4f145cf6f1951314cdb9d130c976b9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81626e934ecfb52994e3389d0389ed0b4f145cf6f1951314cdb9d130c976b9da->enter($__internal_81626e934ecfb52994e3389d0389ed0b4f145cf6f1951314cdb9d130c976b9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_caddebf77c42c6036dea88d92c0f511fbe0cbcdfa3641672b2998cede3cea6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caddebf77c42c6036dea88d92c0f511fbe0cbcdfa3641672b2998cede3cea6ac->enter($__internal_caddebf77c42c6036dea88d92c0f511fbe0cbcdfa3641672b2998cede3cea6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81626e934ecfb52994e3389d0389ed0b4f145cf6f1951314cdb9d130c976b9da->leave($__internal_81626e934ecfb52994e3389d0389ed0b4f145cf6f1951314cdb9d130c976b9da_prof);

        
        $__internal_caddebf77c42c6036dea88d92c0f511fbe0cbcdfa3641672b2998cede3cea6ac->leave($__internal_caddebf77c42c6036dea88d92c0f511fbe0cbcdfa3641672b2998cede3cea6ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b253c4cbb3d8edea7131dc7d4409a62d0d016a0394a5a4a46522f6c92344dbb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b253c4cbb3d8edea7131dc7d4409a62d0d016a0394a5a4a46522f6c92344dbb5->enter($__internal_b253c4cbb3d8edea7131dc7d4409a62d0d016a0394a5a4a46522f6c92344dbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e97aaa371b2b6208f0ce36cac4b3483fec5425ea0be39226401cc04ef569042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e97aaa371b2b6208f0ce36cac4b3483fec5425ea0be39226401cc04ef569042->enter($__internal_1e97aaa371b2b6208f0ce36cac4b3483fec5425ea0be39226401cc04ef569042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1e97aaa371b2b6208f0ce36cac4b3483fec5425ea0be39226401cc04ef569042->leave($__internal_1e97aaa371b2b6208f0ce36cac4b3483fec5425ea0be39226401cc04ef569042_prof);

        
        $__internal_b253c4cbb3d8edea7131dc7d4409a62d0d016a0394a5a4a46522f6c92344dbb5->leave($__internal_b253c4cbb3d8edea7131dc7d4409a62d0d016a0394a5a4a46522f6c92344dbb5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_731101645c0ffa3be0f4774770eb0e7d1a649b790f53d2555a69bc0295d01625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731101645c0ffa3be0f4774770eb0e7d1a649b790f53d2555a69bc0295d01625->enter($__internal_731101645c0ffa3be0f4774770eb0e7d1a649b790f53d2555a69bc0295d01625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b821b85cd21b1d73d5e7925852c68f66887241335915f35bad04895f8703d517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b821b85cd21b1d73d5e7925852c68f66887241335915f35bad04895f8703d517->enter($__internal_b821b85cd21b1d73d5e7925852c68f66887241335915f35bad04895f8703d517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b821b85cd21b1d73d5e7925852c68f66887241335915f35bad04895f8703d517->leave($__internal_b821b85cd21b1d73d5e7925852c68f66887241335915f35bad04895f8703d517_prof);

        
        $__internal_731101645c0ffa3be0f4774770eb0e7d1a649b790f53d2555a69bc0295d01625->leave($__internal_731101645c0ffa3be0f4774770eb0e7d1a649b790f53d2555a69bc0295d01625_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/var/www/html/symfonycalendar/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
