<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ce7866756a1a8a7d68d38578d3c0c919e88e11e8b5c3d37789bfcf7ba71582ce extends Twig_Template
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
        $__internal_f1e522bd56c0dca08afc5452fefa305533b55a25497587fbc05f21efb8c441e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e522bd56c0dca08afc5452fefa305533b55a25497587fbc05f21efb8c441e8->enter($__internal_f1e522bd56c0dca08afc5452fefa305533b55a25497587fbc05f21efb8c441e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1e522bd56c0dca08afc5452fefa305533b55a25497587fbc05f21efb8c441e8->leave($__internal_f1e522bd56c0dca08afc5452fefa305533b55a25497587fbc05f21efb8c441e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_21a10c8ea9e6e4e442b833481de4b7eea787bd94741e754608fb3b4da4a7f9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a10c8ea9e6e4e442b833481de4b7eea787bd94741e754608fb3b4da4a7f9ae->enter($__internal_21a10c8ea9e6e4e442b833481de4b7eea787bd94741e754608fb3b4da4a7f9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_21a10c8ea9e6e4e442b833481de4b7eea787bd94741e754608fb3b4da4a7f9ae->leave($__internal_21a10c8ea9e6e4e442b833481de4b7eea787bd94741e754608fb3b4da4a7f9ae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_541dc2e914ae8d211f1006227282baca40d8446508b9ccf3a3dc81b3f5ddef02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541dc2e914ae8d211f1006227282baca40d8446508b9ccf3a3dc81b3f5ddef02->enter($__internal_541dc2e914ae8d211f1006227282baca40d8446508b9ccf3a3dc81b3f5ddef02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_541dc2e914ae8d211f1006227282baca40d8446508b9ccf3a3dc81b3f5ddef02->leave($__internal_541dc2e914ae8d211f1006227282baca40d8446508b9ccf3a3dc81b3f5ddef02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_290aeb58a7c943c1dec08f4cdf734ba074d125669bc334a4063cad6a43dd8900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290aeb58a7c943c1dec08f4cdf734ba074d125669bc334a4063cad6a43dd8900->enter($__internal_290aeb58a7c943c1dec08f4cdf734ba074d125669bc334a4063cad6a43dd8900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_290aeb58a7c943c1dec08f4cdf734ba074d125669bc334a4063cad6a43dd8900->leave($__internal_290aeb58a7c943c1dec08f4cdf734ba074d125669bc334a4063cad6a43dd8900_prof);

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
