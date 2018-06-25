<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_ee4f9e3c90d9dcec483ae5cc3f8b445b77eaa76aa790aa75aeb358db75fc2b10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c10bdb81ce32036e817712df07bace0c49d82e456f6929dc3ef77cff248f0b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10bdb81ce32036e817712df07bace0c49d82e456f6929dc3ef77cff248f0b4a->enter($__internal_c10bdb81ce32036e817712df07bace0c49d82e456f6929dc3ef77cff248f0b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_2eb86373f644ac000ed81441c74076be158b6ee1dbf0090eef78f92ed4c203cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb86373f644ac000ed81441c74076be158b6ee1dbf0090eef78f92ed4c203cf->enter($__internal_2eb86373f644ac000ed81441c74076be158b6ee1dbf0090eef78f92ed4c203cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c10bdb81ce32036e817712df07bace0c49d82e456f6929dc3ef77cff248f0b4a->leave($__internal_c10bdb81ce32036e817712df07bace0c49d82e456f6929dc3ef77cff248f0b4a_prof);

        
        $__internal_2eb86373f644ac000ed81441c74076be158b6ee1dbf0090eef78f92ed4c203cf->leave($__internal_2eb86373f644ac000ed81441c74076be158b6ee1dbf0090eef78f92ed4c203cf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_374d09e448dcdf3e8e0babce4d5dbd899654078a756926853d8d84552a7a9a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374d09e448dcdf3e8e0babce4d5dbd899654078a756926853d8d84552a7a9a05->enter($__internal_374d09e448dcdf3e8e0babce4d5dbd899654078a756926853d8d84552a7a9a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e87485d8f81822165b426ca74051c4711e5e8015b67d61133313819538b99bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e87485d8f81822165b426ca74051c4711e5e8015b67d61133313819538b99bac->enter($__internal_e87485d8f81822165b426ca74051c4711e5e8015b67d61133313819538b99bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e87485d8f81822165b426ca74051c4711e5e8015b67d61133313819538b99bac->leave($__internal_e87485d8f81822165b426ca74051c4711e5e8015b67d61133313819538b99bac_prof);

        
        $__internal_374d09e448dcdf3e8e0babce4d5dbd899654078a756926853d8d84552a7a9a05->leave($__internal_374d09e448dcdf3e8e0babce4d5dbd899654078a756926853d8d84552a7a9a05_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/var/www/html/symfonycalendar/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
