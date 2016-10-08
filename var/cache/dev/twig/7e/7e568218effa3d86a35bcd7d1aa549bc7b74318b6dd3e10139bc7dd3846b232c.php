<?php

/* admin/listPage.html.twig */
class __TwigTemplate_a385e5a25acaef58e70cde3337304012eeb1cdcbfc4ba29bd1424988eb3f7921 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin-base.html.twig", "admin/listPage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4941396cfb9948436b7404f21829ad6b4899a869ae98b4a90959d70c8b263267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4941396cfb9948436b7404f21829ad6b4899a869ae98b4a90959d70c8b263267->enter($__internal_4941396cfb9948436b7404f21829ad6b4899a869ae98b4a90959d70c8b263267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/listPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4941396cfb9948436b7404f21829ad6b4899a869ae98b4a90959d70c8b263267->leave($__internal_4941396cfb9948436b7404f21829ad6b4899a869ae98b4a90959d70c8b263267_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0f2160fde24ea33446e11a8d7ee307abc79ce6cac8f331ae48318a258b4fa5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f2160fde24ea33446e11a8d7ee307abc79ce6cac8f331ae48318a258b4fa5d->enter($__internal_c0f2160fde24ea33446e11a8d7ee307abc79ce6cac8f331ae48318a258b4fa5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h2>Liste des pages du site:</h2>
<div><a href=\"/add\">Créer une nouvelle page</a></div>
<ul class=\"list-unstyled\">
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 8
            echo "\t<li class=\"nav-item\">
\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "
\t\t<ul>
\t\t\t<li><a href=\"/edit/";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\">Modifier</a></li>
\t\t\t<li><a href=\"/delete/";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\">Supprimer</a></li>
\t\t\t<!-- Send to Drafts / Publish if Draft -->
\t\t</ul>
\t</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>
<div><a href=\"/add\">Créer une nouvelle page</a></div>
";
        
        $__internal_c0f2160fde24ea33446e11a8d7ee307abc79ce6cac8f331ae48318a258b4fa5d->leave($__internal_c0f2160fde24ea33446e11a8d7ee307abc79ce6cac8f331ae48318a258b4fa5d_prof);

    }

    public function getTemplateName()
    {
        return "admin/listPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  61 => 12,  57 => 11,  52 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'admin-base.html.twig' %}

{% block body %}
<h2>Liste des pages du site:</h2>
<div><a href=\"/add\">Créer une nouvelle page</a></div>
<ul class=\"list-unstyled\">
{% for page in pages %}
\t<li class=\"nav-item\">
\t\t{{page.name}}
\t\t<ul>
\t\t\t<li><a href=\"/edit/{{page.id}}\">Modifier</a></li>
\t\t\t<li><a href=\"/delete/{{page.id}}\">Supprimer</a></li>
\t\t\t<!-- Send to Drafts / Publish if Draft -->
\t\t</ul>
\t</li>
{% endfor %}
</ul>
<div><a href=\"/add\">Créer une nouvelle page</a></div>
{% endblock %}";
    }
}
