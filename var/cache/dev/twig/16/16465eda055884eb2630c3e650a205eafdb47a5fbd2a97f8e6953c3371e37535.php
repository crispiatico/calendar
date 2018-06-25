<?php

/* allbooking.html.twig */
class __TwigTemplate_a0b0ac7488f45cc8a9f634c0ee50b03dbc585a1335f7ef0a02148879562a449f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "allbooking.html.twig", 1);
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
        $__internal_b097eb15a2d4a079edc11d7bbc7b8acd43711b487aef84f992b41bd1e6ea8b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b097eb15a2d4a079edc11d7bbc7b8acd43711b487aef84f992b41bd1e6ea8b5c->enter($__internal_b097eb15a2d4a079edc11d7bbc7b8acd43711b487aef84f992b41bd1e6ea8b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "allbooking.html.twig"));

        $__internal_248097dd183f6e922439b782030e88209f6bf6c6213f83fbe5e627e805c878d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248097dd183f6e922439b782030e88209f6bf6c6213f83fbe5e627e805c878d3->enter($__internal_248097dd183f6e922439b782030e88209f6bf6c6213f83fbe5e627e805c878d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "allbooking.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b097eb15a2d4a079edc11d7bbc7b8acd43711b487aef84f992b41bd1e6ea8b5c->leave($__internal_b097eb15a2d4a079edc11d7bbc7b8acd43711b487aef84f992b41bd1e6ea8b5c_prof);

        
        $__internal_248097dd183f6e922439b782030e88209f6bf6c6213f83fbe5e627e805c878d3->leave($__internal_248097dd183f6e922439b782030e88209f6bf6c6213f83fbe5e627e805c878d3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9d5ff4bb40376c9344dae783b8be19fa1bc8e30577a6634ac65fd5f6ca76104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d5ff4bb40376c9344dae783b8be19fa1bc8e30577a6634ac65fd5f6ca76104->enter($__internal_e9d5ff4bb40376c9344dae783b8be19fa1bc8e30577a6634ac65fd5f6ca76104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31db72e72f85890459574408d9670418a16e7a7c98f15d8c31650318f72d2c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31db72e72f85890459574408d9670418a16e7a7c98f15d8c31650318f72d2c97->enter($__internal_31db72e72f85890459574408d9670418a16e7a7c98f15d8c31650318f72d2c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>prenotazioni: <strong>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 6, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</strong></h2>
      <p>argomento: <strong>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 7, $this->getSourceContext()); })()), "topic", array()), "html", null, true);
        echo "</strong>
      - tipo: <strong>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 8, $this->getSourceContext()); })()), "coursetype", array()), "html", null, true);
        echo "</strong>
      - docente: <strong>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 9, $this->getSourceContext()); })()), "teacher", array()), "html", null, true);
        echo "</strong><br />
      a <strong>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 10, $this->getSourceContext()); })()), "place", array()), "html", null, true);
        echo "</strong> -
      da ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 11, $this->getSourceContext()); })()), "start", array()), "D d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 11, $this->getSourceContext()); })()), "start", array()), "H:i"), "html", null, true);
        echo "
      a ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 12, $this->getSourceContext()); })()), "end", array()), "D d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 12, $this->getSourceContext()); })()), "end", array()), "H:i"), "html", null, true);
        echo "
      </p>
      ";
        // line 14
        if (((isset($context["bookingsfound"]) || array_key_exists("bookingsfound", $context) ? $context["bookingsfound"] : (function () { throw new Twig_Error_Runtime('Variable "bookingsfound" does not exist.', 14, $this->getSourceContext()); })()) == 0)) {
            // line 15
            echo "        <div class=\"callout callout-info\">
          <h4 class=\"text-align-center\">Nessun prenotato trovato</h4>
        </div>
      ";
        } else {
            // line 19
            echo "      <div class=\"row row-title\">
        <div class=\"col-lg-3 col-md-2 col-sm-2 portfolio-item\">
          Nome<br />Telefono<br />Email
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          Da ...<br />Arriva<br />Riparte
        </div>
        <div class=\"col-lg-2 col-md-1 col-sm-1 portfolio-item\">
          Tipo utente<br />Acconto
        </div>
        <div class=\"col-lg-3 col-md-1 col-sm-1 portfolio-item\">
          Note
        </div>
        <div class=\"col-lg-1 col-md-2 col-sm-2 portfolio-item\">
        ultimo agg.<br />da
        </div>
        <div class=\"col-lg-1 col-md-2 col-sm-2 portfolio-item\">
          Modifica<br />Cancella
        </div>
      </div>
      ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 39, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 40
                echo "      <div class=\"row row-item-active1\">
        <div class=\"col-lg-3 col-md-2 col-sm-2 portfolio-item\">
          <img src=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/person.png"), "html", null, true);
                echo "\" width=\"18\" height=\"18\" alt=\"Prenotato\" /><strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "name", array()), "html", null, true);
                echo "</strong><br />
          <img src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/ios7-telephone.png"), "html", null, true);
                echo "\" width=\"18\" height=\"18\" alt=\"Telefono\" /> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "phone", array()), "html", null, true);
                echo "<br />
          ";
                // line 44
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "email", array())) {
                    // line 45
                    echo "          <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/email.png"), "html", null, true);
                    echo "\" width=\"18\" height=\"18\" alt=\"Email\" />";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "email", array()), "html", null, true);
                    echo "
          ";
                }
                // line 47
                echo "        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          ";
                // line 49
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "comefrom", array())) {
                    // line 50
                    echo "          <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/home.png"), "html", null, true);
                    echo "\" width=\"18\" height=\"18\" alt=\"Arriva da\" /><strong>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "comefrom", array()), "html", null, true);
                    echo "</strong><br />
          ";
                }
                // line 52
                echo "          ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "arrivale", array())) {
                    // line 53
                    echo "          <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/log-in.png"), "html", null, true);
                    echo "\" width=\"18\" height=\"18\" alt=\"Arriva il\" />";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "arrivale", array()), "d/m/Y H:i"), "html", null, true);
                    echo "<br />
          ";
                }
                // line 55
                echo "          ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "departure", array())) {
                    // line 56
                    echo "          <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/log-out.png"), "html", null, true);
                    echo "\" width=\"18\" height=\"18\" alt=\"Riparte il\" />";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "departure", array()), "d/m/Y H:i"), "html", null, true);
                    echo "<br />
          ";
                }
                // line 58
                echo "        </div>
        <div class=\"col-lg-2 col-md-1 col-sm-1 portfolio-item\">
          ";
                // line 60
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "deposit", array())) {
                    // line 61
                    echo "          <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-social.png"), "html", null, true);
                    echo "\" width=\"18\" height=\"18\" alt=\"Acconto\" /> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "usertype", array()), "html", null, true);
                    echo "<br />
          ";
                }
                // line 63
                echo "          ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "deposit", array())) {
                    // line 64
                    echo "          <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/cash.png"), "html", null, true);
                    echo "\" width=\"18\" height=\"18\" alt=\"Acconto\" /> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "deposit", array()), "html", null, true);
                    echo " €
          ";
                }
                // line 66
                echo "        </div>
        <div class=\"col-lg-3 col-md-1 col-sm-1 portfolio-item\">
          ";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "note", array()), "html", null, true);
                echo "
        </div>
        <div class=\"col-lg-1 col-md-21 col-sm-2 portfolio-item\">
          ";
                // line 71
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "created", array()), "d/m/Y"), "html", null, true);
                echo "<br />
          ";
                // line 72
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "created", array()), "H:i:s"), "html", null, true);
                echo "<br />
          ";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "admin", array()), "html", null, true);
                echo "
        </div>
        <div class=\"col-lg-1 col-md-2 col-sm-2 portfolio-item\">
          <a href=\"modify/";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
                echo "\">Modifica</a><br />
          <a href=\"remove/";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
                echo "\" class=\"confirmation\">cancella</a>
        </div>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "      ";
        }
        // line 82
        echo "      <a href=\"new/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 82, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\">
      <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-add.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo Prenotato</strong></a>
      <a href=\"print/";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 85, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" target=\"_blank\">
      ";
        // line 86
        if (((isset($context["bookingsfound"]) || array_key_exists("bookingsfound", $context) ? $context["bookingsfound"] : (function () { throw new Twig_Error_Runtime('Variable "bookingsfound" does not exist.', 86, $this->getSourceContext()); })()) != 0)) {
            // line 87
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/printer.png"), "html", null, true);
            echo "\" width=\"20\" height=\"20\" alt=\"Stampa\" />
      <strong>Versione Stampabile</strong></a>
      ";
        }
        // line 90
        echo "      </div>
    </div>
  </section>
