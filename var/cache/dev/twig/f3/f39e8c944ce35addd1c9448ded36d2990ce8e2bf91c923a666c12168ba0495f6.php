<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_0d23bbefadea29cbc23b05727e916f1d4fa7224d3b38fb7ed629f6e0fc1f93e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d503ad373a44ddeef87c445f6f94d9a9e46a8ec0e39b78abdf58301b25435a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d503ad373a44ddeef87c445f6f94d9a9e46a8ec0e39b78abdf58301b25435a09->enter($__internal_d503ad373a44ddeef87c445f6f94d9a9e46a8ec0e39b78abdf58301b25435a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_3b5f1c67774a769ba7f20ba965fe0014883242783b4647d2581818013ee84ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b5f1c67774a769ba7f20ba965fe0014883242783b4647d2581818013ee84ad0->enter($__internal_3b5f1c67774a769ba7f20ba965fe0014883242783b4647d2581818013ee84ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_d503ad373a44ddeef87c445f6f94d9a9e46a8ec0e39b78abdf58301b25435a09->leave($__internal_d503ad373a44ddeef87c445f6f94d9a9e46a8ec0e39b78abdf58301b25435a09_prof);

        
        $__internal_3b5f1c67774a769ba7f20ba965fe0014883242783b4647d2581818013ee84ad0->leave($__internal_3b5f1c67774a769ba7f20ba965fe0014883242783b4647d2581818013ee84ad0_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_48cad436dcd1bbbf6fdd7ef10f1efca62142c4cb33cedae9f30e3272c6d1d38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48cad436dcd1bbbf6fdd7ef10f1efca62142c4cb33cedae9f30e3272c6d1d38e->enter($__internal_48cad436dcd1bbbf6fdd7ef10f1efca62142c4cb33cedae9f30e3272c6d1d38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d2c22b253307f4a09f39a619a6faf83e7345b348c15a814c15ad9de98c3d95ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c22b253307f4a09f39a619a6faf83e7345b348c15a814c15ad9de98c3d95ba->enter($__internal_d2c22b253307f4a09f39a619a6faf83e7345b348c15a814c15ad9de98c3d95ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_d2c22b253307f4a09f39a619a6faf83e7345b348c15a814c15ad9de98c3d95ba->leave($__internal_d2c22b253307f4a09f39a619a6faf83e7345b348c15a814c15ad9de98c3d95ba_prof);

        
        $__internal_48cad436dcd1bbbf6fdd7ef10f1efca62142c4cb33cedae9f30e3272c6d1d38e->leave($__internal_48cad436dcd1bbbf6fdd7ef10f1efca62142c4cb33cedae9f30e3272c6d1d38e_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_a2f706564a0a229e52bb8004fdc83fff0132d2c6f1d9c8921e645628cbc16021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f706564a0a229e52bb8004fdc83fff0132d2c6f1d9c8921e645628cbc16021->enter($__internal_a2f706564a0a229e52bb8004fdc83fff0132d2c6f1d9c8921e645628cbc16021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_500d7bfb9c9daafc9a99e1e66ff0d384fb1ca700e996f714b2fbb84ea20146ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500d7bfb9c9daafc9a99e1e66ff0d384fb1ca700e996f714b2fbb84ea20146ce->enter($__internal_500d7bfb9c9daafc9a99e1e66ff0d384fb1ca700e996f714b2fbb84ea20146ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_500d7bfb9c9daafc9a99e1e66ff0d384fb1ca700e996f714b2fbb84ea20146ce->leave($__internal_500d7bfb9c9daafc9a99e1e66ff0d384fb1ca700e996f714b2fbb84ea20146ce_prof);

        
        $__internal_a2f706564a0a229e52bb8004fdc83fff0132d2c6f1d9c8921e645628cbc16021->leave($__internal_a2f706564a0a229e52bb8004fdc83fff0132d2c6f1d9c8921e645628cbc16021_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d46864f4b917020ad55a5a11773e7ad1e95025702b00cb327238b17275c7be79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46864f4b917020ad55a5a11773e7ad1e95025702b00cb327238b17275c7be79->enter($__internal_d46864f4b917020ad55a5a11773e7ad1e95025702b00cb327238b17275c7be79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9db4676e5d2f4b329457d54cf7714de6c4026d9f92ab98e80e4ea56a865471a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db4676e5d2f4b329457d54cf7714de6c4026d9f92ab98e80e4ea56a865471a4->enter($__internal_9db4676e5d2f4b329457d54cf7714de6c4026d9f92ab98e80e4ea56a865471a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_9db4676e5d2f4b329457d54cf7714de6c4026d9f92ab98e80e4ea56a865471a4->leave($__internal_9db4676e5d2f4b329457d54cf7714de6c4026d9f92ab98e80e4ea56a865471a4_prof);

        
        $__internal_d46864f4b917020ad55a5a11773e7ad1e95025702b00cb327238b17275c7be79->leave($__internal_d46864f4b917020ad55a5a11773e7ad1e95025702b00cb327238b17275c7be79_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_dfd040bc4eff87fc2bb2285bf5335070395b57c6a5b68255286b15fbb0abe5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd040bc4eff87fc2bb2285bf5335070395b57c6a5b68255286b15fbb0abe5cc->enter($__internal_dfd040bc4eff87fc2bb2285bf5335070395b57c6a5b68255286b15fbb0abe5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_6ef95a8a9fbcbf8ef40c303a5e5fd718e2a4f9f9aebe7f7c0e13336c90521a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef95a8a9fbcbf8ef40c303a5e5fd718e2a4f9f9aebe7f7c0e13336c90521a79->enter($__internal_6ef95a8a9fbcbf8ef40c303a5e5fd718e2a4f9f9aebe7f7c0e13336c90521a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_6ef95a8a9fbcbf8ef40c303a5e5fd718e2a4f9f9aebe7f7c0e13336c90521a79->leave($__internal_6ef95a8a9fbcbf8ef40c303a5e5fd718e2a4f9f9aebe7f7c0e13336c90521a79_prof);

        
        $__internal_dfd040bc4eff87fc2bb2285bf5335070395b57c6a5b68255286b15fbb0abe5cc->leave($__internal_dfd040bc4eff87fc2bb2285bf5335070395b57c6a5b68255286b15fbb0abe5cc_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_8b726fca2de2ad59e916794994c1cd72b2780b244551f0549a7b6191998b9b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b726fca2de2ad59e916794994c1cd72b2780b244551f0549a7b6191998b9b49->enter($__internal_8b726fca2de2ad59e916794994c1cd72b2780b244551f0549a7b6191998b9b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_68338556682174d6c4671e4882f35632e04d0d0d84d1832afe52d93b15d88522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68338556682174d6c4671e4882f35632e04d0d0d84d1832afe52d93b15d88522->enter($__internal_68338556682174d6c4671e4882f35632e04d0d0d84d1832afe52d93b15d88522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_68338556682174d6c4671e4882f35632e04d0d0d84d1832afe52d93b15d88522->leave($__internal_68338556682174d6c4671e4882f35632e04d0d0d84d1832afe52d93b15d88522_prof);

        
        $__internal_8b726fca2de2ad59e916794994c1cd72b2780b244551f0549a7b6191998b9b49->leave($__internal_8b726fca2de2ad59e916794994c1cd72b2780b244551f0549a7b6191998b9b49_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_238b93d83ef75602836e438e1d8b5c95db7bb8d03da1d83767b0c0d5a24d4b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238b93d83ef75602836e438e1d8b5c95db7bb8d03da1d83767b0c0d5a24d4b1a->enter($__internal_238b93d83ef75602836e438e1d8b5c95db7bb8d03da1d83767b0c0d5a24d4b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_d5d98af51f539f7ea9e663131f175c5c01fbc4ec22266d5a70c13f0182d7f69d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5d98af51f539f7ea9e663131f175c5c01fbc4ec22266d5a70c13f0182d7f69d->enter($__internal_d5d98af51f539f7ea9e663131f175c5c01fbc4ec22266d5a70c13f0182d7f69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_d5d98af51f539f7ea9e663131f175c5c01fbc4ec22266d5a70c13f0182d7f69d->leave($__internal_d5d98af51f539f7ea9e663131f175c5c01fbc4ec22266d5a70c13f0182d7f69d_prof);

        
        $__internal_238b93d83ef75602836e438e1d8b5c95db7bb8d03da1d83767b0c0d5a24d4b1a->leave($__internal_238b93d83ef75602836e438e1d8b5c95db7bb8d03da1d83767b0c0d5a24d4b1a_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_89dbb3a77d902cc797b6c9dc5bdeb5b746b67df174a59f6ed758f38a7b0462a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89dbb3a77d902cc797b6c9dc5bdeb5b746b67df174a59f6ed758f38a7b0462a7->enter($__internal_89dbb3a77d902cc797b6c9dc5bdeb5b746b67df174a59f6ed758f38a7b0462a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_346789d7602147334ebe1dbccadeff98317ccf401d2501d14158865f93327450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_346789d7602147334ebe1dbccadeff98317ccf401d2501d14158865f93327450->enter($__internal_346789d7602147334ebe1dbccadeff98317ccf401d2501d14158865f93327450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_346789d7602147334ebe1dbccadeff98317ccf401d2501d14158865f93327450->leave($__internal_346789d7602147334ebe1dbccadeff98317ccf401d2501d14158865f93327450_prof);

        
        $__internal_89dbb3a77d902cc797b6c9dc5bdeb5b746b67df174a59f6ed758f38a7b0462a7->leave($__internal_89dbb3a77d902cc797b6c9dc5bdeb5b746b67df174a59f6ed758f38a7b0462a7_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6c309809630d371dadfd79769552c7488a0254eec1595e3d18e06b0748aebb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c309809630d371dadfd79769552c7488a0254eec1595e3d18e06b0748aebb87->enter($__internal_6c309809630d371dadfd79769552c7488a0254eec1595e3d18e06b0748aebb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d4f6bc73fbd16cef1f11385e3c11a067a8e44e13f825b4f814e72df33f577b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f6bc73fbd16cef1f11385e3c11a067a8e44e13f825b4f814e72df33f577b7e->enter($__internal_d4f6bc73fbd16cef1f11385e3c11a067a8e44e13f825b4f814e72df33f577b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_d4f6bc73fbd16cef1f11385e3c11a067a8e44e13f825b4f814e72df33f577b7e->leave($__internal_d4f6bc73fbd16cef1f11385e3c11a067a8e44e13f825b4f814e72df33f577b7e_prof);

        
        $__internal_6c309809630d371dadfd79769552c7488a0254eec1595e3d18e06b0748aebb87->leave($__internal_6c309809630d371dadfd79769552c7488a0254eec1595e3d18e06b0748aebb87_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
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
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
