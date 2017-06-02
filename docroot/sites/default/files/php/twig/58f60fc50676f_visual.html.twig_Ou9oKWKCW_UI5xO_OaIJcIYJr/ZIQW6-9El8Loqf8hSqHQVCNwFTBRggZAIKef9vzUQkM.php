<?php

/* themes/custom/mondialfrutta/includes/visual.html.twig */
class __TwigTemplate_ca24bf9e6df8c49ae325768c79abd60ebcb02b3cd688fb1c0fe0ff74d8c9662d extends Twig_Template
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
        echo "<section class=\"visual\">
    ";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "visual", array()), "html", null, true));
        echo "

    <div class=\"scroll-down js-scroll-down\">
    \t<svg class=\"svg-circle\" width=\"44\" height=\"44\">
\t\t\t<circle cx=\"22\" cy=\"22\" r=\"20.5\"></circle>
\t\t</svg>
\t\t<svg class=\"svg-arrow\" width=\"18px\" height=\"18px\" viewBox=\"12 12 18 18\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
\t\t    <!-- Generator: Sketch 41.2 (35397) - http://www.bohemiancoding.com/sketch -->
\t\t    <desc>Created with Sketch.</desc>
\t\t    <defs></defs>
\t\t    <path d=\"M23,23 L15,23 L15,25 L24,25 L25,25 L25,15 L23,15 L23,23 Z\" id=\"Combined-Shape\" stroke=\"none\" fill=\"#ED4225\" fill-rule=\"evenodd\" transform=\"translate(20.000000, 20.000000) rotate(45.000000) translate(-20.000000, -20.000000) \"></path>
\t\t</svg>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mondialfrutta/includes/visual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "<section class=\"visual\">
    {{ page.visual }}

    <div class=\"scroll-down js-scroll-down\">
    \t<svg class=\"svg-circle\" width=\"44\" height=\"44\">
\t\t\t<circle cx=\"22\" cy=\"22\" r=\"20.5\"></circle>
\t\t</svg>
\t\t<svg class=\"svg-arrow\" width=\"18px\" height=\"18px\" viewBox=\"12 12 18 18\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
\t\t    <!-- Generator: Sketch 41.2 (35397) - http://www.bohemiancoding.com/sketch -->
\t\t    <desc>Created with Sketch.</desc>
\t\t    <defs></defs>
\t\t    <path d=\"M23,23 L15,23 L15,25 L24,25 L25,25 L25,15 L23,15 L23,23 Z\" id=\"Combined-Shape\" stroke=\"none\" fill=\"#ED4225\" fill-rule=\"evenodd\" transform=\"translate(20.000000, 20.000000) rotate(45.000000) translate(-20.000000, -20.000000) \"></path>
\t\t</svg>
    </div>
</section>
";
    }
}
