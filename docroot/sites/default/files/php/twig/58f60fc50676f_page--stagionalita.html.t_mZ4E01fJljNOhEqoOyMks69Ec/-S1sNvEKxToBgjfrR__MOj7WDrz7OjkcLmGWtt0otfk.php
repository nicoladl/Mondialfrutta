<?php

/* themes/custom/mondialfrutta/templates/page/page--stagionalita.html.twig */
class __TwigTemplate_0bbed0a30cf88852f2e90811def324c3c46ad39e14d5f5e103f7a72aaa5a78da extends Twig_Template
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
        $tags = array("if" => 47);
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
      <div class=\"column large-full reset\">
        <div class=\"header\">
          <h3 class=\"title\">Stagionalità</h3>
          <img src=\"/sites/default/files/hp/prodotti-left_1.png\" width=\"501\" height=\"287\" alt=\"prodotti\">
        </div>
      </div>
    </div>

    <div class=\"table\">
      <div class=\"table__head uppercase\">
        <div class=\"row wrapper\">
          <div class=\"column large-full reset\">
              <div class=\"right\">
                <div class=\"table__head--rotate left\">gen</div>
                <div class=\"table__head--rotate left\">feb</div>
                <div class=\"table__head--rotate left\">mar</div>
                <div class=\"table__head--rotate left\">apr</div>
                <div class=\"table__head--rotate left\">mag</div>
                <div class=\"table__head--rotate left\">giu</div>
                <div class=\"table__head--rotate left\">lug</div>
                <div class=\"table__head--rotate left\">ago</div>
                <div class=\"table__head--rotate left\">set</div>
                <div class=\"table__head--rotate left\">ott</div>
                <div class=\"table__head--rotate left\">nov</div>
                <div class=\"table__head--rotate left\">dic</div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row wrapper\">
      <div class=\"column large-full reset\">
        <div class=\"row\">
          ";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>
      </div>
    </div>

  </main>
</div>";
        // line 46
        echo "
";
        // line 47
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 48
            echo "  <footer role=\"contentinfo\">
        ";
            // line 49
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
  </footer>
";
        }
        // line 52
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mondialfrutta/templates/page/page--stagionalita.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 52,  100 => 49,  97 => 48,  95 => 47,  92 => 46,  83 => 39,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"layout-container\">
  <main role=\"main\">

    <div class=\"row wrapper\">
      <div class=\"column large-full reset\">
        <div class=\"header\">
          <h3 class=\"title\">Stagionalità</h3>
          <img src=\"/sites/default/files/hp/prodotti-left_1.png\" width=\"501\" height=\"287\" alt=\"prodotti\">
        </div>
      </div>
    </div>

    <div class=\"table\">
      <div class=\"table__head uppercase\">
        <div class=\"row wrapper\">
          <div class=\"column large-full reset\">
              <div class=\"right\">
                <div class=\"table__head--rotate left\">gen</div>
                <div class=\"table__head--rotate left\">feb</div>
                <div class=\"table__head--rotate left\">mar</div>
                <div class=\"table__head--rotate left\">apr</div>
                <div class=\"table__head--rotate left\">mag</div>
                <div class=\"table__head--rotate left\">giu</div>
                <div class=\"table__head--rotate left\">lug</div>
                <div class=\"table__head--rotate left\">ago</div>
                <div class=\"table__head--rotate left\">set</div>
                <div class=\"table__head--rotate left\">ott</div>
                <div class=\"table__head--rotate left\">nov</div>
                <div class=\"table__head--rotate left\">dic</div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row wrapper\">
      <div class=\"column large-full reset\">
        <div class=\"row\">
          {{ page.content }}
        </div>
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
