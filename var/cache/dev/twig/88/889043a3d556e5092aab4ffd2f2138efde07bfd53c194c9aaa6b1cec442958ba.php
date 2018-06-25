<?php

/* recoverpassword.html.twig */
class __TwigTemplate_2cd44e8a2f1f29c5460756ed94b0362e17408a1b7f19b1ee3760a474fbd5dca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6c769382af2eecd1009d03b7738d85f8397b0a34fd4a65030861fc6f43e236e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c769382af2eecd1009d03b7738d85f8397b0a34fd4a65030861fc6f43e236e->enter($__internal_b6c769382af2eecd1009d03b7738d85f8397b0a34fd4a65030861fc6f43e236e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recoverpassword.html.twig"));

        $__internal_c880d1f14660da5d8b665a1f835c824546925edf4c115cc00250a2c9bf3e22f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c880d1f14660da5d8b665a1f835c824546925edf4c115cc00250a2c9bf3e22f7->enter($__internal_c880d1f14660da5d8b665a1f835c824546925edf4c115cc00250a2c9bf3e22f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recoverpassword.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("files/immagini/favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    </head>
    <body class=\"hold-transition login-page\">

      <div class=\"login-box\">
        <div class=\"login-logo\">
          <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("files/immagini/la-citta-della-luce-360.png"), "html", null, true);
        echo "\" alt=\"La Citt&agrave; della Luce\" border=\"0\">
        </div>
        <!-- /.login-logo -->
        <div class=\"login-box-body\">
          <p class=\"login-box-msg\">
            Per recuperare la password inserisci il tuo indirizzo email
          </p>
          <div class=\"row\">
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), 'form_end');
        echo "
          </div>
        </div>
      </div>
    </body>
</html>
";
        
        $__internal_b6c769382af2eecd1009d03b7738d85f8397b0a34fd4a65030861fc6f43e236e->leave($__internal_b6c769382af2eecd1009d03b7738d85f8397b0a34fd4a65030861fc6f43e236e_prof);

        
        $__internal_c880d1f14660da5d8b665a1f835c824546925edf4c115cc00250a2c9bf3e22f7->leave($__internal_c880d1f14660da5d8b665a1f835c824546925edf4c115cc00250a2c9bf3e22f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c26ddcd4e7f71152975e1609e746737ff236b2b73c17079e383cc2a38c9712ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26ddcd4e7f71152975e1609e746737ff236b2b73c17079e383cc2a38c9712ef->enter($__internal_c26ddcd4e7f71152975e1609e746737ff236b2b73c17079e383cc2a38c9712ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b77505957eb9633bbf12fcef536ceaa446ef4b5f8906c3067e4ca221221b5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b77505957eb9633bbf12fcef536ceaa446ef4b5f8906c3067e4ca221221b5aa->enter($__internal_8b77505957eb9633bbf12fcef536ceaa446ef4b5f8906c3067e4ca221221b5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Calendar | Log in";
        
        $__internal_8b77505957eb9633bbf12fcef536ceaa446ef4b5f8906c3067e4ca221221b5aa->leave($__internal_8b77505957eb9633bbf12fcef536ceaa446ef4b5f8906c3067e4ca221221b5aa_prof);

        
        $__internal_c26ddcd4e7f71152975e1609e746737ff236b2b73c17079e383cc2a38c9712ef->leave($__internal_c26ddcd4e7f71152975e1609e746737ff236b2b73c17079e383cc2a38c9712ef_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6116fe84024f403e3759a68d55ff5f79333e96cbfe836a70b245fb5058e1d015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6116fe84024f403e3759a68d55ff5f79333e96cbfe836a70b245fb5058e1d015->enter($__internal_6116fe84024f403e3759a68d55ff5f79333e96cbfe836a70b245fb5058e1d015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3f3950d80130cf62f03b2872cadf894f23b4fee37efc4c4aa01677a0a4d89470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f3950d80130cf62f03b2872cadf894f23b4fee37efc4c4aa01677a0a4d89470->enter($__internal_3f3950d80130cf62f03b2872cadf894f23b4fee37efc4c4aa01677a0a4d89470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/custom.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
        ";
        
        $__internal_3f3950d80130cf62f03b2872cadf894f23b4fee37efc4c4aa01677a0a4d89470->leave($__internal_3f3950d80130cf62f03b2872cadf894f23b4fee37efc4c4aa01677a0a4d89470_prof);

        
        $__internal_6116fe84024f403e3759a68d55ff5f79333e96cbfe836a70b245fb5058e1d015->leave($__internal_6116fe84024f403e3759a68d55ff5f79333e96cbfe836a70b245fb5058e1d015_prof);

    }

    public function getTemplateName()
    {
        return "recoverpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 15,  132 => 14,  128 => 13,  124 => 12,  120 => 11,  115 => 10,  106 => 9,  88 => 7,  71 => 33,  67 => 32,  63 => 31,  52 => 23,  45 => 18,  43 => 9,  39 => 8,  35 => 7,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <title>{% block title %}Symfony Calendar | Log in{% endblock %}</title>
        <link rel=\"shortcut icon\" href=\"{{ asset('files/immagini/favicon.ico') }}\" />
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('dist/css/AdminLTE.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('dist/css/skins/skin-blue.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('dist/css/custom.css') }}\">
            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
        {% endblock %}
    </head>
    <body class=\"hold-transition login-page\">

      <div class=\"login-box\">
        <div class=\"login-logo\">
          <img src=\"{{ asset('files/immagini/la-citta-della-luce-360.png') }}\" alt=\"La Citt&agrave; della Luce\" border=\"0\">
        </div>
        <!-- /.login-logo -->
        <div class=\"login-box-body\">
          <p class=\"login-box-msg\">
            Per recuperare la password inserisci il tuo indirizzo email
          </p>
          <div class=\"row\">
            {{ form_start(form) }}
            {{ form_widget(form) }}
            {{ form_end(form) }}
          </div>
        </div>
      </div>
    </body>
</html>
", "recoverpassword.html.twig", "/var/www/html/symfonycalendar/templates/recoverpassword.html.twig");
    }
}
