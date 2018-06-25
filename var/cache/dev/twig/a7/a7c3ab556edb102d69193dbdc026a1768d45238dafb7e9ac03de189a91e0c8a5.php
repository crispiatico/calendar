<?php

/* allusertype.html.twig */
class __TwigTemplate_b41050297b682e9d34aa359322ea97a36c2328fb48d44c815055d4ee935f2341 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "allusertype.html.twig", 1);
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
        $__internal_32b6889bcb570123eb53a3a44359bedb7c126f15fd093c016622006f6d70467c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b6889bcb570123eb53a3a44359bedb7c126f15fd093c016622006f6d70467c->enter($__internal_32b6889bcb570123eb53a3a44359bedb7c126f15fd093c016622006f6d70467c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "allusertype.html.twig"));

        $__internal_b9e5bb0b6c477fd1451e756767030269218807fa55fa33b585b362450875c878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e5bb0b6c477fd1451e756767030269218807fa55fa33b585b362450875c878->enter($__internal_b9e5bb0b6c477fd1451e756767030269218807fa55fa33b585b362450875c878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "allusertype.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32b6889bcb570123eb53a3a44359bedb7c126f15fd093c016622006f6d70467c->leave($__internal_32b6889bcb570123eb53a3a44359bedb7c126f15fd093c016622006f6d70467c_prof);

        
        $__internal_b9e5bb0b6c477fd1451e756767030269218807fa55fa33b585b362450875c878->leave($__internal_b9e5bb0b6c477fd1451e756767030269218807fa55fa33b585b362450875c878_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_306379da60b8807c9fe3a3a051a7cab60e01302acc58ad2f57eba77ded68eaad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306379da60b8807c9fe3a3a051a7cab60e01302acc58ad2f57eba77ded68eaad->enter($__internal_306379da60b8807c9fe3a3a051a7cab60e01302acc58ad2f57eba77ded68eaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_951790495d0533742f9f1222f24975bc6b5b3a0512c3e39975a46407fe3cccfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_951790495d0533742f9f1222f24975bc6b5b3a0512c3e39975a46407fe3cccfc->enter($__internal_951790495d0533742f9f1222f24975bc6b5b3a0512c3e39975a46407fe3cccfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Tipi di utente</h2>
      <div class=\"row row-title\">
        <div class=\"col-lg-8 col-md-6 col-sm-2 portfolio-item\">
          Tipo
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          Modifica
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          Cancella
        </div>
      </div>
      ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usertype"]) || array_key_exists("usertype", $context) ? $context["usertype"] : (function () { throw new Twig_Error_Runtime('Variable "usertype" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 19
            echo "      <div class=\"row row-item\">
        <div class=\"col-lg-8 col-md-6 col-sm-2 portfolio-item\">
          ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "usertype", array()), "html", null, true);
            echo "
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          <a href=\"usertype/modify/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
            echo "\">
          <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/edit.png"), "html", null, true);
            echo "\" width=\"20\" height=\"20\" alt=\"Modifica\" /> Modifica </a>
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          ";
            // line 28
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "delete", array()) == 1)) {
                // line 29
                echo "            <a href=\"usertype/remove/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
                echo "\" class=\"confirmation\">
            <img src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-remove.png"), "html", null, true);
                echo "\" width=\"20\" height=\"20\" alt=\"Cancella\" /> Cancella</a>
          ";
            }
            // line 32
            echo "        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "      <a href=\"usertype/new\">
      <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-add.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo tipo di utente</strong></a>
    </div>
  </section>
</div>
";
        
        $__internal_951790495d0533742f9f1222f24975bc6b5b3a0512c3e39975a46407fe3cccfc->leave($__internal_951790495d0533742f9f1222f24975bc6b5b3a0512c3e39975a46407fe3cccfc_prof);

        
        $__internal_306379da60b8807c9fe3a3a051a7cab60e01302acc58ad2f57eba77ded68eaad->leave($__internal_306379da60b8807c9fe3a3a051a7cab60e01302acc58ad2f57eba77ded68eaad_prof);

    }

    public function getTemplateName()
    {
        return "allusertype.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  110 => 35,  102 => 32,  97 => 30,  92 => 29,  90 => 28,  84 => 25,  80 => 24,  74 => 21,  70 => 19,  66 => 18,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Tipi di utente</h2>
      <div class=\"row row-title\">
        <div class=\"col-lg-8 col-md-6 col-sm-2 portfolio-item\">
          Tipo
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          Modifica
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          Cancella
        </div>
      </div>
      {% for entry in usertype %}
      <div class=\"row row-item\">
        <div class=\"col-lg-8 col-md-6 col-sm-2 portfolio-item\">
          {{ entry.usertype }}
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          <a href=\"usertype/modify/{{ entry.id }}\">
          <img src=\"{{ asset('bower_components/Ionicons/png/512/edit.png') }}\" width=\"20\" height=\"20\" alt=\"Modifica\" /> Modifica </a>
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          {% if entry.delete == 1 %}
            <a href=\"usertype/remove/{{ entry.id }}\" class=\"confirmation\">
            <img src=\"{{ asset('bower_components/Ionicons/png/512/android-remove.png') }}\" width=\"20\" height=\"20\" alt=\"Cancella\" /> Cancella</a>
          {% endif %}
        </div>
      </div>
      {% endfor %}
      <a href=\"usertype/new\">
      <img src=\"{{ asset('bower_components/Ionicons/png/512/android-add.png') }}\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo tipo di utente</strong></a>
    </div>
  </section>
</div>
{% endblock %}
", "allusertype.html.twig", "/var/www/html/symfonycalendar/templates/allusertype.html.twig");
    }
}
