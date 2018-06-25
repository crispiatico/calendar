<?php

/* alltopic.html.twig */
class __TwigTemplate_814d4d02667cbcddc31c46c0b4cad2f9cec85807e24a483fff97be809de08da7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "alltopic.html.twig", 1);
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
        $__internal_6b6b91f40f45f837a38ad01d7df0e490bf99db603102b7de40e66dcf570a32c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6b91f40f45f837a38ad01d7df0e490bf99db603102b7de40e66dcf570a32c7->enter($__internal_6b6b91f40f45f837a38ad01d7df0e490bf99db603102b7de40e66dcf570a32c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alltopic.html.twig"));

        $__internal_4500d7dfdc5f0c574051bf07345e847d640d90bbbac3c615539cf500245db402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4500d7dfdc5f0c574051bf07345e847d640d90bbbac3c615539cf500245db402->enter($__internal_4500d7dfdc5f0c574051bf07345e847d640d90bbbac3c615539cf500245db402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alltopic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b6b91f40f45f837a38ad01d7df0e490bf99db603102b7de40e66dcf570a32c7->leave($__internal_6b6b91f40f45f837a38ad01d7df0e490bf99db603102b7de40e66dcf570a32c7_prof);

        
        $__internal_4500d7dfdc5f0c574051bf07345e847d640d90bbbac3c615539cf500245db402->leave($__internal_4500d7dfdc5f0c574051bf07345e847d640d90bbbac3c615539cf500245db402_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6accb7ee4f9a4ff00914e6e3d2a12929c0a3ef61f2f5ce4156b699009eb0d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6accb7ee4f9a4ff00914e6e3d2a12929c0a3ef61f2f5ce4156b699009eb0d0c->enter($__internal_a6accb7ee4f9a4ff00914e6e3d2a12929c0a3ef61f2f5ce4156b699009eb0d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_614eda0c4dc360f6b5e9bfc15ccfe1e42eb68fc554b06af7c1c8df4c3ba61a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614eda0c4dc360f6b5e9bfc15ccfe1e42eb68fc554b06af7c1c8df4c3ba61a78->enter($__internal_614eda0c4dc360f6b5e9bfc15ccfe1e42eb68fc554b06af7c1c8df4c3ba61a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Argomenti</h2>
      <a href=\"new\">
      <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-add.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo Argomento</strong></a>
        <div class=\"row\"  style = 'font-weight: bold; color:#FFF; background-color: #3C8DBC; border-bottom: 1px solid #ECF0F5'>
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
          </div>
          <div class=\"col-lg-7 col-md-5 col-sm-3 portfolio-item\">
            Argomento
          </div>
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            Attivo
          </div>
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            Peso
          </div>
          <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
            Modifica / Cancella
          </div>
        </div>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new Twig_Error_Runtime('Variable "topic" does not exist.', 26, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 27
            echo "        <div class=\"row row-item-active";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "active", array()), "html", null, true);
            echo "\">
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("files/immagini/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "gallery", array()), "html", null, true);
            echo "\"  width=\"60\" height=\"60\" alt=\"\" />
          </div>
          <div class=\"col-lg-7 col-md-5 col-sm-3 portfolio-item\">
            ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "name", array()), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/"), "html", null, true);
            echo "active";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "active", array()), "html", null, true);
            echo ".png\"  width=\"20\" height=\"20\" alt=\"Attivo\" />
          </div>
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "weight", array()), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
            <a href=\"modify/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
            echo "\">
            <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/edit.png"), "html", null, true);
            echo "\" width=\"20\" height=\"20\" alt=\"Modifica\" /> Modifica</a><br />
            ";
            // line 43
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "delete", array()) == 1)) {
                // line 44
                echo "              <a href=\"remove/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
                echo "\" class=\"confirmation\">
              <img src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-remove.png"), "html", null, true);
                echo "\" width=\"20\" height=\"20\" alt=\"Cancella\" /> Cancella</a>
            ";
            }
            // line 47
            echo "          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "      <a href=\"new\">
      <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-add.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo Argomento</strong></a>
    </div>
  </section>
</div>
";
        
        $__internal_614eda0c4dc360f6b5e9bfc15ccfe1e42eb68fc554b06af7c1c8df4c3ba61a78->leave($__internal_614eda0c4dc360f6b5e9bfc15ccfe1e42eb68fc554b06af7c1c8df4c3ba61a78_prof);

        
        $__internal_a6accb7ee4f9a4ff00914e6e3d2a12929c0a3ef61f2f5ce4156b699009eb0d0c->leave($__internal_a6accb7ee4f9a4ff00914e6e3d2a12929c0a3ef61f2f5ce4156b699009eb0d0c_prof);

    }

    public function getTemplateName()
    {
        return "alltopic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 51,  142 => 50,  134 => 47,  129 => 45,  124 => 44,  122 => 43,  118 => 42,  114 => 41,  108 => 38,  100 => 35,  94 => 32,  87 => 29,  81 => 27,  77 => 26,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Argomenti</h2>
      <a href=\"new\">
      <img src=\"{{ asset('bower_components/Ionicons/png/512/android-add.png') }}\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo Argomento</strong></a>
        <div class=\"row\"  style = 'font-weight: bold; color:#FFF; background-color: #3C8DBC; border-bottom: 1px solid #ECF0F5'>
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
          </div>
          <div class=\"col-lg-7 col-md-5 col-sm-3 portfolio-item\">
            Argomento
          </div>
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            Attivo
          </div>
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            Peso
          </div>
          <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
            Modifica / Cancella
          </div>
        </div>
        {% for entry in topic %}
        <div class=\"row row-item-active{{ entry.active }}\">
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            <img src=\"{{ asset('files/immagini/') }}{{ entry.gallery }}\"  width=\"60\" height=\"60\" alt=\"\" />
          </div>
          <div class=\"col-lg-7 col-md-5 col-sm-3 portfolio-item\">
            {{ entry.name }}
          </div>
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            <img src=\"{{ asset('bower_components/Ionicons/png/512/') }}active{{ entry.active }}.png\"  width=\"20\" height=\"20\" alt=\"Attivo\" />
          </div>
          <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
            {{ entry.weight }}
          </div>
          <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
            <a href=\"modify/{{ entry.id }}\">
            <img src=\"{{ asset('bower_components/Ionicons/png/512/edit.png') }}\" width=\"20\" height=\"20\" alt=\"Modifica\" /> Modifica</a><br />
            {% if entry.delete == 1 %}
              <a href=\"remove/{{ entry.id }}\" class=\"confirmation\">
              <img src=\"{{ asset('bower_components/Ionicons/png/512/android-remove.png') }}\" width=\"20\" height=\"20\" alt=\"Cancella\" /> Cancella</a>
            {% endif %}
          </div>
        </div>
        {% endfor %}
      <a href=\"new\">
      <img src=\"{{ asset('bower_components/Ionicons/png/512/android-add.png') }}\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo Argomento</strong></a>
    </div>
  </section>
</div>
{% endblock %}
", "alltopic.html.twig", "/var/www/html/symfonycalendar/templates/alltopic.html.twig");
    }
}
