<?php

/* topic.html.twig */
class __TwigTemplate_aa7b69851007279f4217c4c51903bd0a03c4acc9a13e444036c250c92c870c79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "topic.html.twig", 1);
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
        $__internal_c598b12aa5a9efec98b145147db3f0ecc4a444d25ee1e31bdfc14b2006cf4ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c598b12aa5a9efec98b145147db3f0ecc4a444d25ee1e31bdfc14b2006cf4ff0->enter($__internal_c598b12aa5a9efec98b145147db3f0ecc4a444d25ee1e31bdfc14b2006cf4ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "topic.html.twig"));

        $__internal_9fcc4af4aad05daab088abeb870f41c54cc0b3909da431f00a58f736c93a8708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fcc4af4aad05daab088abeb870f41c54cc0b3909da431f00a58f736c93a8708->enter($__internal_9fcc4af4aad05daab088abeb870f41c54cc0b3909da431f00a58f736c93a8708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "topic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c598b12aa5a9efec98b145147db3f0ecc4a444d25ee1e31bdfc14b2006cf4ff0->leave($__internal_c598b12aa5a9efec98b145147db3f0ecc4a444d25ee1e31bdfc14b2006cf4ff0_prof);

        
        $__internal_9fcc4af4aad05daab088abeb870f41c54cc0b3909da431f00a58f736c93a8708->leave($__internal_9fcc4af4aad05daab088abeb870f41c54cc0b3909da431f00a58f736c93a8708_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f829fe374448b056f16200e9af3002f66b25a5dac04560ec20c88df8e3e1aae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f829fe374448b056f16200e9af3002f66b25a5dac04560ec20c88df8e3e1aae2->enter($__internal_f829fe374448b056f16200e9af3002f66b25a5dac04560ec20c88df8e3e1aae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_273ffe8d012e1ec1e7795f9c0bd8bb4f12c7ef89acd7060b447518669661839a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_273ffe8d012e1ec1e7795f9c0bd8bb4f12c7ef89acd7060b447518669661839a->enter($__internal_273ffe8d012e1ec1e7795f9c0bd8bb4f12c7ef89acd7060b447518669661839a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Crea un nuovo argometo</h2>
      <div class=\"row\">
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'widget');
        echo "
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_end');
        echo "
      </div>
    </div>
  </section>
</div>
";
        
        $__internal_273ffe8d012e1ec1e7795f9c0bd8bb4f12c7ef89acd7060b447518669661839a->leave($__internal_273ffe8d012e1ec1e7795f9c0bd8bb4f12c7ef89acd7060b447518669661839a_prof);

        
        $__internal_f829fe374448b056f16200e9af3002f66b25a5dac04560ec20c88df8e3e1aae2->leave($__internal_f829fe374448b056f16200e9af3002f66b25a5dac04560ec20c88df8e3e1aae2_prof);

    }

    public function getTemplateName()
    {
        return "topic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  60 => 9,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Crea un nuovo argometo</h2>
      <div class=\"row\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "topic.html.twig", "/var/www/html/symfonycalendar/templates/topic.html.twig");
    }
}
