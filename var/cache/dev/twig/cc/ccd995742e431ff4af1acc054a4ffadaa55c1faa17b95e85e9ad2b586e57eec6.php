<?php

/* bookingnew.html.twig */
class __TwigTemplate_efd5a82d86d7c4e19812f7f7e1102c738a6a2307e840e4c294f3991c223403cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bookingnew.html.twig", 1);
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
        $__internal_fb1cd70d5fbcf3779f838d4cde5bd77d055804691f9aeffbfa671854e6f6a6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1cd70d5fbcf3779f838d4cde5bd77d055804691f9aeffbfa671854e6f6a6df->enter($__internal_fb1cd70d5fbcf3779f838d4cde5bd77d055804691f9aeffbfa671854e6f6a6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookingnew.html.twig"));

        $__internal_3b24362779fcb5cd1da17eb58b932454e4297f6adef3f22e8c6e8fed4467bb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b24362779fcb5cd1da17eb58b932454e4297f6adef3f22e8c6e8fed4467bb47->enter($__internal_3b24362779fcb5cd1da17eb58b932454e4297f6adef3f22e8c6e8fed4467bb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookingnew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb1cd70d5fbcf3779f838d4cde5bd77d055804691f9aeffbfa671854e6f6a6df->leave($__internal_fb1cd70d5fbcf3779f838d4cde5bd77d055804691f9aeffbfa671854e6f6a6df_prof);

        
        $__internal_3b24362779fcb5cd1da17eb58b932454e4297f6adef3f22e8c6e8fed4467bb47->leave($__internal_3b24362779fcb5cd1da17eb58b932454e4297f6adef3f22e8c6e8fed4467bb47_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d302d8b27fa5b79cdf3b0b7e16f942b3425e22056e10f58ace0fd710f3d6296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d302d8b27fa5b79cdf3b0b7e16f942b3425e22056e10f58ace0fd710f3d6296->enter($__internal_9d302d8b27fa5b79cdf3b0b7e16f942b3425e22056e10f58ace0fd710f3d6296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_446036bf6aea20ce09f0534ade14fddcc863318b3b6b1bfcb8f603c597685dec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446036bf6aea20ce09f0534ade14fddcc863318b3b6b1bfcb8f603c597685dec->enter($__internal_446036bf6aea20ce09f0534ade14fddcc863318b3b6b1bfcb8f603c597685dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Nuovo prenotato per: <strong>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 6, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</strong></h2>
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
        
        $__internal_446036bf6aea20ce09f0534ade14fddcc863318b3b6b1bfcb8f603c597685dec->leave($__internal_446036bf6aea20ce09f0534ade14fddcc863318b3b6b1bfcb8f603c597685dec_prof);

        
        $__internal_9d302d8b27fa5b79cdf3b0b7e16f942b3425e22056e10f58ace0fd710f3d6296->leave($__internal_9d302d8b27fa5b79cdf3b0b7e16f942b3425e22056e10f58ace0fd710f3d6296_prof);

    }

    public function getTemplateName()
    {
        return "bookingnew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  63 => 9,  59 => 8,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Nuovo prenotato per: <strong>{{ singleevent.title }}</strong></h2>
      <div class=\"row row-item\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "bookingnew.html.twig", "/var/www/html/symfonycalendar/templates/bookingnew.html.twig");
    }
}
