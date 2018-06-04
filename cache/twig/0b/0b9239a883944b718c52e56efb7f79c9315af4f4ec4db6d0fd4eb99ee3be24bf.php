<?php

/* partials/hero.html.twig */
class __TwigTemplate_61cfb3b8d405c5ffc23594df339cf1000060570c4fea841244b7876c8bc21463 extends Twig_Template
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
        echo "<section id=\"";
        echo ($context["id"] ?? null);
        echo "\" class=\"section hero ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_classes", array());
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "background", array()), "parallax", array())) ? ("parallax") : (""));
        echo "\" ";
        if (($context["hero_image"] ?? null)) {
            echo "style=\"background-image: url(";
            echo $this->getAttribute(($context["hero_image"] ?? null), "url", array());
            echo ");\"";
        }
        echo ">

<div id=\"particles-js\"></div>

    <section class=\"container hero-text ";
        // line 5
        echo ($context["grid_size"] ?? null);
        echo "\" style=\"text-align: ";
        echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "hero_align", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "hero_align", array()), "center")) : ("center"));
        echo "\">
        ";
        // line 6
        echo ($context["content"] ?? null);
        echo "
    </section>
    <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  37 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"{{ id }}\" class=\"section hero {{ page.header.hero_classes }} {{ page.header.background.parallax ? 'parallax' : '' }}\" {% if hero_image %}style=\"background-image: url({{ hero_image.url }});\"{% endif %}>

<div id=\"particles-js\"></div>

    <section class=\"container hero-text {{ grid_size }}\" style=\"text-align: {{ page.header.hero_align|default('center') }}\">
        {{ content }}
    </section>
    <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>", "partials/hero.html.twig", "C:\\xampp\\htdocs\\latitude\\user\\themes\\quark\\templates\\partials\\hero.html.twig");
    }
}
