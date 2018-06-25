<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a06b93f4dabf384a9f18cc8b9dc1acbf2f5430d6a70f4726b8d2b9743b3029fd extends Twig_Template
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
        $__internal_a79aeba7108c1a800fecd65c63c70b4d1ecadba6a264f84652ee1798d8faf558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79aeba7108c1a800fecd65c63c70b4d1ecadba6a264f84652ee1798d8faf558->enter($__internal_a79aeba7108c1a800fecd65c63c70b4d1ecadba6a264f84652ee1798d8faf558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_a70cb4e3565800de4719d9be4756915a9ff0f7f7ac83a05bd6f3091e2f14a6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70cb4e3565800de4719d9be4756915a9ff0f7f7ac83a05bd6f3091e2f14a6f8->enter($__internal_a70cb4e3565800de4719d9be4756915a9ff0f7f7ac83a05bd6f3091e2f14a6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a79aeba7108c1a800fecd65c63c70b4d1ecadba6a264f84652ee1798d8faf558->leave($__internal_a79aeba7108c1a800fecd65c63c70b4d1ecadba6a264f84652ee1798d8faf558_prof);

        
        $__internal_a70cb4e3565800de4719d9be4756915a9ff0f7f7ac83a05bd6f3091e2f14a6f8->leave($__internal_a70cb4e3565800de4719d9be4756915a9ff0f7f7ac83a05bd6f3091e2f14a6f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
