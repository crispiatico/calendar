<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1dc2f66c32f682d9174e3edd4ca883e5d2d3df920738ed8823f02a2dd037c496 extends Twig_Template
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
        $__internal_fcd7dc5bd494eec2357141f4eb71bf999bb27a340413f3810ab7a0c3ef329dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd7dc5bd494eec2357141f4eb71bf999bb27a340413f3810ab7a0c3ef329dc2->enter($__internal_fcd7dc5bd494eec2357141f4eb71bf999bb27a340413f3810ab7a0c3ef329dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_500a3a2dbf71b84d5c82a83bc790e1ad5d34765b3d837946adbc9766fa3f9e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500a3a2dbf71b84d5c82a83bc790e1ad5d34765b3d837946adbc9766fa3f9e6e->enter($__internal_500a3a2dbf71b84d5c82a83bc790e1ad5d34765b3d837946adbc9766fa3f9e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_fcd7dc5bd494eec2357141f4eb71bf999bb27a340413f3810ab7a0c3ef329dc2->leave($__internal_fcd7dc5bd494eec2357141f4eb71bf999bb27a340413f3810ab7a0c3ef329dc2_prof);

        
        $__internal_500a3a2dbf71b84d5c82a83bc790e1ad5d34765b3d837946adbc9766fa3f9e6e->leave($__internal_500a3a2dbf71b84d5c82a83bc790e1ad5d34765b3d837946adbc9766fa3f9e6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
