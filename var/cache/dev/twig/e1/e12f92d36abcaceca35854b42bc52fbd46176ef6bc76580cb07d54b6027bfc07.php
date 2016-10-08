<?php

/* page/contact.html.twig */
class __TwigTemplate_5690d9cdc5130498755cd90ec095c1f502077bb8ca58b261ee47fd925cec3333 extends Twig_Template
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
        $__internal_d7a0a8166c3cb3b41821e39d102f36deacb77431c95788b222e8b35d8137cd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a0a8166c3cb3b41821e39d102f36deacb77431c95788b222e8b35d8137cd17->enter($__internal_d7a0a8166c3cb3b41821e39d102f36deacb77431c95788b222e8b35d8137cd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7a0a8166c3cb3b41821e39d102f36deacb77431c95788b222e8b35d8137cd17->leave($__internal_d7a0a8166c3cb3b41821e39d102f36deacb77431c95788b222e8b35d8137cd17_prof);

    }

    // line 4
    public function block_footerAssets($context, array $blocks = array())
    {
        $__internal_f7056a11e311710c5101c40475ac04c77be304284b8aa150890898f79bec698d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7056a11e311710c5101c40475ac04c77be304284b8aa150890898f79bec698d->enter($__internal_f7056a11e311710c5101c40475ac04c77be304284b8aa150890898f79bec698d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerAssets"));

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
        
        $__internal_f7056a11e311710c5101c40475ac04c77be304284b8aa150890898f79bec698d->leave($__internal_f7056a11e311710c5101c40475ac04c77be304284b8aa150890898f79bec698d_prof);

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
