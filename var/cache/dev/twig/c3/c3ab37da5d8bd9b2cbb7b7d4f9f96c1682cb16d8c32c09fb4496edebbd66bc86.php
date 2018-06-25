<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_181a823a34863080a3c3f45f771f227cc7eabb15a46008a75846bfd4c2dfce9c extends Twig_Template
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
        $__internal_183f98345e49c76afcd7ae9f0438b23d73f4506fa57877021ef645473d774983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183f98345e49c76afcd7ae9f0438b23d73f4506fa57877021ef645473d774983->enter($__internal_183f98345e49c76afcd7ae9f0438b23d73f4506fa57877021ef645473d774983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_c9649a3379be17773324815c0e08ba8379e672b43365666e269e85b89b5ad88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9649a3379be17773324815c0e08ba8379e672b43365666e269e85b89b5ad88f->enter($__internal_c9649a3379be17773324815c0e08ba8379e672b43365666e269e85b89b5ad88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_183f98345e49c76afcd7ae9f0438b23d73f4506fa57877021ef645473d774983->leave($__internal_183f98345e49c76afcd7ae9f0438b23d73f4506fa57877021ef645473d774983_prof);

        
        $__internal_c9649a3379be17773324815c0e08ba8379e672b43365666e269e85b89b5ad88f->leave($__internal_c9649a3379be17773324815c0e08ba8379e672b43365666e269e85b89b5ad88f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
