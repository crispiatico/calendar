<?php

/* allevent.html.twig */
class __TwigTemplate_43b0db02c7285429454bb21343d884034e5f7c800fb9e15ceba4d2951f4ff311 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "allevent.html.twig", 1);
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
        $__internal_b48c49d99d9f1545416ca4e7f055f4b9222484d65b74329175b3fad16f83a4af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48c49d99d9f1545416ca4e7f055f4b9222484d65b74329175b3fad16f83a4af->enter($__internal_b48c49d99d9f1545416ca4e7f055f4b9222484d65b74329175b3fad16f83a4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "allevent.html.twig"));

        $__internal_ecc446ed379a7c2466c96d9dd47603f4923badc70ebf2c792166db329804fbdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc446ed379a7c2466c96d9dd47603f4923badc70ebf2c792166db329804fbdf->enter($__internal_ecc446ed379a7c2466c96d9dd47603f4923badc70ebf2c792166db329804fbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "allevent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b48c49d99d9f1545416ca4e7f055f4b9222484d65b74329175b3fad16f83a4af->leave($__internal_b48c49d99d9f1545416ca4e7f055f4b9222484d65b74329175b3fad16f83a4af_prof);

        
        $__internal_ecc446ed379a7c2466c96d9dd47603f4923badc70ebf2c792166db329804fbdf->leave($__internal_ecc446ed379a7c2466c96d9dd47603f4923badc70ebf2c792166db329804fbdf_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_596cb359af03285a5f5a123eb9381db6f6d67ccd503ca2747081c5491278466e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596cb359af03285a5f5a123eb9381db6f6d67ccd503ca2747081c5491278466e->enter($__internal_596cb359af03285a5f5a123eb9381db6f6d67ccd503ca2747081c5491278466e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a161958628cfaa82a3c4eb1d90f604a70043eb1bf2d756074d2de98a2e8d1554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a161958628cfaa82a3c4eb1d90f604a70043eb1bf2d756074d2de98a2e8d1554->enter($__internal_a161958628cfaa82a3c4eb1d90f604a70043eb1bf2d756074d2de98a2e8d1554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Gestione eventi</h2>
      <div id=\"calendar-form\">
        <div class=\"text-align-center\">
          ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start');
        echo "
          ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        echo "
          ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
      </div>
        <a href=\"new\">
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-add.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
        <strong>Nuovo evento</strong></a>
        <div class=\"row row-title\">
            <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            </div>
            <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
              Data
            </div>
            <div class=\"col-lg-4 col-md-2 col-sm-2 portfolio-item\">
              Titolo
            </div>
            <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
              Maestro / Luogo
            </div>
            <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
              prenotati
            </div>
            <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
              Peso<br />
              visibile
            </div>
            <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
              Azioni
            </div>
          </div>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 40, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 41
            echo "        <div class=\"row row-item-active";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "active", array()), "html", null, true);
            echo "\">
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("files/immagini/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "gallery", array()), "html", null, true);
            echo "\"  width=\"60\" height=\"60\" alt=\"\" />
          </div>
          <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
            <em>da</em> ";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "start", array()), "D d/m/Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "start", array()), "H:i"), "html", null, true);
            echo "<br />
            <em>a</em> ";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "end", array()), "D d/m/Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "end", array()), "H:i"), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-4 col-md-2 col-sm-2 portfolio-item\">
            <strong>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "title", array()), "html", null, true);
            echo "</strong><br />
            ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "topic", array()), "html", null, true);
            echo "<br />
            <em>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "coursetype", array()), "html", null, true);
            echo "</em>
          </div>
          <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
            <strong>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "teacher", array()), "html", null, true);
            echo "</strong><br />
            ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "placename", array()), "html", null, true);
            echo " <br />
            <i>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "place", array()), "html", null, true);
            echo "</i>
          </div>
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            n° <strong>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "booking", array()), "html", null, true);
            echo "</strong><br />
            <a href=\"booking/";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
            echo "\">modifica</a>
          </div>
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "weight", array()), "html", null, true);
            echo "<br />
            <img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/"), "html", null, true);
            echo "active";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "active", array()), "html", null, true);
            echo ".png\"  width=\"20\" height=\"20\" alt=\"Attivo\" />
          </div>
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            <a href=\"modify/";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
            echo "\">modifica</a><br />
            <a href=\"duplicate/";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
            echo "\">duplica</a><br />
            ";
            // line 70
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "delete", array()) == 1)) {
                // line 71
                echo "            <a href=\"remove/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
                echo "\" class=\"confirmation\">cancella</a>
            ";
            } else {
                // line 73
                echo "            <del>cancella</del><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/ios7-information.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\" title=\"pre cancellare occorre prima rimuovere i prenotati\" />
            ";
            }
            // line 75
            echo "          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "      <a href=\"new\">
      <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-add.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo evento</strong></a>
    </div>
  </section>
