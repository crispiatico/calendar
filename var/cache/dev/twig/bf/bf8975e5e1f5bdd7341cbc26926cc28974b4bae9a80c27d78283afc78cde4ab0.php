<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5fbed5a3a75611a0336ac48a3a12e7aff1dd7fe7c9cd8e8df3ba1ae12f76400e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_246d3a5987a880d07f741302e370c75bc41cbbf624c59fec48386ae01244074f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246d3a5987a880d07f741302e370c75bc41cbbf624c59fec48386ae01244074f->enter($__internal_246d3a5987a880d07f741302e370c75bc41cbbf624c59fec48386ae01244074f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5feb8bce5d723d1b11b94b752168c57fdc0ac88a2945a015714af962fbda9e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5feb8bce5d723d1b11b94b752168c57fdc0ac88a2945a015714af962fbda9e41->enter($__internal_5feb8bce5d723d1b11b94b752168c57fdc0ac88a2945a015714af962fbda9e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_246d3a5987a880d07f741302e370c75bc41cbbf624c59fec48386ae01244074f->leave($__internal_246d3a5987a880d07f741302e370c75bc41cbbf624c59fec48386ae01244074f_prof);

        
        $__internal_5feb8bce5d723d1b11b94b752168c57fdc0ac88a2945a015714af962fbda9e41->leave($__internal_5feb8bce5d723d1b11b94b752168c57fdc0ac88a2945a015714af962fbda9e41_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d05d9dfe9f8fe298d5a759d5958fc254cd20c2120941ffa261ab02295e2a6d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05d9dfe9f8fe298d5a759d5958fc254cd20c2120941ffa261ab02295e2a6d58->enter($__internal_d05d9dfe9f8fe298d5a759d5958fc254cd20c2120941ffa261ab02295e2a6d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9ec08396519a06585e63bc0616f6bdb1844c1e43d764bd56c28dfd3e37c4fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ec08396519a06585e63bc0616f6bdb1844c1e43d764bd56c28dfd3e37c4fcb->enter($__internal_b9ec08396519a06585e63bc0616f6bdb1844c1e43d764bd56c28dfd3e37c4fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b9ec08396519a06585e63bc0616f6bdb1844c1e43d764bd56c28dfd3e37c4fcb->leave($__internal_b9ec08396519a06585e63bc0616f6bdb1844c1e43d764bd56c28dfd3e37c4fcb_prof);

        
        $__internal_d05d9dfe9f8fe298d5a759d5958fc254cd20c2120941ffa261ab02295e2a6d58->leave($__internal_d05d9dfe9f8fe298d5a759d5958fc254cd20c2120941ffa261ab02295e2a6d58_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_32e2d85ca0854482af1dfa8ff53fa52dc01565519a08063c511394ede04ff020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e2d85ca0854482af1dfa8ff53fa52dc01565519a08063c511394ede04ff020->enter($__internal_32e2d85ca0854482af1dfa8ff53fa52dc01565519a08063c511394ede04ff020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_945d6aac54abd3aafefef477ce3fdaf480f3f0d00f064dd848565a1ad8962f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945d6aac54abd3aafefef477ce3fdaf480f3f0d00f064dd848565a1ad8962f3e->enter($__internal_945d6aac54abd3aafefef477ce3fdaf480f3f0d00f064dd848565a1ad8962f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_945d6aac54abd3aafefef477ce3fdaf480f3f0d00f064dd848565a1ad8962f3e->leave($__internal_945d6aac54abd3aafefef477ce3fdaf480f3f0d00f064dd848565a1ad8962f3e_prof);

        
        $__internal_32e2d85ca0854482af1dfa8ff53fa52dc01565519a08063c511394ede04ff020->leave($__internal_32e2d85ca0854482af1dfa8ff53fa52dc01565519a08063c511394ede04ff020_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6775fbc232ced66275112401dd90994bb11e66de9600052b7ce807baf60ca477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6775fbc232ced66275112401dd90994bb11e66de9600052b7ce807baf60ca477->enter($__internal_6775fbc232ced66275112401dd90994bb11e66de9600052b7ce807baf60ca477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5ae1878f779338debf2a97d22af88411ecabe1ac3160deba2944e9358cd8d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ae1878f779338debf2a97d22af88411ecabe1ac3160deba2944e9358cd8d1b->enter($__internal_f5ae1878f779338debf2a97d22af88411ecabe1ac3160deba2944e9358cd8d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f5ae1878f779338debf2a97d22af88411ecabe1ac3160deba2944e9358cd8d1b->leave($__internal_f5ae1878f779338debf2a97d22af88411ecabe1ac3160deba2944e9358cd8d1b_prof);

        
        $__internal_6775fbc232ced66275112401dd90994bb11e66de9600052b7ce807baf60ca477->leave($__internal_6775fbc232ced66275112401dd90994bb11e66de9600052b7ce807baf60ca477_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/symfonycalendar/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
