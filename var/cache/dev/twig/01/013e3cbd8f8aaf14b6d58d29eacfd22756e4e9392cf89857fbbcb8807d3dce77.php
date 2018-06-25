<?php

/* topicedit.html.twig */
class __TwigTemplate_ecaa917231c751478e22900ac27a339f0caf74bd10b86a9878462af6ce6391c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "topicedit.html.twig", 1);
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
        $__internal_fc44ba9698bf906df744ee754ec9fbfaf63d2f84ee0fd8c3dd3f842abe4861ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc44ba9698bf906df744ee754ec9fbfaf63d2f84ee0fd8c3dd3f842abe4861ec->enter($__internal_fc44ba9698bf906df744ee754ec9fbfaf63d2f84ee0fd8c3dd3f842abe4861ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "topicedit.html.twig"));

        $__internal_0a88b7d481dad30dc450c0453a046d784bf8aa249635f4a7a211ce68abf0684b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a88b7d481dad30dc450c0453a046d784bf8aa249635f4a7a211ce68abf0684b->enter($__internal_0a88b7d481dad30dc450c0453a046d784bf8aa249635f4a7a211ce68abf0684b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "topicedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc44ba9698bf906df744ee754ec9fbfaf63d2f84ee0fd8c3dd3f842abe4861ec->leave($__internal_fc44ba9698bf906df744ee754ec9fbfaf63d2f84ee0fd8c3dd3f842abe4861ec_prof);

        
        $__internal_0a88b7d481dad30dc450c0453a046d784bf8aa249635f4a7a211ce68abf0684b->leave($__internal_0a88b7d481dad30dc450c0453a046d784bf8aa249635f4a7a211ce68abf0684b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5891fb7982bc3101dbbfb54dadc5bbe1f22faced9fab66f4c24e798a4dcd89c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5891fb7982bc3101dbbfb54dadc5bbe1f22faced9fab66f4c24e798a4dcd89c4->enter($__internal_5891fb7982bc3101dbbfb54dadc5bbe1f22faced9fab66f4c24e798a4dcd89c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2167ff51672e89c457b4a8a6f47a8b645053b92a2a791c00d197a4facb5d759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2167ff51672e89c457b4a8a6f47a8b645053b92a2a791c00d197a4facb5d759->enter($__internal_e2167ff51672e89c457b4a8a6f47a8b645053b92a2a791c00d197a4facb5d759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e2167ff51672e89c457b4a8a6f47a8b645053b92a2a791c00d197a4facb5d759->leave($__internal_e2167ff51672e89c457b4a8a6f47a8b645053b92a2a791c00d197a4facb5d759_prof);

        
        $__internal_5891fb7982bc3101dbbfb54dadc5bbe1f22faced9fab66f4c24e798a4dcd89c4->leave($__internal_5891fb7982bc3101dbbfb54dadc5bbe1f22faced9fab66f4c24e798a4dcd89c4_prof);

    }

    public function getTemplateName()
    {
        return "topicedit.html.twig";
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
", "topicedit.html.twig", "/var/www/html/symfonycalendar/templates/topicedit.html.twig");
    }
}
