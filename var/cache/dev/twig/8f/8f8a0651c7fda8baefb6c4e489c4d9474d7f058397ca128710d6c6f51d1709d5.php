<?php

/* user.html.twig */
class __TwigTemplate_fdd5670c5145f02d8fbbfb7147654958e0ccdb5e851922fd5dd615af83059ac3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user.html.twig", 1);
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
        $__internal_e3881b3dad02b4478ecf221901fd439af876c16e15c6c699be9693778972f05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3881b3dad02b4478ecf221901fd439af876c16e15c6c699be9693778972f05a->enter($__internal_e3881b3dad02b4478ecf221901fd439af876c16e15c6c699be9693778972f05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user.html.twig"));

        $__internal_08164bb33a68c5b70b2f35af48fc39ab9dcc8c11e3322c0896c7cc85f57442a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08164bb33a68c5b70b2f35af48fc39ab9dcc8c11e3322c0896c7cc85f57442a2->enter($__internal_08164bb33a68c5b70b2f35af48fc39ab9dcc8c11e3322c0896c7cc85f57442a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3881b3dad02b4478ecf221901fd439af876c16e15c6c699be9693778972f05a->leave($__internal_e3881b3dad02b4478ecf221901fd439af876c16e15c6c699be9693778972f05a_prof);

        
        $__internal_08164bb33a68c5b70b2f35af48fc39ab9dcc8c11e3322c0896c7cc85f57442a2->leave($__internal_08164bb33a68c5b70b2f35af48fc39ab9dcc8c11e3322c0896c7cc85f57442a2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c749b610e7abfe89a70fbe568a64624952a3468e548cd8391c43adc4c4cd714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c749b610e7abfe89a70fbe568a64624952a3468e548cd8391c43adc4c4cd714->enter($__internal_9c749b610e7abfe89a70fbe568a64624952a3468e548cd8391c43adc4c4cd714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1072205a18eac99e43e0f7ae308b5da5478f1f29f264a4379b52c1b6a523477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1072205a18eac99e43e0f7ae308b5da5478f1f29f264a4379b52c1b6a523477->enter($__internal_e1072205a18eac99e43e0f7ae308b5da5478f1f29f264a4379b52c1b6a523477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h2>Crea un nuovo utente</h2>
      <div class=\"row\">
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
        
        $__internal_e1072205a18eac99e43e0f7ae308b5da5478f1f29f264a4379b52c1b6a523477->leave($__internal_e1072205a18eac99e43e0f7ae308b5da5478f1f29f264a4379b52c1b6a523477_prof);

        
        $__internal_9c749b610e7abfe89a70fbe568a64624952a3468e548cd8391c43adc4c4cd714->leave($__internal_9c749b610e7abfe89a70fbe568a64624952a3468e548cd8391c43adc4c4cd714_prof);

    }

    public function getTemplateName()
    {
        return "user.html.twig";
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
      <h2>Crea un nuovo utente</h2>
      <div class=\"row\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "user.html.twig", "/var/www/html/symfonycalendar/templates/user.html.twig");
    }
}
