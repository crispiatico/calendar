<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8bacdb9ef1b7afa6f35a140015ab1634a74a453cf748fcfba8abcab5413de8e6 extends Twig_Template
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
        $__internal_1da312856f9e6900c5e3e6084b0896aa417629dd15f35c17cd519edb1882aa31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da312856f9e6900c5e3e6084b0896aa417629dd15f35c17cd519edb1882aa31->enter($__internal_1da312856f9e6900c5e3e6084b0896aa417629dd15f35c17cd519edb1882aa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8097ad0cd85ed21b6548aa1e32a9c97e3bfdd2c83ff1b66cdbd9fe12b85f6d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8097ad0cd85ed21b6548aa1e32a9c97e3bfdd2c83ff1b66cdbd9fe12b85f6d0b->enter($__internal_8097ad0cd85ed21b6548aa1e32a9c97e3bfdd2c83ff1b66cdbd9fe12b85f6d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1da312856f9e6900c5e3e6084b0896aa417629dd15f35c17cd519edb1882aa31->leave($__internal_1da312856f9e6900c5e3e6084b0896aa417629dd15f35c17cd519edb1882aa31_prof);

        
        $__internal_8097ad0cd85ed21b6548aa1e32a9c97e3bfdd2c83ff1b66cdbd9fe12b85f6d0b->leave($__internal_8097ad0cd85ed21b6548aa1e32a9c97e3bfdd2c83ff1b66cdbd9fe12b85f6d0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
