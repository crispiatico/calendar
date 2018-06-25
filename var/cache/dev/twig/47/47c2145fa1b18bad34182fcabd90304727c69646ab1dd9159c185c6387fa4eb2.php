<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_5291396e3f04ac37b86e628a30ff30e67fb701a1e3f1182bcb6a08049f884f1d extends Twig_Template
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
        $__internal_58a1fb0b5b0cf7268a3de90f39db772eaceb9f676a6dcff86c7bd0806a638c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a1fb0b5b0cf7268a3de90f39db772eaceb9f676a6dcff86c7bd0806a638c2d->enter($__internal_58a1fb0b5b0cf7268a3de90f39db772eaceb9f676a6dcff86c7bd0806a638c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ee36c891f5ef0fba877abd041ec04cb9ab642263a0c69eea8cf6fc3626f3703f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee36c891f5ef0fba877abd041ec04cb9ab642263a0c69eea8cf6fc3626f3703f->enter($__internal_ee36c891f5ef0fba877abd041ec04cb9ab642263a0c69eea8cf6fc3626f3703f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_58a1fb0b5b0cf7268a3de90f39db772eaceb9f676a6dcff86c7bd0806a638c2d->leave($__internal_58a1fb0b5b0cf7268a3de90f39db772eaceb9f676a6dcff86c7bd0806a638c2d_prof);

        
        $__internal_ee36c891f5ef0fba877abd041ec04cb9ab642263a0c69eea8cf6fc3626f3703f->leave($__internal_ee36c891f5ef0fba877abd041ec04cb9ab642263a0c69eea8cf6fc3626f3703f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
