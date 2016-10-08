<?php

/* admin/addPage.html.twig */
class __TwigTemplate_46d2b67c72492c6af563578cc1a1c1dcd0ba24c9d7e4dc76b0f5432bf161c6a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin-base.html.twig", "admin/addPage.html.twig", 1);
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
        $__internal_f785af1906dfa8219dfa0760be5938404ff3edbf41239d50b57cecc23582ab62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f785af1906dfa8219dfa0760be5938404ff3edbf41239d50b57cecc23582ab62->enter($__internal_f785af1906dfa8219dfa0760be5938404ff3edbf41239d50b57cecc23582ab62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/addPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f785af1906dfa8219dfa0760be5938404ff3edbf41239d50b57cecc23582ab62->leave($__internal_f785af1906dfa8219dfa0760be5938404ff3edbf41239d50b57cecc23582ab62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36a976b06e94be481038465a3a9196614a5c4b0c6ccb20a62ea70afadded9f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a976b06e94be481038465a3a9196614a5c4b0c6ccb20a62ea70afadded9f6f->enter($__internal_36a976b06e94be481038465a3a9196614a5c4b0c6ccb20a62ea70afadded9f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_36a976b06e94be481038465a3a9196614a5c4b0c6ccb20a62ea70afadded9f6f->leave($__internal_36a976b06e94be481038465a3a9196614a5c4b0c6ccb20a62ea70afadded9f6f_prof);

    }

    // line 11
    public function block_headerAssets($context, array $blocks = array())
    {
        $__internal_c1d0ad8adeacaabffeefdb8f86044842c95222cc0d2d5b306a69d41d333a069c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d0ad8adeacaabffeefdb8f86044842c95222cc0d2d5b306a69d41d333a069c->enter($__internal_c1d0ad8adeacaabffeefdb8f86044842c95222cc0d2d5b306a69d41d333a069c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerAssets"));

        // line 12
        echo "\t";
        $this->displayParentBlock("headerAssets", $context, $blocks);
        echo "
\t";
        // line 13
        $this->displayParentBlock("headerAssets", $context, $blocks);
        echo "
\t  <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
\t  <script>
\t\t  tinymce.init({
\t\t\t  selector: '#form_content',
\t\t\t  language: 'fr_FR'
\t\t  });
\t  </script>
";
        
        $__internal_c1d0ad8adeacaabffeefdb8f86044842c95222cc0d2d5b306a69d41d333a069c->leave($__internal_c1d0ad8adeacaabffeefdb8f86044842c95222cc0d2d5b306a69d41d333a069c_prof);

    }

    public function getTemplateName()
    {
        return "admin/addPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  73 => 13,  68 => 12,  62 => 11,  52 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
