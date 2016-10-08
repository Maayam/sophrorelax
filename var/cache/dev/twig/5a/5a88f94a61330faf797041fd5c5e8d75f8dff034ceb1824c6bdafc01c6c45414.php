<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d40a6fa61eb7fb67ac00f8e3bcc895327149cbc5888749251284a9652b8c0e15 extends Twig_Template
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
        $__internal_633b145a7bfd7ac350345785dd3473156ecc0732468b97c08389367d093e9d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633b145a7bfd7ac350345785dd3473156ecc0732468b97c08389367d093e9d9a->enter($__internal_633b145a7bfd7ac350345785dd3473156ecc0732468b97c08389367d093e9d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_633b145a7bfd7ac350345785dd3473156ecc0732468b97c08389367d093e9d9a->leave($__internal_633b145a7bfd7ac350345785dd3473156ecc0732468b97c08389367d093e9d9a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_af325bbe0e5a85fb7d3a618cdd6d375779edb0194e96b69f2158f0de68dc8f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af325bbe0e5a85fb7d3a618cdd6d375779edb0194e96b69f2158f0de68dc8f0c->enter($__internal_af325bbe0e5a85fb7d3a618cdd6d375779edb0194e96b69f2158f0de68dc8f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_af325bbe0e5a85fb7d3a618cdd6d375779edb0194e96b69f2158f0de68dc8f0c->leave($__internal_af325bbe0e5a85fb7d3a618cdd6d375779edb0194e96b69f2158f0de68dc8f0c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_adaa249023e214ccb9b9691496e466e8e35d5415c880691d242513670a026b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adaa249023e214ccb9b9691496e466e8e35d5415c880691d242513670a026b73->enter($__internal_adaa249023e214ccb9b9691496e466e8e35d5415c880691d242513670a026b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_adaa249023e214ccb9b9691496e466e8e35d5415c880691d242513670a026b73->leave($__internal_adaa249023e214ccb9b9691496e466e8e35d5415c880691d242513670a026b73_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5efaa2aa50ef24094c408a3b75807ead003dc7a41b2318d6fa93d0811d0a56ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efaa2aa50ef24094c408a3b75807ead003dc7a41b2318d6fa93d0811d0a56ef->enter($__internal_5efaa2aa50ef24094c408a3b75807ead003dc7a41b2318d6fa93d0811d0a56ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5efaa2aa50ef24094c408a3b75807ead003dc7a41b2318d6fa93d0811d0a56ef->leave($__internal_5efaa2aa50ef24094c408a3b75807ead003dc7a41b2318d6fa93d0811d0a56ef_prof);

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
