<?php

/* viewusertype.html.twig */
class __TwigTemplate_5a7b502431d0d143ee0fd740f4d577d454c8962de83a352b703ffa43eae5a72a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "viewusertype.html.twig", 1);
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
        $__internal_1271cc67571cfd80654c137de2ad5f48b9d02a6e8a72251ccf5f68d5718d6ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1271cc67571cfd80654c137de2ad5f48b9d02a6e8a72251ccf5f68d5718d6ec3->enter($__internal_1271cc67571cfd80654c137de2ad5f48b9d02a6e8a72251ccf5f68d5718d6ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "viewusertype.html.twig"));

        $__internal_6878ae334523c55a23a75458dddfba85153083ca7060ed3cc539b3cc05821901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6878ae334523c55a23a75458dddfba85153083ca7060ed3cc539b3cc05821901->enter($__internal_6878ae334523c55a23a75458dddfba85153083ca7060ed3cc539b3cc05821901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "viewusertype.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1271cc67571cfd80654c137de2ad5f48b9d02a6e8a72251ccf5f68d5718d6ec3->leave($__internal_1271cc67571cfd80654c137de2ad5f48b9d02a6e8a72251ccf5f68d5718d6ec3_prof);

        
        $__internal_6878ae334523c55a23a75458dddfba85153083ca7060ed3cc539b3cc05821901->leave($__internal_6878ae334523c55a23a75458dddfba85153083ca7060ed3cc539b3cc05821901_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ccd1b8b4a7b230cda08ffa803011971e96fcb2cd32428bf021da86b4d05d759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ccd1b8b4a7b230cda08ffa803011971e96fcb2cd32428bf021da86b4d05d759->enter($__internal_4ccd1b8b4a7b230cda08ffa803011971e96fcb2cd32428bf021da86b4d05d759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ceb5939ed09f5f4b93bbf4028fc115572d7be609a8593394bcd4aba9eae7dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ceb5939ed09f5f4b93bbf4028fc115572d7be609a8593394bcd4aba9eae7dfb->enter($__internal_5ceb5939ed09f5f4b93bbf4028fc115572d7be609a8593394bcd4aba9eae7dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
<section class=\"content\">
<div class=\"container\">
<div class=\"row\">
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["viewusertype"]) || array_key_exists("viewusertype", $context) ? $context["viewusertype"] : (function () { throw new Twig_Error_Runtime('Variable "viewusertype" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 8
            echo "<div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\" style = 'background-color: #fff; '>
  ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "usertype", array()), "html", null, true);
            echo "
  <a href=\"/admin/editusertype/";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
            echo "\">Modifica</a>
  <a href=\"/admin/removeusertype/";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "id", array()), "html", null, true);
            echo "\">Cancella</a>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
</div>
</section>
</div>
";
        
        $__internal_5ceb5939ed09f5f4b93bbf4028fc115572d7be609a8593394bcd4aba9eae7dfb->leave($__internal_5ceb5939ed09f5f4b93bbf4028fc115572d7be609a8593394bcd4aba9eae7dfb_prof);

        
        $__internal_4ccd1b8b4a7b230cda08ffa803011971e96fcb2cd32428bf021da86b4d05d759->leave($__internal_4ccd1b8b4a7b230cda08ffa803011971e96fcb2cd32428bf021da86b4d05d759_prof);

    }

    public function getTemplateName()
    {
        return "viewusertype.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  70 => 11,  66 => 10,  62 => 9,  59 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
<section class=\"content\">
<div class=\"container\">
<div class=\"row\">
{% for entry in viewusertype %}
<div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\" style = 'background-color: #fff; '>
  {{ entry.usertype }}
  <a href=\"/admin/editusertype/{{ entry.id }}\">Modifica</a>
  <a href=\"/admin/removeusertype/{{ entry.id }}\">Cancella</a>
</div>
{% endfor %}
</div>
</div>
</section>
</div>
{% endblock %}
", "viewusertype.html.twig", "/var/www/html/symfonycalendar/templates/viewusertype.html.twig");
    }
}
