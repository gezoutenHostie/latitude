<?php

/* modular/hero.html.twig */
class __TwigTemplate_f07241ee15c5ac72c8f01425bad6a4a33d8fc32a992826f2560e6c7b5ac51102 extends Twig_Template
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
        // line 1
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("partials/hero.html.twig", "modular/hero.html.twig", 4)->display(array_merge($context, array("id" => "modular-hero")));
    }

    public function getTemplateName()
    {
        return "modular/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  21 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set grid_size = theme_var('grid-size') %}
{# {% set hero_image = page.header.hero_image ? page.media[page.header.hero_image] : page.media.images|first %} #}

{% include 'partials/hero.html.twig' with {id: 'modular-hero'} %}
", "modular/hero.html.twig", "C:\\xampp\\htdocs\\latitude\\user\\themes\\quark\\templates\\modular\\hero.html.twig");
    }
}
