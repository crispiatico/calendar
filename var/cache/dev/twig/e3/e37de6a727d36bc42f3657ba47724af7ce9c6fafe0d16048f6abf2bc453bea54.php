<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_c21a67597fb11837f23f7a54ea7b63795a34f88c6e0ae918ff4eedef8a950802 extends Twig_Template
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
        $__internal_106f5c186bce4a59dbe047631f144d1e5d67cef553cc857bf19dd93f5402c6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106f5c186bce4a59dbe047631f144d1e5d67cef553cc857bf19dd93f5402c6f0->enter($__internal_106f5c186bce4a59dbe047631f144d1e5d67cef553cc857bf19dd93f5402c6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_a9a001e063640d4fbdff88aa803a2f0bb6ba37425b669b942fe3840faedc4a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a001e063640d4fbdff88aa803a2f0bb6ba37425b669b942fe3840faedc4a7f->enter($__internal_a9a001e063640d4fbdff88aa803a2f0bb6ba37425b669b942fe3840faedc4a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_106f5c186bce4a59dbe047631f144d1e5d67cef553cc857bf19dd93f5402c6f0->leave($__internal_106f5c186bce4a59dbe047631f144d1e5d67cef553cc857bf19dd93f5402c6f0_prof);

        
        $__internal_a9a001e063640d4fbdff88aa803a2f0bb6ba37425b669b942fe3840faedc4a7f->leave($__internal_a9a001e063640d4fbdff88aa803a2f0bb6ba37425b669b942fe3840faedc4a7f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
