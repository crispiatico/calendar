<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0484ed4d93db83ca9be1c0cbd9bac0e57eee42e4ffb5eeab6fbc11680d60639e extends Twig_Template
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
        $__internal_dd4214b418c372425c79eaba832700181298517591788904d20b7ac4a0753cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4214b418c372425c79eaba832700181298517591788904d20b7ac4a0753cf8->enter($__internal_dd4214b418c372425c79eaba832700181298517591788904d20b7ac4a0753cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_9ec200f05d14805d2ca18e2d40337603d1ee2cb0d71a72eaa3ec7ae9adbc2361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec200f05d14805d2ca18e2d40337603d1ee2cb0d71a72eaa3ec7ae9adbc2361->enter($__internal_9ec200f05d14805d2ca18e2d40337603d1ee2cb0d71a72eaa3ec7ae9adbc2361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dd4214b418c372425c79eaba832700181298517591788904d20b7ac4a0753cf8->leave($__internal_dd4214b418c372425c79eaba832700181298517591788904d20b7ac4a0753cf8_prof);

        
        $__internal_9ec200f05d14805d2ca18e2d40337603d1ee2cb0d71a72eaa3ec7ae9adbc2361->leave($__internal_9ec200f05d14805d2ca18e2d40337603d1ee2cb0d71a72eaa3ec7ae9adbc2361_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
