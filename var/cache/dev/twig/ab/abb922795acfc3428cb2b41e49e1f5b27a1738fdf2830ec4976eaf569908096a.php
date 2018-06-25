<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_94d5558e6295c3bdaeb8265dccacf73cf0fe036c1f0f56f6c8b45fffca56951b extends Twig_Template
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
        $__internal_4fb4bbbf5a6535126f184396b45ffe934905bba517d2923efb317561dfac766b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb4bbbf5a6535126f184396b45ffe934905bba517d2923efb317561dfac766b->enter($__internal_4fb4bbbf5a6535126f184396b45ffe934905bba517d2923efb317561dfac766b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f19a4d1d7cddf285c23a4ac2330851a23502ad46109467566e4425f9304a1484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f19a4d1d7cddf285c23a4ac2330851a23502ad46109467566e4425f9304a1484->enter($__internal_f19a4d1d7cddf285c23a4ac2330851a23502ad46109467566e4425f9304a1484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4fb4bbbf5a6535126f184396b45ffe934905bba517d2923efb317561dfac766b->leave($__internal_4fb4bbbf5a6535126f184396b45ffe934905bba517d2923efb317561dfac766b_prof);

        
        $__internal_f19a4d1d7cddf285c23a4ac2330851a23502ad46109467566e4425f9304a1484->leave($__internal_f19a4d1d7cddf285c23a4ac2330851a23502ad46109467566e4425f9304a1484_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
