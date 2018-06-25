<?php

/* eventduplicate.html.twig */
class __TwigTemplate_8b0b836fd1c6c357c05d3a69b7a365d1aaf0cdc4539e6dc7dd66ee79c0912dec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "eventduplicate.html.twig", 1);
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
        $__internal_db6e9278f32290138ebd10012f0486ae567cec1424d44265deafec9a7473b042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6e9278f32290138ebd10012f0486ae567cec1424d44265deafec9a7473b042->enter($__internal_db6e9278f32290138ebd10012f0486ae567cec1424d44265deafec9a7473b042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "eventduplicate.html.twig"));

        $__internal_5b0d258fec45ccfb5fb4703531f6cb9dcb9f06fe5e3a00054fddfdca40cba89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b0d258fec45ccfb5fb4703531f6cb9dcb9f06fe5e3a00054fddfdca40cba89e->enter($__internal_5b0d258fec45ccfb5fb4703531f6cb9dcb9f06fe5e3a00054fddfdca40cba89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "eventduplicate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db6e9278f32290138ebd10012f0486ae567cec1424d44265deafec9a7473b042->leave($__internal_db6e9278f32290138ebd10012f0486ae567cec1424d44265deafec9a7473b042_prof);

        
        $__internal_5b0d258fec45ccfb5fb4703531f6cb9dcb9f06fe5e3a00054fddfdca40cba89e->leave($__internal_5b0d258fec45ccfb5fb4703531f6cb9dcb9f06fe5e3a00054fddfdca40cba89e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca09c09487877e870a058524afe53f2c68196197c6c9a8fae8454eb161a885de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca09c09487877e870a058524afe53f2c68196197c6c9a8fae8454eb161a885de->enter($__internal_ca09c09487877e870a058524afe53f2c68196197c6c9a8fae8454eb161a885de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69f9b387ec05755495d8f6e9e3f7d16c4d59d66d71f3d295445462aa773d3a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f9b387ec05755495d8f6e9e3f7d16c4d59d66d71f3d295445462aa773d3a32->enter($__internal_69f9b387ec05755495d8f6e9e3f7d16c4d59d66d71f3d295445462aa773d3a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Duplica un evento</h2>
      <div class=\"row\"  style = 'background-color: #fff'>
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
        
        $__internal_69f9b387ec05755495d8f6e9e3f7d16c4d59d66d71f3d295445462aa773d3a32->leave($__internal_69f9b387ec05755495d8f6e9e3f7d16c4d59d66d71f3d295445462aa773d3a32_prof);

        
        $__internal_ca09c09487877e870a058524afe53f2c68196197c6c9a8fae8454eb161a885de->leave($__internal_ca09c09487877e870a058524afe53f2c68196197c6c9a8fae8454eb161a885de_prof);

    }

    public function getTemplateName()
    {
        return "eventduplicate.html.twig";
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
    <h2>Duplica un evento</h2>
      <div class=\"row\"  style = 'background-color: #fff'>
      {{ form_start(form) }}
      {{ form_widget(form) }}
      {{ form_end(form) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "eventduplicate.html.twig", "/var/www/html/symfonycalendar/templates/eventduplicate.html.twig");
    }
}
