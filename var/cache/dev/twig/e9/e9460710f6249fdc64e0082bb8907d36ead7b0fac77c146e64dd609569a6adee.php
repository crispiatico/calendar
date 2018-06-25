<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_e96cc985362857f80ad983e8b3c3903b29f937019aeb0ce4fa6b220f72accd42 extends Twig_Template
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
        $__internal_2a2b80e22d9b260b209f81bc2ab2403507acc4737c98a3319bc9ba8be860d038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2b80e22d9b260b209f81bc2ab2403507acc4737c98a3319bc9ba8be860d038->enter($__internal_2a2b80e22d9b260b209f81bc2ab2403507acc4737c98a3319bc9ba8be860d038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_6f106f17b6e008af1bcb16815c132563c465a6393b9e757c88d3c891ccf8c6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f106f17b6e008af1bcb16815c132563c465a6393b9e757c88d3c891ccf8c6e7->enter($__internal_6f106f17b6e008af1bcb16815c132563c465a6393b9e757c88d3c891ccf8c6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2a2b80e22d9b260b209f81bc2ab2403507acc4737c98a3319bc9ba8be860d038->leave($__internal_2a2b80e22d9b260b209f81bc2ab2403507acc4737c98a3319bc9ba8be860d038_prof);

        
        $__internal_6f106f17b6e008af1bcb16815c132563c465a6393b9e757c88d3c891ccf8c6e7->leave($__internal_6f106f17b6e008af1bcb16815c132563c465a6393b9e757c88d3c891ccf8c6e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
