<?php

/* usertypemodify.html.twig */
class __TwigTemplate_1cb4010955094b59b571cd6d1773f7494b9333fe7b101099895d066498d6ecad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usertypemodify.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44ca4f54be97acdf0860e164e866cd336ef4457cb1852a8c4833068db527fdc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ca4f54be97acdf0860e164e866cd336ef4457cb1852a8c4833068db527fdc3->enter($__internal_44ca4f54be97acdf0860e164e866cd336ef4457cb1852a8c4833068db527fdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usertypemodify.html.twig"));

        $__internal_414a2a3b771430bc8ac24f00a27d0530e0e90ec8217bef5aced0f916560361b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414a2a3b771430bc8ac24f00a27d0530e0e90ec8217bef5aced0f916560361b4->enter($__internal_414a2a3b771430bc8ac24f00a27d0530e0e90ec8217bef5aced0f916560361b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usertypemodify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44ca4f54be97acdf0860e164e866cd336ef4457cb1852a8c4833068db527fdc3->leave($__internal_44ca4f54be97acdf0860e164e866cd336ef4457cb1852a8c4833068db527fdc3_prof);

        
        $__internal_414a2a3b771430bc8ac24f00a27d0530e0e90ec8217bef5aced0f916560361b4->leave($__internal_414a2a3b771430bc8ac24f00a27d0530e0e90ec8217bef5aced0f916560361b4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2d08146a8a260400fe0079da980373bcddf412f615b3fa68113e46639b6d9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d08146a8a260400fe0079da980373bcddf412f615b3fa68113e46639b6d9d1->enter($__internal_d2d08146a8a260400fe0079da980373bcddf412f615b3fa68113e46639b6d9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_175da3c6e3514495861eece6e9da73c5d345af2bb06378e9670eafc7f9326d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_175da3c6e3514495861eece6e9da73c5d345af2bb06378e9670eafc7f9326d69->enter($__internal_175da3c6e3514495861eece6e9da73c5d345af2bb06378e9670eafc7f9326d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Modifica un tipo di utente</h2>
      <div class=\"row\"  style = 'background-color: #fff'>
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'widget');
        echo "
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_end');
        echo "
      </div>
    </div>
  </section>
</div>
";
        
        $__internal_175da3c6e3514495861eece6e9da73c5d345af2bb06378e9670eafc7f9326d69->leave($__internal_175da3c6e3514495861eece6e9da73c5d345af2bb06378e9670eafc7f9326d69_prof);

        
        $__internal_d2d08146a8a260400fe0079da980373bcddf412f615b3fa68113e46639b6d9d1->leave($__internal_d2d08146a8a260400fe0079da980373bcddf412f615b3fa68113e46639b6d9d1_prof);

    }

    public function getTemplateName()
    {
        return "usertypemodify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  60 => 9,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Modifica un tipo di utente</h2>
      <div class=\"row\"  style = 'background-color: #fff'>
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "usertypemodify.html.twig", "/var/www/html/symfonycalendar/templates/usertypemodify.html.twig");
    }
}
