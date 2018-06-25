<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_62992bacd76a2c8192adf8379742c9a11c8f693b1c725499d90dedda689208d2 extends Twig_Template
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
        $__internal_dc1551caaa6390c0bbb66d11e012603eb930e9ed54bd29c53db80ed097b3fcc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1551caaa6390c0bbb66d11e012603eb930e9ed54bd29c53db80ed097b3fcc3->enter($__internal_dc1551caaa6390c0bbb66d11e012603eb930e9ed54bd29c53db80ed097b3fcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_cbaf1ebd58219a88c5b7d87a2cac88d7359083047dac545c5dc2885f30f380a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbaf1ebd58219a88c5b7d87a2cac88d7359083047dac545c5dc2885f30f380a6->enter($__internal_cbaf1ebd58219a88c5b7d87a2cac88d7359083047dac545c5dc2885f30f380a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_dc1551caaa6390c0bbb66d11e012603eb930e9ed54bd29c53db80ed097b3fcc3->leave($__internal_dc1551caaa6390c0bbb66d11e012603eb930e9ed54bd29c53db80ed097b3fcc3_prof);

        
        $__internal_cbaf1ebd58219a88c5b7d87a2cac88d7359083047dac545c5dc2885f30f380a6->leave($__internal_cbaf1ebd58219a88c5b7d87a2cac88d7359083047dac545c5dc2885f30f380a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
