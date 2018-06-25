<?php

/* printbooking.html.twig */
class __TwigTemplate_b2f27cfdb7e02ddaa496fb40b7f3027dc046e5ab4b7c419cef3feec5a5480826 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basebookinkprint.html.twig", "printbooking.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "basebookinkprint.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_848e63467720012dc9c4d1fc1f2771828f2a85e81dfbc2a66d9567e756141fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_848e63467720012dc9c4d1fc1f2771828f2a85e81dfbc2a66d9567e756141fca->enter($__internal_848e63467720012dc9c4d1fc1f2771828f2a85e81dfbc2a66d9567e756141fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "printbooking.html.twig"));

        $__internal_fc3b018eb2b93b398f7a33fda56ebc1b9514d082dc2515831fcde246300d922b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3b018eb2b93b398f7a33fda56ebc1b9514d082dc2515831fcde246300d922b->enter($__internal_fc3b018eb2b93b398f7a33fda56ebc1b9514d082dc2515831fcde246300d922b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "printbooking.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_848e63467720012dc9c4d1fc1f2771828f2a85e81dfbc2a66d9567e756141fca->leave($__internal_848e63467720012dc9c4d1fc1f2771828f2a85e81dfbc2a66d9567e756141fca_prof);

        
        $__internal_fc3b018eb2b93b398f7a33fda56ebc1b9514d082dc2515831fcde246300d922b->leave($__internal_fc3b018eb2b93b398f7a33fda56ebc1b9514d082dc2515831fcde246300d922b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7f243a26f88af25356557efb9751aa496698664aa4fbac1db93b560c3187e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f243a26f88af25356557efb9751aa496698664aa4fbac1db93b560c3187e43->enter($__internal_c7f243a26f88af25356557efb9751aa496698664aa4fbac1db93b560c3187e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e43f44f54a9a91b5a42cff75919a24fa13f0b2b4257131e9a1772e7b44cf1fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43f44f54a9a91b5a42cff75919a24fa13f0b2b4257131e9a1772e7b44cf1fde->enter($__internal_e43f44f54a9a91b5a42cff75919a24fa13f0b2b4257131e9a1772e7b44cf1fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2 class=\"text-align-center\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 6, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo " con ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 6, $this->getSourceContext()); })()), "teacher", array()), "html", null, true);
        echo "</h2>
      <p class=\"text-align-center\">
      a <strong>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 8, $this->getSourceContext()); })()), "place", array()), "html", null, true);
        echo "</strong> -
      da <strong>";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 9, $this->getSourceContext()); })()), "start", array()), "D d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 9, $this->getSourceContext()); })()), "start", array()), "H:i"), "html", null, true);
        echo "</strong>
      a <strong>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 10, $this->getSourceContext()); })()), "end", array()), "D d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 10, $this->getSourceContext()); })()), "end", array()), "H:i"), "html", null, true);
        echo "</strong><br />
      ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 11, $this->getSourceContext()); })()), "coursetype", array()), "html", null, true);
        echo " di ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 11, $this->getSourceContext()); })()), "topic", array()), "html", null, true);
        echo "
      </p>
      <table width=\"100%\" border=\"0\" class=\"text-align-left scheda\" cellpadding=\"5\" cellspacing=\"0\">
      <tr>
        <th width=\"25%\">
          Nome<br />Telefono<br />Email
        </th>
        <th width=\"25%\">
          Da ...<br />Arriva<br />Riparte
        </th>
        <th width=\"10%\">
          Tipo utente<br />Acconto
        </th>
        <th width=\"30%\">
          Note
        </th>
        <th width=\"10%\">
        ultimo agg.<br />da
        </th>
      </tr>
      ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 31, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 32
            echo "      <tr>
        <td>
          <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/person.png"), "html", null, true);
            echo "\" width=\"18\" height=\"18\" alt=\"Prenotato\" /><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "name", array()), "html", null, true);
            echo "</strong><br />
          <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/ios7-telephone.png"), "html", null, true);
            echo "\" width=\"18\" height=\"18\" alt=\"Telefono\" /> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "phone", array()), "html", null, true);
            echo "<br />
          ";
            // line 36
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "email", array())) {
                // line 37
                echo "          <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/email.png"), "html", null, true);
                echo "\" width=\"18\" height=\"18\" alt=\"Email\" />";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "email", array()), "html", null, true);
                echo "
          ";
            }
            // line 39
            echo "        </td>
        <td>
          ";
            // line 41
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "comefrom", array())) {
                // line 42
                echo "          <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/home.png"), "html", null, true);
                echo "\" width=\"18\" height=\"18\" alt=\"Arriva da\" /><strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "comefrom", array()), "html", null, true);
                echo "</strong><br />
          ";
            }
            // line 44
            echo "          ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "arrivale", array())) {
                // line 45
                echo "          <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/log-in.png"), "html", null, true);
                echo "\" width=\"18\" height=\"18\" alt=\"Arriva il\" />";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "arrivale", array()), "d/m/Y H:i"), "html", null, true);
                echo "<br />
          ";
            }
            // line 47
            echo "          ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "departure", array())) {
                // line 48
                echo "          <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/log-out.png"), "html", null, true);
                echo "\" width=\"18\" height=\"18\" alt=\"Riparte il\" />";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "departure", array()), "d/m/Y H:i"), "html", null, true);
                echo "<br />
          ";
            }
            // line 50
            echo "        </td>
        <td>
          ";
            // line 52
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "deposit", array())) {
                // line 53
                echo "          <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/android-social.png"), "html", null, true);
                echo "\" width=\"18\" height=\"18\" alt=\"Acconto\" /> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "usertype", array()), "html", null, true);
                echo "<br />
          ";
            }
            // line 55
            echo "          ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "deposit", array())) {
                // line 56
                echo "          <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/png/512/cash.png"), "html", null, true);
                echo "\" width=\"18\" height=\"18\" alt=\"Acconto\" /> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "deposit", array()), "html", null, true);
                echo " €
          ";
            }
            // line 58
            echo "        </td>
        <td>
          ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "note", array()), "html", null, true);
            echo "
        </td>
        <td>
          ";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "created", array()), "d/m/Y"), "html", null, true);
            echo "<br />
          ";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "created", array()), "H:i:s"), "html", null, true);
            echo "<br />
          ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "admin", array()), "html", null, true);
            echo "
        </td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "      </table>
    </div>
  </section>
