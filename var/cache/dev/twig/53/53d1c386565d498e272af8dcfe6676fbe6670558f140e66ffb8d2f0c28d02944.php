<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_0762503d09009bb106f7c3ba90b10eafebc236b1f47a11970ca37c9a61e65514 extends Twig_Template
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
        $__internal_c1f61c7732bd77c9cef51461aab79183b8ce60439e3f9b008c7c259753a9555e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f61c7732bd77c9cef51461aab79183b8ce60439e3f9b008c7c259753a9555e->enter($__internal_c1f61c7732bd77c9cef51461aab79183b8ce60439e3f9b008c7c259753a9555e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_6a665d4a3a35d5f4b003af27d887431982f9fd1ad8cd418d72f278c91ab710e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a665d4a3a35d5f4b003af27d887431982f9fd1ad8cd418d72f278c91ab710e0->enter($__internal_6a665d4a3a35d5f4b003af27d887431982f9fd1ad8cd418d72f278c91ab710e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_c1f61c7732bd77c9cef51461aab79183b8ce60439e3f9b008c7c259753a9555e->leave($__internal_c1f61c7732bd77c9cef51461aab79183b8ce60439e3f9b008c7c259753a9555e_prof);

        
        $__internal_6a665d4a3a35d5f4b003af27d887431982f9fd1ad8cd418d72f278c91ab710e0->leave($__internal_6a665d4a3a35d5f4b003af27d887431982f9fd1ad8cd418d72f278c91ab710e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}
