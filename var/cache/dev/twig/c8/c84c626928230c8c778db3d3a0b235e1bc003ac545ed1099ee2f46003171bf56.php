<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_22d07538f0e11abf0ab0852c1b2c19035423a6d39705a21df78e13787dc156e2 extends Twig_Template
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
        $__internal_9e19da9b7411b004c7343e5e6e288ce292ab02e3b8b315eb3783197d600b0fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e19da9b7411b004c7343e5e6e288ce292ab02e3b8b315eb3783197d600b0fe5->enter($__internal_9e19da9b7411b004c7343e5e6e288ce292ab02e3b8b315eb3783197d600b0fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ff70792f0d2a0146252c5cb24dc198e2ce0cb6522e4f7c787eec216389a48634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff70792f0d2a0146252c5cb24dc198e2ce0cb6522e4f7c787eec216389a48634->enter($__internal_ff70792f0d2a0146252c5cb24dc198e2ce0cb6522e4f7c787eec216389a48634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_9e19da9b7411b004c7343e5e6e288ce292ab02e3b8b315eb3783197d600b0fe5->leave($__internal_9e19da9b7411b004c7343e5e6e288ce292ab02e3b8b315eb3783197d600b0fe5_prof);

        
        $__internal_ff70792f0d2a0146252c5cb24dc198e2ce0cb6522e4f7c787eec216389a48634->leave($__internal_ff70792f0d2a0146252c5cb24dc198e2ce0cb6522e4f7c787eec216389a48634_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
