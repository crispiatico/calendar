<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_27a6badc46544cfbb439380453ff4fdd970d2e98b5908f46d3dd19276315e81a extends Twig_Template
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
        $__internal_14a4408de36aeae880ab0b1c82a57cf98b5e8c8283169b37887fad33725e69d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a4408de36aeae880ab0b1c82a57cf98b5e8c8283169b37887fad33725e69d6->enter($__internal_14a4408de36aeae880ab0b1c82a57cf98b5e8c8283169b37887fad33725e69d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_32b2fc33418fd6c126a9d3f67d29ea8146aad1349bbf1581dcfba31273929087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b2fc33418fd6c126a9d3f67d29ea8146aad1349bbf1581dcfba31273929087->enter($__internal_32b2fc33418fd6c126a9d3f67d29ea8146aad1349bbf1581dcfba31273929087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_14a4408de36aeae880ab0b1c82a57cf98b5e8c8283169b37887fad33725e69d6->leave($__internal_14a4408de36aeae880ab0b1c82a57cf98b5e8c8283169b37887fad33725e69d6_prof);

        
        $__internal_32b2fc33418fd6c126a9d3f67d29ea8146aad1349bbf1581dcfba31273929087->leave($__internal_32b2fc33418fd6c126a9d3f67d29ea8146aad1349bbf1581dcfba31273929087_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
