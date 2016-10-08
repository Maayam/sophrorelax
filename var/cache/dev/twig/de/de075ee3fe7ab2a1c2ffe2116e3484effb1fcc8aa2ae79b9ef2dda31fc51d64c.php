<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2b870872fd77f1f90fac74ea8e69dca9b425e3ca4b77c334c4b85c5708c1b992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6f8c32168fb2ab808fbc1685f4591728ae83ac5f714206885e31255d3ff4e528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8c32168fb2ab808fbc1685f4591728ae83ac5f714206885e31255d3ff4e528->enter($__internal_6f8c32168fb2ab808fbc1685f4591728ae83ac5f714206885e31255d3ff4e528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f8c32168fb2ab808fbc1685f4591728ae83ac5f714206885e31255d3ff4e528->leave($__internal_6f8c32168fb2ab808fbc1685f4591728ae83ac5f714206885e31255d3ff4e528_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_98a7b4b57e87e105699839f3c9d56fb90904ea553c12e3a78152b809ef547ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a7b4b57e87e105699839f3c9d56fb90904ea553c12e3a78152b809ef547ddf->enter($__internal_98a7b4b57e87e105699839f3c9d56fb90904ea553c12e3a78152b809ef547ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_98a7b4b57e87e105699839f3c9d56fb90904ea553c12e3a78152b809ef547ddf->leave($__internal_98a7b4b57e87e105699839f3c9d56fb90904ea553c12e3a78152b809ef547ddf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7827fea4f7f7bb9d38e682feaecddfd5e6a29d49da195cd35bab931d96767b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7827fea4f7f7bb9d38e682feaecddfd5e6a29d49da195cd35bab931d96767b1a->enter($__internal_7827fea4f7f7bb9d38e682feaecddfd5e6a29d49da195cd35bab931d96767b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7827fea4f7f7bb9d38e682feaecddfd5e6a29d49da195cd35bab931d96767b1a->leave($__internal_7827fea4f7f7bb9d38e682feaecddfd5e6a29d49da195cd35bab931d96767b1a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fcad3f10a382aefae22790bd8620e9d05012e9593dd97b337fe66405767091a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcad3f10a382aefae22790bd8620e9d05012e9593dd97b337fe66405767091a->enter($__internal_9fcad3f10a382aefae22790bd8620e9d05012e9593dd97b337fe66405767091a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9fcad3f10a382aefae22790bd8620e9d05012e9593dd97b337fe66405767091a->leave($__internal_9fcad3f10a382aefae22790bd8620e9d05012e9593dd97b337fe66405767091a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
