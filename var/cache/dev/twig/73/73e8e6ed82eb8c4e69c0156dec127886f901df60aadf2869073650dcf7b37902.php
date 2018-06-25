<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_284162a4db41587a6058f7c94436a03881eaff007c19a0937f07a23105905883 extends Twig_Template
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
        $__internal_a8e43092721120fa4a71760f926c0d21599ae6ab0983b53360dda69aa8b442a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e43092721120fa4a71760f926c0d21599ae6ab0983b53360dda69aa8b442a6->enter($__internal_a8e43092721120fa4a71760f926c0d21599ae6ab0983b53360dda69aa8b442a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_cb85442d8aa4e70947a1f2f5a3158dfe39d708be495d904be3af71a18cf68f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb85442d8aa4e70947a1f2f5a3158dfe39d708be495d904be3af71a18cf68f59->enter($__internal_cb85442d8aa4e70947a1f2f5a3158dfe39d708be495d904be3af71a18cf68f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a8e43092721120fa4a71760f926c0d21599ae6ab0983b53360dda69aa8b442a6->leave($__internal_a8e43092721120fa4a71760f926c0d21599ae6ab0983b53360dda69aa8b442a6_prof);

        
        $__internal_cb85442d8aa4e70947a1f2f5a3158dfe39d708be495d904be3af71a18cf68f59->leave($__internal_cb85442d8aa4e70947a1f2f5a3158dfe39d708be495d904be3af71a18cf68f59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
