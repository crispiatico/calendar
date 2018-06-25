<?php

/* teachermodify.html.twig */
class __TwigTemplate_1d29f42c676bf1bfb355515eb2e1631759483da56f1aa4a9c53fb192f8de890d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "teachermodify.html.twig", 1);
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
        $__internal_384617735dffd04259570a20698105404c3e295d16fe8d08ff4573411f54d999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384617735dffd04259570a20698105404c3e295d16fe8d08ff4573411f54d999->enter($__internal_384617735dffd04259570a20698105404c3e295d16fe8d08ff4573411f54d999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teachermodify.html.twig"));

        $__internal_25f77afa07edf4f45257fe242c02daea57259f6be117d54393fcf1a92cc64751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f77afa07edf4f45257fe242c02daea57259f6be117d54393fcf1a92cc64751->enter($__internal_25f77afa07edf4f45257fe242c02daea57259f6be117d54393fcf1a92cc64751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teachermodify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_384617735dffd04259570a20698105404c3e295d16fe8d08ff4573411f54d999->leave($__internal_384617735dffd04259570a20698105404c3e295d16fe8d08ff4573411f54d999_prof);

        
        $__internal_25f77afa07edf4f45257fe242c02daea57259f6be117d54393fcf1a92cc64751->leave($__internal_25f77afa07edf4f45257fe242c02daea57259f6be117d54393fcf1a92cc64751_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_44b57af09dc8baae7df3b82d9ce4497f92dda5f97176a6376928a1ee139ff140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b57af09dc8baae7df3b82d9ce4497f92dda5f97176a6376928a1ee139ff140->enter($__internal_44b57af09dc8baae7df3b82d9ce4497f92dda5f97176a6376928a1ee139ff140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7216b035b8e6eb5f90732a92ea2d8406166973f1e59266dcc76a12c3616d6250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7216b035b8e6eb5f90732a92ea2d8406166973f1e59266dcc76a12c3616d6250->enter($__internal_7216b035b8e6eb5f90732a92ea2d8406166973f1e59266dcc76a12c3616d6250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Modifica un Maestro</h2>
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
        
        $__internal_7216b035b8e6eb5f90732a92ea2d8406166973f1e59266dcc76a12c3616d6250->leave($__internal_7216b035b8e6eb5f90732a92ea2d8406166973f1e59266dcc76a12c3616d6250_prof);

        
        $__internal_44b57af09dc8baae7df3b82d9ce4497f92dda5f97176a6376928a1ee139ff140->leave($__internal_44b57af09dc8baae7df3b82d9ce4497f92dda5f97176a6376928a1ee139ff140_prof);

    }

    public function getTemplateName()
    {
        return "teachermodify.html.twig";
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
    <h2>Modifica un Maestro</h2>
      <div class=\"row\"  style = 'background-color: #fff'>
      {{ form_start(forms) }}
      {{ form_widget(forms) }}
      {{ form_end(forms) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "teachermodify.html.twig", "/var/www/html/symfonycalendar/templates/teachermodify.html.twig");
    }
}
