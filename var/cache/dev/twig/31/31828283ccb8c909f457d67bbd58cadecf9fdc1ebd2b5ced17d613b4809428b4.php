<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_10272496f8ad9bb2513b17b058facf827d4100fa3438dfd2e496d4f6cc97fc0c extends Twig_Template
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
        $__internal_6a1bb0c82e414d3ee7d8d2888da6d584ab12a94571dcdefe40820e9e0d16c873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1bb0c82e414d3ee7d8d2888da6d584ab12a94571dcdefe40820e9e0d16c873->enter($__internal_6a1bb0c82e414d3ee7d8d2888da6d584ab12a94571dcdefe40820e9e0d16c873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_43685cd264bbdceeedcae530f0654530b7a20a2ae09bb632e5c4c24e71549392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43685cd264bbdceeedcae530f0654530b7a20a2ae09bb632e5c4c24e71549392->enter($__internal_43685cd264bbdceeedcae530f0654530b7a20a2ae09bb632e5c4c24e71549392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6a1bb0c82e414d3ee7d8d2888da6d584ab12a94571dcdefe40820e9e0d16c873->leave($__internal_6a1bb0c82e414d3ee7d8d2888da6d584ab12a94571dcdefe40820e9e0d16c873_prof);

        
        $__internal_43685cd264bbdceeedcae530f0654530b7a20a2ae09bb632e5c4c24e71549392->leave($__internal_43685cd264bbdceeedcae530f0654530b7a20a2ae09bb632e5c4c24e71549392_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
