<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5a4ced02defd0d0c543bfa1faa05191d01611a31a761e3efcb22491d1c85fce5 extends Twig_Template
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
        $__internal_e76f1c51b8a069ec8c20070b52bc97855281333b74da199486f5c0fd70842fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e76f1c51b8a069ec8c20070b52bc97855281333b74da199486f5c0fd70842fd3->enter($__internal_e76f1c51b8a069ec8c20070b52bc97855281333b74da199486f5c0fd70842fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8cdd5bc3a237f2f8f36f0822f7c411a49b3ad56d0291d848fb196572055dcbf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cdd5bc3a237f2f8f36f0822f7c411a49b3ad56d0291d848fb196572055dcbf3->enter($__internal_8cdd5bc3a237f2f8f36f0822f7c411a49b3ad56d0291d848fb196572055dcbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e76f1c51b8a069ec8c20070b52bc97855281333b74da199486f5c0fd70842fd3->leave($__internal_e76f1c51b8a069ec8c20070b52bc97855281333b74da199486f5c0fd70842fd3_prof);

        
        $__internal_8cdd5bc3a237f2f8f36f0822f7c411a49b3ad56d0291d848fb196572055dcbf3->leave($__internal_8cdd5bc3a237f2f8f36f0822f7c411a49b3ad56d0291d848fb196572055dcbf3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
