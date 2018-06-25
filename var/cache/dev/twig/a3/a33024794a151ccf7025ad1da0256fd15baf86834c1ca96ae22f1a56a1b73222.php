<?php

/* oneevent.html.twig */
class __TwigTemplate_cc4fadb1db36def564e0300ab5d85da914954752701296ac23fbe84f32afc681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "oneevent.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e19cdbff21535b8ff019bf061acb8b848d0ee86cc0a1b7a43be19470009fca92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19cdbff21535b8ff019bf061acb8b848d0ee86cc0a1b7a43be19470009fca92->enter($__internal_e19cdbff21535b8ff019bf061acb8b848d0ee86cc0a1b7a43be19470009fca92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "oneevent.html.twig"));

        $__internal_4e23462bf61947825a2e3d9df982e99ad49df1e2b5e8d42a7e06fbacaf79a1e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e23462bf61947825a2e3d9df982e99ad49df1e2b5e8d42a7e06fbacaf79a1e7->enter($__internal_4e23462bf61947825a2e3d9df982e99ad49df1e2b5e8d42a7e06fbacaf79a1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "oneevent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e19cdbff21535b8ff019bf061acb8b848d0ee86cc0a1b7a43be19470009fca92->leave($__internal_e19cdbff21535b8ff019bf061acb8b848d0ee86cc0a1b7a43be19470009fca92_prof);

        
        $__internal_4e23462bf61947825a2e3d9df982e99ad49df1e2b5e8d42a7e06fbacaf79a1e7->leave($__internal_4e23462bf61947825a2e3d9df982e99ad49df1e2b5e8d42a7e06fbacaf79a1e7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_80dc9134df9f8c38ec695df4ccf366d046c788bc594f26bd01e2e6933904a4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80dc9134df9f8c38ec695df4ccf366d046c788bc594f26bd01e2e6933904a4f1->enter($__internal_80dc9134df9f8c38ec695df4ccf366d046c788bc594f26bd01e2e6933904a4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d6fc7ec3ef4f151723aa6cebe61373e8e3b8692124c0cc91c64ce4e0121f40f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6fc7ec3ef4f151723aa6cebe61373e8e3b8692124c0cc91c64ce4e0121f40f->enter($__internal_2d6fc7ec3ef4f151723aa6cebe61373e8e3b8692124c0cc91c64ce4e0121f40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1 class=\"text-align-center\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["oneevent"]) || array_key_exists("oneevent", $context) ? $context["oneevent"] : (function () { throw new Twig_Error_Runtime('Variable "oneevent" does not exist.', 3, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h1>
<h2 class=\"text-align-center\">con ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["oneevent"]) || array_key_exists("oneevent", $context) ? $context["oneevent"] : (function () { throw new Twig_Error_Runtime('Variable "oneevent" does not exist.', 4, $this->getSourceContext()); })()), "teacher", array()), "html", null, true);
        echo " presso ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["oneevent"]) || array_key_exists("oneevent", $context) ? $context["oneevent"] : (function () { throw new Twig_Error_Runtime('Variable "oneevent" does not exist.', 4, $this->getSourceContext()); })()), "placename", array()), "html", null, true);
        echo " a ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["oneevent"]) || array_key_exists("oneevent", $context) ? $context["oneevent"] : (function () { throw new Twig_Error_Runtime('Variable "oneevent" does not exist.', 4, $this->getSourceContext()); })()), "place", array()), "html", null, true);
        echo "  </h2>
<h3 class=\"text-align-center\"><em>da</em> ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["oneevent"]) || array_key_exists("oneevent", $context) ? $context["oneevent"] : (function () { throw new Twig_Error_Runtime('Variable "oneevent" does not exist.', 5, $this->getSourceContext()); })()), "start", array()), "D d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["oneevent"]) || array_key_exists("oneevent", $context) ? $context["oneevent"] : (function () { throw new Twig_Error_Runtime('Variable "oneevent" does not exist.', 5, $this->getSourceContext()); })()), "start", array()), "H:i"), "html", null, true);
        echo " <em>a</em> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["oneevent"]) || array_key_exists("oneevent", $context) ? $context["oneevent"] : (function () { throw new Twig_Error_Runtime('Variable "oneevent" does not exist.', 5, $this->getSourceContext()); })()), "end", array()), "D d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["oneevent"]) || array_key_exists("oneevent", $context) ? $context["oneevent"] : (function () { throw new Twig_Error_Runtime('Variable "oneevent" does not exist.', 5, $this->getSourceContext()); })()), "end", array()), "H:i"), "html", null, true);
        echo "</h3>
<div>";
        // line 6
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["oneevent"]) || array_key_exists("oneevent", $context) ? $context["oneevent"] : (function () { throw new Twig_Error_Runtime('Variable "oneevent" does not exist.', 6, $this->getSourceContext()); })()), "body", array());
        echo "</div>
";
        
        $__internal_2d6fc7ec3ef4f151723aa6cebe61373e8e3b8692124c0cc91c64ce4e0121f40f->leave($__internal_2d6fc7ec3ef4f151723aa6cebe61373e8e3b8692124c0cc91c64ce4e0121f40f_prof);

        
        $__internal_80dc9134df9f8c38ec695df4ccf366d046c788bc594f26bd01e2e6933904a4f1->leave($__internal_80dc9134df9f8c38ec695df4ccf366d046c788bc594f26bd01e2e6933904a4f1_prof);

    }

    public function getTemplateName()
    {
        return "oneevent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  62 => 5,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}
{% block body %}
<h1 class=\"text-align-center\">{{ oneevent.title }}</h1>
<h2 class=\"text-align-center\">con {{ oneevent.teacher }} presso {{ oneevent.placename }} a {{ oneevent.place }}  </h2>
<h3 class=\"text-align-center\"><em>da</em> {{ oneevent.start|date('D d/m/Y') }} - {{ oneevent.start|date('H:i') }} <em>a</em> {{ oneevent.end|date('D d/m/Y') }} - {{ oneevent.end|date('H:i') }}</h3>
<div>{{ oneevent.body|raw }}</div>
{% endblock %}
", "oneevent.html.twig", "/var/www/html/symfonycalendar/templates/oneevent.html.twig");
    }
}
