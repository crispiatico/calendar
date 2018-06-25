<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_14b6a917c7f6fb7f82641c9945103696f6eafcf239a383ac6163e78af9df3f9f extends Twig_Template
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
        $__internal_37f3246a77f1bf68571260a57e1493cac9e6a21b9535ee293e3ae1afe12e015c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f3246a77f1bf68571260a57e1493cac9e6a21b9535ee293e3ae1afe12e015c->enter($__internal_37f3246a77f1bf68571260a57e1493cac9e6a21b9535ee293e3ae1afe12e015c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_85e5a8cfbe6003c2b8eb9e53736c5ffdb2314d025a44985a70af13308feb90d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e5a8cfbe6003c2b8eb9e53736c5ffdb2314d025a44985a70af13308feb90d2->enter($__internal_85e5a8cfbe6003c2b8eb9e53736c5ffdb2314d025a44985a70af13308feb90d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_37f3246a77f1bf68571260a57e1493cac9e6a21b9535ee293e3ae1afe12e015c->leave($__internal_37f3246a77f1bf68571260a57e1493cac9e6a21b9535ee293e3ae1afe12e015c_prof);

        
        $__internal_85e5a8cfbe6003c2b8eb9e53736c5ffdb2314d025a44985a70af13308feb90d2->leave($__internal_85e5a8cfbe6003c2b8eb9e53736c5ffdb2314d025a44985a70af13308feb90d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/var/www/html/symfonycalendar/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.css.twig");
    }
}
