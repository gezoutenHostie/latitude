<?php

/* modular/whyus.html.twig */
class __TwigTemplate_f7d400e1f8ee0d5b71354d28972e825e5eb123f05403002eabb27679f72c4fd5 extends Twig_Template
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
        $context["columns"] = ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array()) == "small")) ? ("col-3 col-md-4 col-sm-6") : ("col-4 col-md-6 col-sm-12"));
        // line 3
        echo "<section id=\"modular-features\" class=\"section ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
        <section class=\"container ";
        // line 4
        echo ($context["grid_size"] ?? null);
        echo "\">
            <div class=\"frame-box\">

                ";
        // line 7
        echo ($context["content"] ?? null);
        echo "

                <div class=\"columns\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 11
            echo "                   <div class=\"column ";
            echo ($context["columns"] ?? null);
            echo "\">

                       <div class=\"feature-content\">
                           ";
            // line 14
            if ($this->getAttribute($context["feature"], "title", array())) {
                // line 15
                echo "                            <h4>";
                echo $this->getAttribute($context["feature"], "title", array());
                echo "</h4>
                           ";
            }
            // line 17
            echo "
                           ";
            // line 18
            if ($this->getAttribute($context["feature"], "text", array())) {
                // line 19
                echo "                            <p>";
                echo $this->getAttribute($context["feature"], "text", array());
                echo "</p>
                           ";
            }
            // line 21
            echo "                       </div>
                   </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </div>
                <p>For a full list of services and more information, please click this link to view our pitch deck. </p>
            </div>
        </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/whyus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  70 => 21,  64 => 19,  62 => 18,  59 => 17,  53 => 15,  51 => 14,  44 => 11,  40 => 10,  34 => 7,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
{% set columns = page.header.class == 'small' ? 'col-3 col-md-4 col-sm-6' : 'col-4 col-md-6 col-sm-12'  %}
<section id=\"modular-features\" class=\"section {{ page.header.class}}\">
        <section class=\"container {{ grid_size }}\">
            <div class=\"frame-box\">

                {{ content }}

                <div class=\"columns\">
                {% for feature in page.header.features %}
                   <div class=\"column {{ columns }}\">

                       <div class=\"feature-content\">
                           {% if feature.title %}
                            <h4>{{ feature.title }}</h4>
                           {% endif %}

                           {% if feature.text %}
                            <p>{{ feature.text }}</p>
                           {% endif %}
                       </div>
                   </div>
                {% endfor %}
                </div>
                <p>For a full list of services and more information, please click this link to view our pitch deck. </p>
            </div>
        </section>
</section>
", "modular/whyus.html.twig", "C:\\xampp\\htdocs\\latitude\\user\\themes\\quark\\templates\\modular\\whyus.html.twig");
    }
}
