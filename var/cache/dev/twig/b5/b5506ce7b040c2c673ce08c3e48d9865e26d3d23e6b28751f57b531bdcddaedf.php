<?php

/* partial/nav.html.twig */
class __TwigTemplate_3fae22a8e0ca5c7d28214ffd4d07c53fb558510f4ba84a8e69fd709beb6df201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f78a85650f10d42dce60d343a039ab0c0e009bd9c774cfbf848937289dff5cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78a85650f10d42dce60d343a039ab0c0e009bd9c774cfbf848937289dff5cdf->enter($__internal_f78a85650f10d42dce60d343a039ab0c0e009bd9c774cfbf848937289dff5cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partial/nav.html.twig"));

        // line 1
        echo "<nav id=\"navbar\" class=\"navbar navbar-default navbar-fixed-top\">
<ul class=\"nav nav-pills nav-justified\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menuItems"]) ? $context["menuItems"] : $this->getContext($context, "menuItems")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "\t";
            if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == $this->getAttribute($context["item"], "name", array()))) {
                // line 5
                echo "\t\t<li class=\"nav-item\"><a class=\"active\" href=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "\" class=\"active\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</a></li>
\t";
            } else {
                // line 7
                echo "\t\t<li class=\"nav-item\"><a href=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</a></li>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>

</nav>";
        
        $__internal_f78a85650f10d42dce60d343a039ab0c0e009bd9c774cfbf848937289dff5cdf->leave($__internal_f78a85650f10d42dce60d343a039ab0c0e009bd9c774cfbf848937289dff5cdf_prof);

    }

    public function getTemplateName()
    {
        return "partial/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  41 => 7,  33 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<nav id=\"navbar\" class=\"navbar navbar-default navbar-fixed-top\">
<ul class=\"nav nav-pills nav-justified\">
{% for item in menuItems %}
\t{% if name == item.name %}
\t\t<li class=\"nav-item\"><a class=\"active\" href=\"/{{item.name}}\" class=\"active\">{{item.name}}</a></li>
\t{% else %}
\t\t<li class=\"nav-item\"><a href=\"/{{item.name}}\">{{item.name}}</a></li>
\t{% endif %}
{% endfor %}
</ul>

</nav>";
    }
}
