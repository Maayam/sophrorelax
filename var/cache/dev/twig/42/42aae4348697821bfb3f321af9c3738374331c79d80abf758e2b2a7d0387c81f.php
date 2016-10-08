<?php

/* base.html.twig */
class __TwigTemplate_3940942cf3cdd4f38cde353101e5ea6fa71f38c951d183a70ad32b72bc88f085 extends Twig_Template
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
        $__internal_c0fce2c0f30c023c893af043141a97b446771486d1d309e68cfde3840b4fb5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0fce2c0f30c023c893af043141a97b446771486d1d309e68cfde3840b4fb5bc->enter($__internal_c0fce2c0f30c023c893af043141a97b446771486d1d309e68cfde3840b4fb5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
<body>

";
        // line 26
        $this->displayBlock('nav', $context, $blocks);
        // line 29
        echo "
<!-- END NAV  -->

<!-- MAIN SECTION -->
<section class=\"container-fluid page-bg accueil row\"> <!-- HAS BG on the whole page -->
  <article id=\"content\" class=\"blacked col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
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
        // line 52
        $this->displayBlock('footer', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('footerAssets', $context, $blocks);
        // line 84
        echo "
<!-- END FOOTER  -->
</body>
</html>
";
        
        $__internal_c0fce2c0f30c023c893af043141a97b446771486d1d309e68cfde3840b4fb5bc->leave($__internal_c0fce2c0f30c023c893af043141a97b446771486d1d309e68cfde3840b4fb5bc_prof);

    }

    // line 4
    public function block_meta($context, array $blocks = array())
    {
        $__internal_e802022b8d9f3540725a019510ed897b0fad23db54c7914eefc029b1fff14769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e802022b8d9f3540725a019510ed897b0fad23db54c7914eefc029b1fff14769->enter($__internal_e802022b8d9f3540725a019510ed897b0fad23db54c7914eefc029b1fff14769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 5
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"\">
    <meta name=\"description\" content=\"sophro44 website\">
  ";
        
        $__internal_e802022b8d9f3540725a019510ed897b0fad23db54c7914eefc029b1fff14769->leave($__internal_e802022b8d9f3540725a019510ed897b0fad23db54c7914eefc029b1fff14769_prof);

    }

    // line 12
    public function block_headerAssets($context, array $blocks = array())
    {
        $__internal_d4f376012444fd0410f45bae564537558d3aec769f9283ea2585c82d06f41a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f376012444fd0410f45bae564537558d3aec769f9283ea2585c82d06f41a71->enter($__internal_d4f376012444fd0410f45bae564537558d3aec769f9283ea2585c82d06f41a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerAssets"));

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
        
        $__internal_d4f376012444fd0410f45bae564537558d3aec769f9283ea2585c82d06f41a71->leave($__internal_d4f376012444fd0410f45bae564537558d3aec769f9283ea2585c82d06f41a71_prof);

    }

    // line 22
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_f0520347e0dfaf1f15d21d3bea7270557f02d991c4ebcdbe4927963f501a76e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0520347e0dfaf1f15d21d3bea7270557f02d991c4ebcdbe4927963f501a76e0->enter($__internal_f0520347e0dfaf1f15d21d3bea7270557f02d991c4ebcdbe4927963f501a76e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "<title>sophro44</title>";
        
        $__internal_f0520347e0dfaf1f15d21d3bea7270557f02d991c4ebcdbe4927963f501a76e0->leave($__internal_f0520347e0dfaf1f15d21d3bea7270557f02d991c4ebcdbe4927963f501a76e0_prof);

    }

    // line 26
    public function block_nav($context, array $blocks = array())
    {
        $__internal_8f1f1b5b491edc8f22f3b942d6b56393b2aadf7a2e9c553826ef800826cdebd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1f1b5b491edc8f22f3b942d6b56393b2aadf7a2e9c553826ef800826cdebd6->enter($__internal_8f1f1b5b491edc8f22f3b942d6b56393b2aadf7a2e9c553826ef800826cdebd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 27
        echo "  ";
        $this->loadTemplate("partial/nav.html.twig", "base.html.twig", 27)->display($context);
        
        $__internal_8f1f1b5b491edc8f22f3b942d6b56393b2aadf7a2e9c553826ef800826cdebd6->leave($__internal_8f1f1b5b491edc8f22f3b942d6b56393b2aadf7a2e9c553826ef800826cdebd6_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebc24e14002b89c15ea6461715787f63cbb7765888ddae9399e3038575483f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc24e14002b89c15ea6461715787f63cbb7765888ddae9399e3038575483f3e->enter($__internal_ebc24e14002b89c15ea6461715787f63cbb7765888ddae9399e3038575483f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "  ";
        if (array_key_exists("content", $context)) {
            // line 44
            echo "    ";
            echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
            echo "
  ";
        }
        
        $__internal_ebc24e14002b89c15ea6461715787f63cbb7765888ddae9399e3038575483f3e->leave($__internal_ebc24e14002b89c15ea6461715787f63cbb7765888ddae9399e3038575483f3e_prof);

    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6b3e73104cc24ec2b4ea007f86eb692807fc86f06065ecfaceb6c6f0a6a28fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3e73104cc24ec2b4ea007f86eb692807fc86f06065ecfaceb6c6f0a6a28fa8->enter($__internal_6b3e73104cc24ec2b4ea007f86eb692807fc86f06065ecfaceb6c6f0a6a28fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 53
        echo "<footer id=\"page-footer\">
  <div class=\"row\">
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
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menuItems"]) ? $context["menuItems"] : $this->getContext($context, "menuItems")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 72
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
        // line 74
        echo "        <li><a href=\"/list\">Panneau d'administration</a></li>
      </ul>
    </div>
  </div> <!-- END ROW -->
</footer>
";
        
        $__internal_6b3e73104cc24ec2b4ea007f86eb692807fc86f06065ecfaceb6c6f0a6a28fa8->leave($__internal_6b3e73104cc24ec2b4ea007f86eb692807fc86f06065ecfaceb6c6f0a6a28fa8_prof);

    }

    // line 81
    public function block_footerAssets($context, array $blocks = array())
    {
        $__internal_10a45956bb9958150b2f769da319f1c0cfec22d003e025c77c61d299ad99c9b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a45956bb9958150b2f769da319f1c0cfec22d003e025c77c61d299ad99c9b9->enter($__internal_10a45956bb9958150b2f769da319f1c0cfec22d003e025c77c61d299ad99c9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerAssets"));

        // line 82
        echo "<script href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_10a45956bb9958150b2f769da319f1c0cfec22d003e025c77c61d299ad99c9b9->leave($__internal_10a45956bb9958150b2f769da319f1c0cfec22d003e025c77c61d299ad99c9b9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  249 => 82,  243 => 81,  231 => 74,  220 => 72,  216 => 71,  196 => 53,  190 => 52,  179 => 44,  176 => 43,  170 => 42,  162 => 27,  156 => 26,  144 => 22,  132 => 16,  128 => 15,  124 => 14,  119 => 13,  113 => 12,  101 => 5,  95 => 4,  84 => 84,  82 => 81,  79 => 80,  77 => 52,  70 => 47,  68 => 42,  53 => 29,  51 => 26,  46 => 23,  44 => 22,  41 => 21,  39 => 12,  36 => 11,  34 => 4,  29 => 1,);
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
<body>

{% block nav %}
  {% include 'partial/nav.html.twig' %}
{% endblock %}

<!-- END NAV  -->

<!-- MAIN SECTION -->
<section class=\"container-fluid page-bg accueil row\"> <!-- HAS BG on the whole page -->
  <article id=\"content\" class=\"blacked col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
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
<footer id=\"page-footer\">
  <div class=\"row\">
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
  </div> <!-- END ROW -->
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
