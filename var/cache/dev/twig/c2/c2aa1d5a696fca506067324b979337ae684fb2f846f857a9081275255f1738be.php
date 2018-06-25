<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e31004faea3b441688ec3ce1b11ceee86872c5b2099c2e8493c89a49d41f9676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a071e390ecf368b5034101f2d120ae6a5630ad9566a09985ca63e505619dd0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a071e390ecf368b5034101f2d120ae6a5630ad9566a09985ca63e505619dd0ab->enter($__internal_a071e390ecf368b5034101f2d120ae6a5630ad9566a09985ca63e505619dd0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2eb226b4838ee1d49db8325d621967305ec1ff2dff2fc28d2993bdf1993fb8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb226b4838ee1d49db8325d621967305ec1ff2dff2fc28d2993bdf1993fb8e5->enter($__internal_2eb226b4838ee1d49db8325d621967305ec1ff2dff2fc28d2993bdf1993fb8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a071e390ecf368b5034101f2d120ae6a5630ad9566a09985ca63e505619dd0ab->leave($__internal_a071e390ecf368b5034101f2d120ae6a5630ad9566a09985ca63e505619dd0ab_prof);

        
        $__internal_2eb226b4838ee1d49db8325d621967305ec1ff2dff2fc28d2993bdf1993fb8e5->leave($__internal_2eb226b4838ee1d49db8325d621967305ec1ff2dff2fc28d2993bdf1993fb8e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a68bc01e22eb4e81d108dbe306b05ad7f202a8216ff439ed58fb98e9be63d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a68bc01e22eb4e81d108dbe306b05ad7f202a8216ff439ed58fb98e9be63d89->enter($__internal_9a68bc01e22eb4e81d108dbe306b05ad7f202a8216ff439ed58fb98e9be63d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_13936539590153c12eb662fff6e6914df72be1563b65374179ca7185a70196a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13936539590153c12eb662fff6e6914df72be1563b65374179ca7185a70196a6->enter($__internal_13936539590153c12eb662fff6e6914df72be1563b65374179ca7185a70196a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_13936539590153c12eb662fff6e6914df72be1563b65374179ca7185a70196a6->leave($__internal_13936539590153c12eb662fff6e6914df72be1563b65374179ca7185a70196a6_prof);

        
        $__internal_9a68bc01e22eb4e81d108dbe306b05ad7f202a8216ff439ed58fb98e9be63d89->leave($__internal_9a68bc01e22eb4e81d108dbe306b05ad7f202a8216ff439ed58fb98e9be63d89_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2fb3641cbc1d0a639c25238850ed861384a567bb84019605b67abc0b19181f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2fb3641cbc1d0a639c25238850ed861384a567bb84019605b67abc0b19181f9->enter($__internal_b2fb3641cbc1d0a639c25238850ed861384a567bb84019605b67abc0b19181f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_233ddbd307fc6ce386147961c005d26d0edf3f51b1473090f45622137b5714c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233ddbd307fc6ce386147961c005d26d0edf3f51b1473090f45622137b5714c9->enter($__internal_233ddbd307fc6ce386147961c005d26d0edf3f51b1473090f45622137b5714c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_233ddbd307fc6ce386147961c005d26d0edf3f51b1473090f45622137b5714c9->leave($__internal_233ddbd307fc6ce386147961c005d26d0edf3f51b1473090f45622137b5714c9_prof);

        
        $__internal_b2fb3641cbc1d0a639c25238850ed861384a567bb84019605b67abc0b19181f9->leave($__internal_b2fb3641cbc1d0a639c25238850ed861384a567bb84019605b67abc0b19181f9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ae7dd1c1fbd121d814de99ed32766d09cbeb3e5702f85e2bb96d53de0ffc627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae7dd1c1fbd121d814de99ed32766d09cbeb3e5702f85e2bb96d53de0ffc627->enter($__internal_4ae7dd1c1fbd121d814de99ed32766d09cbeb3e5702f85e2bb96d53de0ffc627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e011f06517bf9724056848dc3669221fc1d9a74b8ca11b3d9f5a495e9a5fa4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e011f06517bf9724056848dc3669221fc1d9a74b8ca11b3d9f5a495e9a5fa4e->enter($__internal_3e011f06517bf9724056848dc3669221fc1d9a74b8ca11b3d9f5a495e9a5fa4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3e011f06517bf9724056848dc3669221fc1d9a74b8ca11b3d9f5a495e9a5fa4e->leave($__internal_3e011f06517bf9724056848dc3669221fc1d9a74b8ca11b3d9f5a495e9a5fa4e_prof);

        
        $__internal_4ae7dd1c1fbd121d814de99ed32766d09cbeb3e5702f85e2bb96d53de0ffc627->leave($__internal_4ae7dd1c1fbd121d814de99ed32766d09cbeb3e5702f85e2bb96d53de0ffc627_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfonycalendar/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
