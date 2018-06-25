<?php

/* topicnew.html.twig */
class __TwigTemplate_e7a48834dbde1e1c83358b0ca1ffb01fb6701d11eb76f558ca863a506a8d3477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "topicnew.html.twig", 1);
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
        $__internal_301915a27091f3cd698f28fd886c72e7ad88d3162dea4905cd80b68ed7ba6ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301915a27091f3cd698f28fd886c72e7ad88d3162dea4905cd80b68ed7ba6ae3->enter($__internal_301915a27091f3cd698f28fd886c72e7ad88d3162dea4905cd80b68ed7ba6ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "topicnew.html.twig"));

        $__internal_e127d88754188af56a5e42ec0cfdb2d944f73b57f3ad39c582627ee54666f854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e127d88754188af56a5e42ec0cfdb2d944f73b57f3ad39c582627ee54666f854->enter($__internal_e127d88754188af56a5e42ec0cfdb2d944f73b57f3ad39c582627ee54666f854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "topicnew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_301915a27091f3cd698f28fd886c72e7ad88d3162dea4905cd80b68ed7ba6ae3->leave($__internal_301915a27091f3cd698f28fd886c72e7ad88d3162dea4905cd80b68ed7ba6ae3_prof);

        
        $__internal_e127d88754188af56a5e42ec0cfdb2d944f73b57f3ad39c582627ee54666f854->leave($__internal_e127d88754188af56a5e42ec0cfdb2d944f73b57f3ad39c582627ee54666f854_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cb3d8d2d81b38b345d5c7b715dc6e9c27e5be29cdddb83c070749b49605054c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb3d8d2d81b38b345d5c7b715dc6e9c27e5be29cdddb83c070749b49605054c->enter($__internal_6cb3d8d2d81b38b345d5c7b715dc6e9c27e5be29cdddb83c070749b49605054c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aaf965c9d3718f15c080b90e21cd48981bdb5ffb1e13fc273d970cce7112dc2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf965c9d3718f15c080b90e21cd48981bdb5ffb1e13fc273d970cce7112dc2f->enter($__internal_aaf965c9d3718f15c080b90e21cd48981bdb5ffb1e13fc273d970cce7112dc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Crea un nuovo argometo !</h2>
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "gallery", array()), 'row');
        echo "
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_end');
        echo "
      </div>
    </div>
  </section>
</div>
";
        
        $__internal_aaf965c9d3718f15c080b90e21cd48981bdb5ffb1e13fc273d970cce7112dc2f->leave($__internal_aaf965c9d3718f15c080b90e21cd48981bdb5ffb1e13fc273d970cce7112dc2f_prof);

        
        $__internal_6cb3d8d2d81b38b345d5c7b715dc6e9c27e5be29cdddb83c070749b49605054c->leave($__internal_6cb3d8d2d81b38b345d5c7b715dc6e9c27e5be29cdddb83c070749b49605054c_prof);

    }

    public function getTemplateName()
    {
        return "topicnew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  64 => 10,  60 => 9,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Crea un nuovo argometo !</h2>
      <div class=\"row\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_row(form.gallery) }}
        {{ form_end(form) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "topicnew.html.twig", "/var/www/html/symfonycalendar/templates/topicnew.html.twig");
    }
}
