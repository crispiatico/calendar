<?php

/* baseBK.html.twig */
class __TwigTemplate_a4122803d18b605e7af755b3955ebb3fa55ae5eb946772f9eae1a6183c446d4f extends Twig_Template
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
        $__internal_644daba773a0f3fcf898066e2aa7b54bf2011d956c733460388b2144a0cf75ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644daba773a0f3fcf898066e2aa7b54bf2011d956c733460388b2144a0cf75ef->enter($__internal_644daba773a0f3fcf898066e2aa7b54bf2011d956c733460388b2144a0cf75ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBK.html.twig"));

        $__internal_95b393909d892f26e2cdea682c64da8533d10a1d734746b45c4828cb50be801f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b393909d892f26e2cdea682c64da8533d10a1d734746b45c4828cb50be801f->enter($__internal_95b393909d892f26e2cdea682c64da8533d10a1d734746b45c4828cb50be801f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBK.html.twig"));

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
        // line 163
        echo "</div>
";
        
        $__internal_644daba773a0f3fcf898066e2aa7b54bf2011d956c733460388b2144a0cf75ef->leave($__internal_644daba773a0f3fcf898066e2aa7b54bf2011d956c733460388b2144a0cf75ef_prof);

        
        $__internal_95b393909d892f26e2cdea682c64da8533d10a1d734746b45c4828cb50be801f->leave($__internal_95b393909d892f26e2cdea682c64da8533d10a1d734746b45c4828cb50be801f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b31269a0babd5a67901df8ad63303a83b589e6493f51b059ebfc0d1ff8bc427b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31269a0babd5a67901df8ad63303a83b589e6493f51b059ebfc0d1ff8bc427b->enter($__internal_b31269a0babd5a67901df8ad63303a83b589e6493f51b059ebfc0d1ff8bc427b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c79bc2d6d30f07656909b4b23e5c98d767a2a3feb3ccb747634c4c059f41983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c79bc2d6d30f07656909b4b23e5c98d767a2a3feb3ccb747634c4c059f41983->enter($__internal_8c79bc2d6d30f07656909b4b23e5c98d767a2a3feb3ccb747634c4c059f41983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Calendar";
        
        $__internal_8c79bc2d6d30f07656909b4b23e5c98d767a2a3feb3ccb747634c4c059f41983->leave($__internal_8c79bc2d6d30f07656909b4b23e5c98d767a2a3feb3ccb747634c4c059f41983_prof);

        
        $__internal_b31269a0babd5a67901df8ad63303a83b589e6493f51b059ebfc0d1ff8bc427b->leave($__internal_b31269a0babd5a67901df8ad63303a83b589e6493f51b059ebfc0d1ff8bc427b_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d8a1cfad087d2e2b8516e95c706ecd5f8d3bcc76aea8d000b3e4530c2fbe403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8a1cfad087d2e2b8516e95c706ecd5f8d3bcc76aea8d000b3e4530c2fbe403->enter($__internal_5d8a1cfad087d2e2b8516e95c706ecd5f8d3bcc76aea8d000b3e4530c2fbe403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_643c3a723bc03d4ed4700164d22782f8e657981add860d1d59294d9bcf9ae0c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643c3a723bc03d4ed4700164d22782f8e657981add860d1d59294d9bcf9ae0c9->enter($__internal_643c3a723bc03d4ed4700164d22782f8e657981add860d1d59294d9bcf9ae0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_643c3a723bc03d4ed4700164d22782f8e657981add860d1d59294d9bcf9ae0c9->leave($__internal_643c3a723bc03d4ed4700164d22782f8e657981add860d1d59294d9bcf9ae0c9_prof);

        
        $__internal_5d8a1cfad087d2e2b8516e95c706ecd5f8d3bcc76aea8d000b3e4530c2fbe403->leave($__internal_5d8a1cfad087d2e2b8516e95c706ecd5f8d3bcc76aea8d000b3e4530c2fbe403_prof);

    }

    // line 21
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_c4956f022a06c408a4d5bcfe172c57fcdd097ca637074f5917d1f719bb592a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4956f022a06c408a4d5bcfe172c57fcdd097ca637074f5917d1f719bb592a62->enter($__internal_c4956f022a06c408a4d5bcfe172c57fcdd097ca637074f5917d1f719bb592a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_e26bf04259f587b81e062452d95ddaab06c67ebcb047e56dd4774c7457413c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e26bf04259f587b81e062452d95ddaab06c67ebcb047e56dd4774c7457413c01->enter($__internal_e26bf04259f587b81e062452d95ddaab06c67ebcb047e56dd4774c7457413c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_e26bf04259f587b81e062452d95ddaab06c67ebcb047e56dd4774c7457413c01->leave($__internal_e26bf04259f587b81e062452d95ddaab06c67ebcb047e56dd4774c7457413c01_prof);

        
        $__internal_c4956f022a06c408a4d5bcfe172c57fcdd097ca637074f5917d1f719bb592a62->leave($__internal_c4956f022a06c408a4d5bcfe172c57fcdd097ca637074f5917d1f719bb592a62_prof);

    }

    // line 142
    public function block_body($context, array $blocks = array())
    {
        $__internal_e471c48e198397282104b91551bbe4488bef06531d5451afde605a37aa450ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e471c48e198397282104b91551bbe4488bef06531d5451afde605a37aa450ed9->enter($__internal_e471c48e198397282104b91551bbe4488bef06531d5451afde605a37aa450ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40aa51e14dd81b44c70516dc3d9a1f8575b135d64c595a38cf5f8f8d0430bf53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40aa51e14dd81b44c70516dc3d9a1f8575b135d64c595a38cf5f8f8d0430bf53->enter($__internal_40aa51e14dd81b44c70516dc3d9a1f8575b135d64c595a38cf5f8f8d0430bf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_40aa51e14dd81b44c70516dc3d9a1f8575b135d64c595a38cf5f8f8d0430bf53->leave($__internal_40aa51e14dd81b44c70516dc3d9a1f8575b135d64c595a38cf5f8f8d0430bf53_prof);

        
        $__internal_e471c48e198397282104b91551bbe4488bef06531d5451afde605a37aa450ed9->leave($__internal_e471c48e198397282104b91551bbe4488bef06531d5451afde605a37aa450ed9_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_830551d911f94e0b1383b761ff6f522ffb53b7db24ddc36819635d19eda0cf92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830551d911f94e0b1383b761ff6f522ffb53b7db24ddc36819635d19eda0cf92->enter($__internal_830551d911f94e0b1383b761ff6f522ffb53b7db24ddc36819635d19eda0cf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_effca9ee4685cc0845e5420a7cabd0631e61dd00dcf9a61cf974c24e19ed659d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_effca9ee4685cc0845e5420a7cabd0631e61dd00dcf9a61cf974c24e19ed659d->enter($__internal_effca9ee4685cc0845e5420a7cabd0631e61dd00dcf9a61cf974c24e19ed659d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">
                \$('.confirmation').on('click', function () {
                    return confirm('Sei sicuro di voler cancellare ?');
                });
            </script>
            <script>
                \$(document).ready(function() {
                    // you may need to change this code if you are not using Bootstrap Datepicker
                    \$('.js-datepicker').datepicker({
                        format: 'yyyy-mm-dd'
                    });
                });
            </script>
        ";
        
        $__internal_effca9ee4685cc0845e5420a7cabd0631e61dd00dcf9a61cf974c24e19ed659d->leave($__internal_effca9ee4685cc0845e5420a7cabd0631e61dd00dcf9a61cf974c24e19ed659d_prof);

        
        $__internal_830551d911f94e0b1383b761ff6f522ffb53b7db24ddc36819635d19eda0cf92->leave($__internal_830551d911f94e0b1383b761ff6f522ffb53b7db24ddc36819635d19eda0cf92_prof);

    }

    public function getTemplateName()
    {
        return "baseBK.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 148,  369 => 147,  365 => 146,  361 => 145,  356 => 144,  347 => 143,  330 => 142,  310 => 132,  306 => 131,  293 => 121,  289 => 120,  276 => 110,  272 => 109,  259 => 99,  255 => 98,  242 => 88,  238 => 87,  225 => 77,  221 => 76,  208 => 66,  204 => 65,  192 => 56,  174 => 41,  166 => 38,  160 => 35,  146 => 24,  142 => 22,  133 => 21,  120 => 15,  116 => 14,  112 => 13,  108 => 12,  104 => 11,  99 => 10,  90 => 9,  72 => 7,  61 => 163,  58 => 143,  55 => 142,  53 => 21,  48 => 18,  46 => 9,  42 => 8,  38 => 7,  30 => 1,);
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
            <script src=\"{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>
            <script src=\"{{ asset('dist/js/adminlte.js') }}\"></script>
            <script type=\"text/javascript\">
                \$('.confirmation').on('click', function () {
                    return confirm('Sei sicuro di voler cancellare ?');
                });
            </script>
            <script>
                \$(document).ready(function() {
                    // you may need to change this code if you are not using Bootstrap Datepicker
                    \$('.js-datepicker').datepicker({
                        format: 'yyyy-mm-dd'
                    });
                });
            </script>
        {% endblock %}
</div>
", "baseBK.html.twig", "/var/www/html/symfonycalendar/templates/baseBK.html.twig");
    }
}
