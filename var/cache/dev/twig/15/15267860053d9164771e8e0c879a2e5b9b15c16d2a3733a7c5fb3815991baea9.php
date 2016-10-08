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
        $__internal_8d0ce6cc19e821aeae406db980c34f8223e462750518db0c080b3b7b5f22c1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0ce6cc19e821aeae406db980c34f8223e462750518db0c080b3b7b5f22c1d3->enter($__internal_8d0ce6cc19e821aeae406db980c34f8223e462750518db0c080b3b7b5f22c1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin-base.html.twig"));

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
        // line 25
        $this->displayBlock('nav', $context, $blocks);
        // line 28
        echo "<!-- END NAV  -->

<!-- MAIN SECTION -->
<section class=\"container-fluid page-bg accueil row\"> <!-- HAS BG on the whole page -->
  <article id=\"content\" class=\"blacked col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">

";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 35
            echo "    <div class=\"flash-notice\">
        ";
            // line 36
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "  </article>
</section>
<!-- END MAIN SECTION -->

<!-- FOOTER SECTION  -->
";
        // line 46
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('footerAssets', $context, $blocks);
        // line 76
        echo "
<!-- END FOOTER  -->
</body>
</html>
";
        
        $__internal_8d0ce6cc19e821aeae406db980c34f8223e462750518db0c080b3b7b5f22c1d3->leave($__internal_8d0ce6cc19e821aeae406db980c34f8223e462750518db0c080b3b7b5f22c1d3_prof);

    }

    // line 4
    public function block_meta($context, array $blocks = array())
    {
        $__internal_1f2c693aef8b9d6c95d33794b81d7bcf7eb75b9534f4d0d01f757d09d0cfdbfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2c693aef8b9d6c95d33794b81d7bcf7eb75b9534f4d0d01f757d09d0cfdbfa->enter($__internal_1f2c693aef8b9d6c95d33794b81d7bcf7eb75b9534f4d0d01f757d09d0cfdbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 5
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"\">
    <meta name=\"description\" content=\"sophro44 website\">
  ";
        
        $__internal_1f2c693aef8b9d6c95d33794b81d7bcf7eb75b9534f4d0d01f757d09d0cfdbfa->leave($__internal_1f2c693aef8b9d6c95d33794b81d7bcf7eb75b9534f4d0d01f757d09d0cfdbfa_prof);

    }

    // line 12
    public function block_headerAssets($context, array $blocks = array())
    {
        $__internal_4796934ea96e9d46defdfa58f0165e7cfbaae4ebb6a3d901ec791eae813bef8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4796934ea96e9d46defdfa58f0165e7cfbaae4ebb6a3d901ec791eae813bef8d->enter($__internal_4796934ea96e9d46defdfa58f0165e7cfbaae4ebb6a3d901ec791eae813bef8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerAssets"));

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
        
        $__internal_4796934ea96e9d46defdfa58f0165e7cfbaae4ebb6a3d901ec791eae813bef8d->leave($__internal_4796934ea96e9d46defdfa58f0165e7cfbaae4ebb6a3d901ec791eae813bef8d_prof);

    }

    // line 22
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_1ae3f14896e249c1a385b51c85090d8bfd55c667e10b7a06c0b5b2364188b958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae3f14896e249c1a385b51c85090d8bfd55c667e10b7a06c0b5b2364188b958->enter($__internal_1ae3f14896e249c1a385b51c85090d8bfd55c667e10b7a06c0b5b2364188b958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "<title>sophro44</title>";
        
        $__internal_1ae3f14896e249c1a385b51c85090d8bfd55c667e10b7a06c0b5b2364188b958->leave($__internal_1ae3f14896e249c1a385b51c85090d8bfd55c667e10b7a06c0b5b2364188b958_prof);

    }

    // line 25
    public function block_nav($context, array $blocks = array())
    {
        $__internal_00f009b6fbe6b8cc291c7fe662433011215c789421eafff2705a34ecca8a81ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f009b6fbe6b8cc291c7fe662433011215c789421eafff2705a34ecca8a81ad->enter($__internal_00f009b6fbe6b8cc291c7fe662433011215c789421eafff2705a34ecca8a81ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 26
        echo "  <h1>Panneau d'administration</h1>
";
        
        $__internal_00f009b6fbe6b8cc291c7fe662433011215c789421eafff2705a34ecca8a81ad->leave($__internal_00f009b6fbe6b8cc291c7fe662433011215c789421eafff2705a34ecca8a81ad_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a526ad6bb51da65f349efb660d5c58aee7a857d47f62f4b5c49d6f642d73617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a526ad6bb51da65f349efb660d5c58aee7a857d47f62f4b5c49d6f642d73617->enter($__internal_1a526ad6bb51da65f349efb660d5c58aee7a857d47f62f4b5c49d6f642d73617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1a526ad6bb51da65f349efb660d5c58aee7a857d47f62f4b5c49d6f642d73617->leave($__internal_1a526ad6bb51da65f349efb660d5c58aee7a857d47f62f4b5c49d6f642d73617_prof);

    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        $__internal_55357b258766417a8a95f7fa50c294cd667ec83ec044f58332c0c94978835699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55357b258766417a8a95f7fa50c294cd667ec83ec044f58332c0c94978835699->enter($__internal_55357b258766417a8a95f7fa50c294cd667ec83ec044f58332c0c94978835699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 47
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
      </ul>
    </div>
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
        
        $__internal_55357b258766417a8a95f7fa50c294cd667ec83ec044f58332c0c94978835699->leave($__internal_55357b258766417a8a95f7fa50c294cd667ec83ec044f58332c0c94978835699_prof);

    }

    // line 73
    public function block_footerAssets($context, array $blocks = array())
    {
        $__internal_0436f7f6edfd2bb82acb2b6ef305f2abd6dbe352ac9cfc4d57fdf5c14bc44133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0436f7f6edfd2bb82acb2b6ef305f2abd6dbe352ac9cfc4d57fdf5c14bc44133->enter($__internal_0436f7f6edfd2bb82acb2b6ef305f2abd6dbe352ac9cfc4d57fdf5c14bc44133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerAssets"));

        // line 74
        echo "<script href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_0436f7f6edfd2bb82acb2b6ef305f2abd6dbe352ac9cfc4d57fdf5c14bc44133->leave($__internal_0436f7f6edfd2bb82acb2b6ef305f2abd6dbe352ac9cfc4d57fdf5c14bc44133_prof);

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
        return array (  235 => 74,  229 => 73,  198 => 47,  192 => 46,  181 => 40,  173 => 26,  167 => 25,  155 => 22,  143 => 16,  139 => 15,  135 => 14,  130 => 13,  124 => 12,  112 => 5,  106 => 4,  95 => 76,  93 => 73,  90 => 72,  88 => 46,  81 => 41,  79 => 40,  76 => 39,  67 => 36,  64 => 35,  60 => 34,  52 => 28,  50 => 25,  46 => 23,  44 => 22,  41 => 21,  39 => 12,  36 => 11,  34 => 4,  29 => 1,);
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
  <h1>Panneau d'administration</h1>
{% endblock %}
<!-- END NAV  -->

<!-- MAIN SECTION -->
<section class=\"container-fluid page-bg accueil row\"> <!-- HAS BG on the whole page -->
  <article id=\"content\" class=\"blacked col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">

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
      </ul>
    </div>
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
