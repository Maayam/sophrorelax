<?php

/* admin-base.html.twig */
class __TwigTemplate_f1791928eb17ecb2d80e58d972b72246546c6d7ba377a6efa418ef36c654de52 extends Twig_Template
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
        $__internal_209a9a6ea77bb2a8ec62580664ee9bc75e3763d7adc858830154c56bf09b6cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209a9a6ea77bb2a8ec62580664ee9bc75e3763d7adc858830154c56bf09b6cb6->enter($__internal_209a9a6ea77bb2a8ec62580664ee9bc75e3763d7adc858830154c56bf09b6cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin-base.html.twig"));

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
        if (array_key_exists("photoUrl", $context)) {
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
        $this->displayBlock('nav', $context, $blocks);
        // line 32
        echo "<!-- END NAV  -->

<!-- MAIN SECTION -->
<section class=\"container-fluid page-bg row\"> <!-- HAS BG on the whole page -->
  <article id=\"content\" class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 content\">

";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 39
            echo "    <div class=\"flash-notice\">
        ";
            // line 40
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "  </article>
</section>
<!-- END MAIN SECTION -->

<!-- FOOTER SECTION  -->
";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('footerAssets', $context, $blocks);
        // line 69
        echo "
<!-- END FOOTER  -->
</body>
</html>
";
        
        $__internal_209a9a6ea77bb2a8ec62580664ee9bc75e3763d7adc858830154c56bf09b6cb6->leave($__internal_209a9a6ea77bb2a8ec62580664ee9bc75e3763d7adc858830154c56bf09b6cb6_prof);

    }

    // line 4
    public function block_meta($context, array $blocks = array())
    {
        $__internal_2c98b84ea41d8d2f71ed52a1db9b9bd18aaf4b5e8a7423c7b8a24cba2350f7de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c98b84ea41d8d2f71ed52a1db9b9bd18aaf4b5e8a7423c7b8a24cba2350f7de->enter($__internal_2c98b84ea41d8d2f71ed52a1db9b9bd18aaf4b5e8a7423c7b8a24cba2350f7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 5
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"\">
    <meta name=\"description\" content=\"sophro44 website\">
  ";
        
        $__internal_2c98b84ea41d8d2f71ed52a1db9b9bd18aaf4b5e8a7423c7b8a24cba2350f7de->leave($__internal_2c98b84ea41d8d2f71ed52a1db9b9bd18aaf4b5e8a7423c7b8a24cba2350f7de_prof);

    }

    // line 12
    public function block_headerAssets($context, array $blocks = array())
    {
        $__internal_5adbc4f8e5667067f1bfd78290bcf262334a9b56048560261363e1992d6ca0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5adbc4f8e5667067f1bfd78290bcf262334a9b56048560261363e1992d6ca0fc->enter($__internal_5adbc4f8e5667067f1bfd78290bcf262334a9b56048560261363e1992d6ca0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerAssets"));

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
        
        $__internal_5adbc4f8e5667067f1bfd78290bcf262334a9b56048560261363e1992d6ca0fc->leave($__internal_5adbc4f8e5667067f1bfd78290bcf262334a9b56048560261363e1992d6ca0fc_prof);

    }

    // line 22
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_31e423bb4b719fd406468ebf6f3954abd48513c914552502d59c2dc4a77d847f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e423bb4b719fd406468ebf6f3954abd48513c914552502d59c2dc4a77d847f->enter($__internal_31e423bb4b719fd406468ebf6f3954abd48513c914552502d59c2dc4a77d847f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "<title>sophro44</title>";
        
        $__internal_31e423bb4b719fd406468ebf6f3954abd48513c914552502d59c2dc4a77d847f->leave($__internal_31e423bb4b719fd406468ebf6f3954abd48513c914552502d59c2dc4a77d847f_prof);

    }

    // line 29
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b4dc95dcf9810ece8f7f5dce02070d87b7a0d7c0f02d933d47d06c2e8c2191cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4dc95dcf9810ece8f7f5dce02070d87b7a0d7c0f02d933d47d06c2e8c2191cc->enter($__internal_b4dc95dcf9810ece8f7f5dce02070d87b7a0d7c0f02d933d47d06c2e8c2191cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 30
        echo "  <h1>Panneau d'administration</h1>
";
        
        $__internal_b4dc95dcf9810ece8f7f5dce02070d87b7a0d7c0f02d933d47d06c2e8c2191cc->leave($__internal_b4dc95dcf9810ece8f7f5dce02070d87b7a0d7c0f02d933d47d06c2e8c2191cc_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_9149e00c2c7e6cd730c83383c7393a3f3f4d429e8f5c2c5c6f5c7d1b3d43acee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9149e00c2c7e6cd730c83383c7393a3f3f4d429e8f5c2c5c6f5c7d1b3d43acee->enter($__internal_9149e00c2c7e6cd730c83383c7393a3f3f4d429e8f5c2c5c6f5c7d1b3d43acee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9149e00c2c7e6cd730c83383c7393a3f3f4d429e8f5c2c5c6f5c7d1b3d43acee->leave($__internal_9149e00c2c7e6cd730c83383c7393a3f3f4d429e8f5c2c5c6f5c7d1b3d43acee_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2fd5409d548c35d10673594624122c7a2b3cd0cfe302a4643a211aa86da84397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd5409d548c35d10673594624122c7a2b3cd0cfe302a4643a211aa86da84397->enter($__internal_2fd5409d548c35d10673594624122c7a2b3cd0cfe302a4643a211aa86da84397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        echo "<footer class=\"row page-footer\">
  <div class=\"row\">
    <div class=\"col-sm-3 col-sm-offset-3\">
      <h2>Site Map</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"/\">Voir le Site</a></li>
      </ul>
    </div>
  </div> <!-- END ROW -->
  <div class=\"row text-center copyright-line\">
    <!-- Copyright -->
  </div>
</footer>
";
        
        $__internal_2fd5409d548c35d10673594624122c7a2b3cd0cfe302a4643a211aa86da84397->leave($__internal_2fd5409d548c35d10673594624122c7a2b3cd0cfe302a4643a211aa86da84397_prof);

    }

    // line 66
    public function block_footerAssets($context, array $blocks = array())
    {
        $__internal_a5afcf878aaaf103d3c3ed41ab22cf48977ea0ebeb4614516ea77e966bf70289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5afcf878aaaf103d3c3ed41ab22cf48977ea0ebeb4614516ea77e966bf70289->enter($__internal_a5afcf878aaaf103d3c3ed41ab22cf48977ea0ebeb4614516ea77e966bf70289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerAssets"));

        // line 67
        echo "<script href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_a5afcf878aaaf103d3c3ed41ab22cf48977ea0ebeb4614516ea77e966bf70289->leave($__internal_a5afcf878aaaf103d3c3ed41ab22cf48977ea0ebeb4614516ea77e966bf70289_prof);

    }

    public function getTemplateName()
    {
        return "admin-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 67,  229 => 66,  209 => 51,  203 => 50,  192 => 44,  184 => 30,  178 => 29,  166 => 22,  154 => 16,  150 => 15,  146 => 14,  141 => 13,  135 => 12,  123 => 5,  117 => 4,  106 => 69,  104 => 66,  101 => 65,  99 => 50,  92 => 45,  90 => 44,  87 => 43,  78 => 40,  75 => 39,  71 => 38,  63 => 32,  61 => 29,  57 => 27,  51 => 25,  49 => 24,  46 => 23,  44 => 22,  41 => 21,  39 => 12,  36 => 11,  34 => 4,  29 => 1,);
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
{% if photoUrl is defined %}
<body style=\"background: url('{{photoUrl}}') no-repeat center fixed\" class=\"accueil\">
{% else %}
<body style=\"background: url('../img/sea.jpg') no-repeat center fixed\" class=\"accueil\">
{% endif %}
{% block nav %}
  <h1>Panneau d'administration</h1>
{% endblock %}
<!-- END NAV  -->

<!-- MAIN SECTION -->
<section class=\"container-fluid page-bg row\"> <!-- HAS BG on the whole page -->
  <article id=\"content\" class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 content\">

{% for flash_message in app.session.flashBag.get('notice') %}
    <div class=\"flash-notice\">
        {{ flash_message }}
    </div>
{% endfor %}

{% block body %}{% endblock %}
  </article>
</section>
<!-- END MAIN SECTION -->

<!-- FOOTER SECTION  -->
{% block footer %}
<footer class=\"row page-footer\">
  <div class=\"row\">
    <div class=\"col-sm-3 col-sm-offset-3\">
      <h2>Site Map</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"/\">Voir le Site</a></li>
      </ul>
    </div>
  </div> <!-- END ROW -->
  <div class=\"row text-center copyright-line\">
    <!-- Copyright -->
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
