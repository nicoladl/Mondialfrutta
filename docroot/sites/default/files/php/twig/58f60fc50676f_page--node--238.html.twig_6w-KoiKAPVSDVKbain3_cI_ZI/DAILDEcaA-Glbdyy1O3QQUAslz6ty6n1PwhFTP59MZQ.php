<?php

/* themes/custom/mondialfrutta/templates/page/page--node--238.html.twig */
class __TwigTemplate_21be8a0d80d18fbaf484c3bfffc4c8ddb4a5bd99c6a2282c44d156d39a94641a extends Twig_Template
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
        $tags = array("if" => 22);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
        echo "<div class=\"layout-container\">
  <main role=\"main\">

    <div class=\"row wrapper\">
      <div class=\"column large-full\">
        <div class=\"header\">
          <h3 class=\"title\">Schede tecniche</h3>
          <img src=\"/sites/default/files/hp/prodotti-left_1.png\" width=\"501\" height=\"287\" alt=\"prodotti\">
        </div>
      </div>
    </div>

    <div class=\"row wrapper\">
      <div class=\"column large-full\">
        ";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
      </div>
    </div>

  </main>
</div>";
        // line 21
        echo "
";
        // line 22
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 23
            echo "  <footer role=\"contentinfo\">
    ";
            // line 24
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
  </footer>
";
        }
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mondialfrutta/templates/page/page--node--238.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  75 => 24,  72 => 23,  70 => 22,  67 => 21,  59 => 15,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"layout-container\">
  <main role=\"main\">

    <div class=\"row wrapper\">
      <div class=\"column large-full\">
        <div class=\"header\">
          <h3 class=\"title\">Schede tecniche</h3>
          <img src=\"/sites/default/files/hp/prodotti-left_1.png\" width=\"501\" height=\"287\" alt=\"prodotti\">
        </div>
      </div>
    </div>

    <div class=\"row wrapper\">
      <div class=\"column large-full\">
        {{ page.content }}
      </div>
    </div>

  </main>
</div>{# /.layout-container #}

{% if page.footer %}
  <footer role=\"contentinfo\">
    {{ page.footer }}
  </footer>
{% endif %}

";
    }
}
