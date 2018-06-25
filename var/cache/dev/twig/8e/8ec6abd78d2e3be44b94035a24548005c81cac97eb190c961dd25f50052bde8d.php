<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_14fbacb1cec6775135aab3e900641a98e3bf759da20a2404b9f1ae6d0d99ef34 extends Twig_Template
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
        $__internal_8b22e39e8835870676501a0b26cc736bde3c909ede2604658d8018d03ee874f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b22e39e8835870676501a0b26cc736bde3c909ede2604658d8018d03ee874f3->enter($__internal_8b22e39e8835870676501a0b26cc736bde3c909ede2604658d8018d03ee874f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_02ea4cb0d55e17e796aef8d5ee495980ef898e84ea77be840db14454ead15dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ea4cb0d55e17e796aef8d5ee495980ef898e84ea77be840db14454ead15dbb->enter($__internal_02ea4cb0d55e17e796aef8d5ee495980ef898e84ea77be840db14454ead15dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_8b22e39e8835870676501a0b26cc736bde3c909ede2604658d8018d03ee874f3->leave($__internal_8b22e39e8835870676501a0b26cc736bde3c909ede2604658d8018d03ee874f3_prof);

        
        $__internal_02ea4cb0d55e17e796aef8d5ee495980ef898e84ea77be840db14454ead15dbb->leave($__internal_02ea4cb0d55e17e796aef8d5ee495980ef898e84ea77be840db14454ead15dbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
