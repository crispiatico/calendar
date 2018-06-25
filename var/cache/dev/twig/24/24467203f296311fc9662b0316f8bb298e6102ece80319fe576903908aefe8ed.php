<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_88cee0301bd398cfce85dfcd7b897e395a99db4c347d58aa9f1f0ed214dbd05f extends Twig_Template
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
        $__internal_dafddc428c9aa033f5f54d0e598f053b807e9f4b1f67f55627fa1605d7481030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafddc428c9aa033f5f54d0e598f053b807e9f4b1f67f55627fa1605d7481030->enter($__internal_dafddc428c9aa033f5f54d0e598f053b807e9f4b1f67f55627fa1605d7481030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f8cef518ac6a9e0b1226eb5da9ba2bda1c6e64eb78e9a57d7ddcc5d8cb3e8e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8cef518ac6a9e0b1226eb5da9ba2bda1c6e64eb78e9a57d7ddcc5d8cb3e8e49->enter($__internal_f8cef518ac6a9e0b1226eb5da9ba2bda1c6e64eb78e9a57d7ddcc5d8cb3e8e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_dafddc428c9aa033f5f54d0e598f053b807e9f4b1f67f55627fa1605d7481030->leave($__internal_dafddc428c9aa033f5f54d0e598f053b807e9f4b1f67f55627fa1605d7481030_prof);

        
        $__internal_f8cef518ac6a9e0b1226eb5da9ba2bda1c6e64eb78e9a57d7ddcc5d8cb3e8e49->leave($__internal_f8cef518ac6a9e0b1226eb5da9ba2bda1c6e64eb78e9a57d7ddcc5d8cb3e8e49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
