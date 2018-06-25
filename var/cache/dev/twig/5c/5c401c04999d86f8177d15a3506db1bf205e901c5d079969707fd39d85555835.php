<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_874bc0abda21d2d5c89b7a04d8365ac582dec95bddd6366d5cb5674cedb4ba8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6c9f7c0b7de01f0e3477ee83e9b45e0ab663a07e66e318b1d072a7bcf95b2c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9f7c0b7de01f0e3477ee83e9b45e0ab663a07e66e318b1d072a7bcf95b2c5c->enter($__internal_6c9f7c0b7de01f0e3477ee83e9b45e0ab663a07e66e318b1d072a7bcf95b2c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b7a6038a5b0a79dbfdf9e16ef5739b04836f6f627ad0ba7715818dabf72b0601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a6038a5b0a79dbfdf9e16ef5739b04836f6f627ad0ba7715818dabf72b0601->enter($__internal_b7a6038a5b0a79dbfdf9e16ef5739b04836f6f627ad0ba7715818dabf72b0601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c9f7c0b7de01f0e3477ee83e9b45e0ab663a07e66e318b1d072a7bcf95b2c5c->leave($__internal_6c9f7c0b7de01f0e3477ee83e9b45e0ab663a07e66e318b1d072a7bcf95b2c5c_prof);

        
        $__internal_b7a6038a5b0a79dbfdf9e16ef5739b04836f6f627ad0ba7715818dabf72b0601->leave($__internal_b7a6038a5b0a79dbfdf9e16ef5739b04836f6f627ad0ba7715818dabf72b0601_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dcc5c6a3b74bd3008b08d55ecdaf076545877114e19af7bf227a9837060e7eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc5c6a3b74bd3008b08d55ecdaf076545877114e19af7bf227a9837060e7eaa->enter($__internal_dcc5c6a3b74bd3008b08d55ecdaf076545877114e19af7bf227a9837060e7eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d5a016641e9baa090264a583588308b77bb49e7cf44b2668238a1d05b0fbda4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a016641e9baa090264a583588308b77bb49e7cf44b2668238a1d05b0fbda4f->enter($__internal_d5a016641e9baa090264a583588308b77bb49e7cf44b2668238a1d05b0fbda4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d5a016641e9baa090264a583588308b77bb49e7cf44b2668238a1d05b0fbda4f->leave($__internal_d5a016641e9baa090264a583588308b77bb49e7cf44b2668238a1d05b0fbda4f_prof);

        
        $__internal_dcc5c6a3b74bd3008b08d55ecdaf076545877114e19af7bf227a9837060e7eaa->leave($__internal_dcc5c6a3b74bd3008b08d55ecdaf076545877114e19af7bf227a9837060e7eaa_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e751b579a765c6aeec27b13f333c4227cff5bb2c250bb3871398029f3e368ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e751b579a765c6aeec27b13f333c4227cff5bb2c250bb3871398029f3e368ba8->enter($__internal_e751b579a765c6aeec27b13f333c4227cff5bb2c250bb3871398029f3e368ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be83f4bfabbd44270586127f441c7b64874c68e336f6de81c1fe10ffb0828a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be83f4bfabbd44270586127f441c7b64874c68e336f6de81c1fe10ffb0828a50->enter($__internal_be83f4bfabbd44270586127f441c7b64874c68e336f6de81c1fe10ffb0828a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_be83f4bfabbd44270586127f441c7b64874c68e336f6de81c1fe10ffb0828a50->leave($__internal_be83f4bfabbd44270586127f441c7b64874c68e336f6de81c1fe10ffb0828a50_prof);

        
        $__internal_e751b579a765c6aeec27b13f333c4227cff5bb2c250bb3871398029f3e368ba8->leave($__internal_e751b579a765c6aeec27b13f333c4227cff5bb2c250bb3871398029f3e368ba8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d9d58e01189963b3998ea0d4928f9c800c9f32809ebd6d4040d0ba9079a7ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9d58e01189963b3998ea0d4928f9c800c9f32809ebd6d4040d0ba9079a7ecf->enter($__internal_7d9d58e01189963b3998ea0d4928f9c800c9f32809ebd6d4040d0ba9079a7ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98def64f9127cff9eac67fa07077c7a02cb1f4681aa39145c009967bcd5ddb93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98def64f9127cff9eac67fa07077c7a02cb1f4681aa39145c009967bcd5ddb93->enter($__internal_98def64f9127cff9eac67fa07077c7a02cb1f4681aa39145c009967bcd5ddb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_98def64f9127cff9eac67fa07077c7a02cb1f4681aa39145c009967bcd5ddb93->leave($__internal_98def64f9127cff9eac67fa07077c7a02cb1f4681aa39145c009967bcd5ddb93_prof);

        
        $__internal_7d9d58e01189963b3998ea0d4928f9c800c9f32809ebd6d4040d0ba9079a7ecf->leave($__internal_7d9d58e01189963b3998ea0d4928f9c800c9f32809ebd6d4040d0ba9079a7ecf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
