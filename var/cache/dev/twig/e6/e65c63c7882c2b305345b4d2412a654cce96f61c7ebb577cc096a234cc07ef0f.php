<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_cc90971da4af7bc087282e197bb8554a55bd11be3291ea147973f0db6d582f18 extends Twig_Template
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
        $__internal_a3a56b3561b6c895efbb75700644ee4dc926b154f8f19327fc8164540d72fa11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a56b3561b6c895efbb75700644ee4dc926b154f8f19327fc8164540d72fa11->enter($__internal_a3a56b3561b6c895efbb75700644ee4dc926b154f8f19327fc8164540d72fa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_f7acc8e79d97e506ca54bb728adc21b0a3b6793e80e151567241a00ea98e58ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7acc8e79d97e506ca54bb728adc21b0a3b6793e80e151567241a00ea98e58ca->enter($__internal_f7acc8e79d97e506ca54bb728adc21b0a3b6793e80e151567241a00ea98e58ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_a3a56b3561b6c895efbb75700644ee4dc926b154f8f19327fc8164540d72fa11->leave($__internal_a3a56b3561b6c895efbb75700644ee4dc926b154f8f19327fc8164540d72fa11_prof);

        
        $__internal_f7acc8e79d97e506ca54bb728adc21b0a3b6793e80e151567241a00ea98e58ca->leave($__internal_f7acc8e79d97e506ca54bb728adc21b0a3b6793e80e151567241a00ea98e58ca_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/html/symfonycalendar/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
