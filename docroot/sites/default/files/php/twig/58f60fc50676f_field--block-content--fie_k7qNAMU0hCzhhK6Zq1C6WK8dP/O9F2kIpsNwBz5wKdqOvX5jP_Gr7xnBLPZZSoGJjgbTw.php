<?php

/* themes/custom/mondialfrutta/templates/field/field--block-content--field-video--visual-video.html.twig */
class __TwigTemplate_c8dc9ae82bfb1bfb3a4a892bc80283d76a488230e6de39214d51b5543ea76337 extends Twig_Template
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
        $tags = array("set" => 42, "for" => 57, "if" => 62, "spaceless" => 84);
        $filters = array("clean_class" => 44, "striptags" => 84);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if', 'spaceless'),
                array('clean_class', 'striptags'),
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

        // line 40
        echo "
";
        // line 42
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 44
(isset($context["field_name"]) ? $context["field_name"] : null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 45
(isset($context["field_type"]) ? $context["field_type"] : null))), 3 => ("field--label-" .         // line 46
(isset($context["label_display"]) ? $context["label_display"] : null)));
        // line 50
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 52
(isset($context["label_display"]) ? $context["label_display"] : null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 55
        echo "
";
        // line 56
        ob_start();
        // line 57
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 58
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["conBody"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 61
        echo "
";
        // line 62
        if ((isset($context["label_hidden"]) ? $context["label_hidden"] : null)) {
            // line 63
            echo "  ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 64
                echo "    <div";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => "field__items"), "method"), "html", null, true));
                echo ">
      ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 66
                    echo "        <div";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                    echo "</div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "    </div>
  ";
            } else {
                // line 70
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 71
                    echo "      <div";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => "field__item"), "method"), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "  ";
            }
        } else {
            // line 75
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 77
            echo "    ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 78
                echo "      <div class=\"field__items\">
    ";
            }
            // line 80
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 81
                echo "      ";
                // line 82
                echo "      <div class=\"video\">
\t    <video autoplay loop class=\"video--fullscreen\">
\t        <source src=\"sites/default/files/video/";
                // line 84
                ob_start();
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["conBody"]) ? $context["conBody"] : null)), "html", null, true));
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                echo "\" type='video/mp4; codecs=\"avc1.42E01E, mp4a.40.2\"'>
\t        Video not supported.
\t    </video>
\t</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "    ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 90
                echo "      </div>
    ";
            }
            // line 92
            echo "  </div>
";
        }
        // line 94
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/custom/mondialfrutta/templates/field/field--block-content--field-video--visual-video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 94,  169 => 92,  165 => 90,  162 => 89,  149 => 84,  145 => 82,  143 => 81,  138 => 80,  134 => 78,  131 => 77,  126 => 75,  122 => 73,  111 => 71,  106 => 70,  102 => 68,  91 => 66,  87 => 65,  82 => 64,  79 => 63,  77 => 62,  74 => 61,  64 => 58,  59 => 57,  57 => 56,  54 => 55,  52 => 52,  51 => 50,  49 => 46,  48 => 45,  47 => 44,  46 => 42,  43 => 40,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a field.
 *
 * To override output, copy the \"field.html.twig\" from the templates directory
 * to your theme's directory and customize it, just like customizing other
 * Drupal templates such as page.html.twig or node.html.twig.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 *
 * @see template_preprocess_field()
 */
#}

{%
  set classes = [
    'field',
    'field--name-' ~ field_name|clean_class,
    'field--type-' ~ field_type|clean_class,
    'field--label-' ~ label_display,
  ]
%}
{%
  set title_classes = [
    'field__label',
    label_display == 'visually_hidden' ? 'visually-hidden',
  ]
%}

{% set conBody %}
    {% for item in items %}
        {{ item.content }}
    {% endfor %}
{% endset %}

{% if label_hidden %}
  {% if multiple %}
    <div{{ attributes.addClass(classes, 'field__items') }}>
      {% for item in items %}
        <div{{ item.attributes.addClass('field__item') }}>{{ item.content }}</div>
      {% endfor %}
    </div>
  {% else %}
    {% for item in items %}
      <div{{ attributes.addClass(classes, 'field__item') }}>{{ item.content }}</div>
    {% endfor %}
  {% endif %}
{% else %}
  <div{{ attributes.addClass(classes) }}>
    {# <div{{ title_attributes.addClass(title_classes) }}>{{ label }}</div> #}
    {% if multiple %}
      <div class=\"field__items\">
    {% endif %}
    {% for item in items %}
      {# <div{{ item.attributes.addClass('field__item') }}>{{ item.content }}</div> #}
      <div class=\"video\">
\t    <video autoplay loop class=\"video--fullscreen\">
\t        <source src=\"sites/default/files/video/{% spaceless %}{{ conBody|striptags }}{% endspaceless %}\" type='video/mp4; codecs=\"avc1.42E01E, mp4a.40.2\"'>
\t        Video not supported.
\t    </video>
\t</div>
    {% endfor %}
    {% if multiple %}
      </div>
    {% endif %}
  </div>
{% endif %}


";
    }
}
