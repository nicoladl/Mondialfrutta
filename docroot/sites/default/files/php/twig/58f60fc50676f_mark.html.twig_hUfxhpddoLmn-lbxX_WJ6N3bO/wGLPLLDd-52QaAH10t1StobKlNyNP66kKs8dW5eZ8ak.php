<?php

/* core/themes/classy/templates/content/mark.html.twig */
class __TwigTemplate_22f631e472b8c0ccb4eed765e0da4686b27dba96064e1e51b9240f74a5b093ce extends Twig_Template
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
        $tags = array("if" => 14);
        $filters = array("t" => 16);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 14
        if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
            // line 15
            echo "  ";
            if (((isset($context["status"]) ? $context["status"] : null) === constant("MARK_NEW"))) {
                // line 16
                echo "    <span class=\"marker\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("New")));
                echo "</span>
  ";
            } elseif ((            // line 17
(isset($context["status"]) ? $context["status"] : null) === constant("MARK_UPDATED"))) {
                // line 18
                echo "    <span class=\"marker\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Updated")));
                echo "</span>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content/mark.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 18,  53 => 17,  48 => 16,  45 => 15,  43 => 14,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a marker for new or updated content.
 *
 * Available variables:
 * - status: Number representing the marker status to display. Use the constants
 *   below for comparison:
 *   - MARK_NEW
 *   - MARK_UPDATED
 *   - MARK_READ
 */
#}
{% if logged_in %}
  {% if status is constant('MARK_NEW') %}
    <span class=\"marker\">{{ 'New'|t }}</span>
  {% elseif status is constant('MARK_UPDATED') %}
    <span class=\"marker\">{{ 'Updated'|t }}</span>
  {% endif %}
{% endif %}
";
    }
}
