<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_750df43911107c6e07cafd853ed2a7c8786881068cbf2e5ba4c9a6561e92459b extends Twig_Template
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
        $__internal_20c692cbbfeffac6a5310f47b2d269b4ac6b93bd275f8e5d7c84864859f432c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c692cbbfeffac6a5310f47b2d269b4ac6b93bd275f8e5d7c84864859f432c0->enter($__internal_20c692cbbfeffac6a5310f47b2d269b4ac6b93bd275f8e5d7c84864859f432c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5249be83a0dfdac89d94b5d6b007237bea79a268b90e14a54c9b5abe60f726bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5249be83a0dfdac89d94b5d6b007237bea79a268b90e14a54c9b5abe60f726bc->enter($__internal_5249be83a0dfdac89d94b5d6b007237bea79a268b90e14a54c9b5abe60f726bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_20c692cbbfeffac6a5310f47b2d269b4ac6b93bd275f8e5d7c84864859f432c0->leave($__internal_20c692cbbfeffac6a5310f47b2d269b4ac6b93bd275f8e5d7c84864859f432c0_prof);

        
        $__internal_5249be83a0dfdac89d94b5d6b007237bea79a268b90e14a54c9b5abe60f726bc->leave($__internal_5249be83a0dfdac89d94b5d6b007237bea79a268b90e14a54c9b5abe60f726bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
