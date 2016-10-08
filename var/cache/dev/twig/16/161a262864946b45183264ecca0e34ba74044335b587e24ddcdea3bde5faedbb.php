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
        $__internal_8fb9f3ff2c74ec09d5984d226cc4a34750e03fa5ff99dd31e3361c3157eb5bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb9f3ff2c74ec09d5984d226cc4a34750e03fa5ff99dd31e3361c3157eb5bc2->enter($__internal_8fb9f3ff2c74ec09d5984d226cc4a34750e03fa5ff99dd31e3361c3157eb5bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </header>
    
    <hr>
";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "  </article>
</section>
<!-- END MAIN SECTION -->
<!-- FOOTER SECTION  -->
";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('footerAssets', $context, $blocks);
        // line 85
        echo "
<!-- END FOOTER  -->
</body>
</html>
";
        
        $__internal_8fb9f3ff2c74ec09d5984d226cc4a34750e03fa5ff99dd31e3361c3157eb5bc2->leave($__internal_8fb9f3ff2c74ec09d5984d226cc4a34750e03fa5ff99dd31e3361c3157eb5bc2_prof);

    }

    // line 4
    public function block_meta($context, array $blocks = array())
    {
        $__internal_2f12c15117d0416a87a20e0216caa51b006f1ae12c869cc21d0af85ba985f7f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f12c15117d0416a87a20e0216caa51b006f1ae12c869cc21d0af85ba985f7f3->enter($__internal_2f12c15117d0416a87a20e0216caa51b006f1ae12c869cc21d0af85ba985f7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 5
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"\">
    <meta name=\"description\" content=\"sophro44 website\">
  ";
        
        $__internal_2f12c15117d0416a87a20e0216caa51b006f1ae12c869cc21d0af85ba985f7f3->leave($__internal_2f12c15117d0416a87a20e0216caa51b006f1ae12c869cc21d0af85ba985f7f3_prof);

    }

    // line 12
    public function block_headerAssets($context, array $blocks = array())
    {
        $__internal_5140e5d22e7ccfafd5704d85cd826a9b45eeff59da95f4609dca46352d1d6611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5140e5d22e7ccfafd5704d85cd826a9b45eeff59da95f4609dca46352d1d6611->enter($__internal_5140e5d22e7ccfafd5704d85cd826a9b45eeff59da95f4609dca46352d1d6611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerAssets"));

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
        
        $__internal_5140e5d22e7ccfafd5704d85cd826a9b45eeff59da95f4609dca46352d1d6611->leave($__internal_5140e5d22e7ccfafd5704d85cd826a9b45eeff59da95f4609dca46352d1d6611_prof);

    }

    // line 22
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_57af04c8f7bedb355d1586f43f0b86440e7c240ba27831826e8d5e30a3e5c28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57af04c8f7bedb355d1586f43f0b86440e7c240ba27831826e8d5e30a3e5c28f->enter($__internal_57af04c8f7bedb355d1586f43f0b86440e7c240ba27831826e8d5e30a3e5c28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "<title>sophro44</title>";
        
        $__internal_57af04c8f7bedb355d1586f43f0b86440e7c240ba27831826e8d5e30a3e5c28f->leave($__internal_57af04c8f7bedb355d1586f43f0b86440e7c240ba27831826e8d5e30a3e5c28f_prof);

    }

    // line 30
    public function block_nav($context, array $blocks = array())
    {
        $__internal_0c448a6babed03ff14b06c343e322343011b7d8855f0faff610cf88e6a7c0de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c448a6babed03ff14b06c343e322343011b7d8855f0faff610cf88e6a7c0de1->enter($__internal_0c448a6babed03ff14b06c343e322343011b7d8855f0faff610cf88e6a7c0de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 31
        echo "  ";
        $this->loadTemplate("partial/nav.html.twig", "base.html.twig", 31)->display($context);
        
        $__internal_0c448a6babed03ff14b06c343e322343011b7d8855f0faff610cf88e6a7c0de1->leave($__internal_0c448a6babed03ff14b06c343e322343011b7d8855f0faff610cf88e6a7c0de1_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_7248e3803e19f6d9291248989019b77f41a0f28d0dabd196f9ad7afb69845ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7248e3803e19f6d9291248989019b77f41a0f28d0dabd196f9ad7afb69845ef0->enter($__internal_7248e3803e19f6d9291248989019b77f41a0f28d0dabd196f9ad7afb69845ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "  ";
        if (array_key_exists("content", $context)) {
            // line 48
            echo "    ";
            echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
            echo "
  ";
        }
        
        $__internal_7248e3803e19f6d9291248989019b77f41a0f28d0dabd196f9ad7afb69845ef0->leave($__internal_7248e3803e19f6d9291248989019b77f41a0f28d0dabd196f9ad7afb69845ef0_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f3cfdfcb5e484ca1bc56c3d233aae3e2de69c986a5ba65bdb9ef4affc92ca437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3cfdfcb5e484ca1bc56c3d233aae3e2de69c986a5ba65bdb9ef4affc92ca437->enter($__internal_f3cfdfcb5e484ca1bc56c3d233aae3e2de69c986a5ba65bdb9ef4affc92ca437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 56
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
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menuItems"]) ? $context["menuItems"] : $this->getContext($context, "menuItems")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 74
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
        // line 76
        echo "        <li><a href=\"/list\">Panneau d'administration</a></li>
      </ul>
    </div>
</footer>
";
        
        $__internal_f3cfdfcb5e484ca1bc56c3d233aae3e2de69c986a5ba65bdb9ef4affc92ca437->leave($__internal_f3cfdfcb5e484ca1bc56c3d233aae3e2de69c986a5ba65bdb9ef4affc92ca437_prof);

    }

    // line 82
    public function block_footerAssets($context, array $blocks = array())
    {
        $__internal_de7006ddb2df947f46e06263492043fad2eda5c6f00631717b77e3f8dbd82a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7006ddb2df947f46e06263492043fad2eda5c6f00631717b77e3f8dbd82a77->enter($__internal_de7006ddb2df947f46e06263492043fad2eda5c6f00631717b77e3f8dbd82a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerAssets"));

        // line 83
        echo "<script href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_de7006ddb2df947f46e06263492043fad2eda5c6f00631717b77e3f8dbd82a77->leave($__internal_de7006ddb2df947f46e06263492043fad2eda5c6f00631717b77e3f8dbd82a77_prof);

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
        return array (  259 => 83,  253 => 82,  242 => 76,  231 => 74,  227 => 73,  208 => 56,  202 => 55,  191 => 48,  188 => 47,  182 => 46,  174 => 31,  168 => 30,  156 => 22,  144 => 16,  140 => 15,  136 => 14,  131 => 13,  125 => 12,  113 => 5,  107 => 4,  96 => 85,  94 => 82,  91 => 81,  89 => 55,  83 => 51,  81 => 46,  66 => 33,  64 => 30,  61 => 29,  57 => 27,  51 => 25,  49 => 24,  46 => 23,  44 => 22,  41 => 21,  39 => 12,  36 => 11,  34 => 4,  29 => 1,);
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
