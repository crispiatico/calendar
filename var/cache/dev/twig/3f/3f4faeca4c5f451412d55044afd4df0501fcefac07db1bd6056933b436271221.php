<?php

/* place.html.twig */
class __TwigTemplate_419cfad04f2082ec0f3864af2d7f55a3e11c56068f173c15902d250e6784f8c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "place.html.twig", 1);
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
        $__internal_5302a8e590917ef6f4a7427f661530eb224a7f648f932094c22e1dce53243803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5302a8e590917ef6f4a7427f661530eb224a7f648f932094c22e1dce53243803->enter($__internal_5302a8e590917ef6f4a7427f661530eb224a7f648f932094c22e1dce53243803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "place.html.twig"));

        $__internal_db8f16bfcc34568f8e9581c4675b023a313aa48a5384fb2f9cc84e86b67447a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8f16bfcc34568f8e9581c4675b023a313aa48a5384fb2f9cc84e86b67447a4->enter($__internal_db8f16bfcc34568f8e9581c4675b023a313aa48a5384fb2f9cc84e86b67447a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "place.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5302a8e590917ef6f4a7427f661530eb224a7f648f932094c22e1dce53243803->leave($__internal_5302a8e590917ef6f4a7427f661530eb224a7f648f932094c22e1dce53243803_prof);

        
        $__internal_db8f16bfcc34568f8e9581c4675b023a313aa48a5384fb2f9cc84e86b67447a4->leave($__internal_db8f16bfcc34568f8e9581c4675b023a313aa48a5384fb2f9cc84e86b67447a4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a01b6b50d3f7516f60f485b41dca95230836cb83ddfbd41af1e9653a332be47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a01b6b50d3f7516f60f485b41dca95230836cb83ddfbd41af1e9653a332be47->enter($__internal_7a01b6b50d3f7516f60f485b41dca95230836cb83ddfbd41af1e9653a332be47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86c3ec9e783fefd1cdb9276b8cb96dae82d6199c55268556268509ce8d1f7f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c3ec9e783fefd1cdb9276b8cb96dae82d6199c55268556268509ce8d1f7f22->enter($__internal_86c3ec9e783fefd1cdb9276b8cb96dae82d6199c55268556268509ce8d1f7f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Crea un nuovo Luogo</h2>
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
        
        $__internal_86c3ec9e783fefd1cdb9276b8cb96dae82d6199c55268556268509ce8d1f7f22->leave($__internal_86c3ec9e783fefd1cdb9276b8cb96dae82d6199c55268556268509ce8d1f7f22_prof);

        
        $__internal_7a01b6b50d3f7516f60f485b41dca95230836cb83ddfbd41af1e9653a332be47->leave($__internal_7a01b6b50d3f7516f60f485b41dca95230836cb83ddfbd41af1e9653a332be47_prof);

    }

    public function getTemplateName()
    {
        return "place.html.twig";
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
      <h2>Crea un nuovo Luogo</h2>
      <div class=\"row\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "place.html.twig", "/var/www/html/symfonycalendar/templates/place.html.twig");
    }
}
