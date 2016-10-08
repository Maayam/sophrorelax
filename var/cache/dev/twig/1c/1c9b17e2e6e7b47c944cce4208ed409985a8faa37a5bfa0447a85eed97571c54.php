<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_eb5d3000268f7379a11d0170d313670309117f5c556493e23ab72af0e128e9cb extends Twig_Template
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
        $__internal_863b5f05ed0215532fc8485222add644038cbae92f7ff9556cbb1ab030148b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863b5f05ed0215532fc8485222add644038cbae92f7ff9556cbb1ab030148b9e->enter($__internal_863b5f05ed0215532fc8485222add644038cbae92f7ff9556cbb1ab030148b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_863b5f05ed0215532fc8485222add644038cbae92f7ff9556cbb1ab030148b9e->leave($__internal_863b5f05ed0215532fc8485222add644038cbae92f7ff9556cbb1ab030148b9e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1a3528d74a58d98f685e10a16b50fc75d51561b5b2e1be3ac390966e2bb0de6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3528d74a58d98f685e10a16b50fc75d51561b5b2e1be3ac390966e2bb0de6f->enter($__internal_1a3528d74a58d98f685e10a16b50fc75d51561b5b2e1be3ac390966e2bb0de6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1a3528d74a58d98f685e10a16b50fc75d51561b5b2e1be3ac390966e2bb0de6f->leave($__internal_1a3528d74a58d98f685e10a16b50fc75d51561b5b2e1be3ac390966e2bb0de6f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e2ffb9b24810153e7872515c1ae4407e8519f92366bd76f2d75def0d93d3efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2ffb9b24810153e7872515c1ae4407e8519f92366bd76f2d75def0d93d3efc->enter($__internal_3e2ffb9b24810153e7872515c1ae4407e8519f92366bd76f2d75def0d93d3efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3e2ffb9b24810153e7872515c1ae4407e8519f92366bd76f2d75def0d93d3efc->leave($__internal_3e2ffb9b24810153e7872515c1ae4407e8519f92366bd76f2d75def0d93d3efc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_560b4f7dea5d6be075d0e032449fd67f53b0f89227b5e876f1b2790b0891d172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560b4f7dea5d6be075d0e032449fd67f53b0f89227b5e876f1b2790b0891d172->enter($__internal_560b4f7dea5d6be075d0e032449fd67f53b0f89227b5e876f1b2790b0891d172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_560b4f7dea5d6be075d0e032449fd67f53b0f89227b5e876f1b2790b0891d172->leave($__internal_560b4f7dea5d6be075d0e032449fd67f53b0f89227b5e876f1b2790b0891d172_prof);

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
