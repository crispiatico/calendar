<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_106f8e37b4c312cf30684d3e4932e24527cfbb60af2917a5739bf921ee708649 extends Twig_Template
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
        $__internal_5e7bc7aa3d191c34795daff793e73f0f93596eced3a24c18dcfc4bccecbdf914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7bc7aa3d191c34795daff793e73f0f93596eced3a24c18dcfc4bccecbdf914->enter($__internal_5e7bc7aa3d191c34795daff793e73f0f93596eced3a24c18dcfc4bccecbdf914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_a1a5330b0a927cd0b2d261a7ed47420a31e9f5f0ba311e526e4d5cfc5b056b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a5330b0a927cd0b2d261a7ed47420a31e9f5f0ba311e526e4d5cfc5b056b42->enter($__internal_a1a5330b0a927cd0b2d261a7ed47420a31e9f5f0ba311e526e4d5cfc5b056b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_5e7bc7aa3d191c34795daff793e73f0f93596eced3a24c18dcfc4bccecbdf914->leave($__internal_5e7bc7aa3d191c34795daff793e73f0f93596eced3a24c18dcfc4bccecbdf914_prof);

        
        $__internal_a1a5330b0a927cd0b2d261a7ed47420a31e9f5f0ba311e526e4d5cfc5b056b42->leave($__internal_a1a5330b0a927cd0b2d261a7ed47420a31e9f5f0ba311e526e4d5cfc5b056b42_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
