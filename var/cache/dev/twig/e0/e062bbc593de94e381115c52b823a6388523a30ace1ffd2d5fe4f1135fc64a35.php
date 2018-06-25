<?php

/* login.html.twig */
class __TwigTemplate_86da9b3cb8b04fa0d789f54154f4beb8d1bfb813e94c334ce3c85c5e302bb40d extends Twig_Template
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
        $__internal_911b9db30eae4767e554b9b180ee0103016529a8907ef2324ea1bfb52b3ccb46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911b9db30eae4767e554b9b180ee0103016529a8907ef2324ea1bfb52b3ccb46->enter($__internal_911b9db30eae4767e554b9b180ee0103016529a8907ef2324ea1bfb52b3ccb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_212fa60162c2be9f5eb79004f1d0f8bb5523fcea903b65ecc6657fa5b20b0096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_212fa60162c2be9f5eb79004f1d0f8bb5523fcea903b65ecc6657fa5b20b0096->enter($__internal_212fa60162c2be9f5eb79004f1d0f8bb5523fcea903b65ecc6657fa5b20b0096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

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
            ";
        // line 28
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 28, $this->getSourceContext()); })())) {
            // line 29
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 29, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 29, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 31
        echo "          </p>
          <form action=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
              <div class=\"form-group has-feedback\">
                <input class=\"form-control\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
              </div>
              <div class=\"form-group has-feedback\">
                <input class=\"form-control\" placeholder=\"Password\"type=\"password\" id=\"password\" name=\"_password\" />
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
              </div>
              <div class=\"row\">
                <div class=\"col-xs-8\">
                  <div>
                  </div>
                </div>
                <!-- /.col -->
                <div class=\"col-xs-4\">
                  <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">login</button>
                </div>
                <!-- /.col -->
              </div>

              <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/recoverpassword\">Ho dimenticato la password</a>

          </form>

        </div>
      </div>
    </body>
</html>  
";
        
        $__internal_911b9db30eae4767e554b9b180ee0103016529a8907ef2324ea1bfb52b3ccb46->leave($__internal_911b9db30eae4767e554b9b180ee0103016529a8907ef2324ea1bfb52b3ccb46_prof);

        
        $__internal_212fa60162c2be9f5eb79004f1d0f8bb5523fcea903b65ecc6657fa5b20b0096->leave($__internal_212fa60162c2be9f5eb79004f1d0f8bb5523fcea903b65ecc6657fa5b20b0096_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd618aebd65019918633d194baefed38e2ad3f825624d4a833f0d533d64c027d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd618aebd65019918633d194baefed38e2ad3f825624d4a833f0d533d64c027d->enter($__internal_cd618aebd65019918633d194baefed38e2ad3f825624d4a833f0d533d64c027d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7879c3868fe75fdd731f2b1882ab3eca7f0c251d09e102a8f29a6b7b35d5fb72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7879c3868fe75fdd731f2b1882ab3eca7f0c251d09e102a8f29a6b7b35d5fb72->enter($__internal_7879c3868fe75fdd731f2b1882ab3eca7f0c251d09e102a8f29a6b7b35d5fb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Calendar | Log in";
        
        $__internal_7879c3868fe75fdd731f2b1882ab3eca7f0c251d09e102a8f29a6b7b35d5fb72->leave($__internal_7879c3868fe75fdd731f2b1882ab3eca7f0c251d09e102a8f29a6b7b35d5fb72_prof);

        
        $__internal_cd618aebd65019918633d194baefed38e2ad3f825624d4a833f0d533d64c027d->leave($__internal_cd618aebd65019918633d194baefed38e2ad3f825624d4a833f0d533d64c027d_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_782524b450480958a776ea19f0f2f5565298565dd8969ae652d28dd9168aa204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782524b450480958a776ea19f0f2f5565298565dd8969ae652d28dd9168aa204->enter($__internal_782524b450480958a776ea19f0f2f5565298565dd8969ae652d28dd9168aa204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6e7ec9b3fc06d1636a40083280bc2cb81473bc03b073c7749754ea413cb5517b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7ec9b3fc06d1636a40083280bc2cb81473bc03b073c7749754ea413cb5517b->enter($__internal_6e7ec9b3fc06d1636a40083280bc2cb81473bc03b073c7749754ea413cb5517b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6e7ec9b3fc06d1636a40083280bc2cb81473bc03b073c7749754ea413cb5517b->leave($__internal_6e7ec9b3fc06d1636a40083280bc2cb81473bc03b073c7749754ea413cb5517b_prof);

        
        $__internal_782524b450480958a776ea19f0f2f5565298565dd8969ae652d28dd9168aa204->leave($__internal_782524b450480958a776ea19f0f2f5565298565dd8969ae652d28dd9168aa204_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 15,  161 => 14,  157 => 13,  153 => 12,  149 => 11,  144 => 10,  135 => 9,  117 => 7,  98 => 53,  76 => 34,  71 => 32,  68 => 31,  62 => 29,  60 => 28,  52 => 23,  45 => 18,  43 => 9,  39 => 8,  35 => 7,  27 => 1,);
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
            {% if error %}
            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}
          </p>
          <form action=\"{{ path('login') }}\" method=\"post\">
              <div class=\"form-group has-feedback\">
                <input class=\"form-control\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
              </div>
              <div class=\"form-group has-feedback\">
                <input class=\"form-control\" placeholder=\"Password\"type=\"password\" id=\"password\" name=\"_password\" />
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
              </div>
              <div class=\"row\">
                <div class=\"col-xs-8\">
                  <div>
                  </div>
                </div>
                <!-- /.col -->
                <div class=\"col-xs-4\">
                  <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">login</button>
                </div>
                <!-- /.col -->
              </div>

              <a href=\"{{ app.request.getBaseURL() }}/recoverpassword\">Ho dimenticato la password</a>

          </form>

        </div>
      </div>
    </body>
</html>  
", "login.html.twig", "/var/www/html/symfonycalendar/templates/login.html.twig");
    }
}
