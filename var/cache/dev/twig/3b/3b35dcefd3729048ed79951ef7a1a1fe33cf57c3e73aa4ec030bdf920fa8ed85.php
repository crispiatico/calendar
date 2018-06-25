<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_7a2ad75667551fcb1f8b3aaf80d2d118fe45e07ee5643f1831607107619bde6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5de4e1c6abd65121cf62736b68bc69213fa6dd4e1aa16841e8c8400f92aab7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de4e1c6abd65121cf62736b68bc69213fa6dd4e1aa16841e8c8400f92aab7a3->enter($__internal_5de4e1c6abd65121cf62736b68bc69213fa6dd4e1aa16841e8c8400f92aab7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_ec2b5d0a11c0fbe521ca41b81912f2196965f5678e2700df5bdc5b35f54c52d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2b5d0a11c0fbe521ca41b81912f2196965f5678e2700df5bdc5b35f54c52d5->enter($__internal_ec2b5d0a11c0fbe521ca41b81912f2196965f5678e2700df5bdc5b35f54c52d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_5de4e1c6abd65121cf62736b68bc69213fa6dd4e1aa16841e8c8400f92aab7a3->leave($__internal_5de4e1c6abd65121cf62736b68bc69213fa6dd4e1aa16841e8c8400f92aab7a3_prof);

        
        $__internal_ec2b5d0a11c0fbe521ca41b81912f2196965f5678e2700df5bdc5b35f54c52d5->leave($__internal_ec2b5d0a11c0fbe521ca41b81912f2196965f5678e2700df5bdc5b35f54c52d5_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_73be968829ee9b38ec5a153e428ca0ef311917f6a6df18d959c3e5bfb039290a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73be968829ee9b38ec5a153e428ca0ef311917f6a6df18d959c3e5bfb039290a->enter($__internal_73be968829ee9b38ec5a153e428ca0ef311917f6a6df18d959c3e5bfb039290a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_948f5b3721145099c42f70a9038ab95f73207eeef8a37defcf985f7317b66d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948f5b3721145099c42f70a9038ab95f73207eeef8a37defcf985f7317b66d53->enter($__internal_948f5b3721145099c42f70a9038ab95f73207eeef8a37defcf985f7317b66d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_948f5b3721145099c42f70a9038ab95f73207eeef8a37defcf985f7317b66d53->leave($__internal_948f5b3721145099c42f70a9038ab95f73207eeef8a37defcf985f7317b66d53_prof);

        
        $__internal_73be968829ee9b38ec5a153e428ca0ef311917f6a6df18d959c3e5bfb039290a->leave($__internal_73be968829ee9b38ec5a153e428ca0ef311917f6a6df18d959c3e5bfb039290a_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9ea1c2a5aa626a22499a6efa080d6addeab771bec27fbcce83f63896d4691a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea1c2a5aa626a22499a6efa080d6addeab771bec27fbcce83f63896d4691a4b->enter($__internal_9ea1c2a5aa626a22499a6efa080d6addeab771bec27fbcce83f63896d4691a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_ff5d039dbe8a1521ebb4da3efe128cf4dffe96b0b38248ea457103546ac64ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5d039dbe8a1521ebb4da3efe128cf4dffe96b0b38248ea457103546ac64ad8->enter($__internal_ff5d039dbe8a1521ebb4da3efe128cf4dffe96b0b38248ea457103546ac64ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ff5d039dbe8a1521ebb4da3efe128cf4dffe96b0b38248ea457103546ac64ad8->leave($__internal_ff5d039dbe8a1521ebb4da3efe128cf4dffe96b0b38248ea457103546ac64ad8_prof);

        
        $__internal_9ea1c2a5aa626a22499a6efa080d6addeab771bec27fbcce83f63896d4691a4b->leave($__internal_9ea1c2a5aa626a22499a6efa080d6addeab771bec27fbcce83f63896d4691a4b_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_61626ef9c9315af181a44d3c74715cc5e46a4aad483e84b0ba6a5ad33652a751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61626ef9c9315af181a44d3c74715cc5e46a4aad483e84b0ba6a5ad33652a751->enter($__internal_61626ef9c9315af181a44d3c74715cc5e46a4aad483e84b0ba6a5ad33652a751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_2cc40c65b86292c62a650994cebbfca0e1b6b783cd9ea08158d89ee0cc9b920b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc40c65b86292c62a650994cebbfca0e1b6b783cd9ea08158d89ee0cc9b920b->enter($__internal_2cc40c65b86292c62a650994cebbfca0e1b6b783cd9ea08158d89ee0cc9b920b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_2cc40c65b86292c62a650994cebbfca0e1b6b783cd9ea08158d89ee0cc9b920b->leave($__internal_2cc40c65b86292c62a650994cebbfca0e1b6b783cd9ea08158d89ee0cc9b920b_prof);

        
        $__internal_61626ef9c9315af181a44d3c74715cc5e46a4aad483e84b0ba6a5ad33652a751->leave($__internal_61626ef9c9315af181a44d3c74715cc5e46a4aad483e84b0ba6a5ad33652a751_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_14d712ce799435a557ed3b2fc68862d70d1fd75ea5e8d5f0c019e891d9c1663d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d712ce799435a557ed3b2fc68862d70d1fd75ea5e8d5f0c019e891d9c1663d->enter($__internal_14d712ce799435a557ed3b2fc68862d70d1fd75ea5e8d5f0c019e891d9c1663d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_d8de06dd914dace03d054f68a3915e357e38917dd9168f02086a26d6e867404f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8de06dd914dace03d054f68a3915e357e38917dd9168f02086a26d6e867404f->enter($__internal_d8de06dd914dace03d054f68a3915e357e38917dd9168f02086a26d6e867404f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_d8de06dd914dace03d054f68a3915e357e38917dd9168f02086a26d6e867404f->leave($__internal_d8de06dd914dace03d054f68a3915e357e38917dd9168f02086a26d6e867404f_prof);

        
        $__internal_14d712ce799435a557ed3b2fc68862d70d1fd75ea5e8d5f0c019e891d9c1663d->leave($__internal_14d712ce799435a557ed3b2fc68862d70d1fd75ea5e8d5f0c019e891d9c1663d_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_6c0df146fe856c6747abaf81c4f1d76f01702ffe437dee3aadf19d6567c574d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0df146fe856c6747abaf81c4f1d76f01702ffe437dee3aadf19d6567c574d0->enter($__internal_6c0df146fe856c6747abaf81c4f1d76f01702ffe437dee3aadf19d6567c574d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a2638e133302a6c698c8efed867a50dc33d3f77fe664fbd6522ad0fc75f8bf85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2638e133302a6c698c8efed867a50dc33d3f77fe664fbd6522ad0fc75f8bf85->enter($__internal_a2638e133302a6c698c8efed867a50dc33d3f77fe664fbd6522ad0fc75f8bf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_a2638e133302a6c698c8efed867a50dc33d3f77fe664fbd6522ad0fc75f8bf85->leave($__internal_a2638e133302a6c698c8efed867a50dc33d3f77fe664fbd6522ad0fc75f8bf85_prof);

        
        $__internal_6c0df146fe856c6747abaf81c4f1d76f01702ffe437dee3aadf19d6567c574d0->leave($__internal_6c0df146fe856c6747abaf81c4f1d76f01702ffe437dee3aadf19d6567c574d0_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_1ce0ef82be811406ceeb6457db0c9b921e23f889b35d85d33d510e069f7668d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce0ef82be811406ceeb6457db0c9b921e23f889b35d85d33d510e069f7668d5->enter($__internal_1ce0ef82be811406ceeb6457db0c9b921e23f889b35d85d33d510e069f7668d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6a941420d7bdd59697c342df1fb29be6cbef8c9014e0b5006ef2cb23335ff5e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a941420d7bdd59697c342df1fb29be6cbef8c9014e0b5006ef2cb23335ff5e6->enter($__internal_6a941420d7bdd59697c342df1fb29be6cbef8c9014e0b5006ef2cb23335ff5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6a941420d7bdd59697c342df1fb29be6cbef8c9014e0b5006ef2cb23335ff5e6->leave($__internal_6a941420d7bdd59697c342df1fb29be6cbef8c9014e0b5006ef2cb23335ff5e6_prof);

        
        $__internal_1ce0ef82be811406ceeb6457db0c9b921e23f889b35d85d33d510e069f7668d5->leave($__internal_1ce0ef82be811406ceeb6457db0c9b921e23f889b35d85d33d510e069f7668d5_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_9b2fc175158def08b33364284566908684d96af0cb228a70f7cd59b77b18addd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2fc175158def08b33364284566908684d96af0cb228a70f7cd59b77b18addd->enter($__internal_9b2fc175158def08b33364284566908684d96af0cb228a70f7cd59b77b18addd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_189a225475b040da3b4152230af4628501d86ddfd401c9d596c99aa8d5e6ab70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189a225475b040da3b4152230af4628501d86ddfd401c9d596c99aa8d5e6ab70->enter($__internal_189a225475b040da3b4152230af4628501d86ddfd401c9d596c99aa8d5e6ab70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_189a225475b040da3b4152230af4628501d86ddfd401c9d596c99aa8d5e6ab70->leave($__internal_189a225475b040da3b4152230af4628501d86ddfd401c9d596c99aa8d5e6ab70_prof);

        
        $__internal_9b2fc175158def08b33364284566908684d96af0cb228a70f7cd59b77b18addd->leave($__internal_9b2fc175158def08b33364284566908684d96af0cb228a70f7cd59b77b18addd_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_c29996988d684d15837d7fe088ce06d076d318ac09b4384ca7e027de151f8357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29996988d684d15837d7fe088ce06d076d318ac09b4384ca7e027de151f8357->enter($__internal_c29996988d684d15837d7fe088ce06d076d318ac09b4384ca7e027de151f8357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_631efe5083b97bec4b122643bfadd3ef701f10738113e634afe7dbed350c2b84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631efe5083b97bec4b122643bfadd3ef701f10738113e634afe7dbed350c2b84->enter($__internal_631efe5083b97bec4b122643bfadd3ef701f10738113e634afe7dbed350c2b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_631efe5083b97bec4b122643bfadd3ef701f10738113e634afe7dbed350c2b84->leave($__internal_631efe5083b97bec4b122643bfadd3ef701f10738113e634afe7dbed350c2b84_prof);

        
        $__internal_c29996988d684d15837d7fe088ce06d076d318ac09b4384ca7e027de151f8357->leave($__internal_c29996988d684d15837d7fe088ce06d076d318ac09b4384ca7e027de151f8357_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_a1e6492495e355ae7679f0bdccda1bac61f936d11f14741df1b1c92ff2e39e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e6492495e355ae7679f0bdccda1bac61f936d11f14741df1b1c92ff2e39e76->enter($__internal_a1e6492495e355ae7679f0bdccda1bac61f936d11f14741df1b1c92ff2e39e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_e39c05434f6d3d625ec813aec901b728839c4ccdff8b2342c2ff9765c5ae276c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e39c05434f6d3d625ec813aec901b728839c4ccdff8b2342c2ff9765c5ae276c->enter($__internal_e39c05434f6d3d625ec813aec901b728839c4ccdff8b2342c2ff9765c5ae276c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_e39c05434f6d3d625ec813aec901b728839c4ccdff8b2342c2ff9765c5ae276c->leave($__internal_e39c05434f6d3d625ec813aec901b728839c4ccdff8b2342c2ff9765c5ae276c_prof);

        
        $__internal_a1e6492495e355ae7679f0bdccda1bac61f936d11f14741df1b1c92ff2e39e76->leave($__internal_a1e6492495e355ae7679f0bdccda1bac61f936d11f14741df1b1c92ff2e39e76_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6ecc21ed9044b3c06cb0026f41a2ffaf62484ef9ba3d58157635cd6a20836872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ecc21ed9044b3c06cb0026f41a2ffaf62484ef9ba3d58157635cd6a20836872->enter($__internal_6ecc21ed9044b3c06cb0026f41a2ffaf62484ef9ba3d58157635cd6a20836872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5a5e6c4eb844b6a6483a4953ff96b008506b8d57c563672480d0651a978576c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5e6c4eb844b6a6483a4953ff96b008506b8d57c563672480d0651a978576c6->enter($__internal_5a5e6c4eb844b6a6483a4953ff96b008506b8d57c563672480d0651a978576c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_5a5e6c4eb844b6a6483a4953ff96b008506b8d57c563672480d0651a978576c6->leave($__internal_5a5e6c4eb844b6a6483a4953ff96b008506b8d57c563672480d0651a978576c6_prof);

        
        $__internal_6ecc21ed9044b3c06cb0026f41a2ffaf62484ef9ba3d58157635cd6a20836872->leave($__internal_6ecc21ed9044b3c06cb0026f41a2ffaf62484ef9ba3d58157635cd6a20836872_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_4ef1c901a3d5a5654945a7464b29f768c525006ca5058dbc4f2c32324dd5bde1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef1c901a3d5a5654945a7464b29f768c525006ca5058dbc4f2c32324dd5bde1->enter($__internal_4ef1c901a3d5a5654945a7464b29f768c525006ca5058dbc4f2c32324dd5bde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_2bb1916e7d51edd2b034c8cfa32163ec458f2909d17a3fd7f33502602e4f8efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb1916e7d51edd2b034c8cfa32163ec458f2909d17a3fd7f33502602e4f8efe->enter($__internal_2bb1916e7d51edd2b034c8cfa32163ec458f2909d17a3fd7f33502602e4f8efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_2bb1916e7d51edd2b034c8cfa32163ec458f2909d17a3fd7f33502602e4f8efe->leave($__internal_2bb1916e7d51edd2b034c8cfa32163ec458f2909d17a3fd7f33502602e4f8efe_prof);

        
        $__internal_4ef1c901a3d5a5654945a7464b29f768c525006ca5058dbc4f2c32324dd5bde1->leave($__internal_4ef1c901a3d5a5654945a7464b29f768c525006ca5058dbc4f2c32324dd5bde1_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_6f1836fafede81bd75e46ce409cac1525d13e5e53dfcbec8197712e78121d7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1836fafede81bd75e46ce409cac1525d13e5e53dfcbec8197712e78121d7b3->enter($__internal_6f1836fafede81bd75e46ce409cac1525d13e5e53dfcbec8197712e78121d7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_f3ea13675b1e58f246aaadc268808bf4cc8ce651eb51825e170dd8e15eb89792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ea13675b1e58f246aaadc268808bf4cc8ce651eb51825e170dd8e15eb89792->enter($__internal_f3ea13675b1e58f246aaadc268808bf4cc8ce651eb51825e170dd8e15eb89792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f3ea13675b1e58f246aaadc268808bf4cc8ce651eb51825e170dd8e15eb89792->leave($__internal_f3ea13675b1e58f246aaadc268808bf4cc8ce651eb51825e170dd8e15eb89792_prof);

        
        $__internal_6f1836fafede81bd75e46ce409cac1525d13e5e53dfcbec8197712e78121d7b3->leave($__internal_6f1836fafede81bd75e46ce409cac1525d13e5e53dfcbec8197712e78121d7b3_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_11cc42661c87231a5734f8429404b8dc23d16c4469efacc96ae3745f24d1ee49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11cc42661c87231a5734f8429404b8dc23d16c4469efacc96ae3745f24d1ee49->enter($__internal_11cc42661c87231a5734f8429404b8dc23d16c4469efacc96ae3745f24d1ee49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_6efedf6e115aebe5c5503b2fbcae8da070d612fe90d86836e3c815739bb05d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6efedf6e115aebe5c5503b2fbcae8da070d612fe90d86836e3c815739bb05d3a->enter($__internal_6efedf6e115aebe5c5503b2fbcae8da070d612fe90d86836e3c815739bb05d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6efedf6e115aebe5c5503b2fbcae8da070d612fe90d86836e3c815739bb05d3a->leave($__internal_6efedf6e115aebe5c5503b2fbcae8da070d612fe90d86836e3c815739bb05d3a_prof);

        
        $__internal_11cc42661c87231a5734f8429404b8dc23d16c4469efacc96ae3745f24d1ee49->leave($__internal_11cc42661c87231a5734f8429404b8dc23d16c4469efacc96ae3745f24d1ee49_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_a5077fcc018268d1ad3cc6681415685b39ce275ab64a6bfa59a8c3f30594ed6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5077fcc018268d1ad3cc6681415685b39ce275ab64a6bfa59a8c3f30594ed6c->enter($__internal_a5077fcc018268d1ad3cc6681415685b39ce275ab64a6bfa59a8c3f30594ed6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_248b9ca9252bd9a53cd0b3cba49cbd424807c3f57d2d169a6f2c8c79cf905b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248b9ca9252bd9a53cd0b3cba49cbd424807c3f57d2d169a6f2c8c79cf905b29->enter($__internal_248b9ca9252bd9a53cd0b3cba49cbd424807c3f57d2d169a6f2c8c79cf905b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_248b9ca9252bd9a53cd0b3cba49cbd424807c3f57d2d169a6f2c8c79cf905b29->leave($__internal_248b9ca9252bd9a53cd0b3cba49cbd424807c3f57d2d169a6f2c8c79cf905b29_prof);

        
        $__internal_a5077fcc018268d1ad3cc6681415685b39ce275ab64a6bfa59a8c3f30594ed6c->leave($__internal_a5077fcc018268d1ad3cc6681415685b39ce275ab64a6bfa59a8c3f30594ed6c_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_e65ebbdbad5e54f92d403077ce72960758fed741268ad802a8b6214f3f67b682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65ebbdbad5e54f92d403077ce72960758fed741268ad802a8b6214f3f67b682->enter($__internal_e65ebbdbad5e54f92d403077ce72960758fed741268ad802a8b6214f3f67b682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e70b92025729f5f794c988eb36a560ba5ede8f39219426a0e4e08564e39dac28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70b92025729f5f794c988eb36a560ba5ede8f39219426a0e4e08564e39dac28->enter($__internal_e70b92025729f5f794c988eb36a560ba5ede8f39219426a0e4e08564e39dac28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e70b92025729f5f794c988eb36a560ba5ede8f39219426a0e4e08564e39dac28->leave($__internal_e70b92025729f5f794c988eb36a560ba5ede8f39219426a0e4e08564e39dac28_prof);

        
        $__internal_e65ebbdbad5e54f92d403077ce72960758fed741268ad802a8b6214f3f67b682->leave($__internal_e65ebbdbad5e54f92d403077ce72960758fed741268ad802a8b6214f3f67b682_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_34946aef1db38fdab9b4664947c989ffd6e9a7af132f53264ef31d999293e369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34946aef1db38fdab9b4664947c989ffd6e9a7af132f53264ef31d999293e369->enter($__internal_34946aef1db38fdab9b4664947c989ffd6e9a7af132f53264ef31d999293e369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6e6d1491709ef984a62b73a4f6e75917b8dbd9eb245a686cd45de3058995f076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e6d1491709ef984a62b73a4f6e75917b8dbd9eb245a686cd45de3058995f076->enter($__internal_6e6d1491709ef984a62b73a4f6e75917b8dbd9eb245a686cd45de3058995f076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_6e6d1491709ef984a62b73a4f6e75917b8dbd9eb245a686cd45de3058995f076->leave($__internal_6e6d1491709ef984a62b73a4f6e75917b8dbd9eb245a686cd45de3058995f076_prof);

        
        $__internal_34946aef1db38fdab9b4664947c989ffd6e9a7af132f53264ef31d999293e369->leave($__internal_34946aef1db38fdab9b4664947c989ffd6e9a7af132f53264ef31d999293e369_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_0d96a683eed36ca6e1e1c60f9517dbb6a8f07a4f5d899493c9c683fcfe69b42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d96a683eed36ca6e1e1c60f9517dbb6a8f07a4f5d899493c9c683fcfe69b42a->enter($__internal_0d96a683eed36ca6e1e1c60f9517dbb6a8f07a4f5d899493c9c683fcfe69b42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_956061e2b22758c074119c40da971f846be2e09e282b6101c40e4a1d3c25ba10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_956061e2b22758c074119c40da971f846be2e09e282b6101c40e4a1d3c25ba10->enter($__internal_956061e2b22758c074119c40da971f846be2e09e282b6101c40e4a1d3c25ba10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_956061e2b22758c074119c40da971f846be2e09e282b6101c40e4a1d3c25ba10->leave($__internal_956061e2b22758c074119c40da971f846be2e09e282b6101c40e4a1d3c25ba10_prof);

        
        $__internal_0d96a683eed36ca6e1e1c60f9517dbb6a8f07a4f5d899493c9c683fcfe69b42a->leave($__internal_0d96a683eed36ca6e1e1c60f9517dbb6a8f07a4f5d899493c9c683fcfe69b42a_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1c6627e07ae5d71c1f2a457efd1257bb246c2dfd554652b7055b9143ffb560b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6627e07ae5d71c1f2a457efd1257bb246c2dfd554652b7055b9143ffb560b5->enter($__internal_1c6627e07ae5d71c1f2a457efd1257bb246c2dfd554652b7055b9143ffb560b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9de505ff0994b05dec09b10720db19f1a8170c2e32897bcdd15c05ffdb1bf66c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9de505ff0994b05dec09b10720db19f1a8170c2e32897bcdd15c05ffdb1bf66c->enter($__internal_9de505ff0994b05dec09b10720db19f1a8170c2e32897bcdd15c05ffdb1bf66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_9de505ff0994b05dec09b10720db19f1a8170c2e32897bcdd15c05ffdb1bf66c->leave($__internal_9de505ff0994b05dec09b10720db19f1a8170c2e32897bcdd15c05ffdb1bf66c_prof);

        
        $__internal_1c6627e07ae5d71c1f2a457efd1257bb246c2dfd554652b7055b9143ffb560b5->leave($__internal_1c6627e07ae5d71c1f2a457efd1257bb246c2dfd554652b7055b9143ffb560b5_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
