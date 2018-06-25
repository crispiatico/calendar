<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_3ac374967ee5d6d2dfc4cab60690a3a82c7a449f83302d2827e01429262ff10d extends Twig_Template
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
        $__internal_6a5116891779ec61918f796d4bd89c4a20d7a76fd3d5c6f01f70c1c3ec6f5936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5116891779ec61918f796d4bd89c4a20d7a76fd3d5c6f01f70c1c3ec6f5936->enter($__internal_6a5116891779ec61918f796d4bd89c4a20d7a76fd3d5c6f01f70c1c3ec6f5936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_713a89428a81ca178cbd76188ec97c979e42e5041da296da8d8267d760f09c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_713a89428a81ca178cbd76188ec97c979e42e5041da296da8d8267d760f09c97->enter($__internal_713a89428a81ca178cbd76188ec97c979e42e5041da296da8d8267d760f09c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6a5116891779ec61918f796d4bd89c4a20d7a76fd3d5c6f01f70c1c3ec6f5936->leave($__internal_6a5116891779ec61918f796d4bd89c4a20d7a76fd3d5c6f01f70c1c3ec6f5936_prof);

        
        $__internal_713a89428a81ca178cbd76188ec97c979e42e5041da296da8d8267d760f09c97->leave($__internal_713a89428a81ca178cbd76188ec97c979e42e5041da296da8d8267d760f09c97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php");
    }
}
