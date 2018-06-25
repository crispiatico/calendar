<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_02445407445fe6c13053404d840b8e001518b921f632f8b5059a0b2437623fed extends Twig_Template
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
        $__internal_9cca62bca23549ad4a3202a054989a3676e6dabec3e0df59287ac86180c9219f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cca62bca23549ad4a3202a054989a3676e6dabec3e0df59287ac86180c9219f->enter($__internal_9cca62bca23549ad4a3202a054989a3676e6dabec3e0df59287ac86180c9219f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e1c730f3f313bd7b01e41a7b5fdc47a52f77009b38e22ca39102f8d3d62fdc2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c730f3f313bd7b01e41a7b5fdc47a52f77009b38e22ca39102f8d3d62fdc2b->enter($__internal_e1c730f3f313bd7b01e41a7b5fdc47a52f77009b38e22ca39102f8d3d62fdc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_9cca62bca23549ad4a3202a054989a3676e6dabec3e0df59287ac86180c9219f->leave($__internal_9cca62bca23549ad4a3202a054989a3676e6dabec3e0df59287ac86180c9219f_prof);

        
        $__internal_e1c730f3f313bd7b01e41a7b5fdc47a52f77009b38e22ca39102f8d3d62fdc2b->leave($__internal_e1c730f3f313bd7b01e41a7b5fdc47a52f77009b38e22ca39102f8d3d62fdc2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
