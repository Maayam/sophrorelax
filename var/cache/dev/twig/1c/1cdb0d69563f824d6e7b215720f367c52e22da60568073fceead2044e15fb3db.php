<?php

/* admin/addPage.html.twig */
class __TwigTemplate_94689584f2a9435d15c624f2033d30425e04300c16de54ff4815fa779caa5772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin-base.html.twig", "admin/addPage.html.twig", 1);
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
        $__internal_94b04883bcbd2dcf548a767ddd093896759f6bc4256de3a9c3ee2cc85e70f8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b04883bcbd2dcf548a767ddd093896759f6bc4256de3a9c3ee2cc85e70f8a3->enter($__internal_94b04883bcbd2dcf548a767ddd093896759f6bc4256de3a9c3ee2cc85e70f8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/addPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94b04883bcbd2dcf548a767ddd093896759f6bc4256de3a9c3ee2cc85e70f8a3->leave($__internal_94b04883bcbd2dcf548a767ddd093896759f6bc4256de3a9c3ee2cc85e70f8a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba89a49d8bdc1db0c53b7cba43aadd8c9d94d082f2a3ed8c724b9e1c404acf67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba89a49d8bdc1db0c53b7cba43aadd8c9d94d082f2a3ed8c724b9e1c404acf67->enter($__internal_ba89a49d8bdc1db0c53b7cba43aadd8c9d94d082f2a3ed8c724b9e1c404acf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ba89a49d8bdc1db0c53b7cba43aadd8c9d94d082f2a3ed8c724b9e1c404acf67->leave($__internal_ba89a49d8bdc1db0c53b7cba43aadd8c9d94d082f2a3ed8c724b9e1c404acf67_prof);

    }

    // line 11
    public function block_headerAssets($context, array $blocks = array())
    {
        $__internal_5e1a9b44fc6734e55db1a02b401824f01476f95101920854bc91aeddebb78efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1a9b44fc6734e55db1a02b401824f01476f95101920854bc91aeddebb78efb->enter($__internal_5e1a9b44fc6734e55db1a02b401824f01476f95101920854bc91aeddebb78efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerAssets"));

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
        
        $__internal_5e1a9b44fc6734e55db1a02b401824f01476f95101920854bc91aeddebb78efb->leave($__internal_5e1a9b44fc6734e55db1a02b401824f01476f95101920854bc91aeddebb78efb_prof);

    }

    // line 23
    public function block_footerAssets($context, array $blocks = array())
    {
        $__internal_436c236d76a953aeea944580121466bcbafb0b0f88ce88d2b95f807c885e0952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436c236d76a953aeea944580121466bcbafb0b0f88ce88d2b95f807c885e0952->enter($__internal_436c236d76a953aeea944580121466bcbafb0b0f88ce88d2b95f807c885e0952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerAssets"));

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
        
        $__internal_436c236d76a953aeea944580121466bcbafb0b0f88ce88d2b95f807c885e0952->leave($__internal_436c236d76a953aeea944580121466bcbafb0b0f88ce88d2b95f807c885e0952_prof);

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
