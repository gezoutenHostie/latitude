<?php

/* modular/form.html.twig */
class __TwigTemplate_e93b2906a5e3a69f6e05c9cf5729249a356e94b865816e0f4216e14d1f04e7d0 extends Twig_Template
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
        echo "<div class=\"modular-row form ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
    ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
    ";
        // line 3
        $this->loadTemplate("forms/form.html.twig", "modular/form.html.twig", 3)->display($context);
        // line 4
        echo "</div>";
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
        return array (  30 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row form {{ page.header.class }}\">
    {{ content|raw }}
    {% include \"forms/form.html.twig\" %}
</div>", "modular/form.html.twig", "C:\\xampp\\htdocs\\latitude\\user\\plugins\\form\\templates\\modular\\form.html.twig");
    }
}
