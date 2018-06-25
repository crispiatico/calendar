<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2268879ddc287d97cc8d56a7100f6d2c3d5a227f2000a954024fd5d7c8ea5b66 extends Twig_Template
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
        $__internal_9c3897b75b847bc8f0a565a7e54953fcf580d327a522f89f8b1b2bcc2058e7b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3897b75b847bc8f0a565a7e54953fcf580d327a522f89f8b1b2bcc2058e7b0->enter($__internal_9c3897b75b847bc8f0a565a7e54953fcf580d327a522f89f8b1b2bcc2058e7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_b89012684352389e7edfffd98b06b34bc7bc09481f8e354426abd31ca6bc9b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b89012684352389e7edfffd98b06b34bc7bc09481f8e354426abd31ca6bc9b37->enter($__internal_b89012684352389e7edfffd98b06b34bc7bc09481f8e354426abd31ca6bc9b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9c3897b75b847bc8f0a565a7e54953fcf580d327a522f89f8b1b2bcc2058e7b0->leave($__internal_9c3897b75b847bc8f0a565a7e54953fcf580d327a522f89f8b1b2bcc2058e7b0_prof);

        
        $__internal_b89012684352389e7edfffd98b06b34bc7bc09481f8e354426abd31ca6bc9b37->leave($__internal_b89012684352389e7edfffd98b06b34bc7bc09481f8e354426abd31ca6bc9b37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
