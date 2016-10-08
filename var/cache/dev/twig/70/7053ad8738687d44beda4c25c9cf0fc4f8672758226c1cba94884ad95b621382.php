<?php

/* page/error.html.twig */
class __TwigTemplate_5a12ca438d69747d481fdb2b2158c7832e6211c2cd8b3f0cd96a2f4995dc09d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "page/error.html.twig", 1);
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
        $__internal_6225d5f1aeae49d4630cc0f8bb187579f0a3f49f7941a524333b608468e05501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6225d5f1aeae49d4630cc0f8bb187579f0a3f49f7941a524333b608468e05501->enter($__internal_6225d5f1aeae49d4630cc0f8bb187579f0a3f49f7941a524333b608468e05501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6225d5f1aeae49d4630cc0f8bb187579f0a3f49f7941a524333b608468e05501->leave($__internal_6225d5f1aeae49d4630cc0f8bb187579f0a3f49f7941a524333b608468e05501_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6ab62cfddb82064f7f3966cb3d021150ececf37ab7880d2e64fabe1bfa19a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ab62cfddb82064f7f3966cb3d021150ececf37ab7880d2e64fabe1bfa19a64->enter($__internal_d6ab62cfddb82064f7f3966cb3d021150ececf37ab7880d2e64fabe1bfa19a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
";
        
        $__internal_d6ab62cfddb82064f7f3966cb3d021150ececf37ab7880d2e64fabe1bfa19a64->leave($__internal_d6ab62cfddb82064f7f3966cb3d021150ececf37ab7880d2e64fabe1bfa19a64_prof);

    }

    public function getTemplateName()
    {
        return "page/error.html.twig";
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
        return "{% extends 'base.html.twig'%}

{% block body %}
{{message}}
{% endblock %}";
    }
}
