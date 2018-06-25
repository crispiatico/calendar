<?php

/* type.html.twig */
class __TwigTemplate_5764cc44ce8756d35f62fedd35f248d5d1e50548ecdc53ae9e4861416aaafada extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "type.html.twig", 1);
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
        $__internal_d00261f1605829546909d1b289ef937c59d01b948200c02ead06bd6286000f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00261f1605829546909d1b289ef937c59d01b948200c02ead06bd6286000f57->enter($__internal_d00261f1605829546909d1b289ef937c59d01b948200c02ead06bd6286000f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "type.html.twig"));

        $__internal_4889220ad863063638a71b016a14cb38893566728670cc653ad186e6953fde7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4889220ad863063638a71b016a14cb38893566728670cc653ad186e6953fde7c->enter($__internal_4889220ad863063638a71b016a14cb38893566728670cc653ad186e6953fde7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "type.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d00261f1605829546909d1b289ef937c59d01b948200c02ead06bd6286000f57->leave($__internal_d00261f1605829546909d1b289ef937c59d01b948200c02ead06bd6286000f57_prof);

        
        $__internal_4889220ad863063638a71b016a14cb38893566728670cc653ad186e6953fde7c->leave($__internal_4889220ad863063638a71b016a14cb38893566728670cc653ad186e6953fde7c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e11f062140460db0caf6abdafd882d4bd6d4a704eda7820a06dd95e0a5fdaaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e11f062140460db0caf6abdafd882d4bd6d4a704eda7820a06dd95e0a5fdaaa->enter($__internal_4e11f062140460db0caf6abdafd882d4bd6d4a704eda7820a06dd95e0a5fdaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad9ebb4de7d5aff9f2bc6404cb4a24bb9aed07678d9910d1a95b00921a518d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad9ebb4de7d5aff9f2bc6404cb4a24bb9aed07678d9910d1a95b00921a518d6a->enter($__internal_ad9ebb4de7d5aff9f2bc6404cb4a24bb9aed07678d9910d1a95b00921a518d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Crea un nuovo tipo di corso</h2>
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
        
        $__internal_ad9ebb4de7d5aff9f2bc6404cb4a24bb9aed07678d9910d1a95b00921a518d6a->leave($__internal_ad9ebb4de7d5aff9f2bc6404cb4a24bb9aed07678d9910d1a95b00921a518d6a_prof);

        
        $__internal_4e11f062140460db0caf6abdafd882d4bd6d4a704eda7820a06dd95e0a5fdaaa->leave($__internal_4e11f062140460db0caf6abdafd882d4bd6d4a704eda7820a06dd95e0a5fdaaa_prof);

    }

    public function getTemplateName()
    {
        return "type.html.twig";
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
      <h2>Crea un nuovo tipo di corso</h2>
      <div class=\"row\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "type.html.twig", "/var/www/html/symfonycalendar/templates/type.html.twig");
    }
}
