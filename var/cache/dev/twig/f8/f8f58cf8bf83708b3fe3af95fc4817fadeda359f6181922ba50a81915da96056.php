<?php

/* event.html.twig */
class __TwigTemplate_8142172a072bf2daec44af985572d31157038e25c4f8bc28c7da3d96261da7e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "event.html.twig", 1);
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
        $__internal_7f03faa7fb19dfaf55f010c6315a4bb1f195ea0b32fc71b7b89eb4d52e0ccd67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f03faa7fb19dfaf55f010c6315a4bb1f195ea0b32fc71b7b89eb4d52e0ccd67->enter($__internal_7f03faa7fb19dfaf55f010c6315a4bb1f195ea0b32fc71b7b89eb4d52e0ccd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event.html.twig"));

        $__internal_b863de46e2e1dbc1be71f8ea3895c86ae393ef832271d2181e98845469170bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b863de46e2e1dbc1be71f8ea3895c86ae393ef832271d2181e98845469170bf6->enter($__internal_b863de46e2e1dbc1be71f8ea3895c86ae393ef832271d2181e98845469170bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f03faa7fb19dfaf55f010c6315a4bb1f195ea0b32fc71b7b89eb4d52e0ccd67->leave($__internal_7f03faa7fb19dfaf55f010c6315a4bb1f195ea0b32fc71b7b89eb4d52e0ccd67_prof);

        
        $__internal_b863de46e2e1dbc1be71f8ea3895c86ae393ef832271d2181e98845469170bf6->leave($__internal_b863de46e2e1dbc1be71f8ea3895c86ae393ef832271d2181e98845469170bf6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddf916a481ee18468c1fff4950106aac4cdb6d7ba787240cbc061f7cb0ebe6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf916a481ee18468c1fff4950106aac4cdb6d7ba787240cbc061f7cb0ebe6eb->enter($__internal_ddf916a481ee18468c1fff4950106aac4cdb6d7ba787240cbc061f7cb0ebe6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc752a398a5464ace545d1651ed501edeef0ba6baf6793225849acb824eeccd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc752a398a5464ace545d1651ed501edeef0ba6baf6793225849acb824eeccd8->enter($__internal_cc752a398a5464ace545d1651ed501edeef0ba6baf6793225849acb824eeccd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Crea un nuovo evento</h2>
      <div class=\"row row-item\">
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
        
        $__internal_cc752a398a5464ace545d1651ed501edeef0ba6baf6793225849acb824eeccd8->leave($__internal_cc752a398a5464ace545d1651ed501edeef0ba6baf6793225849acb824eeccd8_prof);

        
        $__internal_ddf916a481ee18468c1fff4950106aac4cdb6d7ba787240cbc061f7cb0ebe6eb->leave($__internal_ddf916a481ee18468c1fff4950106aac4cdb6d7ba787240cbc061f7cb0ebe6eb_prof);

    }

    public function getTemplateName()
    {
        return "event.html.twig";
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
    <h2>Crea un nuovo evento</h2>
      <div class=\"row row-item\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "event.html.twig", "/var/www/html/symfonycalendar/templates/event.html.twig");
    }
}
