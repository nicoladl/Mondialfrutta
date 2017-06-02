<?php

/* themes/custom/mondialfrutta/templates/views/views-view-fields--stagionalita.html.twig */
class __TwigTemplate_bd13544d73bac5d11f7a033e7747595227b08137e28d8e9b7f169291c7e6c84f extends Twig_Template
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
        echo "<div class=\"prodotto\">
  <div class=\"row prodotto__row\">
    <div class=\"column large-full reset\">
      <div class=\"row\">
        <div class=\"column large-four reset\">
          <div class=\"row\">
            <div class=\"column large-half reset\">
              <div class=\"title-prodotto\">
               ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
        echo "
              </div>
            </div>
            <div class=\"column large-half reset\">
              <div class=\"image-prodotto\">
                ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_immagine", array()), "content", array()), "html", null, true));
        echo "
              </div>
            </div>
          </div>
        </div>

        <div class=\"column large-eight reset\">
            <div class=\"right\">
              <div class=\"image-provenienza left\">
                ";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_bandiera_1", array()), "content", array()), "html", null, true));
        echo "
              </div>
              <div class=\"image-provenienza left\">
                ";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_bandiera_2", array()), "content", array()), "html", null, true));
        echo "
              </div>
              <div class=\"image-provenienza left\">
                ";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_bandiera_3", array()), "content", array()), "html", null, true));
        echo "
              </div>
              <div class=\"image-provenienza left\">
                ";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_bandiera_4", array()), "content", array()), "html", null, true));
        echo "
              </div>
              <div class=\"image-provenienza left\">
                ";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_bandiera_5", array()), "content", array()), "html", null, true));
        echo "
              </div>
              <div class=\"image-provenienza left\">
                ";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_bandiera_6", array()), "content", array()), "html", null, true));
        echo "
              </div>
              <div class=\"image-provenienza left\">
                ";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_bandiera_7", array()), "content", array()), "html", null, true));
        echo "
              </div>
              <div class=\"image-provenienza left\">
                ";
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_bandiera", array()), "content", array()), "html", null, true));
        echo "
              </div>
              <div class=\"image-provenienza left\">
                ";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_bandiera_8", array()), "content", array()), "html", null, true));
        echo "
              </div>
              <div class=\"image-provenienza left\">
                ";
        // line 50
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_bandiera_9", array()), "content", array()), "html", null, true));
        echo "
              </div>
              <div class=\"image-provenienza left\">
                ";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_bandiera_10", array()), "content", array()), "html", null, true));
        echo "
              </div>
              <div class=\"image-provenienza left\">
                ";
        // line 56
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_bandiera_11", array()), "content", array()), "html", null, true));
        echo "
              </div>
            </div>
        </div>

      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mondialfrutta/templates/views/views-view-fields--stagionalita.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 56,  133 => 53,  127 => 50,  121 => 47,  115 => 44,  109 => 41,  103 => 38,  97 => 35,  91 => 32,  85 => 29,  79 => 26,  73 => 23,  61 => 14,  53 => 9,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"prodotto\">
  <div class=\"row prodotto__row\">
    <div class=\"column large-full reset\">
      <div class=\"row\">
        <div class=\"column large-four reset\">
          <div class=\"row\">
            <div class=\"column large-half reset\">
              <div class=\"title-prodotto\">
               {{ fields.title.content }}
              </div>
            </div>
            <div class=\"column large-half reset\">
              <div class=\"image-prodotto\">
                {{ fields.field_immagine.content }}
              </div>
            </div>
          </div>
        </div>

        <div class=\"column large-eight reset\">
            <div class=\"right\">
              <div class=\"image-provenienza left\">
                {{ fields.field_bandiera_1.content  }}
              </div>
              <div class=\"image-provenienza left\">
                {{ fields.field_bandiera_2.content  }}
              </div>
              <div class=\"image-provenienza left\">
                {{ fields.field_bandiera_3.content  }}
              </div>
              <div class=\"image-provenienza left\">
                {{ fields.field_bandiera_4.content  }}
              </div>
              <div class=\"image-provenienza left\">
                {{ fields.field_bandiera_5.content  }}
              </div>
              <div class=\"image-provenienza left\">
                {{ fields.field_bandiera_6.content  }}
              </div>
              <div class=\"image-provenienza left\">
                {{ fields.field_bandiera_7.content  }}
              </div>
              <div class=\"image-provenienza left\">
                {{ fields.field_bandiera.content  }}
              </div>
              <div class=\"image-provenienza left\">
                {{ fields.field_bandiera_8.content  }}
              </div>
              <div class=\"image-provenienza left\">
                {{ fields.field_bandiera_9.content  }}
              </div>
              <div class=\"image-provenienza left\">
                {{ fields.field_bandiera_10.content  }}
              </div>
              <div class=\"image-provenienza left\">
                {{ fields.field_bandiera_11.content  }}
              </div>
            </div>
        </div>

      </div>
    </div>
  </div>
</div>
";
    }
}