</div>
";
        
        $__internal_a161958628cfaa82a3c4eb1d90f604a70043eb1bf2d756074d2de98a2e8d1554->leave($__internal_a161958628cfaa82a3c4eb1d90f604a70043eb1bf2d756074d2de98a2e8d1554_prof);

        
        $__internal_596cb359af03285a5f5a123eb9381db6f6d67ccd503ca2747081c5491278466e->leave($__internal_596cb359af03285a5f5a123eb9381db6f6d67ccd503ca2747081c5491278466e_prof);

    }

    public function getTemplateName()
    {
        return "allevent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 79,  211 => 78,  203 => 75,  197 => 73,  191 => 71,  189 => 70,  185 => 69,  181 => 68,  173 => 65,  169 => 64,  163 => 61,  159 => 60,  153 => 57,  149 => 56,  145 => 55,  139 => 52,  135 => 51,  131 => 50,  123 => 47,  117 => 46,  110 => 43,  104 => 41,  100 => 40,  72 => 15,  65 => 11,  61 => 10,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Gestione eventi</h2>
      <div id=\"calendar-form\">
        <div class=\"text-align-center\">
          {{ form_start(form) }}
          {{ form_widget(form) }}
          {{ form_end(form) }}
        </div>
      </div>
        <a href=\"new\">
        <img src=\"{{ asset('bower_components/Ionicons/png/512/android-add.png') }}\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
        <strong>Nuovo evento</strong></a>
        <div class=\"row row-title\">
            <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            </div>
            <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
              Data
            </div>
            <div class=\"col-lg-4 col-md-2 col-sm-2 portfolio-item\">
              Titolo
            </div>
            <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
              Maestro / Luogo
            </div>
            <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
              prenotati
            </div>
            <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
              Peso<br />
              visibile
            </div>
            <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
              Azioni
            </div>
          </div>
        {% for entry in event %}
        <div class=\"row row-item-active{{ entry.active }}\">
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            <img src=\"{{ asset('files/immagini/') }}{{ entry.gallery }}\"  width=\"60\" height=\"60\" alt=\"\" />
          </div>
          <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
            <em>da</em> {{ entry.start|date('D d/m/Y') }} - {{ entry.start|date('H:i') }}<br />
            <em>a</em> {{ entry.end|date('D d/m/Y') }} - {{ entry.end|date('H:i') }}
          </div>
          <div class=\"col-lg-4 col-md-2 col-sm-2 portfolio-item\">
            <strong>{{ entry.title }}</strong><br />
            {{ entry.topic }}<br />
            <em>{{ entry.coursetype }}</em>
          </div>
          <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
            <strong>{{ entry.teacher }}</strong><br />
            {{ entry.placename }} <br />
            <i>{{ entry.place }}</i>
          </div>
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            n° <strong>{{ entry.booking}}</strong><br />
            <a href=\"booking/{{ entry.id }}\">modifica</a>
          </div>
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            {{ entry.weight }}<br />
            <img src=\"{{ asset('bower_components/Ionicons/png/512/') }}active{{ entry.active }}.png\"  width=\"20\" height=\"20\" alt=\"Attivo\" />
          </div>
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            <a href=\"modify/{{ entry.id }}\">modifica</a><br />
            <a href=\"duplicate/{{ entry.id }}\">duplica</a><br />
            {% if entry.delete == 1 %}
            <a href=\"remove/{{ entry.id }}\" class=\"confirmation\">cancella</a>
            {% else %}
            <del>cancella</del><img src=\"{{ asset('bower_components/Ionicons/png/512/ios7-information.png') }}\" width=\"16\" height=\"16\" title=\"pre cancellare occorre prima rimuovere i prenotati\" />
            {% endif %}
          </div>
        </div>
      {% endfor %}
      <a href=\"new\">
      <img src=\"{{ asset('bower_components/Ionicons/png/512/android-add.png') }}\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo evento</strong></a>
    </div>
  </section>
</div>
{% endblock %}
", "allevent.html.twig", "/var/www/html/symfonycalendar/templates/allevent.html.twig");
    }
}
