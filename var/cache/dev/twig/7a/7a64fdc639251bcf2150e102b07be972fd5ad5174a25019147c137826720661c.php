<?php

/* bookingall.html.twig */
class __TwigTemplate_197ff3a6dc68ea03a39f3721062dfc6befcc93c7ab53953cff48df4a4956f4b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bookingall.html.twig", 1);
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
        $__internal_c33725842cbd09d0882cb830e233a3b50f6d1fbba25da04e1c90e7df63ccca0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33725842cbd09d0882cb830e233a3b50f6d1fbba25da04e1c90e7df63ccca0e->enter($__internal_c33725842cbd09d0882cb830e233a3b50f6d1fbba25da04e1c90e7df63ccca0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookingall.html.twig"));

        $__internal_167e086686b5ab28af21985daa725bd415d3e98324bc1847c99a6dc19c244948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_167e086686b5ab28af21985daa725bd415d3e98324bc1847c99a6dc19c244948->enter($__internal_167e086686b5ab28af21985daa725bd415d3e98324bc1847c99a6dc19c244948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookingall.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c33725842cbd09d0882cb830e233a3b50f6d1fbba25da04e1c90e7df63ccca0e->leave($__internal_c33725842cbd09d0882cb830e233a3b50f6d1fbba25da04e1c90e7df63ccca0e_prof);

        
        $__internal_167e086686b5ab28af21985daa725bd415d3e98324bc1847c99a6dc19c244948->leave($__internal_167e086686b5ab28af21985daa725bd415d3e98324bc1847c99a6dc19c244948_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f877a0232f47f1b2137b9bb854a52aaf5264352c4a3755d7759ba74193478278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f877a0232f47f1b2137b9bb854a52aaf5264352c4a3755d7759ba74193478278->enter($__internal_f877a0232f47f1b2137b9bb854a52aaf5264352c4a3755d7759ba74193478278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71a0e733ecc6545fcbb31717693f038894320c95ea2c28d2431b8e40f96cc12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a0e733ecc6545fcbb31717693f038894320c95ea2c28d2431b8e40f96cc12d->enter($__internal_71a0e733ecc6545fcbb31717693f038894320c95ea2c28d2431b8e40f96cc12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>prenotazioni</h2>
      <div class=\"row row-title\">
        <div class=\"col-lg-2 col-md-6 col-sm-2 portfolio-item\">
          Luogo
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-2 portfolio-item\">
          Indirizzo
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-2 portfolio-item\">
          Città
        </div>
        <div class=\"col-lg-1 col-md-6 col-sm-2 portfolio-item\">
          Provincia
        </div>
        <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
          Attivo
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          Modifica / Cancella
        </div>
      </div>
      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 27, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 28
            echo "      <div class=\"row row-item-active";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "active", array()), "html", null, true);
            echo "\">
        <div class=\"col-lg-2 col-md-6 col-sm-2 portfolio-item\">
          ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "name", array()), "html", null, true);
            echo "
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-2 portfolio-item\">
          ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "address", array()), "html", null, true);
            echo "
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-2 portfolio-item\">
          ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "city", array()), "html", null, true);
            echo "
        </div>
        <div class=\"col-lg-1 col-md-6 col-sm-2 portfolio-item\">
          ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "country", array()), "html", null, true);
            echo "
        </div>
        <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
          <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/"), "html", null, true);
            echo "active";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "active", array()), "html", null, true);
            echo ".png\"  width=\"20\" height=\"20\" alt=\"Attivo\" />
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          <a href=\"place/modify/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
            echo "\">
          <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/edit.png"), "html", null, true);
            echo "\" width=\"20\" height=\"20\" alt=\"Modifica\" /> Modifica</a><br />
          ";
            // line 47
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "delete", array()) == 1)) {
                // line 48
                echo "            <a href=\"place/remove/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
                echo "\">
            <img src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-remove.png"), "html", null, true);
                echo "\" width=\"20\" height=\"20\" alt=\"Cancella\" /> Cancella</a>
          ";
            }
            // line 51
            echo "        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "      <a href=\"new\">
      <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-add.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo Prenotato</strong></a>
      </div>
    </div>
  </section>
</div>
";
        
        $__internal_71a0e733ecc6545fcbb31717693f038894320c95ea2c28d2431b8e40f96cc12d->leave($__internal_71a0e733ecc6545fcbb31717693f038894320c95ea2c28d2431b8e40f96cc12d_prof);

        
        $__internal_f877a0232f47f1b2137b9bb854a52aaf5264352c4a3755d7759ba74193478278->leave($__internal_f877a0232f47f1b2137b9bb854a52aaf5264352c4a3755d7759ba74193478278_prof);

    }

    public function getTemplateName()
    {
        return "bookingall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 55,  145 => 54,  137 => 51,  132 => 49,  127 => 48,  125 => 47,  121 => 46,  117 => 45,  109 => 42,  103 => 39,  97 => 36,  91 => 33,  85 => 30,  79 => 28,  75 => 27,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>prenotazioni</h2>
      <div class=\"row row-title\">
        <div class=\"col-lg-2 col-md-6 col-sm-2 portfolio-item\">
          Luogo
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-2 portfolio-item\">
          Indirizzo
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-2 portfolio-item\">
          Città
        </div>
        <div class=\"col-lg-1 col-md-6 col-sm-2 portfolio-item\">
          Provincia
        </div>
        <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
          Attivo
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          Modifica / Cancella
        </div>
      </div>
      {% for entry in booking %}
      <div class=\"row row-item-active{{ entry.active }}\">
        <div class=\"col-lg-2 col-md-6 col-sm-2 portfolio-item\">
          {{ entry.name }}
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-2 portfolio-item\">
          {{ entry.address }}
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-2 portfolio-item\">
          {{ entry.city }}
        </div>
        <div class=\"col-lg-1 col-md-6 col-sm-2 portfolio-item\">
          {{ entry.country }}
        </div>
        <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
          <img src=\"{{ asset('bower_components/Ionicons/png/512/') }}active{{ entry.active }}.png\"  width=\"20\" height=\"20\" alt=\"Attivo\" />
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          <a href=\"place/modify/{{ entry.id }}\">
          <img src=\"{{ asset('bower_components/Ionicons/png/512/edit.png') }}\" width=\"20\" height=\"20\" alt=\"Modifica\" /> Modifica</a><br />
          {% if entry.delete == 1 %}
            <a href=\"place/remove/{{ entry.id }}\">
            <img src=\"{{ asset('bower_components/Ionicons/png/512/android-remove.png') }}\" width=\"20\" height=\"20\" alt=\"Cancella\" /> Cancella</a>
          {% endif %}
        </div>
      </div>
      {% endfor %}
      <a href=\"new\">
      <img src=\"{{ asset('bower_components/Ionicons/png/512/android-add.png') }}\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo Prenotato</strong></a>
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "bookingall.html.twig", "/var/www/html/symfonycalendar/templates/bookingall.html.twig");
    }
}
