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
        $__internal_59c6b10bc6eb77f31f5cb90bf37686c73f3bfcc306820bdc716f743654af02f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c6b10bc6eb77f31f5cb90bf37686c73f3bfcc306820bdc716f743654af02f6->enter($__internal_59c6b10bc6eb77f31f5cb90bf37686c73f3bfcc306820bdc716f743654af02f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
<body class=\"accueil\">

";
        // line 26
        $this->displayBlock('nav', $context, $blocks);
        // line 29
        echo "
<!-- END NAV  -->

<!-- MAIN SECTION -->
<section class=\"container-fluid page-bg row\"> <!-- HAS BG on the whole page -->
  <article id=\"content\" class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 content\">
    <header class=\"text-center\">
      <img src=\"img/logo/logo-250-text.png\" alt=\"Logo de Sophro 44\" class=\"brand-logo\">
      <h1>Sophrologie Relaxation Art Thérapie</h1>
      <small>&Agrave; l'intérieur de soi, vers le chemin du bien-être</small>
    </header>
    
    <hr>
";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "  </article>
</section>
<!-- END MAIN SECTION -->
<!-- FOOTER SECTION  -->
";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('footerAssets', $context, $blocks);
        // line 81
        echo "
<!-- END FOOTER  -->
</body>
</html>
";
        
        $__internal_59c6b10bc6eb77f31f5cb90bf37686c73f3bfcc306820bdc716f743654af02f6->leave($__internal_59c6b10bc6eb77f31f5cb90bf37686c73f3bfcc306820bdc716f743654af02f6_prof);

    }

    // line 4
    public function block_meta($context, array $blocks = array())
    {
        $__internal_e21da3e845253596877ec112a86899e73fc5fc43d91056d3aed2b4487c4844b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21da3e845253596877ec112a86899e73fc5fc43d91056d3aed2b4487c4844b0->enter($__internal_e21da3e845253596877ec112a86899e73fc5fc43d91056d3aed2b4487c4844b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 5
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"\">
    <meta name=\"description\" content=\"sophro44 website\">
  ";
        
        $__internal_e21da3e845253596877ec112a86899e73fc5fc43d91056d3aed2b4487c4844b0->leave($__internal_e21da3e845253596877ec112a86899e73fc5fc43d91056d3aed2b4487c4844b0_prof);

    }

    // line 12
    public function block_headerAssets($context, array $blocks = array())
    {
        $__internal_3aad1e169e0b484c0c8b7c58398df0b2582b9844490c45acc13d4712336687fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aad1e169e0b484c0c8b7c58398df0b2582b9844490c45acc13d4712336687fd->enter($__internal_3aad1e169e0b484c0c8b7c58398df0b2582b9844490c45acc13d4712336687fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerAssets"));

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
        
        $__internal_3aad1e169e0b484c0c8b7c58398df0b2582b9844490c45acc13d4712336687fd->leave($__internal_3aad1e169e0b484c0c8b7c58398df0b2582b9844490c45acc13d4712336687fd_prof);

    }

    // line 22
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_80dd39401336e85b3e603e5664c5fc241087da2b428018282cafcda63f1eb346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80dd39401336e85b3e603e5664c5fc241087da2b428018282cafcda63f1eb346->enter($__internal_80dd39401336e85b3e603e5664c5fc241087da2b428018282cafcda63f1eb346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "<title>sophro44</title>";
        
        $__internal_80dd39401336e85b3e603e5664c5fc241087da2b428018282cafcda63f1eb346->leave($__internal_80dd39401336e85b3e603e5664c5fc241087da2b428018282cafcda63f1eb346_prof);

    }

    // line 26
    public function block_nav($context, array $blocks = array())
    {
        $__internal_896d9f62618164bfa4ad1f607d403b1876cc423a9da56ba65120fa1af2ef4e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896d9f62618164bfa4ad1f607d403b1876cc423a9da56ba65120fa1af2ef4e76->enter($__internal_896d9f62618164bfa4ad1f607d403b1876cc423a9da56ba65120fa1af2ef4e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 27
        echo "  ";
        $this->loadTemplate("partial/nav.html.twig", "base.html.twig", 27)->display($context);
        
        $__internal_896d9f62618164bfa4ad1f607d403b1876cc423a9da56ba65120fa1af2ef4e76->leave($__internal_896d9f62618164bfa4ad1f607d403b1876cc423a9da56ba65120fa1af2ef4e76_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c4229ccc98f55b2a445aa4252a83be8624696ce9c6d7f24d56e684b7e9cf665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4229ccc98f55b2a445aa4252a83be8624696ce9c6d7f24d56e684b7e9cf665->enter($__internal_1c4229ccc98f55b2a445aa4252a83be8624696ce9c6d7f24d56e684b7e9cf665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "  ";
        if (array_key_exists("content", $context)) {
            // line 44
            echo "    ";
            echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
            echo "
  ";
        }
        
        $__internal_1c4229ccc98f55b2a445aa4252a83be8624696ce9c6d7f24d56e684b7e9cf665->leave($__internal_1c4229ccc98f55b2a445aa4252a83be8624696ce9c6d7f24d56e684b7e9cf665_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        $__internal_983e9d9b92d1df33f4937b83d0a5f2598cd2c03878b4f181220e7f37dea0672a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983e9d9b92d1df33f4937b83d0a5f2598cd2c03878b4f181220e7f37dea0672a->enter($__internal_983e9d9b92d1df33f4937b83d0a5f2598cd2c03878b4f181220e7f37dea0672a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 52
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
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menuItems"]) ? $context["menuItems"] : $this->getContext($context, "menuItems")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 70
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
        // line 72
        echo "        <li><a href=\"/list\">Panneau d'administration</a></li>
      </ul>
    </div>
</footer>
";
        
        $__internal_983e9d9b92d1df33f4937b83d0a5f2598cd2c03878b4f181220e7f37dea0672a->leave($__internal_983e9d9b92d1df33f4937b83d0a5f2598cd2c03878b4f181220e7f37dea0672a_prof);

    }

    // line 78
    public function block_footerAssets($context, array $blocks = array())
    {
        $__internal_193380c890d25032543b77bc4dad4437ceaad03211c6d48b2628a323748f462b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193380c890d25032543b77bc4dad4437ceaad03211c6d48b2628a323748f462b->enter($__internal_193380c890d25032543b77bc4dad4437ceaad03211c6d48b2628a323748f462b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerAssets"));

        // line 79
        echo "<script href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_193380c890d25032543b77bc4dad4437ceaad03211c6d48b2628a323748f462b->leave($__internal_193380c890d25032543b77bc4dad4437ceaad03211c6d48b2628a323748f462b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  246 => 79,  240 => 78,  229 => 72,  218 => 70,  214 => 69,  195 => 52,  189 => 51,  178 => 44,  175 => 43,  169 => 42,  161 => 27,  155 => 26,  143 => 22,  131 => 16,  127 => 15,  123 => 14,  118 => 13,  112 => 12,  100 => 5,  94 => 4,  83 => 81,  81 => 78,  78 => 77,  76 => 51,  70 => 47,  68 => 42,  53 => 29,  51 => 26,  46 => 23,  44 => 22,  41 => 21,  39 => 12,  36 => 11,  34 => 4,  29 => 1,);
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
<body class=\"accueil\">

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
