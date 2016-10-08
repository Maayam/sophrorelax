<?php

/* admin/editPage.html.twig */
class __TwigTemplate_292e6652ba967c432b3a4f93650b64af22cabca6ffaed73fcbf687cec33b3a2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin-base.html.twig", "admin/editPage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'headerAssets' => array($this, 'block_headerAssets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a9e7e091187f2e03bf145e5bf0d08a8c07c51613b73c960a0000238ae4f1716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9e7e091187f2e03bf145e5bf0d08a8c07c51613b73c960a0000238ae4f1716->enter($__internal_1a9e7e091187f2e03bf145e5bf0d08a8c07c51613b73c960a0000238ae4f1716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/editPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a9e7e091187f2e03bf145e5bf0d08a8c07c51613b73c960a0000238ae4f1716->leave($__internal_1a9e7e091187f2e03bf145e5bf0d08a8c07c51613b73c960a0000238ae4f1716_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06ebe4baec83d68677d72fc952c49f44661787bc1b849adc0049039d3018e0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ebe4baec83d68677d72fc952c49f44661787bc1b849adc0049039d3018e0bd->enter($__internal_06ebe4baec83d68677d72fc952c49f44661787bc1b849adc0049039d3018e0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"wrapper\">
\t\t";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
\t\t";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
";
        
        $__internal_06ebe4baec83d68677d72fc952c49f44661787bc1b849adc0049039d3018e0bd->leave($__internal_06ebe4baec83d68677d72fc952c49f44661787bc1b849adc0049039d3018e0bd_prof);

    }

    // line 11
    public function block_headerAssets($context, array $blocks = array())
    {
        $__internal_0e4bb38898b32843deefaf1d88c458b5c2dee1d8ccc4b037ee5fbeec13c67715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4bb38898b32843deefaf1d88c458b5c2dee1d8ccc4b037ee5fbeec13c67715->enter($__internal_0e4bb38898b32843deefaf1d88c458b5c2dee1d8ccc4b037ee5fbeec13c67715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerAssets"));

        // line 12
        echo "\t";
        $this->displayParentBlock("headerAssets", $context, $blocks);
        echo "
\t  <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
\t  <script>
\t\t  tinymce.init({
\t\t\t  selector: '#form_content',
\t\t\t  language: 'fr_FR'
\t\t  });
\t  </script>
";
        
        $__internal_0e4bb38898b32843deefaf1d88c458b5c2dee1d8ccc4b037ee5fbeec13c67715->leave($__internal_0e4bb38898b32843deefaf1d88c458b5c2dee1d8ccc4b037ee5fbeec13c67715_prof);

    }

    public function getTemplateName()
    {
        return "admin/editPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  68 => 12,  62 => 11,  52 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'admin-base.html.twig' %}

{% block body %}
\t<div class=\"wrapper\">
\t\t{{ form_start(form, {attr: {novalidate: 'novalidate'}}) }}
\t\t{{ form_widget(form) }}
\t\t{{ form_end(form) }}
\t</div>
{% endblock %}

{% block headerAssets %}
\t{{ parent() }}
\t  <script src=\"{{ asset('/js/tinymce/tinymce.min.js') }}\"></script>
\t  <script>
\t\t  tinymce.init({
\t\t\t  selector: '#form_content',
\t\t\t  language: 'fr_FR'
\t\t  });
\t  </script>
{% endblock %}";
    }
}
