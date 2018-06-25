<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_11914de33bc863a24b65b6d27c7c4abe521643330881f4615bc1d4b25ad6c86c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3935bdf2ac083c3b7d6a4677f7be181032bf81e56de57882bdb85ca733750535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3935bdf2ac083c3b7d6a4677f7be181032bf81e56de57882bdb85ca733750535->enter($__internal_3935bdf2ac083c3b7d6a4677f7be181032bf81e56de57882bdb85ca733750535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_d5ca89a8ecd00ce0daf7b20e0fb3c50e2d5a35349f902056774e9eaa713469b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ca89a8ecd00ce0daf7b20e0fb3c50e2d5a35349f902056774e9eaa713469b7->enter($__internal_d5ca89a8ecd00ce0daf7b20e0fb3c50e2d5a35349f902056774e9eaa713469b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3935bdf2ac083c3b7d6a4677f7be181032bf81e56de57882bdb85ca733750535->leave($__internal_3935bdf2ac083c3b7d6a4677f7be181032bf81e56de57882bdb85ca733750535_prof);

        
        $__internal_d5ca89a8ecd00ce0daf7b20e0fb3c50e2d5a35349f902056774e9eaa713469b7->leave($__internal_d5ca89a8ecd00ce0daf7b20e0fb3c50e2d5a35349f902056774e9eaa713469b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_525ca574c940a82a9f3fed12a0e9041957cc46105e7c3c5b32ccb5a6d5b648ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525ca574c940a82a9f3fed12a0e9041957cc46105e7c3c5b32ccb5a6d5b648ab->enter($__internal_525ca574c940a82a9f3fed12a0e9041957cc46105e7c3c5b32ccb5a6d5b648ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0b58c95364f98121b4babbb12a482c7125f1d3c54a043939cc042437776127f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b58c95364f98121b4babbb12a482c7125f1d3c54a043939cc042437776127f3->enter($__internal_0b58c95364f98121b4babbb12a482c7125f1d3c54a043939cc042437776127f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0b58c95364f98121b4babbb12a482c7125f1d3c54a043939cc042437776127f3->leave($__internal_0b58c95364f98121b4babbb12a482c7125f1d3c54a043939cc042437776127f3_prof);

        
        $__internal_525ca574c940a82a9f3fed12a0e9041957cc46105e7c3c5b32ccb5a6d5b648ab->leave($__internal_525ca574c940a82a9f3fed12a0e9041957cc46105e7c3c5b32ccb5a6d5b648ab_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_07a54ff7ba1e2afeb0c3470f223eac0de6c8228e6bc9bb25f83a6e3e63c791d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a54ff7ba1e2afeb0c3470f223eac0de6c8228e6bc9bb25f83a6e3e63c791d1->enter($__internal_07a54ff7ba1e2afeb0c3470f223eac0de6c8228e6bc9bb25f83a6e3e63c791d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3808dbbce3fb3e36f9d80ec743b8921de633709c8e9656a0c4ba240a2d4b1f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3808dbbce3fb3e36f9d80ec743b8921de633709c8e9656a0c4ba240a2d4b1f3d->enter($__internal_3808dbbce3fb3e36f9d80ec743b8921de633709c8e9656a0c4ba240a2d4b1f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_3808dbbce3fb3e36f9d80ec743b8921de633709c8e9656a0c4ba240a2d4b1f3d->leave($__internal_3808dbbce3fb3e36f9d80ec743b8921de633709c8e9656a0c4ba240a2d4b1f3d_prof);

        
        $__internal_07a54ff7ba1e2afeb0c3470f223eac0de6c8228e6bc9bb25f83a6e3e63c791d1->leave($__internal_07a54ff7ba1e2afeb0c3470f223eac0de6c8228e6bc9bb25f83a6e3e63c791d1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/var/www/html/symfonycalendar/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
