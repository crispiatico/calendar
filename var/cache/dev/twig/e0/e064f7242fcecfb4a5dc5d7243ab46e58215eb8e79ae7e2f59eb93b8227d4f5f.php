<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_7f3b007c5bd83c4ec0fe464c7bf9689da23e1a27f7757bf882d76440c2ec985a extends Twig_Template
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
        $__internal_509b876ef5ffa0de70fb500924c1b5d239c8014e213382e09afe9d9ce54fafcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509b876ef5ffa0de70fb500924c1b5d239c8014e213382e09afe9d9ce54fafcb->enter($__internal_509b876ef5ffa0de70fb500924c1b5d239c8014e213382e09afe9d9ce54fafcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e441ed5265318c12337ff0de52324daacfda85ea020ad4611ebbf2de5f2239d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e441ed5265318c12337ff0de52324daacfda85ea020ad4611ebbf2de5f2239d2->enter($__internal_e441ed5265318c12337ff0de52324daacfda85ea020ad4611ebbf2de5f2239d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_509b876ef5ffa0de70fb500924c1b5d239c8014e213382e09afe9d9ce54fafcb->leave($__internal_509b876ef5ffa0de70fb500924c1b5d239c8014e213382e09afe9d9ce54fafcb_prof);

        
        $__internal_e441ed5265318c12337ff0de52324daacfda85ea020ad4611ebbf2de5f2239d2->leave($__internal_e441ed5265318c12337ff0de52324daacfda85ea020ad4611ebbf2de5f2239d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/container_attributes.html.php");
    }
}
