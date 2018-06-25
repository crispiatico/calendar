<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_b1b0262a0eb78daeb090cfc95422da3be3e092559d4d00f5c468c5393546dad8 extends Twig_Template
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
        $__internal_21f594b57ddd2067196c4d1a3ae7b4ff84d5fa6a9841e46978ef24602c66e703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f594b57ddd2067196c4d1a3ae7b4ff84d5fa6a9841e46978ef24602c66e703->enter($__internal_21f594b57ddd2067196c4d1a3ae7b4ff84d5fa6a9841e46978ef24602c66e703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_778ed7ce65bba908c30fb2ef3bd8cf48491f4885ef37078d7966a530b89e752f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778ed7ce65bba908c30fb2ef3bd8cf48491f4885ef37078d7966a530b89e752f->enter($__internal_778ed7ce65bba908c30fb2ef3bd8cf48491f4885ef37078d7966a530b89e752f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_21f594b57ddd2067196c4d1a3ae7b4ff84d5fa6a9841e46978ef24602c66e703->leave($__internal_21f594b57ddd2067196c4d1a3ae7b4ff84d5fa6a9841e46978ef24602c66e703_prof);

        
        $__internal_778ed7ce65bba908c30fb2ef3bd8cf48491f4885ef37078d7966a530b89e752f->leave($__internal_778ed7ce65bba908c30fb2ef3bd8cf48491f4885ef37078d7966a530b89e752f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
