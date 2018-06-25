<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9c623d38f42b4347272e5cb27788bed7156bab7ab16ce48209de02ad87e10ad6 extends Twig_Template
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
        $__internal_1e0865b44581197dcfaa2a475db7cbe7d63c8fb630e62b1aa5474e86588f2ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0865b44581197dcfaa2a475db7cbe7d63c8fb630e62b1aa5474e86588f2ad0->enter($__internal_1e0865b44581197dcfaa2a475db7cbe7d63c8fb630e62b1aa5474e86588f2ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_de653e1d8dc43b7428f6f4733cbde56608febf27fbd16be4699943c71bddad65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de653e1d8dc43b7428f6f4733cbde56608febf27fbd16be4699943c71bddad65->enter($__internal_de653e1d8dc43b7428f6f4733cbde56608febf27fbd16be4699943c71bddad65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1e0865b44581197dcfaa2a475db7cbe7d63c8fb630e62b1aa5474e86588f2ad0->leave($__internal_1e0865b44581197dcfaa2a475db7cbe7d63c8fb630e62b1aa5474e86588f2ad0_prof);

        
        $__internal_de653e1d8dc43b7428f6f4733cbde56608febf27fbd16be4699943c71bddad65->leave($__internal_de653e1d8dc43b7428f6f4733cbde56608febf27fbd16be4699943c71bddad65_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
