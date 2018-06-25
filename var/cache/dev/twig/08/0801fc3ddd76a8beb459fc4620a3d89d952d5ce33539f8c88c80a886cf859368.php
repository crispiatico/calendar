<?php

/* allteacher.html.twig */
class __TwigTemplate_708960c51b5c6fa404405b0e1128eecf722366e4b6d2a79b83ccdb7e591735fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "allteacher.html.twig", 1);
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
        $__internal_bb1a3ca0b37fc8b45d9edfc00b1749ce163f68c099a9eef016088f6bc3bfa02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1a3ca0b37fc8b45d9edfc00b1749ce163f68c099a9eef016088f6bc3bfa02f->enter($__internal_bb1a3ca0b37fc8b45d9edfc00b1749ce163f68c099a9eef016088f6bc3bfa02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "allteacher.html.twig"));

        $__internal_31f35a905973fe358253dd04779597e37e55c81a29d0142887569858b1fbf9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f35a905973fe358253dd04779597e37e55c81a29d0142887569858b1fbf9c4->enter($__internal_31f35a905973fe358253dd04779597e37e55c81a29d0142887569858b1fbf9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "allteacher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb1a3ca0b37fc8b45d9edfc00b1749ce163f68c099a9eef016088f6bc3bfa02f->leave($__internal_bb1a3ca0b37fc8b45d9edfc00b1749ce163f68c099a9eef016088f6bc3bfa02f_prof);

        
        $__internal_31f35a905973fe358253dd04779597e37e55c81a29d0142887569858b1fbf9c4->leave($__internal_31f35a905973fe358253dd04779597e37e55c81a29d0142887569858b1fbf9c4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeaea9481239ddf632769e89f6926607925336530bc445563dce178fc260d325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeaea9481239ddf632769e89f6926607925336530bc445563dce178fc260d325->enter($__internal_eeaea9481239ddf632769e89f6926607925336530bc445563dce178fc260d325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ab24b50c65e9a5db3c6fafce9fa3cf73263ef25048c078277d973bdce8a1df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab24b50c65e9a5db3c6fafce9fa3cf73263ef25048c078277d973bdce8a1df7->enter($__internal_3ab24b50c65e9a5db3c6fafce9fa3cf73263ef25048c078277d973bdce8a1df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Maestri</h2>
      <div class=\"row row-title\">
        <div class=\"col-lg-9 col-md-6 col-sm-2 portfolio-item\">
          Maestro
        </div>
        <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
          Attivo
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          Modifica / Cancella
        </div>
      </div>
      ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teacher"]) || array_key_exists("teacher", $context) ? $context["teacher"] : (function () { throw new Twig_Error_Runtime('Variable "teacher" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 19
            echo "      <div class=\"row row-item-active";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "active", array()), "html", null, true);
            echo "\">
        <div class=\"col-lg-9 col-md-6 col-sm-2 portfolio-item\">
          ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "name", array()), "html", null, true);
            echo "
        </div>
        <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
          <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/"), "html", null, true);
            echo "active";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "active", array()), "html", null, true);
            echo ".png\"  width=\"20\" height=\"20\" alt=\"Attivo\" />
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          <a href=\"teacher/modify/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
            echo "\">
          <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/edit.png"), "html", null, true);
            echo "\" width=\"20\" height=\"20\" alt=\"Modifica\" /> Modifica</a><br />
          ";
            // line 29
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "delete", array()) == 1)) {
                // line 30
                echo "            <a href=\"teacher/remove/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
                echo "\" class=\"confirmation\">
            <img src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-remove.png"), "html", null, true);
                echo "\" width=\"20\" height=\"20\" alt=\"Cancella\" /> Cancella</a>
          ";
            }
            // line 33
            echo "        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "      <a href=\"teacher/new\">
      <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-add.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo Maestro</strong></a>
    </div>
  </section>
</div>
";
        
        $__internal_3ab24b50c65e9a5db3c6fafce9fa3cf73263ef25048c078277d973bdce8a1df7->leave($__internal_3ab24b50c65e9a5db3c6fafce9fa3cf73263ef25048c078277d973bdce8a1df7_prof);

        
        $__internal_eeaea9481239ddf632769e89f6926607925336530bc445563dce178fc260d325->leave($__internal_eeaea9481239ddf632769e89f6926607925336530bc445563dce178fc260d325_prof);

    }

    public function getTemplateName()
    {
        return "allteacher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  118 => 36,  110 => 33,  105 => 31,  100 => 30,  98 => 29,  94 => 28,  90 => 27,  82 => 24,  76 => 21,  70 => 19,  66 => 18,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Maestri</h2>
      <div class=\"row row-title\">
        <div class=\"col-lg-9 col-md-6 col-sm-2 portfolio-item\">
          Maestro
        </div>
        <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
          Attivo
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          Modifica / Cancella
        </div>
      </div>
      {% for entry in teacher %}
      <div class=\"row row-item-active{{ entry.active }}\">
        <div class=\"col-lg-9 col-md-6 col-sm-2 portfolio-item\">
          {{ entry.name }}
        </div>
        <div class=\"col-lg-1 col-md-1 col-sm-1 portfolio-item\">
          <img src=\"{{ asset('bower_components/Ionicons/png/512/') }}active{{ entry.active }}.png\"  width=\"20\" height=\"20\" alt=\"Attivo\" />
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          <a href=\"teacher/modify/{{ entry.id }}\">
          <img src=\"{{ asset('bower_components/Ionicons/png/512/edit.png') }}\" width=\"20\" height=\"20\" alt=\"Modifica\" /> Modifica</a><br />
          {% if entry.delete == 1 %}
            <a href=\"teacher/remove/{{ entry.id }}\" class=\"confirmation\">
            <img src=\"{{ asset('bower_components/Ionicons/png/512/android-remove.png') }}\" width=\"20\" height=\"20\" alt=\"Cancella\" /> Cancella</a>
          {% endif %}
        </div>
      </div>
      {% endfor %}
      <a href=\"teacher/new\">
      <img src=\"{{ asset('bower_components/Ionicons/png/512/android-add.png') }}\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo Maestro</strong></a>
    </div>
  </section>
</div>
{% endblock %}
", "allteacher.html.twig", "/var/www/html/symfonycalendar/templates/allteacher.html.twig");
    }
}