</div>
";
        
        $__internal_31db72e72f85890459574408d9670418a16e7a7c98f15d8c31650318f72d2c97->leave($__internal_31db72e72f85890459574408d9670418a16e7a7c98f15d8c31650318f72d2c97_prof);

        
        $__internal_e9d5ff4bb40376c9344dae783b8be19fa1bc8e30577a6634ac65fd5f6ca76104->leave($__internal_e9d5ff4bb40376c9344dae783b8be19fa1bc8e30577a6634ac65fd5f6ca76104_prof);

    }

    public function getTemplateName()
    {
        return "allbooking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 90,  265 => 87,  263 => 86,  259 => 85,  254 => 83,  249 => 82,  246 => 81,  236 => 77,  232 => 76,  226 => 73,  222 => 72,  218 => 71,  212 => 68,  208 => 66,  200 => 64,  197 => 63,  189 => 61,  187 => 60,  183 => 58,  175 => 56,  172 => 55,  164 => 53,  161 => 52,  153 => 50,  151 => 49,  147 => 47,  139 => 45,  137 => 44,  131 => 43,  125 => 42,  121 => 40,  117 => 39,  95 => 19,  89 => 15,  87 => 14,  80 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>prenotazioni: <strong>{{ singleevent.title }}</strong></h2>
      <p>argomento: <strong>{{ singleevent.topic }}</strong>
      - tipo: <strong>{{ singleevent.coursetype }}</strong>
      - docente: <strong>{{ singleevent.teacher }}</strong><br />
      a <strong>{{ singleevent.place }}</strong> -
      da {{ singleevent.start|date('D d/m/Y') }} - {{ singleevent.start|date('H:i') }}
      a {{ singleevent.end|date('D d/m/Y') }} - {{ singleevent.end|date('H:i') }}
      </p>
      {% if bookingsfound == 0 %}
        <div class=\"callout callout-info\">
          <h4 class=\"text-align-center\">Nessun prenotato trovato</h4>
        </div>
      {% else %}
      <div class=\"row row-title\">
        <div class=\"col-lg-3 col-md-2 col-sm-2 portfolio-item\">
          Nome<br />Telefono<br />Email
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          Da ...<br />Arriva<br />Riparte
        </div>
        <div class=\"col-lg-2 col-md-1 col-sm-1 portfolio-item\">
          Tipo utente<br />Acconto
        </div>
        <div class=\"col-lg-3 col-md-1 col-sm-1 portfolio-item\">
          Note
        </div>
        <div class=\"col-lg-1 col-md-2 col-sm-2 portfolio-item\">
        ultimo agg.<br />da
        </div>
        <div class=\"col-lg-1 col-md-2 col-sm-2 portfolio-item\">
          Modifica<br />Cancella
        </div>
      </div>
      {% for entry in booking %}
      <div class=\"row row-item-active1\">
        <div class=\"col-lg-3 col-md-2 col-sm-2 portfolio-item\">
          <img src=\"{{ asset('bower_components/Ionicons/png/512/person.png') }}\" width=\"18\" height=\"18\" alt=\"Prenotato\" /><strong>{{ entry.name }}</strong><br />
          <img src=\"{{ asset('bower_components/Ionicons/png/512/ios7-telephone.png') }}\" width=\"18\" height=\"18\" alt=\"Telefono\" /> {{ entry.phone }}<br />
          {% if entry.email %}
          <img src=\"{{ asset('bower_components/Ionicons/png/512/email.png') }}\" width=\"18\" height=\"18\" alt=\"Email\" />{{ entry.email }}
          {% endif %}
        </div>
        <div class=\"col-lg-2 col-md-2 col-sm-2 portfolio-item\">
          {% if entry.comefrom %}
          <img src=\"{{ asset('bower_components/Ionicons/png/512/home.png') }}\" width=\"18\" height=\"18\" alt=\"Arriva da\" /><strong>{{ entry.comefrom }}</strong><br />
          {% endif %}
          {% if entry.arrivale %}
          <img src=\"{{ asset('bower_components/Ionicons/png/512/log-in.png') }}\" width=\"18\" height=\"18\" alt=\"Arriva il\" />{{ entry.arrivale|date('d/m/Y H:i') }}<br />
          {% endif %}
          {% if entry.departure %}
          <img src=\"{{ asset('bower_components/Ionicons/png/512/log-out.png') }}\" width=\"18\" height=\"18\" alt=\"Riparte il\" />{{ entry.departure|date('d/m/Y H:i') }}<br />
          {% endif %}
        </div>
        <div class=\"col-lg-2 col-md-1 col-sm-1 portfolio-item\">
          {% if entry.deposit %}
          <img src=\"{{ asset('bower_components/Ionicons/png/512/android-social.png') }}\" width=\"18\" height=\"18\" alt=\"Acconto\" /> {{ entry.usertype }}<br />
          {% endif %}
          {% if entry.deposit %}
          <img src=\"{{ asset('bower_components/Ionicons/png/512/cash.png') }}\" width=\"18\" height=\"18\" alt=\"Acconto\" /> {{ entry.deposit }} €
          {% endif %}
        </div>
        <div class=\"col-lg-3 col-md-1 col-sm-1 portfolio-item\">
          {{ entry.note }}
        </div>
        <div class=\"col-lg-1 col-md-21 col-sm-2 portfolio-item\">
          {{ entry.created|date('d/m/Y') }}<br />
          {{ entry.created|date('H:i:s') }}<br />
          {{ entry.admin }}
        </div>
        <div class=\"col-lg-1 col-md-2 col-sm-2 portfolio-item\">
          <a href=\"modify/{{ entry.id }}\">Modifica</a><br />
          <a href=\"remove/{{ entry.id }}\" class=\"confirmation\">cancella</a>
        </div>
      </div>
      {% endfor %}
      {% endif %}
      <a href=\"new/{{ singleevent.id }}\">
      <img src=\"{{ asset('bower_components/Ionicons/png/512/android-add.png') }}\" width=\"20\" height=\"20\" alt=\"Nuovo\" />
      <strong>Nuovo Prenotato</strong></a>
      <a href=\"print/{{ singleevent.id }}\" target=\"_blank\">
      {% if bookingsfound != 0 %}
      <img src=\"{{ asset('bower_components/Ionicons/png/512/printer.png') }}\" width=\"20\" height=\"20\" alt=\"Stampa\" />
      <strong>Versione Stampabile</strong></a>
      {% endif %}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "allbooking.html.twig", "/var/www/html/symfonycalendar/templates/allbooking.html.twig");
    }
}
