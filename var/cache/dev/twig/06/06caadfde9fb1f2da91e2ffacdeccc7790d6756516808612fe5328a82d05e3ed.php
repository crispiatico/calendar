<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_ee4602680b1abaa491d9700b1521e934f5e26d4212ccc7f1d8021f84fee33442 extends Twig_Template
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
        $__internal_7dd89433609b59e520fe2c4ed4dfdf4178bc6323eac644fc052cf4cb6330d726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd89433609b59e520fe2c4ed4dfdf4178bc6323eac644fc052cf4cb6330d726->enter($__internal_7dd89433609b59e520fe2c4ed4dfdf4178bc6323eac644fc052cf4cb6330d726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_680b9ea5f6ea70d9259db056ae31f2e6b47bcf07dcf29a7d3e4b7dd32d2518a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_680b9ea5f6ea70d9259db056ae31f2e6b47bcf07dcf29a7d3e4b7dd32d2518a6->enter($__internal_680b9ea5f6ea70d9259db056ae31f2e6b47bcf07dcf29a7d3e4b7dd32d2518a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_7dd89433609b59e520fe2c4ed4dfdf4178bc6323eac644fc052cf4cb6330d726->leave($__internal_7dd89433609b59e520fe2c4ed4dfdf4178bc6323eac644fc052cf4cb6330d726_prof);

        
        $__internal_680b9ea5f6ea70d9259db056ae31f2e6b47bcf07dcf29a7d3e4b7dd32d2518a6->leave($__internal_680b9ea5f6ea70d9259db056ae31f2e6b47bcf07dcf29a7d3e4b7dd32d2518a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
