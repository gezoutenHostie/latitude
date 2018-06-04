<?php

/* partials/form-messages.html.twig */
class __TwigTemplate_09a36628317af43f2c0d7f68f85fb8b3bd0fd803019eefee76a06d659f074c1e extends Twig_Template
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
        if ($this->getAttribute(($context["form"] ?? null), "message", array())) {
            // line 2
            echo "    ";
            $context["icon_mapping"] = array("success" => "checkmark", "error" => "wrong", "warning" => "information");
            // line 3
            echo "    ";
            $context["message"] = ((($this->getAttribute(($context["form"] ?? null), "inline_errors", array()) && $this->getAttribute(($context["form"] ?? null), "messages", array()))) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("FORM.VALIDATION_FAIL")) : ($this->getAttribute(($context["form"] ?? null), "message", array())));
            // line 4
            echo "
    <div class=\"toast toast-";
            // line 5
            echo $this->getAttribute(($context["form"] ?? null), "status", array());
            echo " mt-2 mb-2\"><i class=\"icon dripicons-";
            echo $this->getAttribute(($context["icon_mapping"] ?? null), $this->getAttribute(($context["form"] ?? null), "status", array()), array(), "array");
            echo "\"></i> ";
            echo ($context["message"] ?? null);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/form-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form.message %}
    {% set icon_mapping = {'success':'checkmark', 'error':'wrong', 'warning':'information'} %}
    {% set message = form.inline_errors and form.messages ? \"FORM.VALIDATION_FAIL\"|t : form.message %}

    <div class=\"toast toast-{{ form.status }} mt-2 mb-2\"><i class=\"icon dripicons-{{ icon_mapping[form.status] }}\"></i> {{ message }}</div>
{% endif %}
", "partials/form-messages.html.twig", "C:\\xampp\\htdocs\\latitude\\user\\themes\\quark\\templates\\partials\\form-messages.html.twig");
    }
}
