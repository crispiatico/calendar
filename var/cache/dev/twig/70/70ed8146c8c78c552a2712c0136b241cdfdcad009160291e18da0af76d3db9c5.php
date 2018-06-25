<?php

/* admin.html.twig */
class __TwigTemplate_721976efe52bedc55ae569f2ec1c14ed6e886a87de82545cb71b084a71d333c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin.html.twig", 1);
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
        $__internal_8a6f7348255d1c6fcd3d05a5eae6c3b322b7337565eaa6cb2404f6c4e1ff44c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6f7348255d1c6fcd3d05a5eae6c3b322b7337565eaa6cb2404f6c4e1ff44c8->enter($__internal_8a6f7348255d1c6fcd3d05a5eae6c3b322b7337565eaa6cb2404f6c4e1ff44c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_3611cb59024c53e9bcd9fa6d6cf9e841009a97ecbab1e9da3b740d1ed6ef04f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3611cb59024c53e9bcd9fa6d6cf9e841009a97ecbab1e9da3b740d1ed6ef04f5->enter($__internal_3611cb59024c53e9bcd9fa6d6cf9e841009a97ecbab1e9da3b740d1ed6ef04f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a6f7348255d1c6fcd3d05a5eae6c3b322b7337565eaa6cb2404f6c4e1ff44c8->leave($__internal_8a6f7348255d1c6fcd3d05a5eae6c3b322b7337565eaa6cb2404f6c4e1ff44c8_prof);

        
        $__internal_3611cb59024c53e9bcd9fa6d6cf9e841009a97ecbab1e9da3b740d1ed6ef04f5->leave($__internal_3611cb59024c53e9bcd9fa6d6cf9e841009a97ecbab1e9da3b740d1ed6ef04f5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff4a4ee6b93ee8cee9ab35c996e17ae528a6d52e28a6ba6a24ba14eb2d54eed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4a4ee6b93ee8cee9ab35c996e17ae528a6d52e28a6ba6a24ba14eb2d54eed5->enter($__internal_ff4a4ee6b93ee8cee9ab35c996e17ae528a6d52e28a6ba6a24ba14eb2d54eed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fa18ee25a2c7dbfc155cf4b177149ef9c9c7cda092716b9959eebe60d0efc65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa18ee25a2c7dbfc155cf4b177149ef9c9c7cda092716b9959eebe60d0efc65->enter($__internal_1fa18ee25a2c7dbfc155cf4b177149ef9c9c7cda092716b9959eebe60d0efc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 11, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 12
            echo "<div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\" style = 'background-color: #fff; '>
  ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "date", array()), "d-m-Y"), "html", null, true);
            echo "
  ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "title", array()), "html", null, true);
            echo "
  ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "teacher", array()), "html", null, true);
            echo "
  ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "start", array()), "d-m-Y"), "html", null, true);
            echo "
  ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "end", array()), "d-m-Y"), "html", null, true);
            echo "
  ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "place", array()), "html", null, true);
            echo "
  ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "course", array()), "html", null, true);
            echo "
  ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "topic", array()), "html", null, true);
            echo "
  <a href=\"event/remove/";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
            echo "\">Cancella</a>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
</div>
</div>
</section>
</div>
";
        
        $__internal_1fa18ee25a2c7dbfc155cf4b177149ef9c9c7cda092716b9959eebe60d0efc65->leave($__internal_1fa18ee25a2c7dbfc155cf4b177149ef9c9c7cda092716b9959eebe60d0efc65_prof);

        
        $__internal_ff4a4ee6b93ee8cee9ab35c996e17ae528a6d52e28a6ba6a24ba14eb2d54eed5->leave($__internal_ff4a4ee6b93ee8cee9ab35c996e17ae528a6d52e28a6ba6a24ba14eb2d54eed5_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 24,  107 => 21,  103 => 20,  99 => 19,  95 => 18,  91 => 17,  87 => 16,  83 => 15,  79 => 14,  75 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
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
{% for entry in event %}
<div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\" style = 'background-color: #fff; '>
  {{ entry.date|date('d-m-Y') }}
  {{ entry.title }}
  {{ entry.teacher }}
  {{ entry.start|date('d-m-Y') }}
  {{ entry.end|date('d-m-Y') }}
  {{ entry.place }}
  {{ entry.course }}
  {{ entry.topic }}
  <a href=\"event/remove/{{ entry.id }}\">Cancella</a>
</div>
{% endfor %}

</div>
</div>
</section>
</div>
{% endblock %}
", "admin.html.twig", "/var/www/html/symfonycalendar/templates/admin.html.twig");
    }
}
