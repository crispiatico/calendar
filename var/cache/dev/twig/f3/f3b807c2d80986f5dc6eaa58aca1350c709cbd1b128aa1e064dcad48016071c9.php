<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a9aa7365f573c0a79b45d11c18d0534b9fc46342329796754763862b1980dd4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90d5faac8a9f943dd08d4a9358e107420b127db01c884a131ddd9adba6125964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d5faac8a9f943dd08d4a9358e107420b127db01c884a131ddd9adba6125964->enter($__internal_90d5faac8a9f943dd08d4a9358e107420b127db01c884a131ddd9adba6125964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1a25f259690af26f99bf1e4a817f250e13d77b863e8c22671e0d879c50cebe74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a25f259690af26f99bf1e4a817f250e13d77b863e8c22671e0d879c50cebe74->enter($__internal_1a25f259690af26f99bf1e4a817f250e13d77b863e8c22671e0d879c50cebe74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90d5faac8a9f943dd08d4a9358e107420b127db01c884a131ddd9adba6125964->leave($__internal_90d5faac8a9f943dd08d4a9358e107420b127db01c884a131ddd9adba6125964_prof);

        
        $__internal_1a25f259690af26f99bf1e4a817f250e13d77b863e8c22671e0d879c50cebe74->leave($__internal_1a25f259690af26f99bf1e4a817f250e13d77b863e8c22671e0d879c50cebe74_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e93e5692b7d290d1c7a30597a99eadb7829356e263404c9db1cd3a1ccdb95dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e93e5692b7d290d1c7a30597a99eadb7829356e263404c9db1cd3a1ccdb95dd->enter($__internal_3e93e5692b7d290d1c7a30597a99eadb7829356e263404c9db1cd3a1ccdb95dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b42b5e6a2f992389d463c25c115c80f1e200a172528480fb754b2f8f50950250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b42b5e6a2f992389d463c25c115c80f1e200a172528480fb754b2f8f50950250->enter($__internal_b42b5e6a2f992389d463c25c115c80f1e200a172528480fb754b2f8f50950250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b42b5e6a2f992389d463c25c115c80f1e200a172528480fb754b2f8f50950250->leave($__internal_b42b5e6a2f992389d463c25c115c80f1e200a172528480fb754b2f8f50950250_prof);

        
        $__internal_3e93e5692b7d290d1c7a30597a99eadb7829356e263404c9db1cd3a1ccdb95dd->leave($__internal_3e93e5692b7d290d1c7a30597a99eadb7829356e263404c9db1cd3a1ccdb95dd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5952fa859800adb632a6ca411a0b44d3709e69febefa72e57d9d62761f591216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5952fa859800adb632a6ca411a0b44d3709e69febefa72e57d9d62761f591216->enter($__internal_5952fa859800adb632a6ca411a0b44d3709e69febefa72e57d9d62761f591216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4e4d909fe9cd6ae6059d7ab0d268d680333bf3dd1b9d4539bac98ff7eda1fd76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4d909fe9cd6ae6059d7ab0d268d680333bf3dd1b9d4539bac98ff7eda1fd76->enter($__internal_4e4d909fe9cd6ae6059d7ab0d268d680333bf3dd1b9d4539bac98ff7eda1fd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4e4d909fe9cd6ae6059d7ab0d268d680333bf3dd1b9d4539bac98ff7eda1fd76->leave($__internal_4e4d909fe9cd6ae6059d7ab0d268d680333bf3dd1b9d4539bac98ff7eda1fd76_prof);

        
        $__internal_5952fa859800adb632a6ca411a0b44d3709e69febefa72e57d9d62761f591216->leave($__internal_5952fa859800adb632a6ca411a0b44d3709e69febefa72e57d9d62761f591216_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f568f10ae29bc1b1e2069c39889553a19ef300d62cf83415371aefa40ef90600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f568f10ae29bc1b1e2069c39889553a19ef300d62cf83415371aefa40ef90600->enter($__internal_f568f10ae29bc1b1e2069c39889553a19ef300d62cf83415371aefa40ef90600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c3df9473c929c0297c38be9a85c13798ff74299bde1767d113caa72b9cd85d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3df9473c929c0297c38be9a85c13798ff74299bde1767d113caa72b9cd85d29->enter($__internal_c3df9473c929c0297c38be9a85c13798ff74299bde1767d113caa72b9cd85d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_c3df9473c929c0297c38be9a85c13798ff74299bde1767d113caa72b9cd85d29->leave($__internal_c3df9473c929c0297c38be9a85c13798ff74299bde1767d113caa72b9cd85d29_prof);

        
        $__internal_f568f10ae29bc1b1e2069c39889553a19ef300d62cf83415371aefa40ef90600->leave($__internal_f568f10ae29bc1b1e2069c39889553a19ef300d62cf83415371aefa40ef90600_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/symfonycalendar/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
