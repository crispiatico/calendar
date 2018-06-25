<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7119774fa6f49b4a654b7c5e520caf413da6060d88eedaa14690dff302197ce3 extends Twig_Template
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
        $__internal_614cf7f3c4361607ad17cd0750a9d2802ae72eaf56697bd5dbc0e1d15695ee25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614cf7f3c4361607ad17cd0750a9d2802ae72eaf56697bd5dbc0e1d15695ee25->enter($__internal_614cf7f3c4361607ad17cd0750a9d2802ae72eaf56697bd5dbc0e1d15695ee25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2e82194dd4a0f49779deba625a08e0cea25810b4134592df9ead2bc613d6011b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e82194dd4a0f49779deba625a08e0cea25810b4134592df9ead2bc613d6011b->enter($__internal_2e82194dd4a0f49779deba625a08e0cea25810b4134592df9ead2bc613d6011b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_614cf7f3c4361607ad17cd0750a9d2802ae72eaf56697bd5dbc0e1d15695ee25->leave($__internal_614cf7f3c4361607ad17cd0750a9d2802ae72eaf56697bd5dbc0e1d15695ee25_prof);

        
        $__internal_2e82194dd4a0f49779deba625a08e0cea25810b4134592df9ead2bc613d6011b->leave($__internal_2e82194dd4a0f49779deba625a08e0cea25810b4134592df9ead2bc613d6011b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
