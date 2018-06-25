<?php

/* userprofile.html.twig */
class __TwigTemplate_d744effdb23f794ef0f782f04fba57ef99dd7446929cd1c4ba37ff569c437c67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "userprofile.html.twig", 1);
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
        $__internal_dff7affdf283176ab58cef0ee9b79a6baf814e92bce7bee5dd098bd60b858698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff7affdf283176ab58cef0ee9b79a6baf814e92bce7bee5dd098bd60b858698->enter($__internal_dff7affdf283176ab58cef0ee9b79a6baf814e92bce7bee5dd098bd60b858698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userprofile.html.twig"));

        $__internal_ba47f39fea6a2e6fbabb596fb2907a4be8fc92ae715f3d748aea574c114548ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba47f39fea6a2e6fbabb596fb2907a4be8fc92ae715f3d748aea574c114548ee->enter($__internal_ba47f39fea6a2e6fbabb596fb2907a4be8fc92ae715f3d748aea574c114548ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userprofile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dff7affdf283176ab58cef0ee9b79a6baf814e92bce7bee5dd098bd60b858698->leave($__internal_dff7affdf283176ab58cef0ee9b79a6baf814e92bce7bee5dd098bd60b858698_prof);

        
        $__internal_ba47f39fea6a2e6fbabb596fb2907a4be8fc92ae715f3d748aea574c114548ee->leave($__internal_ba47f39fea6a2e6fbabb596fb2907a4be8fc92ae715f3d748aea574c114548ee_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_62a12d482ee7346e868fafde9f2885b030cb53d71bf4272ebc6f101306c419aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a12d482ee7346e868fafde9f2885b030cb53d71bf4272ebc6f101306c419aa->enter($__internal_62a12d482ee7346e868fafde9f2885b030cb53d71bf4272ebc6f101306c419aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d40043b297fa35320afa45ba0082cfc92df752bf1eec24a9b74b1f26cc2fb5e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d40043b297fa35320afa45ba0082cfc92df752bf1eec24a9b74b1f26cc2fb5e5->enter($__internal_d40043b297fa35320afa45ba0082cfc92df752bf1eec24a9b74b1f26cc2fb5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h3>Modifica profilo utente <strong>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["userprofile"]) || array_key_exists("userprofile", $context) ? $context["userprofile"] : (function () { throw new Twig_Error_Runtime('Variable "userprofile" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo "</strong></h3>
      ";
        // line 7
        if (((isset($context["usermodifyed"]) || array_key_exists("usermodifyed", $context) ? $context["usermodifyed"] : (function () { throw new Twig_Error_Runtime('Variable "usermodifyed" does not exist.', 7, $this->getSourceContext()); })()) == 1)) {
            // line 8
            echo "      <div class=\"callout callout-info\">
        <h4>Modifiche effettuate</h4>
      </div>
      ";
        }
        // line 12
        echo "      <div class=\"row\"  style = 'background-color: #fff'>
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'widget');
        echo "
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'form_end');
        echo "
      </div>
    </div>
  </section>
</div>
";
        
        $__internal_d40043b297fa35320afa45ba0082cfc92df752bf1eec24a9b74b1f26cc2fb5e5->leave($__internal_d40043b297fa35320afa45ba0082cfc92df752bf1eec24a9b74b1f26cc2fb5e5_prof);

        
        $__internal_62a12d482ee7346e868fafde9f2885b030cb53d71bf4272ebc6f101306c419aa->leave($__internal_62a12d482ee7346e868fafde9f2885b030cb53d71bf4272ebc6f101306c419aa_prof);

    }

    public function getTemplateName()
    {
        return "userprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  73 => 14,  69 => 13,  66 => 12,  60 => 8,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
      <h3>Modifica profilo utente <strong>{{ userprofile }}</strong></h3>
      {% if usermodifyed == 1 %}
      <div class=\"callout callout-info\">
        <h4>Modifiche effettuate</h4>
      </div>
      {% endif %}
      <div class=\"row\"  style = 'background-color: #fff'>
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "userprofile.html.twig", "/var/www/html/symfonycalendar/templates/userprofile.html.twig");
    }
}
