<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_147f66e757e721a99aff6bb2399df67334c3b28867be95ff99eaf50da88bbabb extends Twig_Template
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
        $__internal_f6dbebbc41a01761d5998e45cfbb8068d58e600e3695c4f41238b906985ef8c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6dbebbc41a01761d5998e45cfbb8068d58e600e3695c4f41238b906985ef8c4->enter($__internal_f6dbebbc41a01761d5998e45cfbb8068d58e600e3695c4f41238b906985ef8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_d5f2715954ffeea403bfc5d6bccfe0e07b92e5444f6aeabfc4419efdab791a83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f2715954ffeea403bfc5d6bccfe0e07b92e5444f6aeabfc4419efdab791a83->enter($__internal_d5f2715954ffeea403bfc5d6bccfe0e07b92e5444f6aeabfc4419efdab791a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_f6dbebbc41a01761d5998e45cfbb8068d58e600e3695c4f41238b906985ef8c4->leave($__internal_f6dbebbc41a01761d5998e45cfbb8068d58e600e3695c4f41238b906985ef8c4_prof);

        
        $__internal_d5f2715954ffeea403bfc5d6bccfe0e07b92e5444f6aeabfc4419efdab791a83->leave($__internal_d5f2715954ffeea403bfc5d6bccfe0e07b92e5444f6aeabfc4419efdab791a83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/form_label.html.php");
    }
}
