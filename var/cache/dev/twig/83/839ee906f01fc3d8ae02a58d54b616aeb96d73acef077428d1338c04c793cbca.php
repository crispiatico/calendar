<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_29b90a66549a471961fee2a9721b3540f531df104be3b221e6888523dcd8c925 extends Twig_Template
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
        $__internal_c64f7cd7c329fa191ae3e9d940169963a1986519672b01359a08a16df95c6683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64f7cd7c329fa191ae3e9d940169963a1986519672b01359a08a16df95c6683->enter($__internal_c64f7cd7c329fa191ae3e9d940169963a1986519672b01359a08a16df95c6683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_c4879bad77c2d8cbc7efec621d504cc9eb683d5d23da255ff30c4a8513f392d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4879bad77c2d8cbc7efec621d504cc9eb683d5d23da255ff30c4a8513f392d9->enter($__internal_c4879bad77c2d8cbc7efec621d504cc9eb683d5d23da255ff30c4a8513f392d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c64f7cd7c329fa191ae3e9d940169963a1986519672b01359a08a16df95c6683->leave($__internal_c64f7cd7c329fa191ae3e9d940169963a1986519672b01359a08a16df95c6683_prof);

        
        $__internal_c4879bad77c2d8cbc7efec621d504cc9eb683d5d23da255ff30c4a8513f392d9->leave($__internal_c4879bad77c2d8cbc7efec621d504cc9eb683d5d23da255ff30c4a8513f392d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/number_widget.html.php");
    }
}
