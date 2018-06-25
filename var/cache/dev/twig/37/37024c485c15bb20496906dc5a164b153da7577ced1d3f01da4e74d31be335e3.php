<?php

/* typemodify.html.twig */
class __TwigTemplate_ecfb7ea50ebe7c29c0354aec7aeacb1f0673229cea0934c85d767741aa1e8c15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "typemodify.html.twig", 1);
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
        $__internal_fb137d310179d50feebd8442eb82a7bfd93136f25c11306fdcf5158c5eefdb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb137d310179d50feebd8442eb82a7bfd93136f25c11306fdcf5158c5eefdb43->enter($__internal_fb137d310179d50feebd8442eb82a7bfd93136f25c11306fdcf5158c5eefdb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typemodify.html.twig"));

        $__internal_8b68b67156fafea8375c65056352ccdf5e78c36d0850c4e8cb5fbd62471b0d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b68b67156fafea8375c65056352ccdf5e78c36d0850c4e8cb5fbd62471b0d14->enter($__internal_8b68b67156fafea8375c65056352ccdf5e78c36d0850c4e8cb5fbd62471b0d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typemodify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb137d310179d50feebd8442eb82a7bfd93136f25c11306fdcf5158c5eefdb43->leave($__internal_fb137d310179d50feebd8442eb82a7bfd93136f25c11306fdcf5158c5eefdb43_prof);

        
        $__internal_8b68b67156fafea8375c65056352ccdf5e78c36d0850c4e8cb5fbd62471b0d14->leave($__internal_8b68b67156fafea8375c65056352ccdf5e78c36d0850c4e8cb5fbd62471b0d14_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8aeb4e85021b2397db8500cfe312d687d38e2b0dfbc059cd903d12e5800be121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aeb4e85021b2397db8500cfe312d687d38e2b0dfbc059cd903d12e5800be121->enter($__internal_8aeb4e85021b2397db8500cfe312d687d38e2b0dfbc059cd903d12e5800be121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f52be4226daee8911d4e4e3819318b139ccb68a0eaf739bcfbb7a0f0b517dae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52be4226daee8911d4e4e3819318b139ccb68a0eaf739bcfbb7a0f0b517dae1->enter($__internal_f52be4226daee8911d4e4e3819318b139ccb68a0eaf739bcfbb7a0f0b517dae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <div class=\"container\">
    <h2>Modifica un tipo di corso</h2>
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
        
        $__internal_f52be4226daee8911d4e4e3819318b139ccb68a0eaf739bcfbb7a0f0b517dae1->leave($__internal_f52be4226daee8911d4e4e3819318b139ccb68a0eaf739bcfbb7a0f0b517dae1_prof);

        
        $__internal_8aeb4e85021b2397db8500cfe312d687d38e2b0dfbc059cd903d12e5800be121->leave($__internal_8aeb4e85021b2397db8500cfe312d687d38e2b0dfbc059cd903d12e5800be121_prof);

    }

    public function getTemplateName()
    {
        return "typemodify.html.twig";
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
    <h2>Modifica un tipo di corso</h2>
      <div class=\"row\"  style = 'background-color: #fff'>
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
      </div>
    </div>
  </section>
</div>
{% endblock %}
", "typemodify.html.twig", "/var/www/html/symfonycalendar/templates/typemodify.html.twig");
    }
}
