<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3d677f10dd9045ffe521a2263cae3610411887f7e0073ffbb8ea5f58d54986a5 extends Twig_Template
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
        $__internal_c267a8434906e1af96cadcb144cc58ee22bec204691a0c6ea35ea21412e69f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c267a8434906e1af96cadcb144cc58ee22bec204691a0c6ea35ea21412e69f49->enter($__internal_c267a8434906e1af96cadcb144cc58ee22bec204691a0c6ea35ea21412e69f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_7156fb10ac33da3f2d4a7cae62df83da39709cfe3531d67f8e27143cf3018be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7156fb10ac33da3f2d4a7cae62df83da39709cfe3531d67f8e27143cf3018be5->enter($__internal_7156fb10ac33da3f2d4a7cae62df83da39709cfe3531d67f8e27143cf3018be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c267a8434906e1af96cadcb144cc58ee22bec204691a0c6ea35ea21412e69f49->leave($__internal_c267a8434906e1af96cadcb144cc58ee22bec204691a0c6ea35ea21412e69f49_prof);

        
        $__internal_7156fb10ac33da3f2d4a7cae62df83da39709cfe3531d67f8e27143cf3018be5->leave($__internal_7156fb10ac33da3f2d4a7cae62df83da39709cfe3531d67f8e27143cf3018be5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
