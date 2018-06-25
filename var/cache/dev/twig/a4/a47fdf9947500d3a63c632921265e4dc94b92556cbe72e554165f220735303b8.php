<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3a58f8627991e4363f4ed492897019a44f1fafab0f678b3ad0369c3b6e67b3f9 extends Twig_Template
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
        $__internal_dd1c7f7d4058d292b54001e4b00f7d79eaa0c0ce6f76371f18224f21e4361834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1c7f7d4058d292b54001e4b00f7d79eaa0c0ce6f76371f18224f21e4361834->enter($__internal_dd1c7f7d4058d292b54001e4b00f7d79eaa0c0ce6f76371f18224f21e4361834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_43959d0c31eb803f9b4c54ba24f9b7eaa2ef1839803c31fd6c69bbb34d51a275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43959d0c31eb803f9b4c54ba24f9b7eaa2ef1839803c31fd6c69bbb34d51a275->enter($__internal_43959d0c31eb803f9b4c54ba24f9b7eaa2ef1839803c31fd6c69bbb34d51a275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_dd1c7f7d4058d292b54001e4b00f7d79eaa0c0ce6f76371f18224f21e4361834->leave($__internal_dd1c7f7d4058d292b54001e4b00f7d79eaa0c0ce6f76371f18224f21e4361834_prof);

        
        $__internal_43959d0c31eb803f9b4c54ba24f9b7eaa2ef1839803c31fd6c69bbb34d51a275->leave($__internal_43959d0c31eb803f9b4c54ba24f9b7eaa2ef1839803c31fd6c69bbb34d51a275_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
