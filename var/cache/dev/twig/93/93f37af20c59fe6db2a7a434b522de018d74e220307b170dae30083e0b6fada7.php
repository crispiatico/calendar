<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_347ccb0a71172fcc1a33f8d26ddcc9de3ac01db09ec303d5b3963624feed5235 extends Twig_Template
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
        $__internal_04febb2cfaebcf0debd4e004897cea7aec82384d224e2d35d7464c9fc2217648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04febb2cfaebcf0debd4e004897cea7aec82384d224e2d35d7464c9fc2217648->enter($__internal_04febb2cfaebcf0debd4e004897cea7aec82384d224e2d35d7464c9fc2217648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_564de5fe2f8085dc58d4201f2d4a224c309ff81bd489c7233e6d8e84eeada8b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564de5fe2f8085dc58d4201f2d4a224c309ff81bd489c7233e6d8e84eeada8b9->enter($__internal_564de5fe2f8085dc58d4201f2d4a224c309ff81bd489c7233e6d8e84eeada8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_04febb2cfaebcf0debd4e004897cea7aec82384d224e2d35d7464c9fc2217648->leave($__internal_04febb2cfaebcf0debd4e004897cea7aec82384d224e2d35d7464c9fc2217648_prof);

        
        $__internal_564de5fe2f8085dc58d4201f2d4a224c309ff81bd489c7233e6d8e84eeada8b9->leave($__internal_564de5fe2f8085dc58d4201f2d4a224c309ff81bd489c7233e6d8e84eeada8b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
