<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_7f1e474718f999436373264738f0efecc749fe12e631901bbb63b1faea6d51c6 extends Twig_Template
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
        $__internal_41fb1575cd1afc420a35a1ad5e3adbcee4dae9315b02c1848014d91ebd8919a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41fb1575cd1afc420a35a1ad5e3adbcee4dae9315b02c1848014d91ebd8919a2->enter($__internal_41fb1575cd1afc420a35a1ad5e3adbcee4dae9315b02c1848014d91ebd8919a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_bd40fb903f9d47e9b91d61076dd1ff7daa07d2224585ee7bc0be85c0f36ccb0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd40fb903f9d47e9b91d61076dd1ff7daa07d2224585ee7bc0be85c0f36ccb0e->enter($__internal_bd40fb903f9d47e9b91d61076dd1ff7daa07d2224585ee7bc0be85c0f36ccb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_41fb1575cd1afc420a35a1ad5e3adbcee4dae9315b02c1848014d91ebd8919a2->leave($__internal_41fb1575cd1afc420a35a1ad5e3adbcee4dae9315b02c1848014d91ebd8919a2_prof);

        
        $__internal_bd40fb903f9d47e9b91d61076dd1ff7daa07d2224585ee7bc0be85c0f36ccb0e->leave($__internal_bd40fb903f9d47e9b91d61076dd1ff7daa07d2224585ee7bc0be85c0f36ccb0e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
