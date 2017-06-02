<?php

/* themes/custom/mondialfrutta/templates/block/block--azienda.html.twig */
class __TwigTemplate_4666100b723960b88c75ec4f4d74b87bbf30b9b0ecad702273c72a7eae04cb00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 40, "block" => 44);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'block'),
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

        // line 28
        echo "
<div class=\"path\">
    <svg width=\"497px\" height=\"2562px\" viewBox=\"360 633 497 2562\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <!-- Generator: Sketch 41.2 (35397) - http://www.bohemiancoding.com/sketch -->
        <desc>Created with Sketch.</desc>
        <defs></defs>
        <path d=\"M588.566406,634.136719 C535.433594,844.515625 779.882812,920.367187 760.96875,1151.6875 C745.867188,1303.67187 533.507812,1444.79688 462.117188,1557.59375 C390.726563,1670.39062 305.421875,1884.07031 411.46875,2148.13281 C517.515625,2412.19531 958.703125,2529.0404 832.515625,2735.75781 C706.328125,2942.47522 536.773437,2991.45275 587.59375,3193.89062\" id=\"path\" stroke-opacity=\"0.5\" stroke=\"#D9D4CC\" stroke-width=\"2\" fill=\"none\"></path>
    </svg>
</div>

<div";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 40
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 41
            echo "    <h2";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 43
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "</div>
";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        // line 45
        echo "    <div class=\"hp-row\">
        ";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/mondialfrutta/templates/block/block--azienda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 46,  89 => 45,  86 => 44,  81 => 49,  79 => 44,  74 => 43,  66 => 41,  64 => 40,  60 => 39,  56 => 38,  44 => 28,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}

<div class=\"path\">
    <svg width=\"497px\" height=\"2562px\" viewBox=\"360 633 497 2562\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <!-- Generator: Sketch 41.2 (35397) - http://www.bohemiancoding.com/sketch -->
        <desc>Created with Sketch.</desc>
        <defs></defs>
        <path d=\"M588.566406,634.136719 C535.433594,844.515625 779.882812,920.367187 760.96875,1151.6875 C745.867188,1303.67187 533.507812,1444.79688 462.117188,1557.59375 C390.726563,1670.39062 305.421875,1884.07031 411.46875,2148.13281 C517.515625,2412.19531 958.703125,2529.0404 832.515625,2735.75781 C706.328125,2942.47522 536.773437,2991.45275 587.59375,3193.89062\" id=\"path\" stroke-opacity=\"0.5\" stroke=\"#D9D4CC\" stroke-width=\"2\" fill=\"none\"></path>
    </svg>
</div>

<div{{ attributes }}>
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}
  {% block content %}
    <div class=\"hp-row\">
        {{ content }}
    </div>
  {% endblock %}
</div>
";
    }
}
