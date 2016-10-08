<?php

/* partial/toast.html.twig */
class __TwigTemplate_57a151ce80d5439f0ae55aedd1abf74b44c9954f35de365b13178245eaba8da7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "partial/toast.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cea051a0f232e8e15358298c4005def6516b97b7c2c76d98278ef9af7d05a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cea051a0f232e8e15358298c4005def6516b97b7c2c76d98278ef9af7d05a32->enter($__internal_5cea051a0f232e8e15358298c4005def6516b97b7c2c76d98278ef9af7d05a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partial/toast.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cea051a0f232e8e15358298c4005def6516b97b7c2c76d98278ef9af7d05a32->leave($__internal_5cea051a0f232e8e15358298c4005def6516b97b7c2c76d98278ef9af7d05a32_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f273153ae46452aa6f31513082ef0c3a08d8226b252ae2867fa9a6ffbe83da46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f273153ae46452aa6f31513082ef0c3a08d8226b252ae2867fa9a6ffbe83da46->enter($__internal_f273153ae46452aa6f31513082ef0c3a08d8226b252ae2867fa9a6ffbe83da46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h1>ICI CEST LA PAGE ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</h1>
";
        
        $__internal_f273153ae46452aa6f31513082ef0c3a08d8226b252ae2867fa9a6ffbe83da46->leave($__internal_f273153ae46452aa6f31513082ef0c3a08d8226b252ae2867fa9a6ffbe83da46_prof);

    }

    public function getTemplateName()
    {
        return "partial/toast.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
\t<h1>ICI CEST LA PAGE {{ name }}</h1>
{% endblock %}";
    }
}
