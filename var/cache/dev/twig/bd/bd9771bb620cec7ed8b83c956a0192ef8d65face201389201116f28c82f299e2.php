<?php

/* bookingmodify.html.twig */
class __TwigTemplate_8915afaf2d529ff7ecf5ffba1407b90e06b88842832f3c1e8833a72d68719a76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bookingmodify.html.twig", 1);
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
        $__internal_58acbe952842722d7ce3ca1ee1145968757fa73bfbff4c5fed9657828ed87051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58acbe952842722d7ce3ca1ee1145968757fa73bfbff4c5fed9657828ed87051->enter($__internal_58acbe952842722d7ce3ca1ee1145968757fa73bfbff4c5fed9657828ed87051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookingmodify.html.twig"));

        $__internal_4963b7c6bd437a9c938e4c94e0756d336513fd63b49c8f0a10d363b86f317290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4963b7c6bd437a9c938e4c94e0756d336513fd63b49c8f0a10d363b86f317290->enter($__internal_4963b7c6bd437a9c938e4c94e0756d336513fd63b49c8f0a10d363b86f317290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookingmodify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58acbe952842722d7ce3ca1ee1145968757fa73bfbff4c5fed9657828ed87051->leave($__internal_58acbe952842722d7ce3ca1ee1145968757fa73bfbff4c5fed9657828ed87051_prof);

        
        $__internal_4963b7c6bd437a9c938e4c94e0756d336513fd63b49c8f0a10d363b86f317290->leave($__internal_4963b7c6bd437a9c938e4c94e0756d336513fd63b49c8f0a10d363b86f317290_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_807fe7bd877f7eade68555f87a67fafd1816f08f86046b023fc11a387fec6c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807fe7bd877f7eade68555f87a67fafd1816f08f86046b023fc11a387fec6c6b->enter($__internal_807fe7bd877f7eade68555f87a67fafd1816f08f86046b023fc11a387fec6c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6880ca3a3d45131ba81d99723273558d01b4add6765ec3d62562094c679bb6cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6880ca3a3d45131ba81d99723273558d01b4add6765ec3d62562094c679bb6cd->enter($__internal_6880ca3a3d45131ba81d99723273558d01b4add6765ec3d62562094c679bb6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Modifica prenotato per: <strong>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["singleevent"]) || array_key_exists("singleevent", $context) ? $context["singleevent"] : (function () { throw new Twig_Error_Runtime('Variable "singleevent" does not exist.', 6, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</strong></h2>
      <div class=\"row row-item\">
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
        
        $__internal_6880ca3a3d45131ba81d99723273558d01b4add6765ec3d62562094c679bb6cd->leave($__internal_6880ca3a3d45131ba81d99723273558d01b4add6765ec3d62562094c679bb6cd_prof);

        
        $__internal_807fe7bd877f7eade68555f87a67fafd1816f08f86046b023fc11a387fec6c6b->leave($__internal_807fe7bd877f7eade68555f87a67fafd1816f08f86046b023fc11a387fec6c6b_prof);

    }

    public function getTemplateName()
    {
        return "bookingmodify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  63 => 9,  59 => 8,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Modifica prenotato per: <strong>{{ singleevent.title }}</strong></h2>
      <div class=\"row row-item\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "bookingmodify.html.twig", "/var/www/html/symfonycalendar/templates/bookingmodify.html.twig");
    }
}
