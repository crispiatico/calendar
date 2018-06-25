<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_417104dac4c59efa98c98816585cf1b2747442076eb4fc58b5e082e230ff0c93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f94b6553ca4d8b6f8c93d59bd0f7da5cecd840ce33e898c43a287848d182ee50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94b6553ca4d8b6f8c93d59bd0f7da5cecd840ce33e898c43a287848d182ee50->enter($__internal_f94b6553ca4d8b6f8c93d59bd0f7da5cecd840ce33e898c43a287848d182ee50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_3c8dcbcd065b978e020d55b2027028447197c6507f7e8bf424cb01126babbeaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c8dcbcd065b978e020d55b2027028447197c6507f7e8bf424cb01126babbeaf->enter($__internal_3c8dcbcd065b978e020d55b2027028447197c6507f7e8bf424cb01126babbeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_f94b6553ca4d8b6f8c93d59bd0f7da5cecd840ce33e898c43a287848d182ee50->leave($__internal_f94b6553ca4d8b6f8c93d59bd0f7da5cecd840ce33e898c43a287848d182ee50_prof);

        
        $__internal_3c8dcbcd065b978e020d55b2027028447197c6507f7e8bf424cb01126babbeaf->leave($__internal_3c8dcbcd065b978e020d55b2027028447197c6507f7e8bf424cb01126babbeaf_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_73061258232f7c2a97f22898f576958e6cd6d3a0a2bfdbc5a355b8d3e3dc7fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73061258232f7c2a97f22898f576958e6cd6d3a0a2bfdbc5a355b8d3e3dc7fbf->enter($__internal_73061258232f7c2a97f22898f576958e6cd6d3a0a2bfdbc5a355b8d3e3dc7fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_3cb2678f9bb3b2c56f26cef50765a339c8ddf558f0761e5ff6e198012e82e7c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb2678f9bb3b2c56f26cef50765a339c8ddf558f0761e5ff6e198012e82e7c8->enter($__internal_3cb2678f9bb3b2c56f26cef50765a339c8ddf558f0761e5ff6e198012e82e7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_3cb2678f9bb3b2c56f26cef50765a339c8ddf558f0761e5ff6e198012e82e7c8->leave($__internal_3cb2678f9bb3b2c56f26cef50765a339c8ddf558f0761e5ff6e198012e82e7c8_prof);

        
        $__internal_73061258232f7c2a97f22898f576958e6cd6d3a0a2bfdbc5a355b8d3e3dc7fbf->leave($__internal_73061258232f7c2a97f22898f576958e6cd6d3a0a2bfdbc5a355b8d3e3dc7fbf_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7c16030fa469762875ad598a07511754419ee9508135941d9fd18f3f126c9909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c16030fa469762875ad598a07511754419ee9508135941d9fd18f3f126c9909->enter($__internal_7c16030fa469762875ad598a07511754419ee9508135941d9fd18f3f126c9909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ca23a7dd66e0d0c5bbc7ede8475b08c3e539b6051658ffcc77168c44b9d17e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca23a7dd66e0d0c5bbc7ede8475b08c3e539b6051658ffcc77168c44b9d17e02->enter($__internal_ca23a7dd66e0d0c5bbc7ede8475b08c3e539b6051658ffcc77168c44b9d17e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_ca23a7dd66e0d0c5bbc7ede8475b08c3e539b6051658ffcc77168c44b9d17e02->leave($__internal_ca23a7dd66e0d0c5bbc7ede8475b08c3e539b6051658ffcc77168c44b9d17e02_prof);

        
        $__internal_7c16030fa469762875ad598a07511754419ee9508135941d9fd18f3f126c9909->leave($__internal_7c16030fa469762875ad598a07511754419ee9508135941d9fd18f3f126c9909_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_00544b0576541ceca55a9126c5cf3b328e4f1e882b68edd6b95bf47f1b00a0d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00544b0576541ceca55a9126c5cf3b328e4f1e882b68edd6b95bf47f1b00a0d4->enter($__internal_00544b0576541ceca55a9126c5cf3b328e4f1e882b68edd6b95bf47f1b00a0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_452b62bfb1de1dc4426b63561ff02378423f66f48d4137c471d41e98744248aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452b62bfb1de1dc4426b63561ff02378423f66f48d4137c471d41e98744248aa->enter($__internal_452b62bfb1de1dc4426b63561ff02378423f66f48d4137c471d41e98744248aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_452b62bfb1de1dc4426b63561ff02378423f66f48d4137c471d41e98744248aa->leave($__internal_452b62bfb1de1dc4426b63561ff02378423f66f48d4137c471d41e98744248aa_prof);

        
        $__internal_00544b0576541ceca55a9126c5cf3b328e4f1e882b68edd6b95bf47f1b00a0d4->leave($__internal_00544b0576541ceca55a9126c5cf3b328e4f1e882b68edd6b95bf47f1b00a0d4_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_dac8c60da9e8cef1a3419fd309495dc1c1d6c66fc79548aabc4f4b53a405925d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac8c60da9e8cef1a3419fd309495dc1c1d6c66fc79548aabc4f4b53a405925d->enter($__internal_dac8c60da9e8cef1a3419fd309495dc1c1d6c66fc79548aabc4f4b53a405925d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2689779cc080fc73d9c5fa1f3a14c02f3c0eadb5479792f0bc211ef1a53c75ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2689779cc080fc73d9c5fa1f3a14c02f3c0eadb5479792f0bc211ef1a53c75ca->enter($__internal_2689779cc080fc73d9c5fa1f3a14c02f3c0eadb5479792f0bc211ef1a53c75ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_2689779cc080fc73d9c5fa1f3a14c02f3c0eadb5479792f0bc211ef1a53c75ca->leave($__internal_2689779cc080fc73d9c5fa1f3a14c02f3c0eadb5479792f0bc211ef1a53c75ca_prof);

        
        $__internal_dac8c60da9e8cef1a3419fd309495dc1c1d6c66fc79548aabc4f4b53a405925d->leave($__internal_dac8c60da9e8cef1a3419fd309495dc1c1d6c66fc79548aabc4f4b53a405925d_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_5836904eea299c0d040d6608d847e762eb5c8468749d2889f4f8035247f47b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5836904eea299c0d040d6608d847e762eb5c8468749d2889f4f8035247f47b18->enter($__internal_5836904eea299c0d040d6608d847e762eb5c8468749d2889f4f8035247f47b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_a70b75c5beff7b62e9c47ec2365dc7c0316bdab6c5bebc091147e5aa2264777c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70b75c5beff7b62e9c47ec2365dc7c0316bdab6c5bebc091147e5aa2264777c->enter($__internal_a70b75c5beff7b62e9c47ec2365dc7c0316bdab6c5bebc091147e5aa2264777c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_a70b75c5beff7b62e9c47ec2365dc7c0316bdab6c5bebc091147e5aa2264777c->leave($__internal_a70b75c5beff7b62e9c47ec2365dc7c0316bdab6c5bebc091147e5aa2264777c_prof);

        
        $__internal_5836904eea299c0d040d6608d847e762eb5c8468749d2889f4f8035247f47b18->leave($__internal_5836904eea299c0d040d6608d847e762eb5c8468749d2889f4f8035247f47b18_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_0d7dc1bacae890f44739d929aaaf92a399193b503e2f83db397c3e73b76713b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7dc1bacae890f44739d929aaaf92a399193b503e2f83db397c3e73b76713b3->enter($__internal_0d7dc1bacae890f44739d929aaaf92a399193b503e2f83db397c3e73b76713b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_2f4edfb8620826ed5a1c8ed8b1f27f8ef92e8b7fca9096e62f23a01a69e16b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f4edfb8620826ed5a1c8ed8b1f27f8ef92e8b7fca9096e62f23a01a69e16b5e->enter($__internal_2f4edfb8620826ed5a1c8ed8b1f27f8ef92e8b7fca9096e62f23a01a69e16b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_2f4edfb8620826ed5a1c8ed8b1f27f8ef92e8b7fca9096e62f23a01a69e16b5e->leave($__internal_2f4edfb8620826ed5a1c8ed8b1f27f8ef92e8b7fca9096e62f23a01a69e16b5e_prof);

        
        $__internal_0d7dc1bacae890f44739d929aaaf92a399193b503e2f83db397c3e73b76713b3->leave($__internal_0d7dc1bacae890f44739d929aaaf92a399193b503e2f83db397c3e73b76713b3_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_4019b2681595f4355437e7079eb56183f677c40a4555c87466c59400201b75e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4019b2681595f4355437e7079eb56183f677c40a4555c87466c59400201b75e4->enter($__internal_4019b2681595f4355437e7079eb56183f677c40a4555c87466c59400201b75e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_1ff3216bb0a64c61d7f4e54af9a10ebfa17682f4fdb70e7310e6199ad347339c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff3216bb0a64c61d7f4e54af9a10ebfa17682f4fdb70e7310e6199ad347339c->enter($__internal_1ff3216bb0a64c61d7f4e54af9a10ebfa17682f4fdb70e7310e6199ad347339c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_1ff3216bb0a64c61d7f4e54af9a10ebfa17682f4fdb70e7310e6199ad347339c->leave($__internal_1ff3216bb0a64c61d7f4e54af9a10ebfa17682f4fdb70e7310e6199ad347339c_prof);

        
        $__internal_4019b2681595f4355437e7079eb56183f677c40a4555c87466c59400201b75e4->leave($__internal_4019b2681595f4355437e7079eb56183f677c40a4555c87466c59400201b75e4_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0176ba534b017b20e7da1288af6dde74f1f981e16a42b59a30c30e4b52d62dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0176ba534b017b20e7da1288af6dde74f1f981e16a42b59a30c30e4b52d62dc9->enter($__internal_0176ba534b017b20e7da1288af6dde74f1f981e16a42b59a30c30e4b52d62dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_61d9477a3c22f520cf835180efb90e5116b8acdb320f573623ec247b5be71061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d9477a3c22f520cf835180efb90e5116b8acdb320f573623ec247b5be71061->enter($__internal_61d9477a3c22f520cf835180efb90e5116b8acdb320f573623ec247b5be71061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_61d9477a3c22f520cf835180efb90e5116b8acdb320f573623ec247b5be71061->leave($__internal_61d9477a3c22f520cf835180efb90e5116b8acdb320f573623ec247b5be71061_prof);

        
        $__internal_0176ba534b017b20e7da1288af6dde74f1f981e16a42b59a30c30e4b52d62dc9->leave($__internal_0176ba534b017b20e7da1288af6dde74f1f981e16a42b59a30c30e4b52d62dc9_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
