<?php

/* recoverpasswordemail.html.twig */
class __TwigTemplate_5143f3c0f0819cdd8c4b66d9468e9b00721393747499fd615a696f5e3c4207d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d233454ad280fb4d0e34af53ff14db11e497c7d3ef747764395a37f4ac0ae32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d233454ad280fb4d0e34af53ff14db11e497c7d3ef747764395a37f4ac0ae32d->enter($__internal_d233454ad280fb4d0e34af53ff14db11e497c7d3ef747764395a37f4ac0ae32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recoverpasswordemail.html.twig"));

        $__internal_8e4b557b76106ab6a290fbabef9742eeb936d9f37d519a3d746bb3f7735ea05b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e4b557b76106ab6a290fbabef9742eeb936d9f37d519a3d746bb3f7735ea05b->enter($__internal_8e4b557b76106ab6a290fbabef9742eeb936d9f37d519a3d746bb3f7735ea05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recoverpasswordemail.html.twig"));

        // line 1
        echo "<h3>You did it! You registered!</h3>

Hi! You can recover your password at this link:

";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("recoverpassword");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["recoverurl"]) || array_key_exists("recoverurl", $context) ? $context["recoverurl"] : (function () { throw new Twig_Error_Runtime('Variable "recoverurl" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "

If you don't have request a change of password, ignore this mail.
";
        
        $__internal_d233454ad280fb4d0e34af53ff14db11e497c7d3ef747764395a37f4ac0ae32d->leave($__internal_d233454ad280fb4d0e34af53ff14db11e497c7d3ef747764395a37f4ac0ae32d_prof);

        
        $__internal_8e4b557b76106ab6a290fbabef9742eeb936d9f37d519a3d746bb3f7735ea05b->leave($__internal_8e4b557b76106ab6a290fbabef9742eeb936d9f37d519a3d746bb3f7735ea05b_prof);

    }

    public function getTemplateName()
    {
        return "recoverpasswordemail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>You did it! You registered!</h3>

Hi! You can recover your password at this link:

{{ url('recoverpassword') }}/{{ recoverurl }}

If you don't have request a change of password, ignore this mail.
", "recoverpasswordemail.html.twig", "/var/www/html/symfonycalendar/templates/recoverpasswordemail.html.twig");
    }
}
