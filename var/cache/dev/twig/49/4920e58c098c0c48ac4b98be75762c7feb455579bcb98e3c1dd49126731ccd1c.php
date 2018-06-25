<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cf57e8bef2d7df1d09f3f69da965d6bae5237528b7442f243d04c6b1f18259ec extends Twig_Template
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
        $__internal_65a9ffb03649165cc2d872e0fdde2fd07dbc38d08883f1e6d3a904c68ee75e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a9ffb03649165cc2d872e0fdde2fd07dbc38d08883f1e6d3a904c68ee75e6c->enter($__internal_65a9ffb03649165cc2d872e0fdde2fd07dbc38d08883f1e6d3a904c68ee75e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_74ee7e41f1eb6def9661cc4c9b03abc50994302ed6ddc2dc7fb51801caafc492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ee7e41f1eb6def9661cc4c9b03abc50994302ed6ddc2dc7fb51801caafc492->enter($__internal_74ee7e41f1eb6def9661cc4c9b03abc50994302ed6ddc2dc7fb51801caafc492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_65a9ffb03649165cc2d872e0fdde2fd07dbc38d08883f1e6d3a904c68ee75e6c->leave($__internal_65a9ffb03649165cc2d872e0fdde2fd07dbc38d08883f1e6d3a904c68ee75e6c_prof);

        
        $__internal_74ee7e41f1eb6def9661cc4c9b03abc50994302ed6ddc2dc7fb51801caafc492->leave($__internal_74ee7e41f1eb6def9661cc4c9b03abc50994302ed6ddc2dc7fb51801caafc492_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
