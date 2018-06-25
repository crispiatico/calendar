<?php

/* allplace.html.twig */
class __TwigTemplate_7625e32d035a2b7428fc62d9825269d4250cdc8ceeb9e8feeede0e0798428da5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "allplace.html.twig", 1);
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
        $__internal_3432598c7dff358263626b54b808ccb1ef1496fa72001e23d9ead51f68ce2efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3432598c7dff358263626b54b808ccb1ef1496fa72001e23d9ead51f68ce2efc->enter($__internal_3432598c7dff358263626b54b808ccb1ef1496fa72001e23d9ead51f68ce2efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "allplace.html.twig"));

        $__internal_1957a5304a8fd83339ccff1d9ce28d4b639c0b12501f008211465ca60c52724f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1957a5304a8fd83339ccff1d9ce28d4b639c0b12501f008211465ca60c52724f->enter($__internal_1957a5304a8fd83339ccff1d9ce28d4b639c0b12501f008211465ca60c52724f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "allplace.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3432598c7dff358263626b54b808ccb1ef1496fa72001e23d9ead51f68ce2efc->leave($__internal_3432598c7dff358263626b54b808ccb1ef1496fa72001e23d9ead51f68ce2efc_prof);

        
        $__internal_1957a5304a8fd83339ccff1d9ce28d4b639c0b12501f008211465ca60c52724f->leave($__internal_1957a5304a8fd83339ccff1d9ce28d4b639c0b12501f008211465ca60c52724f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8d5e4575c6bfe3248ee042717424ee87e3a8cbf719710dbd6a0eb4b7c312f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d5e4575c6bfe3248ee042717424ee87e3a8cbf719710dbd6a0eb4b7c312f98->enter($__internal_f8d5e4575c6bfe3248ee042717424ee87e3a8cbf719710dbd6a0eb4b7c312f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63ae6645116733316e0882d7d8dadac57465b645434561947fc08b4e7199d12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ae6645116733316e0882d7d8dadac57465b645434561947fc08b4e7199d12c->enter($__internal_63ae6645116733316e0882d7d8dadac57465b645434561947fc08b4e7199d12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Luoghi</h2>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["place"]) || array_key_exists("place", $context) ? $context["place"] : (function () { throw new Twig_Error_Runtime('Variable "place" does not exist.', 27, $this->getSourceContext()); })()));
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
                echo "\"  class=\"confirmation\">
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
        echo "      <a href=\"place/new\">
      <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-add.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo Luogo</strong></a>
      </div>
    </div>
  </section>
</div>
";
        
        $__internal_63ae6645116733316e0882d7d8dadac57465b645434561947fc08b4e7199d12c->leave($__internal_63ae6645116733316e0882d7d8dadac57465b645434561947fc08b4e7199d12c_prof);

        
        $__internal_f8d5e4575c6bfe3248ee042717424ee87e3a8cbf719710dbd6a0eb4b7c312f98->leave($__internal_f8d5e4575c6bfe3248ee042717424ee87e3a8cbf719710dbd6a0eb4b7c312f98_prof);

    }

    public function getTemplateName()
    {
        return "allplace.html.twig";
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
      <h2>Luoghi</h2>
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
      {% for entry in place %}
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
            <a href=\"place/remove/{{ entry.id }}\"  class=\"confirmation\">
            <img src=\"{{ asset('bower_components/Ionicons/png/512/android-remove.png') }}\" width=\"20\" height=\"20\" alt=\"Cancella\" /> Cancella</a>
          {% endif %}
        </div>
      </div>
      {% endfor %}
      <a href=\"place/new\">
      <img src=\"{{ asset('bower_components/Ionicons/png/512/android-add.png') }}\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo Luogo</strong></a>
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "allplace.html.twig", "/var/www/html/symfonycalendar/templates/allplace.html.twig");
    }
}
