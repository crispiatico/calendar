<?php

/* editevent.html.twig */
class __TwigTemplate_d420f68263d5c31e0e27129f1665cb25acc8f90c5046cc0d90ef2e023861d604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "editevent.html.twig", 1);
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
        $__internal_59c6f5f20c26fc11fef38608e2d857a5819791907ce297df9f07a9df6fa377ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c6f5f20c26fc11fef38608e2d857a5819791907ce297df9f07a9df6fa377ff->enter($__internal_59c6f5f20c26fc11fef38608e2d857a5819791907ce297df9f07a9df6fa377ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "editevent.html.twig"));

        $__internal_50ead2ad2f07f706d73ab20c608e17007f450fd80197ba54cea8ec72419976ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ead2ad2f07f706d73ab20c608e17007f450fd80197ba54cea8ec72419976ad->enter($__internal_50ead2ad2f07f706d73ab20c608e17007f450fd80197ba54cea8ec72419976ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "editevent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59c6f5f20c26fc11fef38608e2d857a5819791907ce297df9f07a9df6fa377ff->leave($__internal_59c6f5f20c26fc11fef38608e2d857a5819791907ce297df9f07a9df6fa377ff_prof);

        
        $__internal_50ead2ad2f07f706d73ab20c608e17007f450fd80197ba54cea8ec72419976ad->leave($__internal_50ead2ad2f07f706d73ab20c608e17007f450fd80197ba54cea8ec72419976ad_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f3db18f3b2de34edb7cfa5a2e1384feb03304093530d4c49dac5d7297b7aa56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3db18f3b2de34edb7cfa5a2e1384feb03304093530d4c49dac5d7297b7aa56->enter($__internal_1f3db18f3b2de34edb7cfa5a2e1384feb03304093530d4c49dac5d7297b7aa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1fce6915fdcde8e02f731f85f5c3b14d51bf8c0393427a0d22d6112b6331cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1fce6915fdcde8e02f731f85f5c3b14d51bf8c0393427a0d22d6112b6331cff->enter($__internal_d1fce6915fdcde8e02f731f85f5c3b14d51bf8c0393427a0d22d6112b6331cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
<section class=\"content\">
<div class=\"container\">
<div class=\"row\">
  Menu admin
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
        
        $__internal_d1fce6915fdcde8e02f731f85f5c3b14d51bf8c0393427a0d22d6112b6331cff->leave($__internal_d1fce6915fdcde8e02f731f85f5c3b14d51bf8c0393427a0d22d6112b6331cff_prof);

        
        $__internal_1f3db18f3b2de34edb7cfa5a2e1384feb03304093530d4c49dac5d7297b7aa56->leave($__internal_1f3db18f3b2de34edb7cfa5a2e1384feb03304093530d4c49dac5d7297b7aa56_prof);

    }

    public function getTemplateName()
    {
        return "editevent.html.twig";
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
<div class=\"row\">
  Menu admin
  {{ form_start(form) }}
  {{ form_widget(form) }}
  {{ form_end(form) }}
</div>
</div>
</section>
</div>
{% endblock %}
", "editevent.html.twig", "/var/www/html/symfonycalendar/templates/editevent.html.twig");
    }
}
