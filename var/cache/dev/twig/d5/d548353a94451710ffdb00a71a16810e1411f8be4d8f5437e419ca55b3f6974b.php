<?php

/* page/contact.html.twig */
class __TwigTemplate_ccc44366f55f8c124cfc28566e5115a94a678aaa2c15eefd23d6d8778b663a14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "page/contact.html.twig", 1);
        $this->blocks = array(
            'footerAssets' => array($this, 'block_footerAssets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62593b2166c9a5f2947179677bf77298963253588eadc8d4eadf51d2a9513bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62593b2166c9a5f2947179677bf77298963253588eadc8d4eadf51d2a9513bf7->enter($__internal_62593b2166c9a5f2947179677bf77298963253588eadc8d4eadf51d2a9513bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62593b2166c9a5f2947179677bf77298963253588eadc8d4eadf51d2a9513bf7->leave($__internal_62593b2166c9a5f2947179677bf77298963253588eadc8d4eadf51d2a9513bf7_prof);

    }

    // line 4
    public function block_footerAssets($context, array $blocks = array())
    {
        $__internal_c9fd179639b6189d54e4199ac0d62025c081d8a16cbfb5d05d54f54ac608a994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9fd179639b6189d54e4199ac0d62025c081d8a16cbfb5d05d54f54ac608a994->enter($__internal_c9fd179639b6189d54e4199ac0d62025c081d8a16cbfb5d05d54f54ac608a994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerAssets"));

        // line 5
        echo "<script href=\"bower_components/bootstrap/dist/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script href=\"/js/gmap.js\" type=\"text/javascript\">

var map;
function initMap() {
  var myCoords = {lat: 47.2135253, lng: -1.53698417};
  var labels = 'CDEFGHIJKLMNOPQRSTUVWXYZ';
  var labelIndex = 0;

  
  map = new google.maps.Map(document.getElementById('gmap'), {
    center: myCoords,

    zoom: 12
  });
  
  var contentString = \"Sophrologie et Relaxation\";

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  
  var marker = new google.maps.Marker({
    position: myCoords,
    label: labels[labelIndex++ % labels.length],
    map: map,
    title: \"Cabinet Paramédical: 11 rue de l'indre\"
  });
  
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
  
  infowindow.open(map, marker);


}

</script>
<script async defer
  src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDrW0ylhZ6kbKaMDgVXJH3WYrrE2uruN80&callback=initMap\">
</script>
";
        
        $__internal_c9fd179639b6189d54e4199ac0d62025c081d8a16cbfb5d05d54f54ac608a994->leave($__internal_c9fd179639b6189d54e4199ac0d62025c081d8a16cbfb5d05d54f54ac608a994_prof);

    }

    public function getTemplateName()
    {
        return "page/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}


{% block footerAssets %}
<script href=\"bower_components/bootstrap/dist/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script href=\"/js/gmap.js\" type=\"text/javascript\">

var map;
function initMap() {
  var myCoords = {lat: 47.2135253, lng: -1.53698417};
  var labels = 'CDEFGHIJKLMNOPQRSTUVWXYZ';
  var labelIndex = 0;

  
  map = new google.maps.Map(document.getElementById('gmap'), {
    center: myCoords,

    zoom: 12
  });
  
  var contentString = \"Sophrologie et Relaxation\";

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  
  var marker = new google.maps.Marker({
    position: myCoords,
    label: labels[labelIndex++ % labels.length],
    map: map,
    title: \"Cabinet Paramédical: 11 rue de l'indre\"
  });
  
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
  
  infowindow.open(map, marker);


}

</script>
<script async defer
  src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDrW0ylhZ6kbKaMDgVXJH3WYrrE2uruN80&callback=initMap\">
</script>
{% endblock %}";
    }
}
