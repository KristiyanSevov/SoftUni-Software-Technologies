<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_314147b0fc4c6d6c44ca0a8ad5e50296e6b0aa1f2da39cf5f6d8073241e98ad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93e6bfaf3aab957a5222806c2c69c650885fcad9fea85a80049688d3679a252c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e6bfaf3aab957a5222806c2c69c650885fcad9fea85a80049688d3679a252c->enter($__internal_93e6bfaf3aab957a5222806c2c69c650885fcad9fea85a80049688d3679a252c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93e6bfaf3aab957a5222806c2c69c650885fcad9fea85a80049688d3679a252c->leave($__internal_93e6bfaf3aab957a5222806c2c69c650885fcad9fea85a80049688d3679a252c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a68282c5ce19a9d3690397b708f1958b688cd76c8fd36d92f91e4b75e7effbed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68282c5ce19a9d3690397b708f1958b688cd76c8fd36d92f91e4b75e7effbed->enter($__internal_a68282c5ce19a9d3690397b708f1958b688cd76c8fd36d92f91e4b75e7effbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a68282c5ce19a9d3690397b708f1958b688cd76c8fd36d92f91e4b75e7effbed->leave($__internal_a68282c5ce19a9d3690397b708f1958b688cd76c8fd36d92f91e4b75e7effbed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3eb000fbea36aba1bbb9df8085bedd4eb0ae1d0add89c6a124005f9ddccc110a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb000fbea36aba1bbb9df8085bedd4eb0ae1d0add89c6a124005f9ddccc110a->enter($__internal_3eb000fbea36aba1bbb9df8085bedd4eb0ae1d0add89c6a124005f9ddccc110a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3eb000fbea36aba1bbb9df8085bedd4eb0ae1d0add89c6a124005f9ddccc110a->leave($__internal_3eb000fbea36aba1bbb9df8085bedd4eb0ae1d0add89c6a124005f9ddccc110a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_336c409e74843a6132a5e8226a30073ff249b0980ed6054f1d7a906149f2a067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336c409e74843a6132a5e8226a30073ff249b0980ed6054f1d7a906149f2a067->enter($__internal_336c409e74843a6132a5e8226a30073ff249b0980ed6054f1d7a906149f2a067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_336c409e74843a6132a5e8226a30073ff249b0980ed6054f1d7a906149f2a067->leave($__internal_336c409e74843a6132a5e8226a30073ff249b0980ed6054f1d7a906149f2a067_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
