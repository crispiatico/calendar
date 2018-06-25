<?php

/* alluser.html.twig */
class __TwigTemplate_5a445e8a074aa95e357a18b13822a635a35ba3b5ba0636ff3b91d82ee2d892f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "alluser.html.twig", 1);
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
        $__internal_b8cac4f6836621dd26d100c8c8025cdc48c2e566dd4f47e0b549a5ec98fbb129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8cac4f6836621dd26d100c8c8025cdc48c2e566dd4f47e0b549a5ec98fbb129->enter($__internal_b8cac4f6836621dd26d100c8c8025cdc48c2e566dd4f47e0b549a5ec98fbb129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alluser.html.twig"));

        $__internal_7788e32a2c0010c365384dac6b7029450458ca53158d6129ca6f81e7e44d57c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7788e32a2c0010c365384dac6b7029450458ca53158d6129ca6f81e7e44d57c2->enter($__internal_7788e32a2c0010c365384dac6b7029450458ca53158d6129ca6f81e7e44d57c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alluser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8cac4f6836621dd26d100c8c8025cdc48c2e566dd4f47e0b549a5ec98fbb129->leave($__internal_b8cac4f6836621dd26d100c8c8025cdc48c2e566dd4f47e0b549a5ec98fbb129_prof);

        
        $__internal_7788e32a2c0010c365384dac6b7029450458ca53158d6129ca6f81e7e44d57c2->leave($__internal_7788e32a2c0010c365384dac6b7029450458ca53158d6129ca6f81e7e44d57c2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_869ce14d3b60747dc6de035067c0a21b3ff1e126a389a7efe66ceef44178bdb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869ce14d3b60747dc6de035067c0a21b3ff1e126a389a7efe66ceef44178bdb5->enter($__internal_869ce14d3b60747dc6de035067c0a21b3ff1e126a389a7efe66ceef44178bdb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bea35ad8993495b99957b0b57c52d0b949ef7afb737cb4e112dac5162a6b723e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea35ad8993495b99957b0b57c52d0b949ef7afb737cb4e112dac5162a6b723e->enter($__internal_bea35ad8993495b99957b0b57c52d0b949ef7afb737cb4e112dac5162a6b723e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Utenti</h2>
      <div class=\"row row-title\">
        <div class=\"col-lg-4 col-md-3 col-sm-2 portfolio-item\">
          Utente
        </div>
        <div class=\"col-lg-4 col-md-3 col-sm-2 portfolio-item\">
          Email
        </div>
        <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
          Attivo
        </div>
        <div class=\"col-lg-3 col-md-2 col-sm-2 portfolio-item\">
          Modifica / Cancella
        </div>
      </div>
      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 22
            echo "      <div class=\"row row-item-active";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "isactive", array()), "html", null, true);
            echo "\">
        <div class=\"col-lg-4 col-md-3 col-sm-2 portfolio-item\">
          ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "username", array()), "html", null, true);
            echo "
        </div>
        <div class=\"col-lg-4 col-md-3 col-sm-2 portfolio-item\">
          ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "email", array()), "html", null, true);
            echo "
        </div>
        <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
          <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/"), "html", null, true);
            echo "active";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "isactive", array()), "html", null, true);
            echo ".png\"  width=\"20\" height=\"20\" alt=\"Attivo\" />
        </div>
        <div class=\"col-lg-3 col-md-2 col-sm-2 portfolio-item\">
          <a href=\"user/modify/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
            echo "\">
          <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/edit.png"), "html", null, true);
            echo "\" width=\"20\" height=\"20\" alt=\"Modifica\" /> Modifica</a>
          ";
            // line 35
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "delete", array()) == 1)) {
                // line 36
                echo "            <a href=\"user/remove/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
                echo "\" class=\"confirmation\">
            <img src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-remove.png"), "html", null, true);
                echo "\" width=\"20\" height=\"20\" alt=\"Cancella\" /> Cancella</a>
          ";
            }
            // line 39
            echo "        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "      <a href=\"user/new\">
      <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-add.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo utente</strong></a>
    </div>
  </section>
</div>
";
        
        $__internal_bea35ad8993495b99957b0b57c52d0b949ef7afb737cb4e112dac5162a6b723e->leave($__internal_bea35ad8993495b99957b0b57c52d0b949ef7afb737cb4e112dac5162a6b723e_prof);

        
        $__internal_869ce14d3b60747dc6de035067c0a21b3ff1e126a389a7efe66ceef44178bdb5->leave($__internal_869ce14d3b60747dc6de035067c0a21b3ff1e126a389a7efe66ceef44178bdb5_prof);

    }

    public function getTemplateName()
    {
        return "alluser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 43,  127 => 42,  119 => 39,  114 => 37,  109 => 36,  107 => 35,  103 => 34,  99 => 33,  91 => 30,  85 => 27,  79 => 24,  73 => 22,  69 => 21,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Utenti</h2>
      <div class=\"row row-title\">
        <div class=\"col-lg-4 col-md-3 col-sm-2 portfolio-item\">
          Utente
        </div>
        <div class=\"col-lg-4 col-md-3 col-sm-2 portfolio-item\">
          Email
        </div>
        <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
          Attivo
        </div>
        <div class=\"col-lg-3 col-md-2 col-sm-2 portfolio-item\">
          Modifica / Cancella
        </div>
      </div>
      {% for entry in user %}
      <div class=\"row row-item-active{{ entry.isactive }}\">
        <div class=\"col-lg-4 col-md-3 col-sm-2 portfolio-item\">
          {{ entry.username }}
        </div>
        <div class=\"col-lg-4 col-md-3 col-sm-2 portfolio-item\">
          {{ entry.email }}
        </div>
        <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
          <img src=\"{{ asset('bower_components/Ionicons/png/512/') }}active{{ entry.isactive }}.png\"  width=\"20\" height=\"20\" alt=\"Attivo\" />
        </div>
        <div class=\"col-lg-3 col-md-2 col-sm-2 portfolio-item\">
          <a href=\"user/modify/{{ entry.id }}\">
          <img src=\"{{ asset('bower_components/Ionicons/png/512/edit.png') }}\" width=\"20\" height=\"20\" alt=\"Modifica\" /> Modifica</a>
          {% if entry.delete == 1 %}
            <a href=\"user/remove/{{ entry.id }}\" class=\"confirmation\">
            <img src=\"{{ asset('bower_components/Ionicons/png/512/android-remove.png') }}\" width=\"20\" height=\"20\" alt=\"Cancella\" /> Cancella</a>
          {% endif %}
        </div>
      </div>
      {% endfor %}
      <a href=\"user/new\">
      <img src=\"{{ asset('bower_components/Ionicons/png/512/android-add.png') }}\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo utente</strong></a>
    </div>
  </section>
</div>
{% endblock %}
", "alluser.html.twig", "/var/www/html/symfonycalendar/templates/alluser.html.twig");
    }
}
