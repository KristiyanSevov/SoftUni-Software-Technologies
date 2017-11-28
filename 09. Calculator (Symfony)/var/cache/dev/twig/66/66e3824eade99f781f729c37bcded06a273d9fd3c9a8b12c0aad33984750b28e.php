<?php

/* base.html.twig */
class __TwigTemplate_ad4d878963c8215d5f1613859fb6694bd548063bb61afc42eed162911147f31e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3014444480132a78c578e98ecc038c9d56a5e6532fe2ff323b5d38b0fd7325a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3014444480132a78c578e98ecc038c9d56a5e6532fe2ff323b5d38b0fd7325a6->enter($__internal_3014444480132a78c578e98ecc038c9d56a5e6532fe2ff323b5d38b0fd7325a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_3014444480132a78c578e98ecc038c9d56a5e6532fe2ff323b5d38b0fd7325a6->leave($__internal_3014444480132a78c578e98ecc038c9d56a5e6532fe2ff323b5d38b0fd7325a6_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c4ea60d7a228dd1c4cac182ce6eba268d3db0a2fdd17e305853a487e9350850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4ea60d7a228dd1c4cac182ce6eba268d3db0a2fdd17e305853a487e9350850->enter($__internal_0c4ea60d7a228dd1c4cac182ce6eba268d3db0a2fdd17e305853a487e9350850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_0c4ea60d7a228dd1c4cac182ce6eba268d3db0a2fdd17e305853a487e9350850->leave($__internal_0c4ea60d7a228dd1c4cac182ce6eba268d3db0a2fdd17e305853a487e9350850_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df57d3615b4408d576a81abd2158be1e1b95082acff53e7e1b98ce7a39e3db79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df57d3615b4408d576a81abd2158be1e1b95082acff53e7e1b98ce7a39e3db79->enter($__internal_df57d3615b4408d576a81abd2158be1e1b95082acff53e7e1b98ce7a39e3db79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_df57d3615b4408d576a81abd2158be1e1b95082acff53e7e1b98ce7a39e3db79->leave($__internal_df57d3615b4408d576a81abd2158be1e1b95082acff53e7e1b98ce7a39e3db79_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_75731fc0112ca8a311901fec54629eb76b27340d9bd748ed86fc93ef6dd2c0c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75731fc0112ca8a311901fec54629eb76b27340d9bd748ed86fc93ef6dd2c0c8->enter($__internal_75731fc0112ca8a311901fec54629eb76b27340d9bd748ed86fc93ef6dd2c0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_75731fc0112ca8a311901fec54629eb76b27340d9bd748ed86fc93ef6dd2c0c8->leave($__internal_75731fc0112ca8a311901fec54629eb76b27340d9bd748ed86fc93ef6dd2c0c8_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_770da4f8214d995ebb43f29724a2b491cff0e9cb244d3119205616a7fe00f4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770da4f8214d995ebb43f29724a2b491cff0e9cb244d3119205616a7fe00f4eb->enter($__internal_770da4f8214d995ebb43f29724a2b491cff0e9cb244d3119205616a7fe00f4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_770da4f8214d995ebb43f29724a2b491cff0e9cb244d3119205616a7fe00f4eb->leave($__internal_770da4f8214d995ebb43f29724a2b491cff0e9cb244d3119205616a7fe00f4eb_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc54d2f88a55bd0c32590b5e290660947466803000fd3005428c55daff300c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc54d2f88a55bd0c32590b5e290660947466803000fd3005428c55daff300c08->enter($__internal_bc54d2f88a55bd0c32590b5e290660947466803000fd3005428c55daff300c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_bc54d2f88a55bd0c32590b5e290660947466803000fd3005428c55daff300c08->leave($__internal_bc54d2f88a55bd0c32590b5e290660947466803000fd3005428c55daff300c08_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_35e76dd1b12835cf6216348332191a6db1939cc2e3dc6ea7242595dcc2b7af17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e76dd1b12835cf6216348332191a6db1939cc2e3dc6ea7242595dcc2b7af17->enter($__internal_35e76dd1b12835cf6216348332191a6db1939cc2e3dc6ea7242595dcc2b7af17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_35e76dd1b12835cf6216348332191a6db1939cc2e3dc6ea7242595dcc2b7af17->leave($__internal_35e76dd1b12835cf6216348332191a6db1939cc2e3dc6ea7242595dcc2b7af17_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5e274e7c34eca768afd6818114a9b1c75a1a45f23e4d539983eb659584d5672c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e274e7c34eca768afd6818114a9b1c75a1a45f23e4d539983eb659584d5672c->enter($__internal_5e274e7c34eca768afd6818114a9b1c75a1a45f23e4d539983eb659584d5672c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5e274e7c34eca768afd6818114a9b1c75a1a45f23e4d539983eb659584d5672c->leave($__internal_5e274e7c34eca768afd6818114a9b1c75a1a45f23e4d539983eb659584d5672c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
