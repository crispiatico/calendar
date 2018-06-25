<?php

/* dashboard.html.twig */
class __TwigTemplate_6d7b23e9081b793e171e95661a6b66cf205c22b340d6b3389195edc2b0856e7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard.html.twig", 1);
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
        $__internal_45083e46c2b7ffb6e631af36967daf583167718107bfbc5d0a682cceb6c32882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45083e46c2b7ffb6e631af36967daf583167718107bfbc5d0a682cceb6c32882->enter($__internal_45083e46c2b7ffb6e631af36967daf583167718107bfbc5d0a682cceb6c32882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        $__internal_f1e79f315036bd3867144a0b1af9a9163e3cd25c5af8dc3b6dee6f19078c4c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e79f315036bd3867144a0b1af9a9163e3cd25c5af8dc3b6dee6f19078c4c30->enter($__internal_f1e79f315036bd3867144a0b1af9a9163e3cd25c5af8dc3b6dee6f19078c4c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45083e46c2b7ffb6e631af36967daf583167718107bfbc5d0a682cceb6c32882->leave($__internal_45083e46c2b7ffb6e631af36967daf583167718107bfbc5d0a682cceb6c32882_prof);

        
        $__internal_f1e79f315036bd3867144a0b1af9a9163e3cd25c5af8dc3b6dee6f19078c4c30->leave($__internal_f1e79f315036bd3867144a0b1af9a9163e3cd25c5af8dc3b6dee6f19078c4c30_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_812a3ccb0af4a35c931770673c00322a7620295da8b44c6774199345e3af73f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812a3ccb0af4a35c931770673c00322a7620295da8b44c6774199345e3af73f7->enter($__internal_812a3ccb0af4a35c931770673c00322a7620295da8b44c6774199345e3af73f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad33538dd4bf8904f87a437516a1ead8d98ed4fc5cbdd6a67f5e641f2b0caa36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad33538dd4bf8904f87a437516a1ead8d98ed4fc5cbdd6a67f5e641f2b0caa36->enter($__internal_ad33538dd4bf8904f87a437516a1ead8d98ed4fc5cbdd6a67f5e641f2b0caa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Dashboard</h2>
      <div class=\"row\">
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
          <div class=\"info-box\">
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/event\">
              <span class=\"info-box-icon bg-green\"><i class=\"ion ion-ios-calendar-outline\"></i></span>
              <div class=\"info-box-content\">
                <span class=\"info-box-text\">Eventi</span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
          <div class=\"info-box\">
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/topic\">
              <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-book-outline\"></i></span>
              <div class=\"info-box-content\">
                <span class=\"info-box-text\">Argomenti</span>
              </div>
            </a>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
          <div class=\"info-box\">
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 32, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/teacher\">
              <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-contact-outline\"></i></span>
              <div class=\"info-box-content\">
                <span class=\"info-box-text\">Maestri</span>
              </div>
            </a>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
          <div class=\"info-box\">
            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 42, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/type\">
              <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-compose-outline\"></i></span>
              <div class=\"info-box-content\">
                <span class=\"info-box-text\">Tipi di corso</span>
              </div>
            </a>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
          <div class=\"info-box\">
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 52, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/place\">
              <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-navigate-outline\"></i></span>
              <div class=\"info-box-content\">
                <span class=\"info-box-text\">Luoghi</span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
          <div class=\"info-box\">
            <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 64, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/user\">
              <span class=\"info-box-icon bg-yellow\"><i class=\"ion ion-ios-person-outline\"></i></span>
              <div class=\"info-box-content\">
                <span class=\"info-box-text\">Utenti</span>
              </div>
            </a>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
          <div class=\"info-box\">
            <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 74, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/usertype\">
              <span class=\"info-box-icon bg-yellow\"><i class=\"ion ion-ios-people-outline\"></i></span>
              <div class=\"info-box-content\">
                <span class=\"info-box-text\">Tipi di utenti</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
";
        
        $__internal_ad33538dd4bf8904f87a437516a1ead8d98ed4fc5cbdd6a67f5e641f2b0caa36->leave($__internal_ad33538dd4bf8904f87a437516a1ead8d98ed4fc5cbdd6a67f5e641f2b0caa36_prof);

        
        $__internal_812a3ccb0af4a35c931770673c00322a7620295da8b44c6774199345e3af73f7->leave($__internal_812a3ccb0af4a35c931770673c00322a7620295da8b44c6774199345e3af73f7_prof);

    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 74,  127 => 64,  112 => 52,  99 => 42,  86 => 32,  73 => 22,  58 => 10,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Dashboard</h2>
      <div class=\"row\">
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
          <div class=\"info-box\">
            <a href=\"{{ app.request.getBaseURL() }}/admin/event\">
              <span class=\"info-box-icon bg-green\"><i class=\"ion ion-ios-calendar-outline\"></i></span>
              <div class=\"info-box-content\">
                <span class=\"info-box-text\">Eventi</span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
          <div class=\"info-box\">
            <a href=\"{{ app.request.getBaseURL() }}/admin/topic\">
              <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-book-outline\"></i></span>
              <div class=\"info-box-content\">
                <span class=\"info-box-text\">Argomenti</span>
              </div>
            </a>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
          <div class=\"info-box\">
            <a href=\"{{ app.request.getBaseURL() }}/admin/teacher\">
              <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-contact-outline\"></i></span>
              <div class=\"info-box-content\">
                <span class=\"info-box-text\">Maestri</span>
              </div>
            </a>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
          <div class=\"info-box\">
            <a href=\"{{ app.request.getBaseURL() }}/admin/type\">
              <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-compose-outline\"></i></span>
              <div class=\"info-box-content\">
                <span class=\"info-box-text\">Tipi di corso</span>
              </div>
            </a>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
          <div class=\"info-box\">
            <a href=\"{{ app.request.getBaseURL() }}/admin/place\">
              <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-navigate-outline\"></i></span>
              <div class=\"info-box-content\">
                <span class=\"info-box-text\">Luoghi</span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
          <div class=\"info-box\">
            <a href=\"{{ app.request.getBaseURL() }}/admin/user\">
              <span class=\"info-box-icon bg-yellow\"><i class=\"ion ion-ios-person-outline\"></i></span>
              <div class=\"info-box-content\">
                <span class=\"info-box-text\">Utenti</span>
              </div>
            </a>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
          <div class=\"info-box\">
            <a href=\"{{ app.request.getBaseURL() }}/admin/usertype\">
              <span class=\"info-box-icon bg-yellow\"><i class=\"ion ion-ios-people-outline\"></i></span>
              <div class=\"info-box-content\">
                <span class=\"info-box-text\">Tipi di utenti</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "dashboard.html.twig", "/var/www/html/symfonycalendar/templates/dashboard.html.twig");
    }
}
