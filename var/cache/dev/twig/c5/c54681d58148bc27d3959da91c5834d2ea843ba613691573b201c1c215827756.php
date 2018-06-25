<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a6a0b7c3438a7aa54dac102efa07e3d0e686e6c163d3bf4450abe2049e010479 extends Twig_Template
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
        $__internal_f183ea11c79f7308df29040893c7f54aa5b6ed2c054fd5e610fa8480a5552680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f183ea11c79f7308df29040893c7f54aa5b6ed2c054fd5e610fa8480a5552680->enter($__internal_f183ea11c79f7308df29040893c7f54aa5b6ed2c054fd5e610fa8480a5552680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_61c3475dc263213f510b7a7b831fa929e5832d3f2ba0a8a11a35131bbf9be0c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c3475dc263213f510b7a7b831fa929e5832d3f2ba0a8a11a35131bbf9be0c5->enter($__internal_61c3475dc263213f510b7a7b831fa929e5832d3f2ba0a8a11a35131bbf9be0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f183ea11c79f7308df29040893c7f54aa5b6ed2c054fd5e610fa8480a5552680->leave($__internal_f183ea11c79f7308df29040893c7f54aa5b6ed2c054fd5e610fa8480a5552680_prof);

        
        $__internal_61c3475dc263213f510b7a7b831fa929e5832d3f2ba0a8a11a35131bbf9be0c5->leave($__internal_61c3475dc263213f510b7a7b831fa929e5832d3f2ba0a8a11a35131bbf9be0c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
