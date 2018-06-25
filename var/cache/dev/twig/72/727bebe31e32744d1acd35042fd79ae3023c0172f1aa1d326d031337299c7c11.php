<?php

/* email.html.twig */
class __TwigTemplate_a609a25b1a682d9478d57340dab0bf4c6cbc7682a7c951d551a22f0453340e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd60cbf66c585d764fa4bd2dc36407ced099dd14b03cb85b7fcf141686775e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd60cbf66c585d764fa4bd2dc36407ced099dd14b03cb85b7fcf141686775e67->enter($__internal_bd60cbf66c585d764fa4bd2dc36407ced099dd14b03cb85b7fcf141686775e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email.html.twig"));

        $__internal_232074945614075ffa119bbd52f2e5ff524e34bcca38a19e0496728cb38cf322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232074945614075ffa119bbd52f2e5ff524e34bcca38a19e0496728cb38cf322->enter($__internal_232074945614075ffa119bbd52f2e5ff524e34bcca38a19e0496728cb38cf322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email.html.twig"));

        // line 1
        echo "<h3>You did it! You registered!</h3>

Hi ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "! You're successfully registered.

";
        // line 6
        echo "To login, go to: <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("login");
        echo "\">...</a>.

Thanks!

";
        // line 11
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png")), "html", null, true);
        echo "\">
";
        
        $__internal_bd60cbf66c585d764fa4bd2dc36407ced099dd14b03cb85b7fcf141686775e67->leave($__internal_bd60cbf66c585d764fa4bd2dc36407ced099dd14b03cb85b7fcf141686775e67_prof);

        
        $__internal_232074945614075ffa119bbd52f2e5ff524e34bcca38a19e0496728cb38cf322->leave($__internal_232074945614075ffa119bbd52f2e5ff524e34bcca38a19e0496728cb38cf322_prof);

    }

    public function getTemplateName()
    {
        return "email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  34 => 6,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>You did it! You registered!</h3>

Hi {{ name }}! You're successfully registered.

{# example, assuming you have a route named \"login\" #}
To login, go to: <a href=\"{{ url('login') }}\">...</a>.

Thanks!

{# Makes an absolute URL to the /images/logo.png file #}
<img src=\"{{ absolute_url(asset('images/logo.png')) }}\">
", "email.html.twig", "/var/www/html/symfonycalendar/templates/email.html.twig");
    }
}
