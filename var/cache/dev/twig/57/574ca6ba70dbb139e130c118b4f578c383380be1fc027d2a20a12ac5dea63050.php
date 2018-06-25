<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9acd31e9063436e3c86b9e2687e0eca77b1f03b7d77bcb9205c9df3e78ec1f7b extends Twig_Template
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
        $__internal_1b17b710a021cc1e04320404c3b440b313e8cf808852576b338ae3a56290fe30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b17b710a021cc1e04320404c3b440b313e8cf808852576b338ae3a56290fe30->enter($__internal_1b17b710a021cc1e04320404c3b440b313e8cf808852576b338ae3a56290fe30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_7401bab9119f337254a5ea5854f37250cf3352ff5c9319396974b4b95d149753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7401bab9119f337254a5ea5854f37250cf3352ff5c9319396974b4b95d149753->enter($__internal_7401bab9119f337254a5ea5854f37250cf3352ff5c9319396974b4b95d149753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1b17b710a021cc1e04320404c3b440b313e8cf808852576b338ae3a56290fe30->leave($__internal_1b17b710a021cc1e04320404c3b440b313e8cf808852576b338ae3a56290fe30_prof);

        
        $__internal_7401bab9119f337254a5ea5854f37250cf3352ff5c9319396974b4b95d149753->leave($__internal_7401bab9119f337254a5ea5854f37250cf3352ff5c9319396974b4b95d149753_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
