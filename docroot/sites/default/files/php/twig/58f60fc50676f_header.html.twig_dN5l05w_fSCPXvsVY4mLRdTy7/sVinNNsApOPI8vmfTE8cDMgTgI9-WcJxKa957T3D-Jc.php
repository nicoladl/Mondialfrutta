<?php

/* themes/custom/mondialfrutta/includes/header.html.twig */
class __TwigTemplate_ba83769eba5ea820a1c74f6aa9657ca1cdabcdf59ea6dae08ffb1a8a2aeecee9 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"pre-loader\">
\t<div class=\"pre-loader__item\">
\t\t<div class=\"pre-loader__logo\">
\t\t\t<img widht=\"180\" src=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/images/logo.svg\" alt=\"Mondialfrutta\" />
\t\t</div>
\t</div>
</div>

<header>
  <div class=\"headline\">
    <div>";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "</div>
  </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mondialfrutta/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  48 => 4,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"pre-loader\">
\t<div class=\"pre-loader__item\">
\t\t<div class=\"pre-loader__logo\">
\t\t\t<img widht=\"180\" src=\"{{ base_path ~ directory }}/images/logo.svg\" alt=\"Mondialfrutta\" />
\t\t</div>
\t</div>
</div>

<header>
  <div class=\"headline\">
    <div>{{ page.header }}</div>
  </div>
</header>
";
    }
}
