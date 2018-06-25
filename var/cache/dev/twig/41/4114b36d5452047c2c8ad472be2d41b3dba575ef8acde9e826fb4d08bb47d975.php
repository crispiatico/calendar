<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_1b53f895433dd47efbf206228d42433e4e256d56c2d2719dbcbcda1014585688 extends Twig_Template
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
        $__internal_8b6d8d7c384accccfe30fe53e43ae5eb688687df7b820e95d0ff9863a88aea58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6d8d7c384accccfe30fe53e43ae5eb688687df7b820e95d0ff9863a88aea58->enter($__internal_8b6d8d7c384accccfe30fe53e43ae5eb688687df7b820e95d0ff9863a88aea58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_4962220a659bda5b02dc738e8b5fe453e819f17af6504ce22007b95f5c29ef4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4962220a659bda5b02dc738e8b5fe453e819f17af6504ce22007b95f5c29ef4f->enter($__internal_4962220a659bda5b02dc738e8b5fe453e819f17af6504ce22007b95f5c29ef4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_8b6d8d7c384accccfe30fe53e43ae5eb688687df7b820e95d0ff9863a88aea58->leave($__internal_8b6d8d7c384accccfe30fe53e43ae5eb688687df7b820e95d0ff9863a88aea58_prof);

        
        $__internal_4962220a659bda5b02dc738e8b5fe453e819f17af6504ce22007b95f5c29ef4f->leave($__internal_4962220a659bda5b02dc738e8b5fe453e819f17af6504ce22007b95f5c29ef4f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
