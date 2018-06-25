<?php

/* calendarioeventi-BK.html.twig */
class __TwigTemplate_7826b44bdb3cb7b2cbf5ac0553e389d735f2acc1b001466e597c142daa995753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "calendarioeventi-BK.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c089f9d38160b7f2898a9030f8e21cf909bb1aebab2c17f037ba9fd2419238d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c089f9d38160b7f2898a9030f8e21cf909bb1aebab2c17f037ba9fd2419238d->enter($__internal_9c089f9d38160b7f2898a9030f8e21cf909bb1aebab2c17f037ba9fd2419238d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calendarioeventi-BK.html.twig"));

        $__internal_a98e2da42c7fc2b9169872cde2afd65712f35dd914591bb638db3f99b0d13b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98e2da42c7fc2b9169872cde2afd65712f35dd914591bb638db3f99b0d13b6e->enter($__internal_a98e2da42c7fc2b9169872cde2afd65712f35dd914591bb638db3f99b0d13b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calendarioeventi-BK.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c089f9d38160b7f2898a9030f8e21cf909bb1aebab2c17f037ba9fd2419238d->leave($__internal_9c089f9d38160b7f2898a9030f8e21cf909bb1aebab2c17f037ba9fd2419238d_prof);

        
        $__internal_a98e2da42c7fc2b9169872cde2afd65712f35dd914591bb638db3f99b0d13b6e->leave($__internal_a98e2da42c7fc2b9169872cde2afd65712f35dd914591bb638db3f99b0d13b6e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_25129f692e77fdb3fb79922dff552da235656ba93604138155f74935e88aeed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25129f692e77fdb3fb79922dff552da235656ba93604138155f74935e88aeed0->enter($__internal_25129f692e77fdb3fb79922dff552da235656ba93604138155f74935e88aeed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_963f61168e136099f3f81ac053494a9b93ca3cc92708fc42fbd23c6dbcd9bb1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963f61168e136099f3f81ac053494a9b93ca3cc92708fc42fbd23c6dbcd9bb1b->enter($__internal_963f61168e136099f3f81ac053494a9b93ca3cc92708fc42fbd23c6dbcd9bb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 6, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 7
            echo "  ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "date", array()), "d-m-Y"), "html", null, true);
            echo "
  ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "title", array()), "html", null, true);
            echo "
  ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "teacher", array()), "html", null, true);
            echo "
  ";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "start", array()), "d-m-Y"), "html", null, true);
            echo "
  ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "end", array()), "d-m-Y"), "html", null, true);
            echo "
  ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "place", array()), "html", null, true);
            echo "
  ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "course", array()), "html", null, true);
            echo "
  ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "topic", array()), "html", null, true);
            echo "
  <a href=\"http://www.lacittadellaluce.org/it/iscrizione-line\">Iscriviti</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        
        $__internal_963f61168e136099f3f81ac053494a9b93ca3cc92708fc42fbd23c6dbcd9bb1b->leave($__internal_963f61168e136099f3f81ac053494a9b93ca3cc92708fc42fbd23c6dbcd9bb1b_prof);

        
        $__internal_25129f692e77fdb3fb79922dff552da235656ba93604138155f74935e88aeed0->leave($__internal_25129f692e77fdb3fb79922dff552da235656ba93604138155f74935e88aeed0_prof);

    }

    public function getTemplateName()
    {
        return "calendarioeventi-BK.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 17,  94 => 14,  90 => 13,  86 => 12,  82 => 11,  78 => 10,  74 => 9,  70 => 8,  65 => 7,  61 => 6,  57 => 5,  53 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}
{% block body %}
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
{% for entry in event %}
  {{ entry.date|date('d-m-Y') }}
  {{ entry.title }}
  {{ entry.teacher }}
  {{ entry.start|date('d-m-Y') }}
  {{ entry.end|date('d-m-Y') }}
  {{ entry.place }}
  {{ entry.course }}
  {{ entry.topic }}
  <a href=\"http://www.lacittadellaluce.org/it/iscrizione-line\">Iscriviti</a>
{% endfor %}

{% endblock %}
", "calendarioeventi-BK.html.twig", "/var/www/html/symfonycalendar/templates/calendarioeventi-BK.html.twig");
    }
}
