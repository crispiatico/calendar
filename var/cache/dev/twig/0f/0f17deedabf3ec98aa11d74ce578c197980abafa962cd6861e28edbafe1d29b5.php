<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3682b47522e6cc92e96b88aea9e630290a048af8453ebabb262a1e7711cbe6f3 extends Twig_Template
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
        $__internal_26b3ce4351f3dd178706bb0f7aa48ac6a516af2592cfdaf3e1a3a9f09e226e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b3ce4351f3dd178706bb0f7aa48ac6a516af2592cfdaf3e1a3a9f09e226e4d->enter($__internal_26b3ce4351f3dd178706bb0f7aa48ac6a516af2592cfdaf3e1a3a9f09e226e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_7ca4a1414259fa374deb26f69a80fde367121e91cb5728d9de899102462a6697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca4a1414259fa374deb26f69a80fde367121e91cb5728d9de899102462a6697->enter($__internal_7ca4a1414259fa374deb26f69a80fde367121e91cb5728d9de899102462a6697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_26b3ce4351f3dd178706bb0f7aa48ac6a516af2592cfdaf3e1a3a9f09e226e4d->leave($__internal_26b3ce4351f3dd178706bb0f7aa48ac6a516af2592cfdaf3e1a3a9f09e226e4d_prof);

        
        $__internal_7ca4a1414259fa374deb26f69a80fde367121e91cb5728d9de899102462a6697->leave($__internal_7ca4a1414259fa374deb26f69a80fde367121e91cb5728d9de899102462a6697_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
