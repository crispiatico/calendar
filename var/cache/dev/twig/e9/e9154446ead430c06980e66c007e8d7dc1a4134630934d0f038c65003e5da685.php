<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d394f54f1502e4a14fbcdc451e1f28e96a0047dd83abade71a546009d585d437 extends Twig_Template
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
        $__internal_aa2cbec12feac64423388ab1c0ead9d6b8f4f41b1d0114de2cc149f72237dfa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2cbec12feac64423388ab1c0ead9d6b8f4f41b1d0114de2cc149f72237dfa2->enter($__internal_aa2cbec12feac64423388ab1c0ead9d6b8f4f41b1d0114de2cc149f72237dfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_1ae7b906c98293ef868fc674f08fae90c779844934567179e2a253649c578f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae7b906c98293ef868fc674f08fae90c779844934567179e2a253649c578f22->enter($__internal_1ae7b906c98293ef868fc674f08fae90c779844934567179e2a253649c578f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_aa2cbec12feac64423388ab1c0ead9d6b8f4f41b1d0114de2cc149f72237dfa2->leave($__internal_aa2cbec12feac64423388ab1c0ead9d6b8f4f41b1d0114de2cc149f72237dfa2_prof);

        
        $__internal_1ae7b906c98293ef868fc674f08fae90c779844934567179e2a253649c578f22->leave($__internal_1ae7b906c98293ef868fc674f08fae90c779844934567179e2a253649c578f22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
