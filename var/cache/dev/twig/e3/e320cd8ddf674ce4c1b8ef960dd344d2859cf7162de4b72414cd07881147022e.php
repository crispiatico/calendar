<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5375a99b6ba76c041001db682c318d469fdfdabfe9d8a6391411db30fb3f1e97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ad0e650714737409544803362a3f2ae8483ee20379d73f1f3da8d709e7cd191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad0e650714737409544803362a3f2ae8483ee20379d73f1f3da8d709e7cd191->enter($__internal_6ad0e650714737409544803362a3f2ae8483ee20379d73f1f3da8d709e7cd191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4e4c49181fab89fcaad16f73a9691e9dc6ae8a04dcce85fbf7d010bba2ed63ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4c49181fab89fcaad16f73a9691e9dc6ae8a04dcce85fbf7d010bba2ed63ad->enter($__internal_4e4c49181fab89fcaad16f73a9691e9dc6ae8a04dcce85fbf7d010bba2ed63ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ad0e650714737409544803362a3f2ae8483ee20379d73f1f3da8d709e7cd191->leave($__internal_6ad0e650714737409544803362a3f2ae8483ee20379d73f1f3da8d709e7cd191_prof);

        
        $__internal_4e4c49181fab89fcaad16f73a9691e9dc6ae8a04dcce85fbf7d010bba2ed63ad->leave($__internal_4e4c49181fab89fcaad16f73a9691e9dc6ae8a04dcce85fbf7d010bba2ed63ad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6620093ff185e8d141f87e9ce654908fa22d30dcff30e96f7d71893d6d6db2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6620093ff185e8d141f87e9ce654908fa22d30dcff30e96f7d71893d6d6db2b8->enter($__internal_6620093ff185e8d141f87e9ce654908fa22d30dcff30e96f7d71893d6d6db2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a90e41e60c23a3a4837affa133c99ce9c67b7484623874fe111dbf5f257c2aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90e41e60c23a3a4837affa133c99ce9c67b7484623874fe111dbf5f257c2aaa->enter($__internal_a90e41e60c23a3a4837affa133c99ce9c67b7484623874fe111dbf5f257c2aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a90e41e60c23a3a4837affa133c99ce9c67b7484623874fe111dbf5f257c2aaa->leave($__internal_a90e41e60c23a3a4837affa133c99ce9c67b7484623874fe111dbf5f257c2aaa_prof);

        
        $__internal_6620093ff185e8d141f87e9ce654908fa22d30dcff30e96f7d71893d6d6db2b8->leave($__internal_6620093ff185e8d141f87e9ce654908fa22d30dcff30e96f7d71893d6d6db2b8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/symfonycalendar/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
