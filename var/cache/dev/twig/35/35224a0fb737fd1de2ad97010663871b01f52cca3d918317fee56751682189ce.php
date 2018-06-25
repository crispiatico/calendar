<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2ca5eaf32f5b8b5b50ea39ec5349b4084c3ff746d1d4b2ebdbf711cdf8f9a082 extends Twig_Template
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
        $__internal_7ee433ac722ad4dd6f06b19f4ac5d1b45447425a165759dfb1570dfd0408d12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee433ac722ad4dd6f06b19f4ac5d1b45447425a165759dfb1570dfd0408d12c->enter($__internal_7ee433ac722ad4dd6f06b19f4ac5d1b45447425a165759dfb1570dfd0408d12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_6d994f9dc16603f37ca7a470ba98137cc3b4f3819df4e4b4f96539c96a6d9162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d994f9dc16603f37ca7a470ba98137cc3b4f3819df4e4b4f96539c96a6d9162->enter($__internal_6d994f9dc16603f37ca7a470ba98137cc3b4f3819df4e4b4f96539c96a6d9162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7ee433ac722ad4dd6f06b19f4ac5d1b45447425a165759dfb1570dfd0408d12c->leave($__internal_7ee433ac722ad4dd6f06b19f4ac5d1b45447425a165759dfb1570dfd0408d12c_prof);

        
        $__internal_6d994f9dc16603f37ca7a470ba98137cc3b4f3819df4e4b4f96539c96a6d9162->leave($__internal_6d994f9dc16603f37ca7a470ba98137cc3b4f3819df4e4b4f96539c96a6d9162_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
