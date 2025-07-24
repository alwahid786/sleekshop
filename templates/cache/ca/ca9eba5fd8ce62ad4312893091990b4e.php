<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* OwlCarcousel.twig */
class __TwigTemplate_14f28497058b026bdfb6797d097db0b4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<div class=\"product-slider owl-carousel owl-theme\" id=\"product-slider\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "products", [], "any", false, false, false, 3));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 4
            echo "    <div class=\"item\">
      <div class=\"product-wrap\">

        <a href=\"";
            // line 7
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "permalink", [], "any", false, false, false, 7) != "")) {
                echo "/";
                echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "permalink", [], "any", false, false, false, 7), "html", null, true);
            } else {
                echo "/";
                echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 7), "html", null, true);
            }
            echo "\">
          <img
            src=\"";
            // line 9
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, true, false, 9), "img1", [], "any", false, true, false, 9), "value", [], "any", true, true, false, 9) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, true, false, 9), "img1", [], "any", false, true, false, 9), "value", [], "any", false, false, false, 9)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, true, false, 9), "img1", [], "any", false, true, false, 9), "value", [], "any", false, false, false, 9), "html", null, true))) : (print ("/assets/images/default-product.jpg")));
            echo "\"
            alt=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10), "html", null, true);
            echo "\"
            height=\"300\"
            loading=\"lazy\"
          >
        </a>

        <div class=\"product-content\">
          <a href=\"";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "permalink", [], "any", false, false, false, 17) != "")) {
                echo "/";
                echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "permalink", [], "any", false, false, false, 17), "html", null, true);
            } else {
                echo "/";
                echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 17), "html", null, true);
            }
            echo "\">
            <h4 class=\"product-name\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18), "html", null, true);
            echo "</h4>
          </a>
          <p class=\"product-price\">
            ";
            // line 21
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 21), "price", [], "any", false, false, false, 21), "value", [], "any", false, false, false, 21), 2, ".", ","), "html", null, true);
            echo " EUR
          </p>
        </div>

      </div>
    </div>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "    <div class=\"item text-center p-4\">
      <p>No products available at this time.</p>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OwlCarcousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 32,  112 => 28,  100 => 21,  94 => 18,  80 => 17,  70 => 10,  66 => 9,  51 => 7,  46 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "OwlCarcousel.twig", "/var/www/html/excalibur/templates/OwlCarcousel.twig");
    }
}
