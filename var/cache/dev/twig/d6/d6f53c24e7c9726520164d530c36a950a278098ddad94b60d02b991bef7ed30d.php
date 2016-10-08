<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_013f3f0949e0860f0bd5aebacf760cc74cca23d7771f4b6269847d084027a7af extends Twig_Template
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
        $__internal_140d4afa6029b24e524f1f7db0d3b2c6ab25968067ee43446df3569a75697ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140d4afa6029b24e524f1f7db0d3b2c6ab25968067ee43446df3569a75697ca8->enter($__internal_140d4afa6029b24e524f1f7db0d3b2c6ab25968067ee43446df3569a75697ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_140d4afa6029b24e524f1f7db0d3b2c6ab25968067ee43446df3569a75697ca8->leave($__internal_140d4afa6029b24e524f1f7db0d3b2c6ab25968067ee43446df3569a75697ca8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a62062a839ebc269f370a37285dc968669f23d4549ca9fc053e03d9f4285650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a62062a839ebc269f370a37285dc968669f23d4549ca9fc053e03d9f4285650->enter($__internal_2a62062a839ebc269f370a37285dc968669f23d4549ca9fc053e03d9f4285650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a62062a839ebc269f370a37285dc968669f23d4549ca9fc053e03d9f4285650->leave($__internal_2a62062a839ebc269f370a37285dc968669f23d4549ca9fc053e03d9f4285650_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08bcd069b259778e33ab892f38f4bfeb3ede60b303c24f6af66bb1d62cee1a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bcd069b259778e33ab892f38f4bfeb3ede60b303c24f6af66bb1d62cee1a44->enter($__internal_08bcd069b259778e33ab892f38f4bfeb3ede60b303c24f6af66bb1d62cee1a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08bcd069b259778e33ab892f38f4bfeb3ede60b303c24f6af66bb1d62cee1a44->leave($__internal_08bcd069b259778e33ab892f38f4bfeb3ede60b303c24f6af66bb1d62cee1a44_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5b158ee553f8efb98d9c6d9d734a5b91e1aea120ccc8dbe25187d31c1bbae3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b158ee553f8efb98d9c6d9d734a5b91e1aea120ccc8dbe25187d31c1bbae3f->enter($__internal_e5b158ee553f8efb98d9c6d9d734a5b91e1aea120ccc8dbe25187d31c1bbae3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e5b158ee553f8efb98d9c6d9d734a5b91e1aea120ccc8dbe25187d31c1bbae3f->leave($__internal_e5b158ee553f8efb98d9c6d9d734a5b91e1aea120ccc8dbe25187d31c1bbae3f_prof);

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
