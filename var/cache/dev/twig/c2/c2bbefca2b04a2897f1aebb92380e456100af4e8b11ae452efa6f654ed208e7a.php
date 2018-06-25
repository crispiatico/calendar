<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e81bb7a9e4ce27e27ebee2774bc7392fe3db0c479cd63663822258b2aacb652b extends Twig_Template
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
        $__internal_a60640f015a1209deae3663aebe6a8b0601fa26dfc7632d75dc1fbed4ebcc090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60640f015a1209deae3663aebe6a8b0601fa26dfc7632d75dc1fbed4ebcc090->enter($__internal_a60640f015a1209deae3663aebe6a8b0601fa26dfc7632d75dc1fbed4ebcc090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_4043cb55436df69e1365713a3ee2e6503df22ebc49d0ccfbfac7e321f1482f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4043cb55436df69e1365713a3ee2e6503df22ebc49d0ccfbfac7e321f1482f8f->enter($__internal_4043cb55436df69e1365713a3ee2e6503df22ebc49d0ccfbfac7e321f1482f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_a60640f015a1209deae3663aebe6a8b0601fa26dfc7632d75dc1fbed4ebcc090->leave($__internal_a60640f015a1209deae3663aebe6a8b0601fa26dfc7632d75dc1fbed4ebcc090_prof);

        
        $__internal_4043cb55436df69e1365713a3ee2e6503df22ebc49d0ccfbfac7e321f1482f8f->leave($__internal_4043cb55436df69e1365713a3ee2e6503df22ebc49d0ccfbfac7e321f1482f8f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
