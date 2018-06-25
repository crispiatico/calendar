<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e0af533fb9e315134dcf07eaa65c7860113813a6938e518fe521c8341ed5e639 extends Twig_Template
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
        $__internal_da83fb802d17bd89cbba004fc41f1820fea54a36e5682af2c834e45e0be7a767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da83fb802d17bd89cbba004fc41f1820fea54a36e5682af2c834e45e0be7a767->enter($__internal_da83fb802d17bd89cbba004fc41f1820fea54a36e5682af2c834e45e0be7a767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_0daea54b318ac6a7ad6a69541eadf2cae3d381f66d64585b0efc7ddfb89a30db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0daea54b318ac6a7ad6a69541eadf2cae3d381f66d64585b0efc7ddfb89a30db->enter($__internal_0daea54b318ac6a7ad6a69541eadf2cae3d381f66d64585b0efc7ddfb89a30db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_da83fb802d17bd89cbba004fc41f1820fea54a36e5682af2c834e45e0be7a767->leave($__internal_da83fb802d17bd89cbba004fc41f1820fea54a36e5682af2c834e45e0be7a767_prof);

        
        $__internal_0daea54b318ac6a7ad6a69541eadf2cae3d381f66d64585b0efc7ddfb89a30db->leave($__internal_0daea54b318ac6a7ad6a69541eadf2cae3d381f66d64585b0efc7ddfb89a30db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
