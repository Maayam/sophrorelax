<?php

/* base.html.twig */
class __TwigTemplate_0573ae2f27cec4f9552de37605e86f092bc3264fec3afcce6b17dcdc889956a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'headerAssets' => array($this, 'block_headerAssets'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'footerAssets' => array($this, 'block_footerAssets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc4212b3f172ebf3d99ce2f13335f78def4bdb1a0e7df375c7635ffe1e3f4398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4212b3f172ebf3d99ce2f13335f78def4bdb1a0e7df375c7635ffe1e3f4398->enter($__internal_bc4212b3f172ebf3d99ce2f13335f78def4bdb1a0e7df375c7635ffe1e3f4398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr-FR\">
<head>
  ";
        // line 4
        $this->displayBlock('meta', $context, $blocks);
        // line 11
        echo "
  ";
        // line 12
        $this->displayBlock('headerAssets', $context, $blocks);
        // line 21
        echo "
  ";
        // line 22
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 23
        echo "</head>
";
        // line 24
        if ((array_key_exists("photoUrl", $context) && ((isset($context["photoUrl"]) ? $context["photoUrl"] : $this->getContext($context, "photoUrl")) != ""))) {
            // line 25
            echo "<body style=\"background: url('";
            echo twig_escape_filter($this->env, (isset($context["photoUrl"]) ? $context["photoUrl"] : $this->getContext($context, "photoUrl")), "html", null, true);
            echo "') no-repeat center fixed\" class=\"accueil\">
";
        } else {
            // line 27
            echo "<body style=\"background: url('../img/sea.jpg') no-repeat center fixed\" class=\"accueil\">
";
        }
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('nav', $context, $blocks);
        // line 33
        echo "
<!-- END NAV  -->

<!-- MAIN SECTION -->
<section class=\"container-fluid page-bg row\"> <!-- HAS BG on the whole page -->
  <article id=\"content\" class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 content\">
    <header class=\"text-center\">
      <img src=\"img/logo/logo-250-text.png\" alt=\"Logo de Sophro 44\" class=\"brand-logo\">
      <h1>Sophrologie Relaxation Art Thérapie</h1>
      <small>&Agrave; l'intérieur de soi, vers le chemin du bien-être</small>
      <p class=\"lead\">
        Consacrer un moment de détente rien que pour soi, faire une pause pour se ressourcer est devenu un besoin vital. 
      Parce que la sophrologie permet d'apaiser les tensions et de s'écouter, la relaxation est la clé de notre bien-être.
      Savoir être en accord avec soi-même et apprendre à lâcher prise est un véritable trésor.
      Saurez-vous en profiter?
      </p>
    </header>
    
    <hr>
";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "  </article>
</section>
<!-- END MAIN SECTION -->
<!-- FOOTER SECTION  -->
";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('footerAssets', $context, $blocks);
        // line 91
        echo "
<!-- END FOOTER  -->
</body>
</html>
";
        
        $__internal_bc4212b3f172ebf3d99ce2f13335f78def4bdb1a0e7df375c7635ffe1e3f4398->leave($__internal_bc4212b3f172ebf3d99ce2f13335f78def4bdb1a0e7df375c7635ffe1e3f4398_prof);

    }

    // line 4
    public function block_meta($context, array $blocks = array())
    {
        $__internal_dadf6890b03403ba24d96bd927dda4ee307be09ceba2f4c7284b433b943ab9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadf6890b03403ba24d96bd927dda4ee307be09ceba2f4c7284b433b943ab9c9->enter($__internal_dadf6890b03403ba24d96bd927dda4ee307be09ceba2f4c7284b433b943ab9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 5
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"\">
    <meta name=\"description\" content=\"sophro44 website\">
  ";
        
        $__internal_dadf6890b03403ba24d96bd927dda4ee307be09ceba2f4c7284b433b943ab9c9->leave($__internal_dadf6890b03403ba24d96bd927dda4ee307be09ceba2f4c7284b433b943ab9c9_prof);

    }

    // line 12
    public function block_headerAssets($context, array $blocks = array())
    {
        $__internal_a8e5cf35dd232700fb01ba2d750953e75f320c70306298b3ba02ca6f6e361f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e5cf35dd232700fb01ba2d750953e75f320c70306298b3ba02ca6f6e361f05->enter($__internal_a8e5cf35dd232700fb01ba2d750953e75f320c70306298b3ba02ca6f6e361f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerAssets"));

        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/addons.css"), "html", null, true);
        echo "\">
    <link href=\"https://fonts.googleapis.com/css?family=Comfortaa|Lato|Cormorant+Garamond\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"{ asset('img/logo/logo-32.ico')}\" type=\"image/x-icon\">
    <link rel=\"canonical\" href=\"\">
  ";
        
        $__internal_a8e5cf35dd232700fb01ba2d750953e75f320c70306298b3ba02ca6f6e361f05->leave($__internal_a8e5cf35dd232700fb01ba2d750953e75f320c70306298b3ba02ca6f6e361f05_prof);

    }

    // line 22
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_d6c6605c1ef69e202f313fb062671a14998ff4d20bd4eeccf77eb750d96f96e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c6605c1ef69e202f313fb062671a14998ff4d20bd4eeccf77eb750d96f96e4->enter($__internal_d6c6605c1ef69e202f313fb062671a14998ff4d20bd4eeccf77eb750d96f96e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "<title>sophro44</title>";
        
        $__internal_d6c6605c1ef69e202f313fb062671a14998ff4d20bd4eeccf77eb750d96f96e4->leave($__internal_d6c6605c1ef69e202f313fb062671a14998ff4d20bd4eeccf77eb750d96f96e4_prof);

    }

    // line 30
    public function block_nav($context, array $blocks = array())
    {
        $__internal_904cba29a10d5fa8ccf2b2a3fb9b4e901e623458e5b3362057ecb24a75b30bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904cba29a10d5fa8ccf2b2a3fb9b4e901e623458e5b3362057ecb24a75b30bb3->enter($__internal_904cba29a10d5fa8ccf2b2a3fb9b4e901e623458e5b3362057ecb24a75b30bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 31
        echo "  ";
        $this->loadTemplate("partial/nav.html.twig", "base.html.twig", 31)->display($context);
        
        $__internal_904cba29a10d5fa8ccf2b2a3fb9b4e901e623458e5b3362057ecb24a75b30bb3->leave($__internal_904cba29a10d5fa8ccf2b2a3fb9b4e901e623458e5b3362057ecb24a75b30bb3_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f4b02b2f7cbd7aba52c98cebe2bd2420db15b9cb553961ff0c402de9b30543f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4b02b2f7cbd7aba52c98cebe2bd2420db15b9cb553961ff0c402de9b30543f->enter($__internal_5f4b02b2f7cbd7aba52c98cebe2bd2420db15b9cb553961ff0c402de9b30543f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "  ";
        if (array_key_exists("content", $context)) {
            // line 54
            echo "    ";
            echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
            echo "
  ";
        }
        
        $__internal_5f4b02b2f7cbd7aba52c98cebe2bd2420db15b9cb553961ff0c402de9b30543f->leave($__internal_5f4b02b2f7cbd7aba52c98cebe2bd2420db15b9cb553961ff0c402de9b30543f_prof);

    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1df7968d45ae8c54f76c5bddcf85555bd2c72ed1fe5f3b1fcfd442c1bd49a690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df7968d45ae8c54f76c5bddcf85555bd2c72ed1fe5f3b1fcfd442c1bd49a690->enter($__internal_1df7968d45ae8c54f76c5bddcf85555bd2c72ed1fe5f3b1fcfd442c1bd49a690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 62
        echo "<footer class=\"row page-footer\">
    <div class=\"col-sm-5 col-sm-offset-1\">
      <h2><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Corinne Alexandre</h2>
      <ul class=\"list-unstyled\">
          <li>Sophrologue certifié</li>
          <li>
            <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> 
            <a href=\"mailto:cosophrorelax44@gmail.com?Subject=Prise%20de%20%contact%20depuis%20le%20site\">cosophrorelax44@gmail.com
            </a>
          </li>
          </li>
          <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> 06.95.61.81.03 sur RDV</li>
      </ul>
    </div>
    <div class=\"col-sm-3 col-sm-offset-3\">
      <h2>Site Map</h2>
      <ul class=\"list-unstyled\">
      ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menuItems"]) ? $context["menuItems"] : $this->getContext($context, "menuItems")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 80
            echo "        <li><a href=\"/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        <li><a href=\"/list\">Panneau d'administration</a></li>
      </ul>
    </div>
</footer>
";
        
        $__internal_1df7968d45ae8c54f76c5bddcf85555bd2c72ed1fe5f3b1fcfd442c1bd49a690->leave($__internal_1df7968d45ae8c54f76c5bddcf85555bd2c72ed1fe5f3b1fcfd442c1bd49a690_prof);

    }

    // line 88
    public function block_footerAssets($context, array $blocks = array())
    {
        $__internal_7de9f23514c9a84251d94f7212ef5da43e8ea6347c8eab9d5dc06e71ce74bbba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de9f23514c9a84251d94f7212ef5da43e8ea6347c8eab9d5dc06e71ce74bbba->enter($__internal_7de9f23514c9a84251d94f7212ef5da43e8ea6347c8eab9d5dc06e71ce74bbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerAssets"));

        // line 89
        echo "<script href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_7de9f23514c9a84251d94f7212ef5da43e8ea6347c8eab9d5dc06e71ce74bbba->leave($__internal_7de9f23514c9a84251d94f7212ef5da43e8ea6347c8eab9d5dc06e71ce74bbba_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 89,  259 => 88,  248 => 82,  237 => 80,  233 => 79,  214 => 62,  208 => 61,  197 => 54,  194 => 53,  188 => 52,  180 => 31,  174 => 30,  162 => 22,  150 => 16,  146 => 15,  142 => 14,  137 => 13,  131 => 12,  119 => 5,  113 => 4,  102 => 91,  100 => 88,  97 => 87,  95 => 61,  89 => 57,  87 => 52,  66 => 33,  64 => 30,  61 => 29,  57 => 27,  51 => 25,  49 => 24,  46 => 23,  44 => 22,  41 => 21,  39 => 12,  36 => 11,  34 => 4,  29 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"fr-FR\">
<head>
  {% block meta %}
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"\">
    <meta name=\"description\" content=\"sophro44 website\">
  {% endblock %}

  {% block headerAssets %}
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/font-awesome/css/font-awesome.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/addons.css')}}\">
    <link href=\"https://fonts.googleapis.com/css?family=Comfortaa|Lato|Cormorant+Garamond\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"{ asset('img/logo/logo-32.ico')}\" type=\"image/x-icon\">
    <link rel=\"canonical\" href=\"\">
  {% endblock %}

  {% block pageTitle %}<title>sophro44</title>{% endblock %}
</head>
{% if photoUrl is defined and photoUrl != '' %}
<body style=\"background: url('{{photoUrl}}') no-repeat center fixed\" class=\"accueil\">
{% else %}
<body style=\"background: url('../img/sea.jpg') no-repeat center fixed\" class=\"accueil\">
{% endif %}

{% block nav %}
  {% include 'partial/nav.html.twig' %}
{% endblock %}

<!-- END NAV  -->

<!-- MAIN SECTION -->
<section class=\"container-fluid page-bg row\"> <!-- HAS BG on the whole page -->
  <article id=\"content\" class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 content\">
    <header class=\"text-center\">
      <img src=\"img/logo/logo-250-text.png\" alt=\"Logo de Sophro 44\" class=\"brand-logo\">
      <h1>Sophrologie Relaxation Art Thérapie</h1>
      <small>&Agrave; l'intérieur de soi, vers le chemin du bien-être</small>
      <p class=\"lead\">
        Consacrer un moment de détente rien que pour soi, faire une pause pour se ressourcer est devenu un besoin vital. 
      Parce que la sophrologie permet d'apaiser les tensions et de s'écouter, la relaxation est la clé de notre bien-être.
      Savoir être en accord avec soi-même et apprendre à lâcher prise est un véritable trésor.
      Saurez-vous en profiter?
      </p>
    </header>
    
    <hr>
{% block body %}
  {% if content is defined %}
    {{ content | raw }}
  {% endif %}
{% endblock %}
  </article>
</section>
<!-- END MAIN SECTION -->
<!-- FOOTER SECTION  -->
{% block footer %}
<footer class=\"row page-footer\">
    <div class=\"col-sm-5 col-sm-offset-1\">
      <h2><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Corinne Alexandre</h2>
      <ul class=\"list-unstyled\">
          <li>Sophrologue certifié</li>
          <li>
            <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> 
            <a href=\"mailto:cosophrorelax44@gmail.com?Subject=Prise%20de%20%contact%20depuis%20le%20site\">cosophrorelax44@gmail.com
            </a>
          </li>
          </li>
          <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> 06.95.61.81.03 sur RDV</li>
      </ul>
    </div>
    <div class=\"col-sm-3 col-sm-offset-3\">
      <h2>Site Map</h2>
      <ul class=\"list-unstyled\">
      {% for item in menuItems %}
        <li><a href=\"/{{item.name}}\">{{item.name}}</a></li>
      {% endfor %}
        <li><a href=\"/list\">Panneau d'administration</a></li>
      </ul>
    </div>
</footer>
{% endblock %}

{% block footerAssets%}
<script href=\"{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js' )}}\" type=\"text/javascript\"></script>
{% endblock %}

<!-- END FOOTER  -->
</body>
</html>
";
    }
}
