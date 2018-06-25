<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_30c8704e0bab786415848e868e823ffed1894ee017a1f831f818553c85951971 extends Twig_Template
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
        $__internal_dd333552fbeaa489be335198a007b1af817ad0a490673b7bcedd65403cb71d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd333552fbeaa489be335198a007b1af817ad0a490673b7bcedd65403cb71d97->enter($__internal_dd333552fbeaa489be335198a007b1af817ad0a490673b7bcedd65403cb71d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6421a272382c521a7b966fd70dd2c2cbec80d51e78dfa91edf1b29d1b35a01d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6421a272382c521a7b966fd70dd2c2cbec80d51e78dfa91edf1b29d1b35a01d5->enter($__internal_6421a272382c521a7b966fd70dd2c2cbec80d51e78dfa91edf1b29d1b35a01d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_dd333552fbeaa489be335198a007b1af817ad0a490673b7bcedd65403cb71d97->leave($__internal_dd333552fbeaa489be335198a007b1af817ad0a490673b7bcedd65403cb71d97_prof);

        
        $__internal_6421a272382c521a7b966fd70dd2c2cbec80d51e78dfa91edf1b29d1b35a01d5->leave($__internal_6421a272382c521a7b966fd70dd2c2cbec80d51e78dfa91edf1b29d1b35a01d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/symfonycalendar/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
