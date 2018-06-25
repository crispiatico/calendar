<?php

/* form_table_layout.html.twig */
class __TwigTemplate_ecb941a8cf792e2a81eb16b6a33f5e8b4daf4c64e317a6b08ec5a280f7eac30b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_924fe6def6a2c83b081ec820f8c2fac8e10a171370898abf395bda8fb278e299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924fe6def6a2c83b081ec820f8c2fac8e10a171370898abf395bda8fb278e299->enter($__internal_924fe6def6a2c83b081ec820f8c2fac8e10a171370898abf395bda8fb278e299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_02c68d2068448a403629f2670a65e6451f68832da7110e9e8b29983436c35e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c68d2068448a403629f2670a65e6451f68832da7110e9e8b29983436c35e1b->enter($__internal_02c68d2068448a403629f2670a65e6451f68832da7110e9e8b29983436c35e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_924fe6def6a2c83b081ec820f8c2fac8e10a171370898abf395bda8fb278e299->leave($__internal_924fe6def6a2c83b081ec820f8c2fac8e10a171370898abf395bda8fb278e299_prof);

        
        $__internal_02c68d2068448a403629f2670a65e6451f68832da7110e9e8b29983436c35e1b->leave($__internal_02c68d2068448a403629f2670a65e6451f68832da7110e9e8b29983436c35e1b_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_932eacac2dca8d79436de4fd21687261666705bab4c27707f230956bf5fb3cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932eacac2dca8d79436de4fd21687261666705bab4c27707f230956bf5fb3cdb->enter($__internal_932eacac2dca8d79436de4fd21687261666705bab4c27707f230956bf5fb3cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_be905abba8da3e74a45001af29555eb2b3def614cacf2acc3f26db7048c06a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be905abba8da3e74a45001af29555eb2b3def614cacf2acc3f26db7048c06a58->enter($__internal_be905abba8da3e74a45001af29555eb2b3def614cacf2acc3f26db7048c06a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_be905abba8da3e74a45001af29555eb2b3def614cacf2acc3f26db7048c06a58->leave($__internal_be905abba8da3e74a45001af29555eb2b3def614cacf2acc3f26db7048c06a58_prof);

        
        $__internal_932eacac2dca8d79436de4fd21687261666705bab4c27707f230956bf5fb3cdb->leave($__internal_932eacac2dca8d79436de4fd21687261666705bab4c27707f230956bf5fb3cdb_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9a34de783e3e4348a994bb9a5615c7ce5edbb56b6cd34ccec51adc4536f0c488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a34de783e3e4348a994bb9a5615c7ce5edbb56b6cd34ccec51adc4536f0c488->enter($__internal_9a34de783e3e4348a994bb9a5615c7ce5edbb56b6cd34ccec51adc4536f0c488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_459253ed81952de036b3c6f1e140d14878089aeccaa56713c82b2b1d84af1afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459253ed81952de036b3c6f1e140d14878089aeccaa56713c82b2b1d84af1afe->enter($__internal_459253ed81952de036b3c6f1e140d14878089aeccaa56713c82b2b1d84af1afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_459253ed81952de036b3c6f1e140d14878089aeccaa56713c82b2b1d84af1afe->leave($__internal_459253ed81952de036b3c6f1e140d14878089aeccaa56713c82b2b1d84af1afe_prof);

        
        $__internal_9a34de783e3e4348a994bb9a5615c7ce5edbb56b6cd34ccec51adc4536f0c488->leave($__internal_9a34de783e3e4348a994bb9a5615c7ce5edbb56b6cd34ccec51adc4536f0c488_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_126bdf5b820d006a5b8c30fb365e718b25c14211aa0d238cebc5430d0a50f817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126bdf5b820d006a5b8c30fb365e718b25c14211aa0d238cebc5430d0a50f817->enter($__internal_126bdf5b820d006a5b8c30fb365e718b25c14211aa0d238cebc5430d0a50f817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_c7da9a0cc3521a07e8bc670f4a578611d575aa81b63ef57ed4739bfa03e93d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7da9a0cc3521a07e8bc670f4a578611d575aa81b63ef57ed4739bfa03e93d58->enter($__internal_c7da9a0cc3521a07e8bc670f4a578611d575aa81b63ef57ed4739bfa03e93d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_c7da9a0cc3521a07e8bc670f4a578611d575aa81b63ef57ed4739bfa03e93d58->leave($__internal_c7da9a0cc3521a07e8bc670f4a578611d575aa81b63ef57ed4739bfa03e93d58_prof);

        
        $__internal_126bdf5b820d006a5b8c30fb365e718b25c14211aa0d238cebc5430d0a50f817->leave($__internal_126bdf5b820d006a5b8c30fb365e718b25c14211aa0d238cebc5430d0a50f817_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_bd637f0423171d3cba6a0fd7d3aad22d5d6261757a13114ac257e334d7050c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd637f0423171d3cba6a0fd7d3aad22d5d6261757a13114ac257e334d7050c91->enter($__internal_bd637f0423171d3cba6a0fd7d3aad22d5d6261757a13114ac257e334d7050c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_8fe87af7dce7417cd4ac275c2cef63312d16dcc10ea747ea9fee2e3893fff877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe87af7dce7417cd4ac275c2cef63312d16dcc10ea747ea9fee2e3893fff877->enter($__internal_8fe87af7dce7417cd4ac275c2cef63312d16dcc10ea747ea9fee2e3893fff877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_8fe87af7dce7417cd4ac275c2cef63312d16dcc10ea747ea9fee2e3893fff877->leave($__internal_8fe87af7dce7417cd4ac275c2cef63312d16dcc10ea747ea9fee2e3893fff877_prof);

        
        $__internal_bd637f0423171d3cba6a0fd7d3aad22d5d6261757a13114ac257e334d7050c91->leave($__internal_bd637f0423171d3cba6a0fd7d3aad22d5d6261757a13114ac257e334d7050c91_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bridge/Resources/views/Form/form_table_layout.html.twig");
    }
}
