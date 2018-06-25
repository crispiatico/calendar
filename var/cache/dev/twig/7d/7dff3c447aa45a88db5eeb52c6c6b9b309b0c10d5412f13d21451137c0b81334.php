<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_57328a038793ff2c70ff7ee71c59aa337aabc5f775931b4cd55c945c9955e576 extends Twig_Template
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
        $__internal_7f7c9a11e581d52cacac9170279b6ac3c77cf73856b25bc812197bb1dc5226b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7c9a11e581d52cacac9170279b6ac3c77cf73856b25bc812197bb1dc5226b3->enter($__internal_7f7c9a11e581d52cacac9170279b6ac3c77cf73856b25bc812197bb1dc5226b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_0456f4e9c9d8b7b337e4699abb95c68d81bd57270ff6d505b4d70614e56e80df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0456f4e9c9d8b7b337e4699abb95c68d81bd57270ff6d505b4d70614e56e80df->enter($__internal_0456f4e9c9d8b7b337e4699abb95c68d81bd57270ff6d505b4d70614e56e80df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_7f7c9a11e581d52cacac9170279b6ac3c77cf73856b25bc812197bb1dc5226b3->leave($__internal_7f7c9a11e581d52cacac9170279b6ac3c77cf73856b25bc812197bb1dc5226b3_prof);

        
        $__internal_0456f4e9c9d8b7b337e4699abb95c68d81bd57270ff6d505b4d70614e56e80df->leave($__internal_0456f4e9c9d8b7b337e4699abb95c68d81bd57270ff6d505b4d70614e56e80df_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
", "@Twig/Exception/error.html.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bundle/Resources/views/Exception/error.html.twig");
    }
}
