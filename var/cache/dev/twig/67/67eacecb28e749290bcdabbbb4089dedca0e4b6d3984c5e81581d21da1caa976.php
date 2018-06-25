<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_c73cd18df4cdd258629fd029a23188cc2ac3447e0817e745bdb6f0ee04d88c83 extends Twig_Template
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
        $__internal_93dded2cd8ab9ce814fe12ca6f61e117784034c0db7c154b5230480540d6894e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93dded2cd8ab9ce814fe12ca6f61e117784034c0db7c154b5230480540d6894e->enter($__internal_93dded2cd8ab9ce814fe12ca6f61e117784034c0db7c154b5230480540d6894e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_c3b507709e80611e02ea605c82a37cf5a6f7ed18b2e491752f207c61f852ba6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b507709e80611e02ea605c82a37cf5a6f7ed18b2e491752f207c61f852ba6b->enter($__internal_c3b507709e80611e02ea605c82a37cf5a6f7ed18b2e491752f207c61f852ba6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_93dded2cd8ab9ce814fe12ca6f61e117784034c0db7c154b5230480540d6894e->leave($__internal_93dded2cd8ab9ce814fe12ca6f61e117784034c0db7c154b5230480540d6894e_prof);

        
        $__internal_c3b507709e80611e02ea605c82a37cf5a6f7ed18b2e491752f207c61f852ba6b->leave($__internal_c3b507709e80611e02ea605c82a37cf5a6f7ed18b2e491752f207c61f852ba6b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
