<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_3ead0d22ea229d617f4abb77d3a4f165cc36729ee106edbc3ef8a7cbfef1e676 extends Twig_Template
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
        $__internal_5eb567d661df6dec185c2e62ea75ae5c40d97dc21efddfa7e1f97012c8e6ff0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb567d661df6dec185c2e62ea75ae5c40d97dc21efddfa7e1f97012c8e6ff0a->enter($__internal_5eb567d661df6dec185c2e62ea75ae5c40d97dc21efddfa7e1f97012c8e6ff0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_dfc0c85f1a80297c549d393f680c08e5ea08fd8e3b16b877e1bf584a69730292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc0c85f1a80297c549d393f680c08e5ea08fd8e3b16b877e1bf584a69730292->enter($__internal_dfc0c85f1a80297c549d393f680c08e5ea08fd8e3b16b877e1bf584a69730292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_5eb567d661df6dec185c2e62ea75ae5c40d97dc21efddfa7e1f97012c8e6ff0a->leave($__internal_5eb567d661df6dec185c2e62ea75ae5c40d97dc21efddfa7e1f97012c8e6ff0a_prof);

        
        $__internal_dfc0c85f1a80297c549d393f680c08e5ea08fd8e3b16b877e1bf584a69730292->leave($__internal_dfc0c85f1a80297c549d393f680c08e5ea08fd8e3b16b877e1bf584a69730292_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php");
    }
}
