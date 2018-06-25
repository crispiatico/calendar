<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_15366164a4518a8ec5b04e8c5a0e78fb95c86eb9e23920f7333756afafa3d126 extends Twig_Template
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
        $__internal_74042fc509baae1a9cc985d1b1f17520d2f7cbfc483a433d31a7cb36915a5410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74042fc509baae1a9cc985d1b1f17520d2f7cbfc483a433d31a7cb36915a5410->enter($__internal_74042fc509baae1a9cc985d1b1f17520d2f7cbfc483a433d31a7cb36915a5410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_d50c757f8d4488f835aa20031083e7024687a8c2312c9c30d739e9624ad8bb2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50c757f8d4488f835aa20031083e7024687a8c2312c9c30d739e9624ad8bb2c->enter($__internal_d50c757f8d4488f835aa20031083e7024687a8c2312c9c30d739e9624ad8bb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_74042fc509baae1a9cc985d1b1f17520d2f7cbfc483a433d31a7cb36915a5410->leave($__internal_74042fc509baae1a9cc985d1b1f17520d2f7cbfc483a433d31a7cb36915a5410_prof);

        
        $__internal_d50c757f8d4488f835aa20031083e7024687a8c2312c9c30d739e9624ad8bb2c->leave($__internal_d50c757f8d4488f835aa20031083e7024687a8c2312c9c30d739e9624ad8bb2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php");
    }
}
