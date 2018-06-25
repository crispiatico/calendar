<?php

/* base2.html.twig */
class __TwigTemplate_b2eccb9837b2e603facd32276d57939aad7aaa086906171ad6704adf4cb83595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f8e06b913e833425c678c2054742b2ae47846338d37cacf9020dcfef90b06ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8e06b913e833425c678c2054742b2ae47846338d37cacf9020dcfef90b06ee->enter($__internal_1f8e06b913e833425c678c2054742b2ae47846338d37cacf9020dcfef90b06ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_62bd51a860a79cbb64fe126340b1b72608e42af81c8a9346042b7ff2e97bf8c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62bd51a860a79cbb64fe126340b1b72608e42af81c8a9346042b7ff2e97bf8c7->enter($__internal_62bd51a860a79cbb64fe126340b1b72608e42af81c8a9346042b7ff2e97bf8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("files/immagini/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    ";
        // line 12
        if (((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 12, $this->getSourceContext()); })()) == 1)) {
            // line 13
            echo "      <p class=\"text-align-center\" id=\"logo\"><a href=\"http://www.lacittadellaluce.org\">
        <img src=\"http://lacittadellaluce.org/sites/default/files/la-citta-della-luce-150.png\" alt=\"La Citt&agrave; della Luce\" width=\"500\" height=\"50\" border=\"0\"></a><br />
      <a style=\"font-size:13pt\" href=\"http://www.lacittadellaluce.org\">www.lacittadellaluce.org</a>
      </p>
      <h2 class=\"text-align-center\">Calendario dei corsi e seminari</h2>
    ";
        }
        // line 19
        echo "      ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
        
        $__internal_1f8e06b913e833425c678c2054742b2ae47846338d37cacf9020dcfef90b06ee->leave($__internal_1f8e06b913e833425c678c2054742b2ae47846338d37cacf9020dcfef90b06ee_prof);

        
        $__internal_62bd51a860a79cbb64fe126340b1b72608e42af81c8a9346042b7ff2e97bf8c7->leave($__internal_62bd51a860a79cbb64fe126340b1b72608e42af81c8a9346042b7ff2e97bf8c7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_06bb8a8324fffd2e9ddb46abebf762b8d6ec04144236d9dac3ef21789f684513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bb8a8324fffd2e9ddb46abebf762b8d6ec04144236d9dac3ef21789f684513->enter($__internal_06bb8a8324fffd2e9ddb46abebf762b8d6ec04144236d9dac3ef21789f684513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2a6c12fbed06b596e4ef8b5bc1a7d9ec0cf1c096a9129a39c815d15bd4eea1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6c12fbed06b596e4ef8b5bc1a7d9ec0cf1c096a9129a39c815d15bd4eea1c8->enter($__internal_2a6c12fbed06b596e4ef8b5bc1a7d9ec0cf1c096a9129a39c815d15bd4eea1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "La Citt&agrave; della Luce - Calendario dei corsi e seminari";
        
        $__internal_2a6c12fbed06b596e4ef8b5bc1a7d9ec0cf1c096a9129a39c815d15bd4eea1c8->leave($__internal_2a6c12fbed06b596e4ef8b5bc1a7d9ec0cf1c096a9129a39c815d15bd4eea1c8_prof);

        
        $__internal_06bb8a8324fffd2e9ddb46abebf762b8d6ec04144236d9dac3ef21789f684513->leave($__internal_06bb8a8324fffd2e9ddb46abebf762b8d6ec04144236d9dac3ef21789f684513_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18f77d3e294feb5f52e5f6745f9efd0f353d0be845abc20939e09d3c4abcbf02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f77d3e294feb5f52e5f6745f9efd0f353d0be845abc20939e09d3c4abcbf02->enter($__internal_18f77d3e294feb5f52e5f6745f9efd0f353d0be845abc20939e09d3c4abcbf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8213da7770060abade6ee22f1e4cdb9025047389e10d85f75123bdeef574ac0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8213da7770060abade6ee22f1e4cdb9025047389e10d85f75123bdeef574ac0d->enter($__internal_8213da7770060abade6ee22f1e4cdb9025047389e10d85f75123bdeef574ac0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/front.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_8213da7770060abade6ee22f1e4cdb9025047389e10d85f75123bdeef574ac0d->leave($__internal_8213da7770060abade6ee22f1e4cdb9025047389e10d85f75123bdeef574ac0d_prof);

        
        $__internal_18f77d3e294feb5f52e5f6745f9efd0f353d0be845abc20939e09d3c4abcbf02->leave($__internal_18f77d3e294feb5f52e5f6745f9efd0f353d0be845abc20939e09d3c4abcbf02_prof);

    }

    // line 19
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_3dc31799802d08d276a9aed97aa4c880fd1814e1432c77b1bab02b905482ef6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc31799802d08d276a9aed97aa4c880fd1814e1432c77b1bab02b905482ef6d->enter($__internal_3dc31799802d08d276a9aed97aa4c880fd1814e1432c77b1bab02b905482ef6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_b11b85defc624a36e251eee17dad689575d1f83f67ce9bfc4c7ae4c3d2e58032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11b85defc624a36e251eee17dad689575d1f83f67ce9bfc4c7ae4c3d2e58032->enter($__internal_b11b85defc624a36e251eee17dad689575d1f83f67ce9bfc4c7ae4c3d2e58032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 20
        echo "      ";
        
        $__internal_b11b85defc624a36e251eee17dad689575d1f83f67ce9bfc4c7ae4c3d2e58032->leave($__internal_b11b85defc624a36e251eee17dad689575d1f83f67ce9bfc4c7ae4c3d2e58032_prof);

        
        $__internal_3dc31799802d08d276a9aed97aa4c880fd1814e1432c77b1bab02b905482ef6d->leave($__internal_3dc31799802d08d276a9aed97aa4c880fd1814e1432c77b1bab02b905482ef6d_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b701ab6f66bcca630945e562f4ee0c5f3d2c94a91f4a3fb547710b16c027a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b701ab6f66bcca630945e562f4ee0c5f3d2c94a91f4a3fb547710b16c027a74->enter($__internal_6b701ab6f66bcca630945e562f4ee0c5f3d2c94a91f4a3fb547710b16c027a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f3e728f5b8ae00c68daba3b035013860991b875cf9fa7056242c80348671c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3e728f5b8ae00c68daba3b035013860991b875cf9fa7056242c80348671c0c->enter($__internal_5f3e728f5b8ae00c68daba3b035013860991b875cf9fa7056242c80348671c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5f3e728f5b8ae00c68daba3b035013860991b875cf9fa7056242c80348671c0c->leave($__internal_5f3e728f5b8ae00c68daba3b035013860991b875cf9fa7056242c80348671c0c_prof);

        
        $__internal_6b701ab6f66bcca630945e562f4ee0c5f3d2c94a91f4a3fb547710b16c027a74->leave($__internal_6b701ab6f66bcca630945e562f4ee0c5f3d2c94a91f4a3fb547710b16c027a74_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_083f35441bcdcf82e34f7307202c3b1bf075133525fce2c6bc836e951ad4e302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083f35441bcdcf82e34f7307202c3b1bf075133525fce2c6bc836e951ad4e302->enter($__internal_083f35441bcdcf82e34f7307202c3b1bf075133525fce2c6bc836e951ad4e302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_aa63aeb7d018cfa0c7c2d578d3ba7fc564e1c6145d7f4af5a4a67128668786ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa63aeb7d018cfa0c7c2d578d3ba7fc564e1c6145d7f4af5a4a67128668786ee->enter($__internal_aa63aeb7d018cfa0c7c2d578d3ba7fc564e1c6145d7f4af5a4a67128668786ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "        ";
        
        $__internal_aa63aeb7d018cfa0c7c2d578d3ba7fc564e1c6145d7f4af5a4a67128668786ee->leave($__internal_aa63aeb7d018cfa0c7c2d578d3ba7fc564e1c6145d7f4af5a4a67128668786ee_prof);

        
        $__internal_083f35441bcdcf82e34f7307202c3b1bf075133525fce2c6bc836e951ad4e302->leave($__internal_083f35441bcdcf82e34f7307202c3b1bf075133525fce2c6bc836e951ad4e302_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 23,  156 => 22,  139 => 21,  129 => 20,  120 => 19,  107 => 7,  98 => 6,  80 => 5,  68 => 24,  65 => 22,  62 => 21,  59 => 19,  51 => 13,  49 => 12,  42 => 9,  40 => 6,  36 => 5,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}La Citt&agrave; della Luce - Calendario dei corsi e seminari{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('dist/css/front.css') }}\">
        {% endblock %}
        <link rel=\"shortcut icon\" href=\"{{ asset('files/immagini/favicon.ico') }}\" />
    </head>
    <body>
    {% if header == 1 %}
      <p class=\"text-align-center\" id=\"logo\"><a href=\"http://www.lacittadellaluce.org\">
        <img src=\"http://lacittadellaluce.org/sites/default/files/la-citta-della-luce-150.png\" alt=\"La Citt&agrave; della Luce\" width=\"500\" height=\"50\" border=\"0\"></a><br />
      <a style=\"font-size:13pt\" href=\"http://www.lacittadellaluce.org\">www.lacittadellaluce.org</a>
      </p>
      <h2 class=\"text-align-center\">Calendario dei corsi e seminari</h2>
    {% endif %}
      {% block navbar %}
      {% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}
        {% endblock %}
    </body>
</html>
", "base2.html.twig", "/var/www/html/symfonycalendar/templates/base2.html.twig");
    }
}