</div>
";
        
        $__internal_e43f44f54a9a91b5a42cff75919a24fa13f0b2b4257131e9a1772e7b44cf1fde->leave($__internal_e43f44f54a9a91b5a42cff75919a24fa13f0b2b4257131e9a1772e7b44cf1fde_prof);

        
        $__internal_c7f243a26f88af25356557efb9751aa496698664aa4fbac1db93b560c3187e43->leave($__internal_c7f243a26f88af25356557efb9751aa496698664aa4fbac1db93b560c3187e43_prof);

    }

    public function getTemplateName()
    {
        return "printbooking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 69,  211 => 65,  207 => 64,  203 => 63,  197 => 60,  193 => 58,  185 => 56,  182 => 55,  174 => 53,  172 => 52,  168 => 50,  160 => 48,  157 => 47,  149 => 45,  146 => 44,  138 => 42,  136 => 41,  132 => 39,  124 => 37,  122 => 36,  116 => 35,  110 => 34,  106 => 32,  102 => 31,  77 => 11,  71 => 10,  65 => 9,  61 => 8,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'basebookinkprint.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2 class=\"text-align-center\">{{ singleevent.title }} con {{ singleevent.teacher }}</h2>
      <p class=\"text-align-center\">
      a <strong>{{ singleevent.place }}</strong> -
      da <strong>{{ singleevent.start|date('D d/m/Y') }} - {{ singleevent.start|date('H:i') }}</strong>
      a <strong>{{ singleevent.end|date('D d/m/Y') }} - {{ singleevent.end|date('H:i') }}</strong><br />
      {{ singleevent.coursetype }} di {{ singleevent.topic }}
      </p>
      <table width=\"100%\" border=\"0\" class=\"text-align-left scheda\" cellpadding=\"5\" cellspacing=\"0\">
      <tr>
        <th width=\"25%\">
          Nome<br />Telefono<br />Email
        </th>
        <th width=\"25%\">
          Da ...<br />Arriva<br />Riparte
        </th>
        <th width=\"10%\">
          Tipo utente<br />Acconto
        </th>
        <th width=\"30%\">
          Note
        </th>
        <th width=\"10%\">
        ultimo agg.<br />da
        </th>
      </tr>
      {% for entry in booking %}
      <tr>
        <td>
          <img src=\"{{ asset('bower_components/Ionicons/png/512/person.png') }}\" width=\"18\" height=\"18\" alt=\"Prenotato\" /><strong>{{ entry.name }}</strong><br />
          <img src=\"{{ asset('bower_components/Ionicons/png/512/ios7-telephone.png') }}\" width=\"18\" height=\"18\" alt=\"Telefono\" /> {{ entry.phone }}<br />
          {% if entry.email %}
          <img src=\"{{ asset('bower_components/Ionicons/png/512/email.png') }}\" width=\"18\" height=\"18\" alt=\"Email\" />{{ entry.email }}
          {% endif %}
        </td>
        <td>
          {% if entry.comefrom %}
          <img src=\"{{ asset('bower_components/Ionicons/png/512/home.png') }}\" width=\"18\" height=\"18\" alt=\"Arriva da\" /><strong>{{ entry.comefrom }}</strong><br />
          {% endif %}
          {% if entry.arrivale %}
          <img src=\"{{ asset('bower_components/Ionicons/png/512/log-in.png') }}\" width=\"18\" height=\"18\" alt=\"Arriva il\" />{{ entry.arrivale|date('d/m/Y H:i') }}<br />
          {% endif %}
          {% if entry.departure %}
          <img src=\"{{ asset('bower_components/Ionicons/png/512/log-out.png') }}\" width=\"18\" height=\"18\" alt=\"Riparte il\" />{{ entry.departure|date('d/m/Y H:i') }}<br />
          {% endif %}
        </td>
        <td>
          {% if entry.deposit %}
          <img src=\"{{ asset('bower_components/Ionicons/png/512/android-social.png') }}\" width=\"18\" height=\"18\" alt=\"Acconto\" /> {{ entry.usertype }}<br />
          {% endif %}
          {% if entry.deposit %}
          <img src=\"{{ asset('bower_components/Ionicons/png/512/cash.png') }}\" width=\"18\" height=\"18\" alt=\"Acconto\" /> {{ entry.deposit }} €
          {% endif %}
        </td>
        <td>
          {{ entry.note }}
        </td>
        <td>
          {{ entry.created|date('d/m/Y') }}<br />
          {{ entry.created|date('H:i:s') }}<br />
          {{ entry.admin }}
        </td>
      </tr>
      {% endfor %}
      </table>
    </div>
  </section>
</div>
{% endblock %}
", "printbooking.html.twig", "/var/www/html/symfonycalendar/templates/printbooking.html.twig");
    }
}
