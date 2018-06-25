<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5f793f972f70f9d6558b20918a9bf9708954f850a61df23ddb9d869efe15273b extends Twig_Template
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
        $__internal_067343893b503b0c6f90a19b3f3b12a43cd9864ff5f1950c594a1cb1e102382e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067343893b503b0c6f90a19b3f3b12a43cd9864ff5f1950c594a1cb1e102382e->enter($__internal_067343893b503b0c6f90a19b3f3b12a43cd9864ff5f1950c594a1cb1e102382e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_90cd6f34f1deec75a523509a24fe18579c2df451a35c88e236878ff4f4b185b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90cd6f34f1deec75a523509a24fe18579c2df451a35c88e236878ff4f4b185b3->enter($__internal_90cd6f34f1deec75a523509a24fe18579c2df451a35c88e236878ff4f4b185b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_067343893b503b0c6f90a19b3f3b12a43cd9864ff5f1950c594a1cb1e102382e->leave($__internal_067343893b503b0c6f90a19b3f3b12a43cd9864ff5f1950c594a1cb1e102382e_prof);

        
        $__internal_90cd6f34f1deec75a523509a24fe18579c2df451a35c88e236878ff4f4b185b3->leave($__internal_90cd6f34f1deec75a523509a24fe18579c2df451a35c88e236878ff4f4b185b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
