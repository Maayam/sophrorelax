<?php

/* admin/editPage.html.twig */
class __TwigTemplate_9f142c4643c071588edd6b23571fd5d5ce932e5dc643f6c00354b4fe46855287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin-base.html.twig", "admin/editPage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'headerAssets' => array($this, 'block_headerAssets'),
            'footerAssets' => array($this, 'block_footerAssets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06b38035819779a2c3ae5a7de3311930e54918dae76e6e4efc8075685d8e72c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b38035819779a2c3ae5a7de3311930e54918dae76e6e4efc8075685d8e72c2->enter($__internal_06b38035819779a2c3ae5a7de3311930e54918dae76e6e4efc8075685d8e72c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/editPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06b38035819779a2c3ae5a7de3311930e54918dae76e6e4efc8075685d8e72c2->leave($__internal_06b38035819779a2c3ae5a7de3311930e54918dae76e6e4efc8075685d8e72c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_31b32af2a68130669412a9e72d3292efa81882b1ae366a450a0f920285521c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b32af2a68130669412a9e72d3292efa81882b1ae366a450a0f920285521c4e->enter($__internal_31b32af2a68130669412a9e72d3292efa81882b1ae366a450a0f920285521c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_31b32af2a68130669412a9e72d3292efa81882b1ae366a450a0f920285521c4e->leave($__internal_31b32af2a68130669412a9e72d3292efa81882b1ae366a450a0f920285521c4e_prof);

    }

    // line 11
    public function block_headerAssets($context, array $blocks = array())
    {
        $__internal_2ef3a55a50eb013a4c07555eda85e19d1a1c375c028c2afc012640854af92625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef3a55a50eb013a4c07555eda85e19d1a1c375c028c2afc012640854af92625->enter($__internal_2ef3a55a50eb013a4c07555eda85e19d1a1c375c028c2afc012640854af92625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerAssets"));

        // line 12
        echo "\t";
        $this->displayParentBlock("headerAssets", $context, $blocks);
        echo "
<!-- \t  <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script> -->
<!-- \t  <script>
\t\t  tinymce.init({
\t\t\t  selector: '#form_content',
\t\t\t  language: 'fr_FR'
\t\t  });
\t  </script> -->
\t  <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_2ef3a55a50eb013a4c07555eda85e19d1a1c375c028c2afc012640854af92625->leave($__internal_2ef3a55a50eb013a4c07555eda85e19d1a1c375c028c2afc012640854af92625_prof);

    }

    // line 23
    public function block_footerAssets($context, array $blocks = array())
    {
        $__internal_2ab3c7f955e7e16404440a1ccc427a538b641361ae191cd91e3e2c6366b0e884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab3c7f955e7e16404440a1ccc427a538b641361ae191cd91e3e2c6366b0e884->enter($__internal_2ab3c7f955e7e16404440a1ccc427a538b641361ae191cd91e3e2c6366b0e884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerAssets"));

        // line 24
        echo "\t";
        $this->displayParentBlock("footerAssets", $context, $blocks);
        echo "
    <script>
        // Replace the <textarea id=\"editor1\"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'form_content' );
    </script>
";
        
        $__internal_2ab3c7f955e7e16404440a1ccc427a538b641361ae191cd91e3e2c6366b0e884->leave($__internal_2ab3c7f955e7e16404440a1ccc427a538b641361ae191cd91e3e2c6366b0e884_prof);

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
        return array (  99 => 24,  93 => 23,  84 => 20,  74 => 13,  69 => 12,  63 => 11,  53 => 7,  49 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
<!-- \t  <script src=\"{{ asset('/js/tinymce/tinymce.min.js') }}\"></script> -->
<!-- \t  <script>
\t\t  tinymce.init({
\t\t\t  selector: '#form_content',
\t\t\t  language: 'fr_FR'
\t\t  });
\t  </script> -->
\t  <script src=\"{{ asset('/js/ckeditor/ckeditor.js') }}\"></script>
{% endblock %}

{% block footerAssets %}
\t{{ parent() }}
    <script>
        // Replace the <textarea id=\"editor1\"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'form_content' );
    </script>
{% endblock %}";
    }
}
