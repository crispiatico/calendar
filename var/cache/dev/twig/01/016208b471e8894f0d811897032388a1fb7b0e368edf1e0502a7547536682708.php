<?php

/* calendarioeventi.html.twig */
class __TwigTemplate_c754cfb0603d13b8d8408c08abeb4447579cedfb6d6167a9ddd0203051386887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "calendarioeventi.html.twig", 1);
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
        $__internal_dfd38f37590c15bbb4fa75a3b727ae98a63a980e8ab127ee8864dcc091553985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd38f37590c15bbb4fa75a3b727ae98a63a980e8ab127ee8864dcc091553985->enter($__internal_dfd38f37590c15bbb4fa75a3b727ae98a63a980e8ab127ee8864dcc091553985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calendarioeventi.html.twig"));

        $__internal_89edd0aaf3891eda6f6769d8fded68522f388d3f884cb8e37b22b49aa6247487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89edd0aaf3891eda6f6769d8fded68522f388d3f884cb8e37b22b49aa6247487->enter($__internal_89edd0aaf3891eda6f6769d8fded68522f388d3f884cb8e37b22b49aa6247487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calendarioeventi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfd38f37590c15bbb4fa75a3b727ae98a63a980e8ab127ee8864dcc091553985->leave($__internal_dfd38f37590c15bbb4fa75a3b727ae98a63a980e8ab127ee8864dcc091553985_prof);

        
        $__internal_89edd0aaf3891eda6f6769d8fded68522f388d3f884cb8e37b22b49aa6247487->leave($__internal_89edd0aaf3891eda6f6769d8fded68522f388d3f884cb8e37b22b49aa6247487_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_afc6d573ce1acd2c00376ae6a2c88162779b455dcc94c0374df1a993edcd45c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc6d573ce1acd2c00376ae6a2c88162779b455dcc94c0374df1a993edcd45c1->enter($__internal_afc6d573ce1acd2c00376ae6a2c88162779b455dcc94c0374df1a993edcd45c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb5ed1c270f1c862c6823b20445f6d5a623677268439abbe607ed4cd2bf8cdd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb5ed1c270f1c862c6823b20445f6d5a623677268439abbe607ed4cd2bf8cdd0->enter($__internal_bb5ed1c270f1c862c6823b20445f6d5a623677268439abbe607ed4cd2bf8cdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        if (((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 3, $this->getSourceContext()); })()) == 1)) {
            // line 4
            echo "<div id=\"calendar-form\">
  <div class=\"text-align-center\">
    ";
            // line 6
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
            echo "
    ";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
            echo "
    ";
            // line 8
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
            echo "
  </div>
</div>
";
        }
        // line 12
        if (((isset($context["eventsfound"]) || array_key_exists("eventsfound", $context) ? $context["eventsfound"] : (function () { throw new Twig_Error_Runtime('Variable "eventsfound" does not exist.', 12, $this->getSourceContext()); })()) == 0)) {
            // line 13
            echo "  <div class=\"callout callout-info\">
    <h4 class=\"text-align-center\">Nessun evento trovato</h4>
  </div>
";
        }
        // line 17
        echo "<div id=\"calendario\">
<table width=\"100%\" border=\"0\" class=\"text-align-center\" cellpadding=\"5\" cellspacing=\"0\">
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 20
            echo "  <tr>
    <td width=\"5%\" class=\"text-align-center\">
        <div>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "start", array()), "M"), "html", null, true);
            echo "</div>
        <div class=\"big-day\">";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "start", array()), "d"), "html", null, true);
            echo "</div>
    \t  <div><small>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "start", array()), "l"), "html", null, true);
            echo "</small></div>
    </td>
    <td width=\"5%\" class=\"text-align-center\">
        <img src=\"http://localhost/symfonycalendar/public/files/immagini/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "gallery", array()), "html", null, true);
            echo "\"  width=\"60\" height=\"60\" alt=\"\" />
         <br>
    </td>
    <td width=\"65%\" class=\"text-align-left\">
    <strong><a href=\"event/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "title", array()), "html", null, true);
            echo "</a></strong><br />
        ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "coursetype", array()), "html", null, true);
            echo "<br />
        con <strong>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "teacher", array()), "html", null, true);
            echo "</strong><br />
        <em><small>
        da ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "start", array()), "D d/m/Y"), "html", null, true);
            echo " ore ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "start", array()), "H:i"), "html", null, true);
            echo "
        a ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "end", array()), "D d/m/Y"), "html", null, true);
            echo " ore ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "start", array()), "H:i"), "html", null, true);
            echo "
        </small></em>
    </td>
    <td width=\"25%\" align=\"left\">
        <a href=\"https://www.google.it/maps/place/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "place", array()), "html", null, true);
            echo "\" target=\"_blank\">
         ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "placename", array()), "html", null, true);
            echo " <br />
        ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "place", array()), "html", null, true);
            echo "
        </a><br />
        <a href=\"http://www.lacittadellaluce.org/it/node/828\" target=\"_blank\" ><strong>Iscrizione</strong></a>
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</table>
</div>
";
        // line 50
        if (((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 50, $this->getSourceContext()); })()) == 1)) {
            // line 51
            echo "<p class=\"text-align-center\"><a href=\"#\" target=\"_blank\">Versione stampabile per argomento</a></p>
";
        }
        
        $__internal_bb5ed1c270f1c862c6823b20445f6d5a623677268439abbe607ed4cd2bf8cdd0->leave($__internal_bb5ed1c270f1c862c6823b20445f6d5a623677268439abbe607ed4cd2bf8cdd0_prof);

        
        $__internal_afc6d573ce1acd2c00376ae6a2c88162779b455dcc94c0374df1a993edcd45c1->leave($__internal_afc6d573ce1acd2c00376ae6a2c88162779b455dcc94c0374df1a993edcd45c1_prof);

    }

    public function getTemplateName()
    {
        return "calendarioeventi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 51,  165 => 50,  161 => 48,  149 => 42,  145 => 41,  141 => 40,  132 => 36,  126 => 35,  121 => 33,  117 => 32,  111 => 31,  104 => 27,  98 => 24,  94 => 23,  90 => 22,  86 => 20,  82 => 19,  78 => 17,  72 => 13,  70 => 12,  63 => 8,  59 => 7,  55 => 6,  51 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}
{% block body %}
{% if header == 1 %}
<div id=\"calendar-form\">
  <div class=\"text-align-center\">
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
  </div>
</div>
{% endif %}
{% if eventsfound == 0 %}
  <div class=\"callout callout-info\">
    <h4 class=\"text-align-center\">Nessun evento trovato</h4>
  </div>
{% endif %}
<div id=\"calendario\">
<table width=\"100%\" border=\"0\" class=\"text-align-center\" cellpadding=\"5\" cellspacing=\"0\">
{% for entry in event %}
  <tr>
    <td width=\"5%\" class=\"text-align-center\">
        <div>{{ entry.start|date('M') }}{# entry.start|localizeddate('none', 'none', \"en\", \"Europe/Rome\", \"M\") #}</div>
        <div class=\"big-day\">{{ entry.start|date('d') }}</div>
    \t  <div><small>{{ entry.start|date('l') }}</small></div>
    </td>
    <td width=\"5%\" class=\"text-align-center\">
        <img src=\"http://localhost/symfonycalendar/public/files/immagini/{{ entry.gallery }}\"  width=\"60\" height=\"60\" alt=\"\" />
         <br>
    </td>
    <td width=\"65%\" class=\"text-align-left\">
    <strong><a href=\"event/{{ entry.id }}\" target=\"_blank\">{{ entry.title }}</a></strong><br />
        {{ entry.coursetype }}<br />
        con <strong>{{ entry.teacher }}</strong><br />
        <em><small>
        da {{ entry.start|date('D d/m/Y') }} ore {{ entry.start|date('H:i') }}
        a {{ entry.end|date('D d/m/Y') }} ore {{ entry.start|date('H:i') }}
        </small></em>
    </td>
    <td width=\"25%\" align=\"left\">
        <a href=\"https://www.google.it/maps/place/{{ entry.place }}\" target=\"_blank\">
         {{ entry.placename }} <br />
        {{ entry.place }}
        </a><br />
        <a href=\"http://www.lacittadellaluce.org/it/node/828\" target=\"_blank\" ><strong>Iscrizione</strong></a>
    </td>
  </tr>
{% endfor %}
</table>
</div>
{% if header == 1 %}
<p class=\"text-align-center\"><a href=\"#\" target=\"_blank\">Versione stampabile per argomento</a></p>
{% endif %}
{% endblock %}
", "calendarioeventi.html.twig", "/var/www/html/symfonycalendar/templates/calendarioeventi.html.twig");
    }
}
