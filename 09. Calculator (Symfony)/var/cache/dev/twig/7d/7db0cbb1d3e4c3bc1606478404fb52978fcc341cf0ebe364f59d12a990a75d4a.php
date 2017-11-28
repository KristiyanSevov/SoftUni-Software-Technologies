<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b3badcaa33a694ff0ee206e536e2b3dd6018ae8957a7f3b5693b206ddd20fe78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c1514e0aad8f0733b908b41ef87ac8aab2cb1da75fe4a64cf645d5978e859f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1514e0aad8f0733b908b41ef87ac8aab2cb1da75fe4a64cf645d5978e859f2->enter($__internal_2c1514e0aad8f0733b908b41ef87ac8aab2cb1da75fe4a64cf645d5978e859f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c1514e0aad8f0733b908b41ef87ac8aab2cb1da75fe4a64cf645d5978e859f2->leave($__internal_2c1514e0aad8f0733b908b41ef87ac8aab2cb1da75fe4a64cf645d5978e859f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73ac1b0a26fcc12d80013c77658d950ec2d7ce327a49f60fcad4236318370648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ac1b0a26fcc12d80013c77658d950ec2d7ce327a49f60fcad4236318370648->enter($__internal_73ac1b0a26fcc12d80013c77658d950ec2d7ce327a49f60fcad4236318370648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_73ac1b0a26fcc12d80013c77658d950ec2d7ce327a49f60fcad4236318370648->leave($__internal_73ac1b0a26fcc12d80013c77658d950ec2d7ce327a49f60fcad4236318370648_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_165eb0772627160f55e3d2cc7a7c748c8c3db76a6266c5eabbf2c2ef98a4db06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165eb0772627160f55e3d2cc7a7c748c8c3db76a6266c5eabbf2c2ef98a4db06->enter($__internal_165eb0772627160f55e3d2cc7a7c748c8c3db76a6266c5eabbf2c2ef98a4db06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_165eb0772627160f55e3d2cc7a7c748c8c3db76a6266c5eabbf2c2ef98a4db06->leave($__internal_165eb0772627160f55e3d2cc7a7c748c8c3db76a6266c5eabbf2c2ef98a4db06_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bf630da4d025b528f5a4b82c36fa32ad8546b27621062f81c1c4b56aecce0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf630da4d025b528f5a4b82c36fa32ad8546b27621062f81c1c4b56aecce0bc->enter($__internal_5bf630da4d025b528f5a4b82c36fa32ad8546b27621062f81c1c4b56aecce0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5bf630da4d025b528f5a4b82c36fa32ad8546b27621062f81c1c4b56aecce0bc->leave($__internal_5bf630da4d025b528f5a4b82c36fa32ad8546b27621062f81c1c4b56aecce0bc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
