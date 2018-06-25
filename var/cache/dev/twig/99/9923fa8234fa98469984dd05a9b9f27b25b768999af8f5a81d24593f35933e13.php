<?php

/* useredit.html.twig */
class __TwigTemplate_006cb4441674c3c518ac2de8eb6c74b78790b5f3866e76281fd73d22a399df7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "useredit.html.twig", 1);
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
        $__internal_65659ea096de0b9b0f2a3d9fd50c07eb45580031c8cc58a3590f0ef34c77f707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65659ea096de0b9b0f2a3d9fd50c07eb45580031c8cc58a3590f0ef34c77f707->enter($__internal_65659ea096de0b9b0f2a3d9fd50c07eb45580031c8cc58a3590f0ef34c77f707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "useredit.html.twig"));

        $__internal_cf9e6e4fa019751a092cc6f8640d252d7abe4a6366d1b074a561034cc340783d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf9e6e4fa019751a092cc6f8640d252d7abe4a6366d1b074a561034cc340783d->enter($__internal_cf9e6e4fa019751a092cc6f8640d252d7abe4a6366d1b074a561034cc340783d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "useredit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65659ea096de0b9b0f2a3d9fd50c07eb45580031c8cc58a3590f0ef34c77f707->leave($__internal_65659ea096de0b9b0f2a3d9fd50c07eb45580031c8cc58a3590f0ef34c77f707_prof);

        
        $__internal_cf9e6e4fa019751a092cc6f8640d252d7abe4a6366d1b074a561034cc340783d->leave($__internal_cf9e6e4fa019751a092cc6f8640d252d7abe4a6366d1b074a561034cc340783d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c99211c188639174a6a5c18f7c36bbc0b47f1abadac382130fd03e56cf74be30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99211c188639174a6a5c18f7c36bbc0b47f1abadac382130fd03e56cf74be30->enter($__internal_c99211c188639174a6a5c18f7c36bbc0b47f1abadac382130fd03e56cf74be30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_032e8841282dbf09d5050cf4500efedbde3bb31a04ddc73010a3e0a140b7b654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032e8841282dbf09d5050cf4500efedbde3bb31a04ddc73010a3e0a140b7b654->enter($__internal_032e8841282dbf09d5050cf4500efedbde3bb31a04ddc73010a3e0a140b7b654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
<section class=\"content\">
<div class=\"container\">
<div class=\"row\">
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new Twig_Error_Runtime('Variable "forms" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 8
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["form"], 'form_start');
            echo "
";
            // line 9
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["form"], 'widget');
            echo "
";
            // line 10
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["form"], 'form_end');
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>
</div>
</section>
</div>
";
        
        $__internal_032e8841282dbf09d5050cf4500efedbde3bb31a04ddc73010a3e0a140b7b654->leave($__internal_032e8841282dbf09d5050cf4500efedbde3bb31a04ddc73010a3e0a140b7b654_prof);

        
        $__internal_c99211c188639174a6a5c18f7c36bbc0b47f1abadac382130fd03e56cf74be30->leave($__internal_c99211c188639174a6a5c18f7c36bbc0b47f1abadac382130fd03e56cf74be30_prof);

    }

    public function getTemplateName()
    {
        return "useredit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
<section class=\"content\">
<div class=\"container\">
<div class=\"row\">
{% for form in forms %}
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
{% endfor %}
</div>
</div>
</section>
</div>
{% endblock %}
", "useredit.html.twig", "/var/www/html/symfonycalendar/templates/useredit.html.twig");
    }
}
