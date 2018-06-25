<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4ca728a7e69b2923b77b84e1671e46baa220ef405f4cb8704358ed48de0706e1 extends Twig_Template
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
        $__internal_0fe6f0442c8d882bf45bb9f940f95ba7bff9ada3a2acd05f0967c695342a2e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe6f0442c8d882bf45bb9f940f95ba7bff9ada3a2acd05f0967c695342a2e44->enter($__internal_0fe6f0442c8d882bf45bb9f940f95ba7bff9ada3a2acd05f0967c695342a2e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_7ecbfd86962133dc306c333983ff2d33976f600510e5c473ba2a66230a106f43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ecbfd86962133dc306c333983ff2d33976f600510e5c473ba2a66230a106f43->enter($__internal_7ecbfd86962133dc306c333983ff2d33976f600510e5c473ba2a66230a106f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0fe6f0442c8d882bf45bb9f940f95ba7bff9ada3a2acd05f0967c695342a2e44->leave($__internal_0fe6f0442c8d882bf45bb9f940f95ba7bff9ada3a2acd05f0967c695342a2e44_prof);

        
        $__internal_7ecbfd86962133dc306c333983ff2d33976f600510e5c473ba2a66230a106f43->leave($__internal_7ecbfd86962133dc306c333983ff2d33976f600510e5c473ba2a66230a106f43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
