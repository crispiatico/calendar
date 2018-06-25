<?php

/* basebookinkprint.html.twig */
class __TwigTemplate_063da10de8581348c8378c2ef57b579affcc4046bd1c75648e1fd667238cbf4e extends Twig_Template
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
        $__internal_0171ce51ae2a86754b5524e285c9da0465d51af9c8ab7982b2c0e36cd6ad7a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0171ce51ae2a86754b5524e285c9da0465d51af9c8ab7982b2c0e36cd6ad7a0f->enter($__internal_0171ce51ae2a86754b5524e285c9da0465d51af9c8ab7982b2c0e36cd6ad7a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basebookinkprint.html.twig"));

        $__internal_fd3d651ae6880fff8d7c04e1d32ce65c1a5e322e09d6cc4b1de811a6c8d2fc8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3d651ae6880fff8d7c04e1d32ce65c1a5e322e09d6cc4b1de811a6c8d2fc8d->enter($__internal_fd3d651ae6880fff8d7c04e1d32ce65c1a5e322e09d6cc4b1de811a6c8d2fc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basebookinkprint.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("files/immagini/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
      ";
        // line 12
        $this->displayBlock('navbar', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_0171ce51ae2a86754b5524e285c9da0465d51af9c8ab7982b2c0e36cd6ad7a0f->leave($__internal_0171ce51ae2a86754b5524e285c9da0465d51af9c8ab7982b2c0e36cd6ad7a0f_prof);

        
        $__internal_fd3d651ae6880fff8d7c04e1d32ce65c1a5e322e09d6cc4b1de811a6c8d2fc8d->leave($__internal_fd3d651ae6880fff8d7c04e1d32ce65c1a5e322e09d6cc4b1de811a6c8d2fc8d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_020c7718cb4a8ba7f3ceec97e8e46c3944fafcacdd49fbbd764cefbf40fac36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020c7718cb4a8ba7f3ceec97e8e46c3944fafcacdd49fbbd764cefbf40fac36a->enter($__internal_020c7718cb4a8ba7f3ceec97e8e46c3944fafcacdd49fbbd764cefbf40fac36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79d049011960aa0de86c45207fafff032af519cf9eb3650dd32dfcc8087c8403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d049011960aa0de86c45207fafff032af519cf9eb3650dd32dfcc8087c8403->enter($__internal_79d049011960aa0de86c45207fafff032af519cf9eb3650dd32dfcc8087c8403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Stampa prenotazioni - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 5, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo " con ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 5, $this->getSourceContext()); })()), "teacher", array()), "html", null, true);
        
        $__internal_79d049011960aa0de86c45207fafff032af519cf9eb3650dd32dfcc8087c8403->leave($__internal_79d049011960aa0de86c45207fafff032af519cf9eb3650dd32dfcc8087c8403_prof);

        
        $__internal_020c7718cb4a8ba7f3ceec97e8e46c3944fafcacdd49fbbd764cefbf40fac36a->leave($__internal_020c7718cb4a8ba7f3ceec97e8e46c3944fafcacdd49fbbd764cefbf40fac36a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f5056463576dc6db87e07c11685be8d0befb5f17832b1bb67d505c9c403356ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5056463576dc6db87e07c11685be8d0befb5f17832b1bb67d505c9c403356ab->enter($__internal_f5056463576dc6db87e07c11685be8d0befb5f17832b1bb67d505c9c403356ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_33b9deafbee6f77956af377f935f42adbfef6e8d1662167f1926a0e018cc4146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b9deafbee6f77956af377f935f42adbfef6e8d1662167f1926a0e018cc4146->enter($__internal_33b9deafbee6f77956af377f935f42adbfef6e8d1662167f1926a0e018cc4146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/front.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_33b9deafbee6f77956af377f935f42adbfef6e8d1662167f1926a0e018cc4146->leave($__internal_33b9deafbee6f77956af377f935f42adbfef6e8d1662167f1926a0e018cc4146_prof);

        
        $__internal_f5056463576dc6db87e07c11685be8d0befb5f17832b1bb67d505c9c403356ab->leave($__internal_f5056463576dc6db87e07c11685be8d0befb5f17832b1bb67d505c9c403356ab_prof);

    }

    // line 12
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_712f26e17ff438b5ed85d7ec28d3022cf3e204e88404556505dfb621d5af8f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712f26e17ff438b5ed85d7ec28d3022cf3e204e88404556505dfb621d5af8f06->enter($__internal_712f26e17ff438b5ed85d7ec28d3022cf3e204e88404556505dfb621d5af8f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_1c4bcfc08847dea259e28d1530e928d8ce97545e95a280a588b0db59843d0181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c4bcfc08847dea259e28d1530e928d8ce97545e95a280a588b0db59843d0181->enter($__internal_1c4bcfc08847dea259e28d1530e928d8ce97545e95a280a588b0db59843d0181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 13
        echo "      ";
        
        $__internal_1c4bcfc08847dea259e28d1530e928d8ce97545e95a280a588b0db59843d0181->leave($__internal_1c4bcfc08847dea259e28d1530e928d8ce97545e95a280a588b0db59843d0181_prof);

        
        $__internal_712f26e17ff438b5ed85d7ec28d3022cf3e204e88404556505dfb621d5af8f06->leave($__internal_712f26e17ff438b5ed85d7ec28d3022cf3e204e88404556505dfb621d5af8f06_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_799974113aaa05e5ab5f55cc65c89dc089045f1cdfd8738669ae95f44eec767a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799974113aaa05e5ab5f55cc65c89dc089045f1cdfd8738669ae95f44eec767a->enter($__internal_799974113aaa05e5ab5f55cc65c89dc089045f1cdfd8738669ae95f44eec767a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42ba3e2138dbc1abf5a163bd2986869361d5a921299e129465b175881340afe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ba3e2138dbc1abf5a163bd2986869361d5a921299e129465b175881340afe2->enter($__internal_42ba3e2138dbc1abf5a163bd2986869361d5a921299e129465b175881340afe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_42ba3e2138dbc1abf5a163bd2986869361d5a921299e129465b175881340afe2->leave($__internal_42ba3e2138dbc1abf5a163bd2986869361d5a921299e129465b175881340afe2_prof);

        
        $__internal_799974113aaa05e5ab5f55cc65c89dc089045f1cdfd8738669ae95f44eec767a->leave($__internal_799974113aaa05e5ab5f55cc65c89dc089045f1cdfd8738669ae95f44eec767a_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_029a05b26d564d5e733a9ea19f7d0982fffa7955c21e0fd761377f20dd61ae10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029a05b26d564d5e733a9ea19f7d0982fffa7955c21e0fd761377f20dd61ae10->enter($__internal_029a05b26d564d5e733a9ea19f7d0982fffa7955c21e0fd761377f20dd61ae10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c8254e20e9372bcbb807533340eddc3dbdb59c7dec80658754020d0d2c679c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8254e20e9372bcbb807533340eddc3dbdb59c7dec80658754020d0d2c679c2b->enter($__internal_c8254e20e9372bcbb807533340eddc3dbdb59c7dec80658754020d0d2c679c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_c8254e20e9372bcbb807533340eddc3dbdb59c7dec80658754020d0d2c679c2b->leave($__internal_c8254e20e9372bcbb807533340eddc3dbdb59c7dec80658754020d0d2c679c2b_prof);

        
        $__internal_029a05b26d564d5e733a9ea19f7d0982fffa7955c21e0fd761377f20dd61ae10->leave($__internal_029a05b26d564d5e733a9ea19f7d0982fffa7955c21e0fd761377f20dd61ae10_prof);

    }

    public function getTemplateName()
    {
        return "basebookinkprint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 16,  148 => 15,  131 => 14,  121 => 13,  112 => 12,  99 => 7,  90 => 6,  69 => 5,  57 => 17,  54 => 15,  51 => 14,  49 => 12,  42 => 9,  40 => 6,  36 => 5,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Stampa prenotazioni - {{ singleevent.title }} con {{ singleevent.teacher }}{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('dist/css/front.css') }}\">
        {% endblock %}
        <link rel=\"shortcut icon\" href=\"{{ asset('files/immagini/favicon.ico') }}\" />
    </head>
    <body>
      {% block navbar %}
      {% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}
        {% endblock %}
    </body>
</html>
", "basebookinkprint.html.twig", "/var/www/html/symfonycalendar/templates/basebookinkprint.html.twig");
    }
}
