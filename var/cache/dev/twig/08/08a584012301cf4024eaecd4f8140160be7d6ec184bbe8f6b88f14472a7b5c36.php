<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_87064e81837dc32b147fda212ce3475071f2325bb0e357c2893a00e2e97daf14 extends Twig_Template
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
        $__internal_dcbdf607be9daccd8dedb8969dd810b7fa0057f88e72edc1ed6ca581198c83f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbdf607be9daccd8dedb8969dd810b7fa0057f88e72edc1ed6ca581198c83f2->enter($__internal_dcbdf607be9daccd8dedb8969dd810b7fa0057f88e72edc1ed6ca581198c83f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcbdf607be9daccd8dedb8969dd810b7fa0057f88e72edc1ed6ca581198c83f2->leave($__internal_dcbdf607be9daccd8dedb8969dd810b7fa0057f88e72edc1ed6ca581198c83f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97891a89314daf4cf59675269e5599cc8deed2842b7bb27def59bad3adeaf41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97891a89314daf4cf59675269e5599cc8deed2842b7bb27def59bad3adeaf41d->enter($__internal_97891a89314daf4cf59675269e5599cc8deed2842b7bb27def59bad3adeaf41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_97891a89314daf4cf59675269e5599cc8deed2842b7bb27def59bad3adeaf41d->leave($__internal_97891a89314daf4cf59675269e5599cc8deed2842b7bb27def59bad3adeaf41d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_192bae5b5f448bb653b9b0884056aa0e86343e52f48bb2b0493f8da9a11d2752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192bae5b5f448bb653b9b0884056aa0e86343e52f48bb2b0493f8da9a11d2752->enter($__internal_192bae5b5f448bb653b9b0884056aa0e86343e52f48bb2b0493f8da9a11d2752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_192bae5b5f448bb653b9b0884056aa0e86343e52f48bb2b0493f8da9a11d2752->leave($__internal_192bae5b5f448bb653b9b0884056aa0e86343e52f48bb2b0493f8da9a11d2752_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_82ce815112e0ba8e96a068c40d60c37e529795984364bd5cb91076ad2248f1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ce815112e0ba8e96a068c40d60c37e529795984364bd5cb91076ad2248f1ab->enter($__internal_82ce815112e0ba8e96a068c40d60c37e529795984364bd5cb91076ad2248f1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_82ce815112e0ba8e96a068c40d60c37e529795984364bd5cb91076ad2248f1ab->leave($__internal_82ce815112e0ba8e96a068c40d60c37e529795984364bd5cb91076ad2248f1ab_prof);

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
