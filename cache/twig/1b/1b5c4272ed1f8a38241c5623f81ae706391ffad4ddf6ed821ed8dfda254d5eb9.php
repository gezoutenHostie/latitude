<?php

/* modular/form.html.twig */
class __TwigTemplate_cae5e330b30c8b9f5e7ee9b2bff599281c4663261d7cc9c03348ca83b9669911 extends Twig_Template
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
        // line 2
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 3
        echo "

<section id=\"modular-features\" class=\"section form ";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
        <section class=\"container ";
        // line 6
        echo ($context["grid_size"] ?? null);
        echo "\">
    ";
        // line 7
        echo ($context["content"] ?? null);
        echo "
    <div class=\"columns\">
   ";
        // line 10
        echo "    </div>
        </section>
</section>


";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  35 => 7,  31 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
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
{% set image = page.media.images|first %}


<section id=\"modular-features\" class=\"section form {{ page.header.class}}\">
        <section class=\"container {{ grid_size }}\">
    {{ content|raw }}
    <div class=\"columns\">
   {#  {% include \"forms/form.html.twig\" %} #}
    </div>
        </section>
</section>


", "modular/form.html.twig", "C:\\xampp\\htdocs\\latitude\\user\\themes\\quark\\templates\\modular\\form.html.twig");
    }
}
