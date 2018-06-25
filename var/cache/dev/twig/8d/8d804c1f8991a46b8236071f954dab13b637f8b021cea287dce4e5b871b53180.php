<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_de49c9eb53a3a99c4336555d10764665b17cfa5ed3f8f4d839cf41fe8e331fac extends Twig_Template
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
        $__internal_90857e6af5bed199db4611179722549c71bb6924f4f5661e5941049e8b71aaff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90857e6af5bed199db4611179722549c71bb6924f4f5661e5941049e8b71aaff->enter($__internal_90857e6af5bed199db4611179722549c71bb6924f4f5661e5941049e8b71aaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_a4ac28a1d5cebfcfae79f03cb84e218a7a9ca08360e20f6415df3fbebd738d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ac28a1d5cebfcfae79f03cb84e218a7a9ca08360e20f6415df3fbebd738d8b->enter($__internal_a4ac28a1d5cebfcfae79f03cb84e218a7a9ca08360e20f6415df3fbebd738d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_90857e6af5bed199db4611179722549c71bb6924f4f5661e5941049e8b71aaff->leave($__internal_90857e6af5bed199db4611179722549c71bb6924f4f5661e5941049e8b71aaff_prof);

        
        $__internal_a4ac28a1d5cebfcfae79f03cb84e218a7a9ca08360e20f6415df3fbebd738d8b->leave($__internal_a4ac28a1d5cebfcfae79f03cb84e218a7a9ca08360e20f6415df3fbebd738d8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/time_widget.html.php");
    }
}
