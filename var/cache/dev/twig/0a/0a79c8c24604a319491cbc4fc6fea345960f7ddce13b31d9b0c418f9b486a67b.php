<?php

/* teacher.html.twig */
class __TwigTemplate_e2d931c07a5105ca1d9abcf90adf47b2e7bb547f673bfdcf6d4d3b6e96cefd67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "teacher.html.twig", 1);
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
        $__internal_653e91895053497aa2e6698245c3d17018da045f215aad2964cad8f54043587f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653e91895053497aa2e6698245c3d17018da045f215aad2964cad8f54043587f->enter($__internal_653e91895053497aa2e6698245c3d17018da045f215aad2964cad8f54043587f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teacher.html.twig"));

        $__internal_7115c189f12053fa5e88b835a291be8d0897b89a5e9254def781ff305460e904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7115c189f12053fa5e88b835a291be8d0897b89a5e9254def781ff305460e904->enter($__internal_7115c189f12053fa5e88b835a291be8d0897b89a5e9254def781ff305460e904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teacher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_653e91895053497aa2e6698245c3d17018da045f215aad2964cad8f54043587f->leave($__internal_653e91895053497aa2e6698245c3d17018da045f215aad2964cad8f54043587f_prof);

        
        $__internal_7115c189f12053fa5e88b835a291be8d0897b89a5e9254def781ff305460e904->leave($__internal_7115c189f12053fa5e88b835a291be8d0897b89a5e9254def781ff305460e904_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccbe0257bb0ca4f9d737f7219a6efd97a804d12625ae1046da4fa0c829f9829b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccbe0257bb0ca4f9d737f7219a6efd97a804d12625ae1046da4fa0c829f9829b->enter($__internal_ccbe0257bb0ca4f9d737f7219a6efd97a804d12625ae1046da4fa0c829f9829b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2276aec251c34685cf4d4ab790833304eeeed9181fa6e26a8b5bd590594add1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2276aec251c34685cf4d4ab790833304eeeed9181fa6e26a8b5bd590594add1f->enter($__internal_2276aec251c34685cf4d4ab790833304eeeed9181fa6e26a8b5bd590594add1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Crea un nuovo Maestro</h2>
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
        
        $__internal_2276aec251c34685cf4d4ab790833304eeeed9181fa6e26a8b5bd590594add1f->leave($__internal_2276aec251c34685cf4d4ab790833304eeeed9181fa6e26a8b5bd590594add1f_prof);

        
        $__internal_ccbe0257bb0ca4f9d737f7219a6efd97a804d12625ae1046da4fa0c829f9829b->leave($__internal_ccbe0257bb0ca4f9d737f7219a6efd97a804d12625ae1046da4fa0c829f9829b_prof);

    }

    public function getTemplateName()
    {
        return "teacher.html.twig";
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
      <h2>Crea un nuovo Maestro</h2>
      <div class=\"row\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "teacher.html.twig", "/var/www/html/symfonycalendar/templates/teacher.html.twig");
    }
}
