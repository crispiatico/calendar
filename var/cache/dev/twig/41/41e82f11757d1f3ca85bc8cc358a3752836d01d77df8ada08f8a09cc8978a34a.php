<?php

/* baseprint.html.twig */
class __TwigTemplate_d2d1bc46d9224785a4b1cd3ac33da76db8eb6cd564731801e47e52cad23b5abe extends Twig_Template
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
        $__internal_eac4849e51b709f583b3bcdc6791917ecee4df312709fb518c434a87414036d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac4849e51b709f583b3bcdc6791917ecee4df312709fb518c434a87414036d8->enter($__internal_eac4849e51b709f583b3bcdc6791917ecee4df312709fb518c434a87414036d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseprint.html.twig"));

        $__internal_a51d1e67fcfc26d46f4eefbc92dcbfa78ff106657c832e4dd6c452474c6c859c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a51d1e67fcfc26d46f4eefbc92dcbfa78ff106657c832e4dd6c452474c6c859c->enter($__internal_a51d1e67fcfc26d46f4eefbc92dcbfa78ff106657c832e4dd6c452474c6c859c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseprint.html.twig"));

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
      <div class=\"text-align-center\">
        <p id=\"logo\"><a href=\"http://www.lacittadellaluce.org\">
          <img src=\"http://lacittadellaluce.org/sites/default/files/la-citta-della-luce-150.png\" alt=\"La Citt&agrave; della Luce\" width=\"500\" height=\"50\" border=\"0\"></a><br />
        </p>
        <p>Via Porcozzone 17 - Fraz. Passo Ripe - 60012 Trecastelli (AN) - tel +39.071.7959090 - fax +39.071.2509981
  www.reiki.it - www.lacittadellaluce.org - segreteria@reiki.it - P. Iva 13132970156 - C.F. 93018410154</p>
      </div>
      <h2 class=\"text-align-center\">Calendario dei corsi e seminari</h2>
      ";
        // line 20
        $this->displayBlock('navbar', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_eac4849e51b709f583b3bcdc6791917ecee4df312709fb518c434a87414036d8->leave($__internal_eac4849e51b709f583b3bcdc6791917ecee4df312709fb518c434a87414036d8_prof);

        
        $__internal_a51d1e67fcfc26d46f4eefbc92dcbfa78ff106657c832e4dd6c452474c6c859c->leave($__internal_a51d1e67fcfc26d46f4eefbc92dcbfa78ff106657c832e4dd6c452474c6c859c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4025029d100c73f3a8628608ecc522d450c26aaa42f79c1cac1cbfd213183a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4025029d100c73f3a8628608ecc522d450c26aaa42f79c1cac1cbfd213183a5d->enter($__internal_4025029d100c73f3a8628608ecc522d450c26aaa42f79c1cac1cbfd213183a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06e20d4c59634d0b880a0ec432d25a18c2b26eaf08eec10b7f704c7dfaabaff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e20d4c59634d0b880a0ec432d25a18c2b26eaf08eec10b7f704c7dfaabaff0->enter($__internal_06e20d4c59634d0b880a0ec432d25a18c2b26eaf08eec10b7f704c7dfaabaff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "La Citt&agrave; della Luce - Calendario dei corsi e seminari";
        
        $__internal_06e20d4c59634d0b880a0ec432d25a18c2b26eaf08eec10b7f704c7dfaabaff0->leave($__internal_06e20d4c59634d0b880a0ec432d25a18c2b26eaf08eec10b7f704c7dfaabaff0_prof);

        
        $__internal_4025029d100c73f3a8628608ecc522d450c26aaa42f79c1cac1cbfd213183a5d->leave($__internal_4025029d100c73f3a8628608ecc522d450c26aaa42f79c1cac1cbfd213183a5d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_93607e028ff401c53f064851642ff9a872a58b4eeeadd577872fd549caedcc3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93607e028ff401c53f064851642ff9a872a58b4eeeadd577872fd549caedcc3f->enter($__internal_93607e028ff401c53f064851642ff9a872a58b4eeeadd577872fd549caedcc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a4d9d94955fc2545619f75bd39b3979b17f24c4bf00fe7f9567fa0539fd879a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d9d94955fc2545619f75bd39b3979b17f24c4bf00fe7f9567fa0539fd879a3->enter($__internal_a4d9d94955fc2545619f75bd39b3979b17f24c4bf00fe7f9567fa0539fd879a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/front.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_a4d9d94955fc2545619f75bd39b3979b17f24c4bf00fe7f9567fa0539fd879a3->leave($__internal_a4d9d94955fc2545619f75bd39b3979b17f24c4bf00fe7f9567fa0539fd879a3_prof);

        
        $__internal_93607e028ff401c53f064851642ff9a872a58b4eeeadd577872fd549caedcc3f->leave($__internal_93607e028ff401c53f064851642ff9a872a58b4eeeadd577872fd549caedcc3f_prof);

    }

    // line 20
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_58f373b1b19828b06f6a4aaec9ee9f391ffa502c6a2e8823619a7940a0769bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f373b1b19828b06f6a4aaec9ee9f391ffa502c6a2e8823619a7940a0769bfd->enter($__internal_58f373b1b19828b06f6a4aaec9ee9f391ffa502c6a2e8823619a7940a0769bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_daa53c180b955d927ae6cae8916e2f71b42c8ea1f92f10db1bb8f73dc182e823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa53c180b955d927ae6cae8916e2f71b42c8ea1f92f10db1bb8f73dc182e823->enter($__internal_daa53c180b955d927ae6cae8916e2f71b42c8ea1f92f10db1bb8f73dc182e823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 21
        echo "      ";
        
        $__internal_daa53c180b955d927ae6cae8916e2f71b42c8ea1f92f10db1bb8f73dc182e823->leave($__internal_daa53c180b955d927ae6cae8916e2f71b42c8ea1f92f10db1bb8f73dc182e823_prof);

        
        $__internal_58f373b1b19828b06f6a4aaec9ee9f391ffa502c6a2e8823619a7940a0769bfd->leave($__internal_58f373b1b19828b06f6a4aaec9ee9f391ffa502c6a2e8823619a7940a0769bfd_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_453df81c12463a636d8e8dd535c31a55f4f8051521ae1b5ed9b5c670a0b3abaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453df81c12463a636d8e8dd535c31a55f4f8051521ae1b5ed9b5c670a0b3abaa->enter($__internal_453df81c12463a636d8e8dd535c31a55f4f8051521ae1b5ed9b5c670a0b3abaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3fd5eaf1d16a12752ae8187f594891687c3e3adb802a68b884cad5ec097d387a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd5eaf1d16a12752ae8187f594891687c3e3adb802a68b884cad5ec097d387a->enter($__internal_3fd5eaf1d16a12752ae8187f594891687c3e3adb802a68b884cad5ec097d387a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3fd5eaf1d16a12752ae8187f594891687c3e3adb802a68b884cad5ec097d387a->leave($__internal_3fd5eaf1d16a12752ae8187f594891687c3e3adb802a68b884cad5ec097d387a_prof);

        
        $__internal_453df81c12463a636d8e8dd535c31a55f4f8051521ae1b5ed9b5c670a0b3abaa->leave($__internal_453df81c12463a636d8e8dd535c31a55f4f8051521ae1b5ed9b5c670a0b3abaa_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ff53679414f4a07a049d2c4d058b76596230d20add2232373eaf0b04b3e1c617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff53679414f4a07a049d2c4d058b76596230d20add2232373eaf0b04b3e1c617->enter($__internal_ff53679414f4a07a049d2c4d058b76596230d20add2232373eaf0b04b3e1c617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dfe0bbe315020cc097a89242646bd0fa2318452c729491834245190463966675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe0bbe315020cc097a89242646bd0fa2318452c729491834245190463966675->enter($__internal_dfe0bbe315020cc097a89242646bd0fa2318452c729491834245190463966675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "        ";
        
        $__internal_dfe0bbe315020cc097a89242646bd0fa2318452c729491834245190463966675->leave($__internal_dfe0bbe315020cc097a89242646bd0fa2318452c729491834245190463966675_prof);

        
        $__internal_ff53679414f4a07a049d2c4d058b76596230d20add2232373eaf0b04b3e1c617->leave($__internal_ff53679414f4a07a049d2c4d058b76596230d20add2232373eaf0b04b3e1c617_prof);

    }

    public function getTemplateName()
    {
        return "baseprint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 24,  153 => 23,  136 => 22,  126 => 21,  117 => 20,  104 => 7,  95 => 6,  77 => 5,  65 => 25,  62 => 23,  59 => 22,  57 => 20,  42 => 9,  40 => 6,  36 => 5,  30 => 1,);
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
      <div class=\"text-align-center\">
        <p id=\"logo\"><a href=\"http://www.lacittadellaluce.org\">
          <img src=\"http://lacittadellaluce.org/sites/default/files/la-citta-della-luce-150.png\" alt=\"La Citt&agrave; della Luce\" width=\"500\" height=\"50\" border=\"0\"></a><br />
        </p>
        <p>Via Porcozzone 17 - Fraz. Passo Ripe - 60012 Trecastelli (AN) - tel +39.071.7959090 - fax +39.071.2509981
  www.reiki.it - www.lacittadellaluce.org - segreteria@reiki.it - P. Iva 13132970156 - C.F. 93018410154</p>
      </div>
      <h2 class=\"text-align-center\">Calendario dei corsi e seminari</h2>
      {% block navbar %}
      {% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}
        {% endblock %}
    </body>
</html>
", "baseprint.html.twig", "/var/www/html/symfonycalendar/templates/baseprint.html.twig");
    }
}
