<?php

/* printcalendar.html.twig */
class __TwigTemplate_67415a2d959cc29e5aaf6e5336a798eda5b7e82bad4041092175c9329c8b5ad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseprint.html.twig", "printcalendar.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseprint.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30e5e827c538f0ffab8b746fac2108e7593026d068ebcf77021ed60c1edb7026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e5e827c538f0ffab8b746fac2108e7593026d068ebcf77021ed60c1edb7026->enter($__internal_30e5e827c538f0ffab8b746fac2108e7593026d068ebcf77021ed60c1edb7026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "printcalendar.html.twig"));

        $__internal_22ca660690f0765e0361602540362c123d0a04c044f39986425ed0ea08b6d229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ca660690f0765e0361602540362c123d0a04c044f39986425ed0ea08b6d229->enter($__internal_22ca660690f0765e0361602540362c123d0a04c044f39986425ed0ea08b6d229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "printcalendar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30e5e827c538f0ffab8b746fac2108e7593026d068ebcf77021ed60c1edb7026->leave($__internal_30e5e827c538f0ffab8b746fac2108e7593026d068ebcf77021ed60c1edb7026_prof);

        
        $__internal_22ca660690f0765e0361602540362c123d0a04c044f39986425ed0ea08b6d229->leave($__internal_22ca660690f0765e0361602540362c123d0a04c044f39986425ed0ea08b6d229_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d979f2881a78b9d05a72a49b3aed0b1d39103f68095abb7123438f3792038b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d979f2881a78b9d05a72a49b3aed0b1d39103f68095abb7123438f3792038b6->enter($__internal_3d979f2881a78b9d05a72a49b3aed0b1d39103f68095abb7123438f3792038b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64d8849f89e0ae5583e7c02f4d2610ee99fdb05ba0dc3973db3104abe3f7217f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d8849f89e0ae5583e7c02f4d2610ee99fdb05ba0dc3973db3104abe3f7217f->enter($__internal_64d8849f89e0ae5583e7c02f4d2610ee99fdb05ba0dc3973db3104abe3f7217f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div id=\"calendario\">
<table width=\"100%\" border=\"0\" class=\"text-align-left\" cellpadding=\"5\" cellspacing=\"0\">
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 5, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 6
            echo "  <tr>
    <td width=\"60%\">
      <strong>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "title", array()), "html", null, true);
            echo "</strong><br>
      da ";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "start", array()), "D d/m/Y"), "html", null, true);
            echo " ore ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "start", array()), "H:i"), "html", null, true);
            echo "
      a ";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "end", array()), "D d/m/Y"), "html", null, true);
            echo " ore ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "start", array()), "H:i"), "html", null, true);
            echo "
    </td>
    <td width=\"40%\">
      con <strong>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "teacher", array()), "html", null, true);
            echo "</strong><br />
      ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "placename", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "place", array()), "html", null, true);
            echo "
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</table>
</div>
";
        
        $__internal_64d8849f89e0ae5583e7c02f4d2610ee99fdb05ba0dc3973db3104abe3f7217f->leave($__internal_64d8849f89e0ae5583e7c02f4d2610ee99fdb05ba0dc3973db3104abe3f7217f_prof);

        
        $__internal_3d979f2881a78b9d05a72a49b3aed0b1d39103f68095abb7123438f3792038b6->leave($__internal_3d979f2881a78b9d05a72a49b3aed0b1d39103f68095abb7123438f3792038b6_prof);

    }

    public function getTemplateName()
    {
        return "printcalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 18,  83 => 14,  79 => 13,  71 => 10,  65 => 9,  61 => 8,  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseprint.html.twig' %}
{% block body %}
<div id=\"calendario\">
<table width=\"100%\" border=\"0\" class=\"text-align-left\" cellpadding=\"5\" cellspacing=\"0\">
{% for entry in event %}
  <tr>
    <td width=\"60%\">
      <strong>{{ entry.title }}</strong><br>
      da {{ entry.start|date('D d/m/Y') }} ore {{ entry.start|date('H:i') }}
      a {{ entry.end|date('D d/m/Y') }} ore {{ entry.start|date('H:i') }}
    </td>
    <td width=\"40%\">
      con <strong>{{ entry.teacher }}</strong><br />
      {{ entry.placename }} - {{ entry.place }}
    </td>
  </tr>
{% endfor %}
</table>
</div>
{% endblock %}
", "printcalendar.html.twig", "/var/www/html/symfonycalendar/templates/printcalendar.html.twig");
    }
}
