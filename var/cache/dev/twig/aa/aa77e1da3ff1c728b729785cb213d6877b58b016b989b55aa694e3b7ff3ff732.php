<?php

/* newpassword.html.twig */
class __TwigTemplate_fa8dd6dbf499584503bf169bb3bcc064039c9a2853ba55b646ce11adf0cf33be extends Twig_Template
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
        $__internal_06d9db25e6585d10e72510c05e4be49e07d4d734e6b6a61992a24701264c3bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d9db25e6585d10e72510c05e4be49e07d4d734e6b6a61992a24701264c3bdb->enter($__internal_06d9db25e6585d10e72510c05e4be49e07d4d734e6b6a61992a24701264c3bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "newpassword.html.twig"));

        $__internal_7f93dc9c4ce6e4556fbb835cf5d66347bfa7565e2bd3936acdda6c54fb42327d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f93dc9c4ce6e4556fbb835cf5d66347bfa7565e2bd3936acdda6c54fb42327d->enter($__internal_7f93dc9c4ce6e4556fbb835cf5d66347bfa7565e2bd3936acdda6c54fb42327d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "newpassword.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'widget');
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_06d9db25e6585d10e72510c05e4be49e07d4d734e6b6a61992a24701264c3bdb->leave($__internal_06d9db25e6585d10e72510c05e4be49e07d4d734e6b6a61992a24701264c3bdb_prof);

        
        $__internal_7f93dc9c4ce6e4556fbb835cf5d66347bfa7565e2bd3936acdda6c54fb42327d->leave($__internal_7f93dc9c4ce6e4556fbb835cf5d66347bfa7565e2bd3936acdda6c54fb42327d_prof);

    }

    public function getTemplateName()
    {
        return "newpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
", "newpassword.html.twig", "/var/www/html/symfonycalendar/templates/newpassword.html.twig");
    }
}
