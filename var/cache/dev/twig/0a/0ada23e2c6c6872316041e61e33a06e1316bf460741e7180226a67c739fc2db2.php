<?php

/* topicmodify.html.twig */
class __TwigTemplate_a6dc06c004cf8987dbddf0caf9581b0016b08052fea5e4fc310b355dc605997d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "topicmodify.html.twig", 1);
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
        $__internal_6221011a3e237a761cb93d260305c01842676670c7b19449307dd9d2f2d3686b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6221011a3e237a761cb93d260305c01842676670c7b19449307dd9d2f2d3686b->enter($__internal_6221011a3e237a761cb93d260305c01842676670c7b19449307dd9d2f2d3686b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "topicmodify.html.twig"));

        $__internal_38a479dc0c1f0eff9e75006dc469d8e4bbe73b905e1ebca1c230d5b982d5a377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a479dc0c1f0eff9e75006dc469d8e4bbe73b905e1ebca1c230d5b982d5a377->enter($__internal_38a479dc0c1f0eff9e75006dc469d8e4bbe73b905e1ebca1c230d5b982d5a377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "topicmodify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6221011a3e237a761cb93d260305c01842676670c7b19449307dd9d2f2d3686b->leave($__internal_6221011a3e237a761cb93d260305c01842676670c7b19449307dd9d2f2d3686b_prof);

        
        $__internal_38a479dc0c1f0eff9e75006dc469d8e4bbe73b905e1ebca1c230d5b982d5a377->leave($__internal_38a479dc0c1f0eff9e75006dc469d8e4bbe73b905e1ebca1c230d5b982d5a377_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5b218a0e73297c6f83e1019d7cf6ff5f178392ea88564f71328d8cd4def722b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b218a0e73297c6f83e1019d7cf6ff5f178392ea88564f71328d8cd4def722b->enter($__internal_e5b218a0e73297c6f83e1019d7cf6ff5f178392ea88564f71328d8cd4def722b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68d8757a53137e3a92194cd256d2ef5700171fc652f454f9eb1781d7ec9c264d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d8757a53137e3a92194cd256d2ef5700171fc652f454f9eb1781d7ec9c264d->enter($__internal_68d8757a53137e3a92194cd256d2ef5700171fc652f454f9eb1781d7ec9c264d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Modifica un argomento</h2>
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
        
        $__internal_68d8757a53137e3a92194cd256d2ef5700171fc652f454f9eb1781d7ec9c264d->leave($__internal_68d8757a53137e3a92194cd256d2ef5700171fc652f454f9eb1781d7ec9c264d_prof);

        
        $__internal_e5b218a0e73297c6f83e1019d7cf6ff5f178392ea88564f71328d8cd4def722b->leave($__internal_e5b218a0e73297c6f83e1019d7cf6ff5f178392ea88564f71328d8cd4def722b_prof);

    }

    public function getTemplateName()
    {
        return "topicmodify.html.twig";
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
    <h2>Modifica un argomento</h2>
      <div class=\"row\"  style = 'background-color: #fff'>
        {{ form_start(forms) }}
        {{ form_widget(forms) }}
        {{ form_end(forms) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "topicmodify.html.twig", "/var/www/html/symfonycalendar/templates/topicmodify.html.twig");
    }
}
