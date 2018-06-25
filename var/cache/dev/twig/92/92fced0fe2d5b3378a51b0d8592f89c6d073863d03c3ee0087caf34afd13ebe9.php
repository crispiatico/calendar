<?php

/* placeedit.html.twig */
class __TwigTemplate_01c07e5f5f12bea3fe78c551dc021744ccdc0b561679b5c3dcdfbf879487c98a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "placeedit.html.twig", 1);
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
        $__internal_a20eabde728e72b87a67c50d3d49e4c4304eb9ce03d4ba50d4d250e3ce7747c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20eabde728e72b87a67c50d3d49e4c4304eb9ce03d4ba50d4d250e3ce7747c2->enter($__internal_a20eabde728e72b87a67c50d3d49e4c4304eb9ce03d4ba50d4d250e3ce7747c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "placeedit.html.twig"));

        $__internal_a5994225569cf81c21ac00ce0eb1c028feffde1c9e8bb5072144497b303ab2a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5994225569cf81c21ac00ce0eb1c028feffde1c9e8bb5072144497b303ab2a6->enter($__internal_a5994225569cf81c21ac00ce0eb1c028feffde1c9e8bb5072144497b303ab2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "placeedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a20eabde728e72b87a67c50d3d49e4c4304eb9ce03d4ba50d4d250e3ce7747c2->leave($__internal_a20eabde728e72b87a67c50d3d49e4c4304eb9ce03d4ba50d4d250e3ce7747c2_prof);

        
        $__internal_a5994225569cf81c21ac00ce0eb1c028feffde1c9e8bb5072144497b303ab2a6->leave($__internal_a5994225569cf81c21ac00ce0eb1c028feffde1c9e8bb5072144497b303ab2a6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7a2d343790e1f6340030a5328ff3883335d44bc5d6481d87dbb8f9d47f95558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a2d343790e1f6340030a5328ff3883335d44bc5d6481d87dbb8f9d47f95558->enter($__internal_c7a2d343790e1f6340030a5328ff3883335d44bc5d6481d87dbb8f9d47f95558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9521d9ae537317f0ea790a06dcd2b4d0ffbd847a82df7582f56a31813dd3dd9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9521d9ae537317f0ea790a06dcd2b4d0ffbd847a82df7582f56a31813dd3dd9e->enter($__internal_9521d9ae537317f0ea790a06dcd2b4d0ffbd847a82df7582f56a31813dd3dd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9521d9ae537317f0ea790a06dcd2b4d0ffbd847a82df7582f56a31813dd3dd9e->leave($__internal_9521d9ae537317f0ea790a06dcd2b4d0ffbd847a82df7582f56a31813dd3dd9e_prof);

        
        $__internal_c7a2d343790e1f6340030a5328ff3883335d44bc5d6481d87dbb8f9d47f95558->leave($__internal_c7a2d343790e1f6340030a5328ff3883335d44bc5d6481d87dbb8f9d47f95558_prof);

    }

    public function getTemplateName()
    {
        return "placeedit.html.twig";
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
", "placeedit.html.twig", "/var/www/html/symfonycalendar/templates/placeedit.html.twig");
    }
}
