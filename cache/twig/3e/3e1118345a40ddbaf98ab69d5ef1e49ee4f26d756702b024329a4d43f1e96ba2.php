<?php

/* forms/default/data.html.twig */
class __TwigTemplate_20ba28bcf20a18d6a030778648a0f493d39b23d281d68291c4ef1a19d5123b5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_label' => array($this, 'block_field_label'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 40
        echo "
";
        // line 41
        echo $this->getAttribute($this, "render_field", array(0 => ($context["form"] ?? null), 1 => $this->getAttribute(($context["form"] ?? null), "fields", array()), 2 => ""), "method");
        echo "

";
    }

    // line 8
    public function block_field($context, array $blocks = array())
    {
        // line 9
        echo "                    <div>
                        ";
        // line 10
        $this->displayBlock('field_label', $context, $blocks);
        // line 13
        echo "
                        ";
        // line 14
        $this->displayBlock('field_value', $context, $blocks);
        // line 29
        echo "                    </div>
                ";
    }

    // line 10
    public function block_field_label($context, array $blocks = array())
    {
        // line 11
        echo "                            <strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "label", array())));
        echo "</strong>:
                        ";
    }

    // line 14
    public function block_field_value($context, array $blocks = array())
    {
        // line 15
        echo "                            ";
        if (($this->getAttribute(($context["field"] ?? null), "type", array()) == "checkboxes")) {
            // line 16
            echo "                                <ul>
                                    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "value", array(0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 18
                echo "                                        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", array()), $context["value"], array(), "array"));
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                                </ul>
                            ";
        } elseif (($this->getAttribute(        // line 21
($context["field"] ?? null), "type", array()) == "checkbox")) {
            // line 22
            echo "                                ";
            echo ((($this->getAttribute(($context["form"] ?? null), "value", array(0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "method") == 1)) ? (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.YES"))) : (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.NO"))));
            echo "
                            ";
        } elseif (($this->getAttribute(        // line 23
($context["field"] ?? null), "type", array()) == "select")) {
            // line 24
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", array()), $this->getAttribute(($context["form"] ?? null), "value", array(0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "method"), array(), "array"));
            echo "
                            ";
        } else {
            // line 26
            echo "                                ";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFunc($this->getAttribute(($context["form"] ?? null), "value", array(0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "method")), "html", null, true));
            echo "
                            ";
        }
        // line 28
        echo "                        ";
    }

    // line 1
    public function getrender_field($__form__ = null, $__fields__ = null, $__scope__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "fields" => $__fields__,
            "scope" => $__scope__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["index"] => $context["field"]) {
                // line 3
                echo "        ";
                $context["input"] = $this->getAttribute($context["field"], "input@");
                // line 4
                echo "
        ";
                // line 5
                if (((null === ($context["input"] ?? null)) || (($context["input"] ?? null) == true))) {
                    // line 6
                    echo "
            ";
                    // line 7
                    if ($this->getAttribute(($context["form"] ?? null), "value", array(0 => (($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", array()))), "method")) {
                        // line 8
                        echo "                ";
                        $this->displayBlock('field', $context, $blocks);
                        // line 31
                        echo "            ";
                    }
                    // line 32
                    echo "        ";
                } else {
                    // line 33
                    echo "            ";
                    if ($this->getAttribute($context["field"], "fields", array())) {
                        // line 34
                        echo "                ";
                        $context["new_scope"] = (($this->getAttribute($context["field"], "nest_id", array())) ? (((($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", array())) . ".")) : (($context["scope"] ?? null)));
                        // line 35
                        echo "                ";
                        echo $this->getAttribute($this, "render_field", array(0 => ($context["form"] ?? null), 1 => $this->getAttribute($context["field"], "fields", array()), 2 => ($context["new_scope"] ?? null)), "method");
                        echo "
            ";
                    }
                    // line 37
                    echo "        ";
                }
                // line 38
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/default/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 38,  176 => 37,  170 => 35,  167 => 34,  164 => 33,  161 => 32,  158 => 31,  155 => 8,  153 => 7,  150 => 6,  148 => 5,  145 => 4,  142 => 3,  124 => 2,  110 => 1,  106 => 28,  100 => 26,  94 => 24,  92 => 23,  87 => 22,  85 => 21,  82 => 20,  73 => 18,  69 => 17,  66 => 16,  63 => 15,  60 => 14,  53 => 11,  50 => 10,  45 => 29,  43 => 14,  40 => 13,  38 => 10,  35 => 9,  32 => 8,  25 => 41,  22 => 40,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_field(form, fields, scope) %}
    {% for index, field in fields %}
        {% set input = attribute(field, \"input@\") %}

        {% if input is null or input == true %}

            {% if form.value(scope ~ field.name) %}
                {% block field %}
                    <div>
                        {% block field_label %}
                            <strong>{{ field.label|t|e }}</strong>:
                        {% endblock %}

                        {% block field_value %}
                            {% if field.type == 'checkboxes' %}
                                <ul>
                                    {% for value in form.value(scope ~ field.name) %}
                                        <li>{{ field.options[value]|e }}</li>
                                    {% endfor %}
                                </ul>
                            {% elseif field.type == 'checkbox' %}
                                {{ (form.value(scope ~ field.name) == 1) ? \"PLUGIN_FORM.YES\"|t|e : \"PLUGIN_FORM.NO\"|t|e }}
                            {% elseif field.type == 'select' %}
                                {{ field.options[form.value(scope ~ field.name)]|e }}
                            {% else %}
                                {{ string(form.value(scope ~ field.name))|nl2br }}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endblock %}
            {% endif %}
        {% else %}
            {% if field.fields %}
                {% set new_scope = field.nest_id ? scope ~ field.name ~ '.' : scope %}
                {{ _self.render_field(form, field.fields, new_scope) }}
            {% endif %}
        {% endif %}
    {% endfor %}
{% endmacro %}

{{ _self.render_field(form, form.fields, '') }}

", "forms/default/data.html.twig", "C:\\xampp\\htdocs\\latitude\\user\\plugins\\form\\templates\\forms\\default\\data.html.twig");
    }
}
