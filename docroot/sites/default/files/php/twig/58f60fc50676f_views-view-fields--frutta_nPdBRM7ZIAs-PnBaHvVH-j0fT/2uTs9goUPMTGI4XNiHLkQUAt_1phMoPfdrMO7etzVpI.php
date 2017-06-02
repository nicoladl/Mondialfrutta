<?php

/* themes/custom/mondialfrutta/templates/views/views-view-fields--frutta_verdura_e_aromi.html.twig */
class __TwigTemplate_af05e2ddaa8f2466bbef9538c0f986e6abe3b7566d50d9c5c04a8d17cb116a88 extends Twig_Template
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
        echo "<div class=\"column small-full medium-four large-two reset ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last", array())) ? ("last") : (""))));
        echo "\">
  <div class=\"scheda-tecnica__item\">
    <div class=\"scheda-tecnica__immagine\">
      ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_immagine", array()), "content", array()), "html", null, true));
        echo "
    </div>
    <div class=\"scheda-tecnica__item-title\">
      ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
        echo "
    </div>
    <div class=\"scheda-tecnica__link\">
      ";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_scheda_tecnica", array()), "content", array()), "html", null, true));
        echo "
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/mondialfrutta/templates/views/views-view-fields--frutta_verdura_e_aromi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  56 => 7,  50 => 4,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"column small-full medium-four large-two reset {{ (loop.last) ? 'last' : '' }}\">
  <div class=\"scheda-tecnica__item\">
    <div class=\"scheda-tecnica__immagine\">
      {{ fields.field_immagine.content }}
    </div>
    <div class=\"scheda-tecnica__item-title\">
      {{ fields.title.content }}
    </div>
    <div class=\"scheda-tecnica__link\">
      {{ fields.field_scheda_tecnica.content }}
    </div>
  </div>
</div>

";
    }
}
