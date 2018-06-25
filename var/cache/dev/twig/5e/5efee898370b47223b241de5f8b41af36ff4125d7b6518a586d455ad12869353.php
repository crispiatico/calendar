<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_3610af364b47f29ff494652c2bbdab9cb7d52cf769876f95aa7a61d4505b2fdd extends Twig_Template
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
        $__internal_f0b6fd3fd1b4f2b59cec1917fb5c6d98bbf3b70b908a96497aada6bbe47c36f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b6fd3fd1b4f2b59cec1917fb5c6d98bbf3b70b908a96497aada6bbe47c36f9->enter($__internal_f0b6fd3fd1b4f2b59cec1917fb5c6d98bbf3b70b908a96497aada6bbe47c36f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_43cd7c1119c65f117163610fc1c40abd5af6820636cd25c386bcac0a7cf0ee99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43cd7c1119c65f117163610fc1c40abd5af6820636cd25c386bcac0a7cf0ee99->enter($__internal_43cd7c1119c65f117163610fc1c40abd5af6820636cd25c386bcac0a7cf0ee99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f0b6fd3fd1b4f2b59cec1917fb5c6d98bbf3b70b908a96497aada6bbe47c36f9->leave($__internal_f0b6fd3fd1b4f2b59cec1917fb5c6d98bbf3b70b908a96497aada6bbe47c36f9_prof);

        
        $__internal_43cd7c1119c65f117163610fc1c40abd5af6820636cd25c386bcac0a7cf0ee99->leave($__internal_43cd7c1119c65f117163610fc1c40abd5af6820636cd25c386bcac0a7cf0ee99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
