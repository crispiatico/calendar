<?php

/* alltype.html.twig */
class __TwigTemplate_f166b75c30be56c98029ceda543e4bdb0b44b0da1d9e277c2db5fa22df1a5436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "alltype.html.twig", 1);
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
        $__internal_8ac2be86b581bab695ec761fbe5aeb99ee374e98746a270f64b558e9f827357c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac2be86b581bab695ec761fbe5aeb99ee374e98746a270f64b558e9f827357c->enter($__internal_8ac2be86b581bab695ec761fbe5aeb99ee374e98746a270f64b558e9f827357c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alltype.html.twig"));

        $__internal_953b30906b432c4320fd68f99456c84b4514361a8f53b1cde04ed4d6b0c7e37b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953b30906b432c4320fd68f99456c84b4514361a8f53b1cde04ed4d6b0c7e37b->enter($__internal_953b30906b432c4320fd68f99456c84b4514361a8f53b1cde04ed4d6b0c7e37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alltype.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ac2be86b581bab695ec761fbe5aeb99ee374e98746a270f64b558e9f827357c->leave($__internal_8ac2be86b581bab695ec761fbe5aeb99ee374e98746a270f64b558e9f827357c_prof);

        
        $__internal_953b30906b432c4320fd68f99456c84b4514361a8f53b1cde04ed4d6b0c7e37b->leave($__internal_953b30906b432c4320fd68f99456c84b4514361a8f53b1cde04ed4d6b0c7e37b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b0543479678eefb3a8f9668b7e7bb37dd6f5085bdfaf3eb93876a67ec08da59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0543479678eefb3a8f9668b7e7bb37dd6f5085bdfaf3eb93876a67ec08da59->enter($__internal_7b0543479678eefb3a8f9668b7e7bb37dd6f5085bdfaf3eb93876a67ec08da59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80b9242a8bb55dbe47254d64fe8dfdeced5bf186b67ae10b1485ccc34d22f55c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b9242a8bb55dbe47254d64fe8dfdeced5bf186b67ae10b1485ccc34d22f55c->enter($__internal_80b9242a8bb55dbe47254d64fe8dfdeced5bf186b67ae10b1485ccc34d22f55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Tipi di corso</h2>
      <div class=\"row row-title\">
        <div class=\"col-lg-10 col-md-6 col-sm-2 portfolio-item\">
          Corso
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          Modifica / Cancella
        </div>
      </div>
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 16
            echo "      <div class=\"row row-item\">
        <div class=\"col-lg-10 col-md-6 col-sm-2 portfolio-item\">
          ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "coursetype", array()), "html", null, true);
            echo "
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          <a href=\"type/modify/";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
            echo "\">
          <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/edit.png"), "html", null, true);
            echo "\" width=\"20\" height=\"20\" alt=\"Modifica\" /> Modifica</a><br />
          ";
            // line 23
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "delete", array()) == 1)) {
                // line 24
                echo "            <a href=\"type/remove/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
                echo "\" class=\"confirmation\">
            <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-remove.png"), "html", null, true);
                echo "\" width=\"20\" height=\"20\" alt=\"Cancella\" /> Cancella</a>
          ";
            }
            // line 27
            echo "        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "      <a href=\"type/new\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-add.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo tipo di corso</strong></a>
    </div>
  </section>
</div>
";
        
        $__internal_80b9242a8bb55dbe47254d64fe8dfdeced5bf186b67ae10b1485ccc34d22f55c->leave($__internal_80b9242a8bb55dbe47254d64fe8dfdeced5bf186b67ae10b1485ccc34d22f55c_prof);

        
        $__internal_7b0543479678eefb3a8f9668b7e7bb37dd6f5085bdfaf3eb93876a67ec08da59->leave($__internal_7b0543479678eefb3a8f9668b7e7bb37dd6f5085bdfaf3eb93876a67ec08da59_prof);

    }

    public function getTemplateName()
    {
        return "alltype.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  97 => 27,  92 => 25,  87 => 24,  85 => 23,  81 => 22,  77 => 21,  71 => 18,  67 => 16,  63 => 15,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Tipi di corso</h2>
      <div class=\"row row-title\">
        <div class=\"col-lg-10 col-md-6 col-sm-2 portfolio-item\">
          Corso
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          Modifica / Cancella
        </div>
      </div>
      {% for entry in type %}
      <div class=\"row row-item\">
        <div class=\"col-lg-10 col-md-6 col-sm-2 portfolio-item\">
          {{ entry.coursetype }}
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          <a href=\"type/modify/{{ entry.id }}\">
          <img src=\"{{ asset('bower_components/Ionicons/png/512/edit.png') }}\" width=\"20\" height=\"20\" alt=\"Modifica\" /> Modifica</a><br />
          {% if entry.delete == 1 %}
            <a href=\"type/remove/{{ entry.id }}\" class=\"confirmation\">
            <img src=\"{{ asset('bower_components/Ionicons/png/512/android-remove.png') }}\" width=\"20\" height=\"20\" alt=\"Cancella\" /> Cancella</a>
          {% endif %}
        </div>
      </div>
      {% endfor %}
      <a href=\"type/new\"><img src=\"{{ asset('bower_components/Ionicons/png/512/android-add.png') }}\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo tipo di corso</strong></a>
    </div>
  </section>
</div>
{% endblock %}
", "alltype.html.twig", "/var/www/html/symfonycalendar/templates/alltype.html.twig");
    }
}
