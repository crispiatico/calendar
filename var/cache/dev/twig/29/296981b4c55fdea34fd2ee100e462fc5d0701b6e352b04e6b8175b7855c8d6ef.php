<?php

/* typeedit.html.twig */
class __TwigTemplate_709d3af7021f126caebaf55ba0972c198e99e7809210d86dc225d0179a98e2fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "typeedit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_731c19e2c3377b4f371829539d3b6a3c9877f3ecac64c8478e073aff6bfeca4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731c19e2c3377b4f371829539d3b6a3c9877f3ecac64c8478e073aff6bfeca4c->enter($__internal_731c19e2c3377b4f371829539d3b6a3c9877f3ecac64c8478e073aff6bfeca4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typeedit.html.twig"));

        $__internal_3b7d34aa6a2831e3096bb3cda8a4669970154c65c76b70f0e95e3f7cf81384a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7d34aa6a2831e3096bb3cda8a4669970154c65c76b70f0e95e3f7cf81384a8->enter($__internal_3b7d34aa6a2831e3096bb3cda8a4669970154c65c76b70f0e95e3f7cf81384a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typeedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_731c19e2c3377b4f371829539d3b6a3c9877f3ecac64c8478e073aff6bfeca4c->leave($__internal_731c19e2c3377b4f371829539d3b6a3c9877f3ecac64c8478e073aff6bfeca4c_prof);

        
        $__internal_3b7d34aa6a2831e3096bb3cda8a4669970154c65c76b70f0e95e3f7cf81384a8->leave($__internal_3b7d34aa6a2831e3096bb3cda8a4669970154c65c76b70f0e95e3f7cf81384a8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f554a5babf0b8f00c8438abfac371b957b93b94d25ed065cb6b5f98995dd5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f554a5babf0b8f00c8438abfac371b957b93b94d25ed065cb6b5f98995dd5ca->enter($__internal_9f554a5babf0b8f00c8438abfac371b957b93b94d25ed065cb6b5f98995dd5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e9825ed2f65066ca18b9a34efe992b039b0421ed58002c38a56093a5b11ef90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e9825ed2f65066ca18b9a34efe992b039b0421ed58002c38a56093a5b11ef90->enter($__internal_9e9825ed2f65066ca18b9a34efe992b039b0421ed58002c38a56093a5b11ef90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
<section class=\"content\">
<div class=\"container\">
<div class=\"row\">
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new Twig_Error_Runtime('Variable "forms" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 8
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["form"], 'form_start');
            echo "
";
            // line 9
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["form"], 'widget');
            echo "
";
            // line 10
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["form"], 'form_end');
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>
</div>
</section>
</div>
";
        
        $__internal_9e9825ed2f65066ca18b9a34efe992b039b0421ed58002c38a56093a5b11ef90->leave($__internal_9e9825ed2f65066ca18b9a34efe992b039b0421ed58002c38a56093a5b11ef90_prof);

        
        $__internal_9f554a5babf0b8f00c8438abfac371b957b93b94d25ed065cb6b5f98995dd5ca->leave($__internal_9f554a5babf0b8f00c8438abfac371b957b93b94d25ed065cb6b5f98995dd5ca_prof);

    }

    public function getTemplateName()
    {
        return "typeedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
<section class=\"content\">
<div class=\"container\">
<div class=\"row\">
{% for form in forms %}
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
{% endfor %}
</div>
</div>
</section>
</div>
{% endblock %}
", "typeedit.html.twig", "/var/www/html/symfonycalendar/templates/typeedit.html.twig");
    }
}
