<?php

/* @Var:[Site Contact Form] {{ form.value.name|e }} */
class __TwigTemplate_fb96b1ca2ad2dac948a9e8a918c48e17df41d8e693eb2d62941b6986686416b9 extends Twig_Template
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
        echo "[Site Contact Form] ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", array()), "name", array()));
    }

    public function getTemplateName()
    {
        return "@Var:[Site Contact Form] {{ form.value.name|e }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("[Site Contact Form] {{ form.value.name|e }}", "@Var:[Site Contact Form] {{ form.value.name|e }}", "");
    }
}
