<?php

/* base.html.twig */
class __TwigTemplate_6cc9496676260c27aa402fd70e0992a789a6414fcf9e9c9afd92610b158dff72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fffcf1df095af052d065a8cf713c1e8020901e800d50e1109c3221b93d5833f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fffcf1df095af052d065a8cf713c1e8020901e800d50e1109c3221b93d5833f->enter($__internal_2fffcf1df095af052d065a8cf713c1e8020901e800d50e1109c3221b93d5833f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_50ec2de52d9bda52b018d04a7d9d077b184e66e6d5ccb8b38f60ad73dcaa2f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ec2de52d9bda52b018d04a7d9d077b184e66e6d5ccb8b38f60ad73dcaa2f81->enter($__internal_50ec2de52d9bda52b018d04a7d9d077b184e66e6d5ccb8b38f60ad73dcaa2f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <body class=\"hold-transition skin-blue sidebar-mini\">
    <div class=\"wrapper\">
      ";
        // line 21
        $this->displayBlock('navbar', $context, $blocks);
        // line 142
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 143
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 167
        echo "</div>
";
        
        $__internal_2fffcf1df095af052d065a8cf713c1e8020901e800d50e1109c3221b93d5833f->leave($__internal_2fffcf1df095af052d065a8cf713c1e8020901e800d50e1109c3221b93d5833f_prof);

        
        $__internal_50ec2de52d9bda52b018d04a7d9d077b184e66e6d5ccb8b38f60ad73dcaa2f81->leave($__internal_50ec2de52d9bda52b018d04a7d9d077b184e66e6d5ccb8b38f60ad73dcaa2f81_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c673cb2045fd73869a76d98717c4b425e00f28b66b8cac664ecb06dd2eff1176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c673cb2045fd73869a76d98717c4b425e00f28b66b8cac664ecb06dd2eff1176->enter($__internal_c673cb2045fd73869a76d98717c4b425e00f28b66b8cac664ecb06dd2eff1176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_625bb72b55f4f9c9a7eb6aea437f69a02bcfa0729da5dbfaa19b1758f8b3be06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625bb72b55f4f9c9a7eb6aea437f69a02bcfa0729da5dbfaa19b1758f8b3be06->enter($__internal_625bb72b55f4f9c9a7eb6aea437f69a02bcfa0729da5dbfaa19b1758f8b3be06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Calendar";
        
        $__internal_625bb72b55f4f9c9a7eb6aea437f69a02bcfa0729da5dbfaa19b1758f8b3be06->leave($__internal_625bb72b55f4f9c9a7eb6aea437f69a02bcfa0729da5dbfaa19b1758f8b3be06_prof);

        
        $__internal_c673cb2045fd73869a76d98717c4b425e00f28b66b8cac664ecb06dd2eff1176->leave($__internal_c673cb2045fd73869a76d98717c4b425e00f28b66b8cac664ecb06dd2eff1176_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3eff5869109e941ad85b68e4a3eb94e1614a2f5001356a6d2ae325d94e0b0dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eff5869109e941ad85b68e4a3eb94e1614a2f5001356a6d2ae325d94e0b0dbe->enter($__internal_3eff5869109e941ad85b68e4a3eb94e1614a2f5001356a6d2ae325d94e0b0dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ff7e6ca179fb599bf808ba4a8e2f4e2baf6803983fd1dcc500e4c6042085db92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7e6ca179fb599bf808ba4a8e2f4e2baf6803983fd1dcc500e4c6042085db92->enter($__internal_ff7e6ca179fb599bf808ba4a8e2f4e2baf6803983fd1dcc500e4c6042085db92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ff7e6ca179fb599bf808ba4a8e2f4e2baf6803983fd1dcc500e4c6042085db92->leave($__internal_ff7e6ca179fb599bf808ba4a8e2f4e2baf6803983fd1dcc500e4c6042085db92_prof);

        
        $__internal_3eff5869109e941ad85b68e4a3eb94e1614a2f5001356a6d2ae325d94e0b0dbe->leave($__internal_3eff5869109e941ad85b68e4a3eb94e1614a2f5001356a6d2ae325d94e0b0dbe_prof);

    }

    // line 21
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_63084ab426d30dbe8448d19629020874540554b10e3a36094cc8177a2e217ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63084ab426d30dbe8448d19629020874540554b10e3a36094cc8177a2e217ce9->enter($__internal_63084ab426d30dbe8448d19629020874540554b10e3a36094cc8177a2e217ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_09339b53fd70bd314a38fe26ce7dd6d5cddf78b931a3e00a6663e3c8ae9bf853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09339b53fd70bd314a38fe26ce7dd6d5cddf78b931a3e00a6663e3c8ae9bf853->enter($__internal_09339b53fd70bd314a38fe26ce7dd6d5cddf78b931a3e00a6663e3c8ae9bf853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 22
        echo "            <div class=\"wrapper\">
              <header class=\"main-header\">
                <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/\" class=\"logo\">
                  <span class=\"logo-mini\"><b>LCdL</b></span>
                  <span class=\"logo-lg\"><b>La Città della Luce</b></span>
                </a>
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                  <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                  </a>
                <div class=\"navbar-custom-menu\">
                  <ul class=\"nav navbar-nav\">
                    <li class=\"user user-menu\">
                      <a href=\"\">";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d - m -Y"), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"user user-menu\">
                      <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/user/profile\">ciao <strong>";
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
        echo "</strong> </a>
                    </li>
                    <li class=\"user user-menu\">
                      <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/logout\">esci</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </header>
<!-- Left side column. contains the logo and sidebar -->
<aside class=\"main-sidebar\">

<!-- sidebar: style can be found in sidebar.less -->
<section class=\"sidebar\">

  <!-- Sidebar Menu -->
  <ul class=\"sidebar-menu\" data-widget=\"tree\">
    <li class=\"treeview\">
      <li class=\"active\"><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 56, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/\"><i class=\"fa fa-dashboard\"></i> <span>Dashboard</span></a></li>
    </li>
    <li class=\"treeview\">
      <a href=\"#\"><i class=\"fa fa-calendar\"></i> <span>Evento</span>
        <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
      </a>
      <ul class=\"treeview-menu\">
        <li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 65, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/event\">Tutti gli eventi</a></li>
        <li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 66, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/event/new\">Nuovo evento</a></li>
      </ul>
    </li>
    <li class=\"treeview\">
      <a href=\"#\"><i class=\"fa fa-book\"></i> <span>Argomento</span>
        <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
      </a>
      <ul class=\"treeview-menu\">
        <li><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 76, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/topic\">Tutti gli argomenti</a></li>
        <li><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 77, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/topic/new\">Nuovo argomento</a></li>
      </ul>
    </li>
    <li class=\"treeview\">
      <a href=\"#\"><i class=\"fa fa-user-circle\"></i> <span>Maestro</span>
        <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
      </a>
      <ul class=\"treeview-menu\">
        <li><a href=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 87, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/teacher\">Tutti i maestri</a></li>
        <li><a href=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 88, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/teacher/new\">Nuovo maestro</a></li>
      </ul>
    </li>
    <li class=\"treeview\">
      <a href=\"#\"><i class=\"fa fa-database\"></i> <span>Tipo di corso</span>
        <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
      </a>
      <ul class=\"treeview-menu\">
        <li><a href=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 98, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/type\">Tutti i tipi di corso</a></li>
        <li><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 99, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/type/new\">Nuovo tipo di corso</a></li>
      </ul>
    </li>
    <li class=\"treeview\">
      <a href=\"#\"><i class=\"fa fa-map-marker\"></i> <span>Luogo</span>
        <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
      </a>
      <ul class=\"treeview-menu\">
        <li><a href=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 109, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/place\">Tutti i luohi</a></li>
        <li><a href=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 110, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/place/new\">Nuovo luogo</a></li>
      </ul>
    </li>
    <li class=\"treeview\">
      <a href=\"#\"><i class=\"fa fa-user\"></i> <span>Utente</span>
        <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
      </a>
      <ul class=\"treeview-menu\">
        <li><a href=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 120, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/user\">Tutti gli utenti</a></li>
        <li><a href=\"";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 121, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/user/new\">Nuovo utente</a></li>
      </ul>
    </li>
    <li class=\"treeview\">
      <a href=\"#\"><i class=\"fa fa-users\"></i> <span>Tipi di Utente</span>
        <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
      </a>
      <ul class=\"treeview-menu\">
        <li><a href=\"";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 131, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/usertype\">Tutti i tipi di utenti</a></li>
        <li><a href=\"";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 132, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/usertype/new\">Nuovo tipo di utente</a></li>
      </ul>
    </li>
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>
<div class=\"control-sidebar-bg\"></div>
";
        
        $__internal_09339b53fd70bd314a38fe26ce7dd6d5cddf78b931a3e00a6663e3c8ae9bf853->leave($__internal_09339b53fd70bd314a38fe26ce7dd6d5cddf78b931a3e00a6663e3c8ae9bf853_prof);

        
        $__internal_63084ab426d30dbe8448d19629020874540554b10e3a36094cc8177a2e217ce9->leave($__internal_63084ab426d30dbe8448d19629020874540554b10e3a36094cc8177a2e217ce9_prof);

    }

    // line 142
    public function block_body($context, array $blocks = array())
    {
        $__internal_22ac3cd2c4be9d105309d887dd03e40d9742040f10ab3b8fe61bf49a92c74384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ac3cd2c4be9d105309d887dd03e40d9742040f10ab3b8fe61bf49a92c74384->enter($__internal_22ac3cd2c4be9d105309d887dd03e40d9742040f10ab3b8fe61bf49a92c74384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ceda048a26a91422430173cc5749454380c1491599f5ceee1dfd1f2e4679a8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceda048a26a91422430173cc5749454380c1491599f5ceee1dfd1f2e4679a8e9->enter($__internal_ceda048a26a91422430173cc5749454380c1491599f5ceee1dfd1f2e4679a8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ceda048a26a91422430173cc5749454380c1491599f5ceee1dfd1f2e4679a8e9->leave($__internal_ceda048a26a91422430173cc5749454380c1491599f5ceee1dfd1f2e4679a8e9_prof);

        
        $__internal_22ac3cd2c4be9d105309d887dd03e40d9742040f10ab3b8fe61bf49a92c74384->leave($__internal_22ac3cd2c4be9d105309d887dd03e40d9742040f10ab3b8fe61bf49a92c74384_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f44805f27fb15f95ee703c3591867d8d4afe67643716598441d47cd23011b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f44805f27fb15f95ee703c3591867d8d4afe67643716598441d47cd23011b69->enter($__internal_5f44805f27fb15f95ee703c3591867d8d4afe67643716598441d47cd23011b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_80a97e2fd3e2a1a2130c53faf5d8b0b6e38bb9a2cf033c418f936410d3643a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a97e2fd3e2a1a2130c53faf5d8b0b6e38bb9a2cf033c418f936410d3643a59->enter($__internal_80a97e2fd3e2a1a2130c53faf5d8b0b6e38bb9a2cf033c418f936410d3643a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 144
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/moment/moment.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">
                \$('.confirmation').on('click', function () {
                    return confirm('Sei sicuro di voler cancellare ?');
                });
            </script>
            <script type=\"text/javascript\">
              \$('#form_start').daterangepicker({
                \"singleDatePicker\": true,
                \"startDate\": ";
        // line 158
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i"), "html", null, true);
        echo ",
                \"endDate\": ";
        // line 159
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i"), "html", null, true);
        echo ",
                \"drops\": \"up\"
                }, function(start, end, label) {
                console.log(\"New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')\");
              });
            </script>

        ";
        
        $__internal_80a97e2fd3e2a1a2130c53faf5d8b0b6e38bb9a2cf033c418f936410d3643a59->leave($__internal_80a97e2fd3e2a1a2130c53faf5d8b0b6e38bb9a2cf033c418f936410d3643a59_prof);

        
        $__internal_5f44805f27fb15f95ee703c3591867d8d4afe67643716598441d47cd23011b69->leave($__internal_5f44805f27fb15f95ee703c3591867d8d4afe67643716598441d47cd23011b69_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 159,  389 => 158,  377 => 149,  373 => 148,  369 => 147,  365 => 146,  361 => 145,  356 => 144,  347 => 143,  330 => 142,  310 => 132,  306 => 131,  293 => 121,  289 => 120,  276 => 110,  272 => 109,  259 => 99,  255 => 98,  242 => 88,  238 => 87,  225 => 77,  221 => 76,  208 => 66,  204 => 65,  192 => 56,  174 => 41,  166 => 38,  160 => 35,  146 => 24,  142 => 22,  133 => 21,  120 => 15,  116 => 14,  112 => 13,  108 => 12,  104 => 11,  99 => 10,  90 => 9,  72 => 7,  61 => 167,  58 => 143,  55 => 142,  53 => 21,  48 => 18,  46 => 9,  42 => 8,  38 => 7,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <title>{% block title %}Symfony Calendar{% endblock %}</title>
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
    <body class=\"hold-transition skin-blue sidebar-mini\">
    <div class=\"wrapper\">
      {% block navbar %}
            <div class=\"wrapper\">
              <header class=\"main-header\">
                <a href=\"{{ app.request.getBaseURL() }}/admin/\" class=\"logo\">
                  <span class=\"logo-mini\"><b>LCdL</b></span>
                  <span class=\"logo-lg\"><b>La Città della Luce</b></span>
                </a>
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                  <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                  </a>
                <div class=\"navbar-custom-menu\">
                  <ul class=\"nav navbar-nav\">
                    <li class=\"user user-menu\">
                      <a href=\"\">{{ 'now'|date('d - m -Y') }}</a>
                    </li>
                    <li class=\"user user-menu\">
                      <a href=\"{{ app.request.getBaseURL() }}/admin/user/profile\">ciao <strong>{{ username }}</strong> </a>
                    </li>
                    <li class=\"user user-menu\">
                      <a href=\"{{ app.request.getBaseURL() }}/logout\">esci</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </header>
<!-- Left side column. contains the logo and sidebar -->
<aside class=\"main-sidebar\">

<!-- sidebar: style can be found in sidebar.less -->
<section class=\"sidebar\">

  <!-- Sidebar Menu -->
  <ul class=\"sidebar-menu\" data-widget=\"tree\">
    <li class=\"treeview\">
      <li class=\"active\"><a href=\"{{ app.request.getBaseURL() }}/admin/\"><i class=\"fa fa-dashboard\"></i> <span>Dashboard</span></a></li>
    </li>
    <li class=\"treeview\">
      <a href=\"#\"><i class=\"fa fa-calendar\"></i> <span>Evento</span>
        <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
      </a>
      <ul class=\"treeview-menu\">
        <li><a href=\"{{ app.request.getBaseURL() }}/admin/event\">Tutti gli eventi</a></li>
        <li><a href=\"{{ app.request.getBaseURL() }}/admin/event/new\">Nuovo evento</a></li>
      </ul>
    </li>
    <li class=\"treeview\">
      <a href=\"#\"><i class=\"fa fa-book\"></i> <span>Argomento</span>
        <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
      </a>
      <ul class=\"treeview-menu\">
        <li><a href=\"{{ app.request.getBaseURL() }}/admin/topic\">Tutti gli argomenti</a></li>
        <li><a href=\"{{ app.request.getBaseURL() }}/admin/topic/new\">Nuovo argomento</a></li>
      </ul>
    </li>
    <li class=\"treeview\">
      <a href=\"#\"><i class=\"fa fa-user-circle\"></i> <span>Maestro</span>
        <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
      </a>
      <ul class=\"treeview-menu\">
        <li><a href=\"{{ app.request.getBaseURL() }}/admin/teacher\">Tutti i maestri</a></li>
        <li><a href=\"{{ app.request.getBaseURL() }}/admin/teacher/new\">Nuovo maestro</a></li>
      </ul>
    </li>
    <li class=\"treeview\">
      <a href=\"#\"><i class=\"fa fa-database\"></i> <span>Tipo di corso</span>
        <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
      </a>
      <ul class=\"treeview-menu\">
        <li><a href=\"{{ app.request.getBaseURL() }}/admin/type\">Tutti i tipi di corso</a></li>
        <li><a href=\"{{ app.request.getBaseURL() }}/admin/type/new\">Nuovo tipo di corso</a></li>
      </ul>
    </li>
    <li class=\"treeview\">
      <a href=\"#\"><i class=\"fa fa-map-marker\"></i> <span>Luogo</span>
        <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
      </a>
      <ul class=\"treeview-menu\">
        <li><a href=\"{{ app.request.getBaseURL() }}/admin/place\">Tutti i luohi</a></li>
        <li><a href=\"{{ app.request.getBaseURL() }}/admin/place/new\">Nuovo luogo</a></li>
      </ul>
    </li>
    <li class=\"treeview\">
      <a href=\"#\"><i class=\"fa fa-user\"></i> <span>Utente</span>
        <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
      </a>
      <ul class=\"treeview-menu\">
        <li><a href=\"{{ app.request.getBaseURL() }}/admin/user\">Tutti gli utenti</a></li>
        <li><a href=\"{{ app.request.getBaseURL() }}/admin/user/new\">Nuovo utente</a></li>
      </ul>
    </li>
    <li class=\"treeview\">
      <a href=\"#\"><i class=\"fa fa-users\"></i> <span>Tipi di Utente</span>
        <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
      </a>
      <ul class=\"treeview-menu\">
        <li><a href=\"{{ app.request.getBaseURL() }}/admin/usertype\">Tutti i tipi di utenti</a></li>
        <li><a href=\"{{ app.request.getBaseURL() }}/admin/usertype/new\">Nuovo tipo di utente</a></li>
      </ul>
    </li>
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>
<div class=\"control-sidebar-bg\"></div>
{% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('bower_components/jquery/dist/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}\"></script>
            <script src=\"{{ asset('bower_components/moment/moment.js') }}\"></script>
            <script src=\"{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>
            <script src=\"{{ asset('dist/js/adminlte.js') }}\"></script>
            <script type=\"text/javascript\">
                \$('.confirmation').on('click', function () {
                    return confirm('Sei sicuro di voler cancellare ?');
                });
            </script>
            <script type=\"text/javascript\">
              \$('#form_start').daterangepicker({
                \"singleDatePicker\": true,
                \"startDate\": {{ \"now\"|date(\"Y-m-d H:i\") }},
                \"endDate\": {{ \"now\"|date(\"Y-m-d H:i\") }},
                \"drops\": \"up\"
                }, function(start, end, label) {
                console.log(\"New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')\");
              });
            </script>

        {% endblock %}
</div>
", "base.html.twig", "/var/www/html/symfonycalendar/templates/base.html.twig");
    }
}
