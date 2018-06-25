<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d1254cd3eb26a1055a9b2f2fdd8d486a0445876481741ea7aa8d16034c8c4e50 extends Twig_Template
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
        $__internal_4a35e9a55ea1c5f60f4f217018b9b811f60e25059f14586cd7a11369a70d4509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a35e9a55ea1c5f60f4f217018b9b811f60e25059f14586cd7a11369a70d4509->enter($__internal_4a35e9a55ea1c5f60f4f217018b9b811f60e25059f14586cd7a11369a70d4509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_196a4b903aefeeb6ba037289346eef8877bf6b7cfd1ae4796897fdf6736cfd74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196a4b903aefeeb6ba037289346eef8877bf6b7cfd1ae4796897fdf6736cfd74->enter($__internal_196a4b903aefeeb6ba037289346eef8877bf6b7cfd1ae4796897fdf6736cfd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_4a35e9a55ea1c5f60f4f217018b9b811f60e25059f14586cd7a11369a70d4509->leave($__internal_4a35e9a55ea1c5f60f4f217018b9b811f60e25059f14586cd7a11369a70d4509_prof);

        
        $__internal_196a4b903aefeeb6ba037289346eef8877bf6b7cfd1ae4796897fdf6736cfd74->leave($__internal_196a4b903aefeeb6ba037289346eef8877bf6b7cfd1ae4796897fdf6736cfd74_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
