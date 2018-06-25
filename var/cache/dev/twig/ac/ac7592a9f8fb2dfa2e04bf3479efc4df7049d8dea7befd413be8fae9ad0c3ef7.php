<?php

/* teacheredit.html.twig */
class __TwigTemplate_e179b637099fbe5aa24f6c317d8cff739b2fadb26bb64b66d94d39fdc36d7c7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "teacheredit.html.twig", 1);
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
        $__internal_6df73e185e6ca75bbefe11ffe5ded6085daec0b85323edd1404ffec64f4a9b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df73e185e6ca75bbefe11ffe5ded6085daec0b85323edd1404ffec64f4a9b88->enter($__internal_6df73e185e6ca75bbefe11ffe5ded6085daec0b85323edd1404ffec64f4a9b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teacheredit.html.twig"));

        $__internal_a9897fc8ae76139ee833c79eea2e011b632e4e70fc508a5f4d9173c7298be99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9897fc8ae76139ee833c79eea2e011b632e4e70fc508a5f4d9173c7298be99e->enter($__internal_a9897fc8ae76139ee833c79eea2e011b632e4e70fc508a5f4d9173c7298be99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teacheredit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6df73e185e6ca75bbefe11ffe5ded6085daec0b85323edd1404ffec64f4a9b88->leave($__internal_6df73e185e6ca75bbefe11ffe5ded6085daec0b85323edd1404ffec64f4a9b88_prof);

        
        $__internal_a9897fc8ae76139ee833c79eea2e011b632e4e70fc508a5f4d9173c7298be99e->leave($__internal_a9897fc8ae76139ee833c79eea2e011b632e4e70fc508a5f4d9173c7298be99e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfdf4977ee9434b8ccc64bc47a9703a960498fc730a77a362068b1491ec9885a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfdf4977ee9434b8ccc64bc47a9703a960498fc730a77a362068b1491ec9885a->enter($__internal_dfdf4977ee9434b8ccc64bc47a9703a960498fc730a77a362068b1491ec9885a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a34361fbea764ed1d4fab8bbd98a94bef1884fe0fb7d5296bb1b16b222b1ffb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34361fbea764ed1d4fab8bbd98a94bef1884fe0fb7d5296bb1b16b222b1ffb8->enter($__internal_a34361fbea764ed1d4fab8bbd98a94bef1884fe0fb7d5296bb1b16b222b1ffb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a34361fbea764ed1d4fab8bbd98a94bef1884fe0fb7d5296bb1b16b222b1ffb8->leave($__internal_a34361fbea764ed1d4fab8bbd98a94bef1884fe0fb7d5296bb1b16b222b1ffb8_prof);

        
        $__internal_dfdf4977ee9434b8ccc64bc47a9703a960498fc730a77a362068b1491ec9885a->leave($__internal_dfdf4977ee9434b8ccc64bc47a9703a960498fc730a77a362068b1491ec9885a_prof);

    }

    public function getTemplateName()
    {
        return "teacheredit.html.twig";
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
", "teacheredit.html.twig", "/var/www/html/symfonycalendar/templates/teacheredit.html.twig");
    }
}
