<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_991cdc499e292028bac90ec5c44e77b34c1504c831db361c61ce9aa328892062 extends Twig_Template
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
        $__internal_92bbdbe027d974b0eff409317cb5afa118220295a0f975f2eb7ddc30230421f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92bbdbe027d974b0eff409317cb5afa118220295a0f975f2eb7ddc30230421f7->enter($__internal_92bbdbe027d974b0eff409317cb5afa118220295a0f975f2eb7ddc30230421f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_746df1ec722eec177c054c129b475ccb9f185e1b9ade3a08d1c452d292162f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746df1ec722eec177c054c129b475ccb9f185e1b9ade3a08d1c452d292162f5f->enter($__internal_746df1ec722eec177c054c129b475ccb9f185e1b9ade3a08d1c452d292162f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_92bbdbe027d974b0eff409317cb5afa118220295a0f975f2eb7ddc30230421f7->leave($__internal_92bbdbe027d974b0eff409317cb5afa118220295a0f975f2eb7ddc30230421f7_prof);

        
        $__internal_746df1ec722eec177c054c129b475ccb9f185e1b9ade3a08d1c452d292162f5f->leave($__internal_746df1ec722eec177c054c129b475ccb9f185e1b9ade3a08d1c452d292162f5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
