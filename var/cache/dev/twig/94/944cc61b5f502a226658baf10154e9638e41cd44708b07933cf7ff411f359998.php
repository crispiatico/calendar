<?php

/* usertype.html.twig */
class __TwigTemplate_7c97540ac6f30f903f7886d476b9e97c72c3417cd8b997763544d4f04296365b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usertype.html.twig", 1);
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
        $__internal_a4c074bbed919c0bbb6c6a05a63cb4e89ee3eedec1abdbe4c0bbec4071f14026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c074bbed919c0bbb6c6a05a63cb4e89ee3eedec1abdbe4c0bbec4071f14026->enter($__internal_a4c074bbed919c0bbb6c6a05a63cb4e89ee3eedec1abdbe4c0bbec4071f14026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usertype.html.twig"));

        $__internal_b4e76faba70b0186ab286b7b43b8b7b101ccad1a351538d05e4ff8f3aca4bb30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e76faba70b0186ab286b7b43b8b7b101ccad1a351538d05e4ff8f3aca4bb30->enter($__internal_b4e76faba70b0186ab286b7b43b8b7b101ccad1a351538d05e4ff8f3aca4bb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usertype.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4c074bbed919c0bbb6c6a05a63cb4e89ee3eedec1abdbe4c0bbec4071f14026->leave($__internal_a4c074bbed919c0bbb6c6a05a63cb4e89ee3eedec1abdbe4c0bbec4071f14026_prof);

        
        $__internal_b4e76faba70b0186ab286b7b43b8b7b101ccad1a351538d05e4ff8f3aca4bb30->leave($__internal_b4e76faba70b0186ab286b7b43b8b7b101ccad1a351538d05e4ff8f3aca4bb30_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf16aa20dae395e6493fd54c686bc1ab1511af5a0aece4dfc2376ba02050ec83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf16aa20dae395e6493fd54c686bc1ab1511af5a0aece4dfc2376ba02050ec83->enter($__internal_cf16aa20dae395e6493fd54c686bc1ab1511af5a0aece4dfc2376ba02050ec83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_283e9598f42db64d906c32dbef764cac0afa37a2fdc327a83cc924308ed7d898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283e9598f42db64d906c32dbef764cac0afa37a2fdc327a83cc924308ed7d898->enter($__internal_283e9598f42db64d906c32dbef764cac0afa37a2fdc327a83cc924308ed7d898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Crea un nuovo tipo di utente</h2>
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
        
        $__internal_283e9598f42db64d906c32dbef764cac0afa37a2fdc327a83cc924308ed7d898->leave($__internal_283e9598f42db64d906c32dbef764cac0afa37a2fdc327a83cc924308ed7d898_prof);

        
        $__internal_cf16aa20dae395e6493fd54c686bc1ab1511af5a0aece4dfc2376ba02050ec83->leave($__internal_cf16aa20dae395e6493fd54c686bc1ab1511af5a0aece4dfc2376ba02050ec83_prof);

    }

    public function getTemplateName()
    {
        return "usertype.html.twig";
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
      <h2>Crea un nuovo tipo di utente</h2>
      <div class=\"row\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "usertype.html.twig", "/var/www/html/symfonycalendar/templates/usertype.html.twig");
    }
}
