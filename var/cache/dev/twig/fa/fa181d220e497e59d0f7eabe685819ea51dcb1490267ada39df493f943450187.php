<?php

/* eventmodify.html.twig */
class __TwigTemplate_f626f77452ec5d7a3f3436adb6f41d78e888c1ceebe947f8fa232525a00300d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "eventmodify.html.twig", 1);
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
        $__internal_5101ddd3fe28b34e0e0d92f4291139b538ea305d8dd8b69a12eee17392ae2721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5101ddd3fe28b34e0e0d92f4291139b538ea305d8dd8b69a12eee17392ae2721->enter($__internal_5101ddd3fe28b34e0e0d92f4291139b538ea305d8dd8b69a12eee17392ae2721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "eventmodify.html.twig"));

        $__internal_497e958708bcde09a138c162a613872a24d98a95aa6dd8cf00bcefa0abf017bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497e958708bcde09a138c162a613872a24d98a95aa6dd8cf00bcefa0abf017bd->enter($__internal_497e958708bcde09a138c162a613872a24d98a95aa6dd8cf00bcefa0abf017bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "eventmodify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5101ddd3fe28b34e0e0d92f4291139b538ea305d8dd8b69a12eee17392ae2721->leave($__internal_5101ddd3fe28b34e0e0d92f4291139b538ea305d8dd8b69a12eee17392ae2721_prof);

        
        $__internal_497e958708bcde09a138c162a613872a24d98a95aa6dd8cf00bcefa0abf017bd->leave($__internal_497e958708bcde09a138c162a613872a24d98a95aa6dd8cf00bcefa0abf017bd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_772fc67bf9becc9b73f1066347345f85851f746ab37de24d91f49a1ceb9bb007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772fc67bf9becc9b73f1066347345f85851f746ab37de24d91f49a1ceb9bb007->enter($__internal_772fc67bf9becc9b73f1066347345f85851f746ab37de24d91f49a1ceb9bb007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5fbdca01585a5d39245d0c40faacff2d1dcea8a51f6dc6b27e2e79b5e8883dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fbdca01585a5d39245d0c40faacff2d1dcea8a51f6dc6b27e2e79b5e8883dac->enter($__internal_5fbdca01585a5d39245d0c40faacff2d1dcea8a51f6dc6b27e2e79b5e8883dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Modifica un evento</h2>
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
        
        $__internal_5fbdca01585a5d39245d0c40faacff2d1dcea8a51f6dc6b27e2e79b5e8883dac->leave($__internal_5fbdca01585a5d39245d0c40faacff2d1dcea8a51f6dc6b27e2e79b5e8883dac_prof);

        
        $__internal_772fc67bf9becc9b73f1066347345f85851f746ab37de24d91f49a1ceb9bb007->leave($__internal_772fc67bf9becc9b73f1066347345f85851f746ab37de24d91f49a1ceb9bb007_prof);

    }

    public function getTemplateName()
    {
        return "eventmodify.html.twig";
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
    <h2>Modifica un evento</h2>
      <div class=\"row\"  style = 'background-color: #fff'>
      {{ form_start(form) }}
      {{ form_widget(form) }}
      {{ form_end(form) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "eventmodify.html.twig", "/var/www/html/symfonycalendar/templates/eventmodify.html.twig");
    }
}
