<?php

/* themes/custom/mondialfrutta/templates/block/block--mondialfrutta-branding.html.twig */
class __TwigTemplate_0f2dd1b33a2d54e033bd94eb5b4afba0da5c772ba1773f45ab48f4679710dca1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/mondialfrutta/templates/block/block--mondialfrutta-branding.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 17);
        $filters = array("t" => 18);
        $functions = array("path" => 18);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('path')
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "  ";
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 18
            echo "    <a class=\"headline__logo\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" width=\"220\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" />
    </a>
  ";
        }
        // line 22
        echo "
    <div class=\"menu-icon js-menu-container\">
        <div class=\"menu-icon__hamburger js-hamburger\">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mondialfrutta/templates/block/block--mondialfrutta-branding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  65 => 19,  58 => 18,  55 => 17,  52 => 16,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Theme override for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}
{% block content %}
  {% if site_logo %}
    <a class=\"headline__logo\" href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
        <img src=\"{{ site_logo }}\" width=\"220\" alt=\"{{ 'Home'|t }}\" />
    </a>
  {% endif %}

    <div class=\"menu-icon js-menu-container\">
        <div class=\"menu-icon__hamburger js-hamburger\">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
{% endblock %}
";
    }
}
