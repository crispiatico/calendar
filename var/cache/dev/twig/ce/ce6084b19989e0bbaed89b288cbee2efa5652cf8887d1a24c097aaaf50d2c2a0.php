<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f87369a48800f1af88dd8d899b30703af9677bd2fe2c8db785e1c9a54bcbe0c6 extends Twig_Template
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
        $__internal_242e71c04fded92c6495577b4afe75757fad875cc75fdad7d8aadebecd227f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242e71c04fded92c6495577b4afe75757fad875cc75fdad7d8aadebecd227f56->enter($__internal_242e71c04fded92c6495577b4afe75757fad875cc75fdad7d8aadebecd227f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_62375902bf7935656bc180329c1100354a68c4e2b94bc473af3007f3b8ea7447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62375902bf7935656bc180329c1100354a68c4e2b94bc473af3007f3b8ea7447->enter($__internal_62375902bf7935656bc180329c1100354a68c4e2b94bc473af3007f3b8ea7447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_242e71c04fded92c6495577b4afe75757fad875cc75fdad7d8aadebecd227f56->leave($__internal_242e71c04fded92c6495577b4afe75757fad875cc75fdad7d8aadebecd227f56_prof);

        
        $__internal_62375902bf7935656bc180329c1100354a68c4e2b94bc473af3007f3b8ea7447->leave($__internal_62375902bf7935656bc180329c1100354a68c4e2b94bc473af3007f3b8ea7447_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
