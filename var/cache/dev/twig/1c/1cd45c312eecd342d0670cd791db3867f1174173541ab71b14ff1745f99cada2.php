<?php

/* placemodify.html.twig */
class __TwigTemplate_29f05a293716b99bb4c02b2ae2aff117976eb78f0241f24dbc1bd0bd9c638242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "placemodify.html.twig", 1);
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
        $__internal_c25ddc3b8934ddfb088ac9b122cb117cfcc1df3bd246d51b5cd46e89ab00fd78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25ddc3b8934ddfb088ac9b122cb117cfcc1df3bd246d51b5cd46e89ab00fd78->enter($__internal_c25ddc3b8934ddfb088ac9b122cb117cfcc1df3bd246d51b5cd46e89ab00fd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "placemodify.html.twig"));

        $__internal_fe0a15a5a02de864c0763ed4146344c469fec3907eb8cb396a83fd40c9d245bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0a15a5a02de864c0763ed4146344c469fec3907eb8cb396a83fd40c9d245bc->enter($__internal_fe0a15a5a02de864c0763ed4146344c469fec3907eb8cb396a83fd40c9d245bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "placemodify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c25ddc3b8934ddfb088ac9b122cb117cfcc1df3bd246d51b5cd46e89ab00fd78->leave($__internal_c25ddc3b8934ddfb088ac9b122cb117cfcc1df3bd246d51b5cd46e89ab00fd78_prof);

        
        $__internal_fe0a15a5a02de864c0763ed4146344c469fec3907eb8cb396a83fd40c9d245bc->leave($__internal_fe0a15a5a02de864c0763ed4146344c469fec3907eb8cb396a83fd40c9d245bc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cf62f5b132cf2da0d144d57b4ec7b7efb28f98482ed74ec8caf0270c573b826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf62f5b132cf2da0d144d57b4ec7b7efb28f98482ed74ec8caf0270c573b826->enter($__internal_9cf62f5b132cf2da0d144d57b4ec7b7efb28f98482ed74ec8caf0270c573b826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_076fda03d8352b1b789ea120d0b1b0ddd8fced6e8c96afb6d1b126fbf4001561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076fda03d8352b1b789ea120d0b1b0ddd8fced6e8c96afb6d1b126fbf4001561->enter($__internal_076fda03d8352b1b789ea120d0b1b0ddd8fced6e8c96afb6d1b126fbf4001561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Modifica un luogo</h2>
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
        
        $__internal_076fda03d8352b1b789ea120d0b1b0ddd8fced6e8c96afb6d1b126fbf4001561->leave($__internal_076fda03d8352b1b789ea120d0b1b0ddd8fced6e8c96afb6d1b126fbf4001561_prof);

        
        $__internal_9cf62f5b132cf2da0d144d57b4ec7b7efb28f98482ed74ec8caf0270c573b826->leave($__internal_9cf62f5b132cf2da0d144d57b4ec7b7efb28f98482ed74ec8caf0270c573b826_prof);

    }

    public function getTemplateName()
    {
        return "placemodify.html.twig";
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
    <h2>Modifica un luogo</h2>
      <div class=\"row\"  style = 'background-color: #fff'>
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "placemodify.html.twig", "/var/www/html/symfonycalendar/templates/placemodify.html.twig");
    }
}
