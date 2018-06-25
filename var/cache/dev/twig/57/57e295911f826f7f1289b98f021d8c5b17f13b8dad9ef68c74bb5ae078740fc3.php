<?php

/* usermodify.html.twig */
class __TwigTemplate_f23e7616eb98392aeeab8875a61a8f5148f5558f53d839237ac7a5f125ecb2ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usermodify.html.twig", 1);
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
        $__internal_20489053991e542ce909f77678c9f0e0dd3a3a08dd30f53c2ec1ed15e2a5300b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20489053991e542ce909f77678c9f0e0dd3a3a08dd30f53c2ec1ed15e2a5300b->enter($__internal_20489053991e542ce909f77678c9f0e0dd3a3a08dd30f53c2ec1ed15e2a5300b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usermodify.html.twig"));

        $__internal_f393d0b5cc157aaad2535e7879ea4699d73a4ea78e707d52e77fb062b7a8505c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f393d0b5cc157aaad2535e7879ea4699d73a4ea78e707d52e77fb062b7a8505c->enter($__internal_f393d0b5cc157aaad2535e7879ea4699d73a4ea78e707d52e77fb062b7a8505c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usermodify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20489053991e542ce909f77678c9f0e0dd3a3a08dd30f53c2ec1ed15e2a5300b->leave($__internal_20489053991e542ce909f77678c9f0e0dd3a3a08dd30f53c2ec1ed15e2a5300b_prof);

        
        $__internal_f393d0b5cc157aaad2535e7879ea4699d73a4ea78e707d52e77fb062b7a8505c->leave($__internal_f393d0b5cc157aaad2535e7879ea4699d73a4ea78e707d52e77fb062b7a8505c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c21d92fa154bc6c18460605af777b8b0bd6f70edec2b630d1d97a2ae38eefac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c21d92fa154bc6c18460605af777b8b0bd6f70edec2b630d1d97a2ae38eefac->enter($__internal_8c21d92fa154bc6c18460605af777b8b0bd6f70edec2b630d1d97a2ae38eefac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f0b10afc223e3eff08d7fd6c967da6dd2f2b33fb725030a0aa114f83e605cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f0b10afc223e3eff08d7fd6c967da6dd2f2b33fb725030a0aa114f83e605cff->enter($__internal_8f0b10afc223e3eff08d7fd6c967da6dd2f2b33fb725030a0aa114f83e605cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Modifica un utente</h2>
      <div class=\"row\"  style = 'background-color: #fff'>
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new Twig_Error_Runtime('Variable "forms" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new Twig_Error_Runtime('Variable "forms" does not exist.', 9, $this->getSourceContext()); })()), 'widget');
        echo "
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new Twig_Error_Runtime('Variable "forms" does not exist.', 10, $this->getSourceContext()); })()), 'form_end');
        echo "
      </div>
    </div>
  </section>
</div>
";
        
        $__internal_8f0b10afc223e3eff08d7fd6c967da6dd2f2b33fb725030a0aa114f83e605cff->leave($__internal_8f0b10afc223e3eff08d7fd6c967da6dd2f2b33fb725030a0aa114f83e605cff_prof);

        
        $__internal_8c21d92fa154bc6c18460605af777b8b0bd6f70edec2b630d1d97a2ae38eefac->leave($__internal_8c21d92fa154bc6c18460605af777b8b0bd6f70edec2b630d1d97a2ae38eefac_prof);

    }

    public function getTemplateName()
    {
        return "usermodify.html.twig";
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
    <h2>Modifica un utente</h2>
      <div class=\"row\"  style = 'background-color: #fff'>
        {{ form_start(forms) }}
        {{ form_widget(forms) }}
        {{ form_end(forms) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "usermodify.html.twig", "/var/www/html/symfonycalendar/templates/usermodify.html.twig");
    }
}
