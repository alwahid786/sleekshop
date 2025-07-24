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

/* BestSeller.twig */
class __TwigTemplate_f92ae8b62cc6cff5499cc18790fe1b5f extends Template
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


<section class=\"product-slide\">
\t<div class=\"container-fluid px-0\">
\t\t<div class=\"row mx-0\">
\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t<h3 class=\"heading font-30 text-dark\">Best Seller</h3>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"owl-carousel owl-theme product-slider\" id=\"best-seller-slider\">
          ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "products", [], "any", false, false, false, 12));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 13
            echo "\t\t    <div class=\"item\">
\t\t    \t<div class=\"product-wrap\">
\t\t    \t\t<a href=\"";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "permalink", [], "any", false, false, false, 15) != "")) {
                echo "/";
                echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "permalink", [], "any", false, false, false, 15), "html", null, true);
            } else {
                echo "/";
                echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 15), "html", null, true);
            }
            echo "\"><img src=\"";
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, true, false, 15), "img1", [], "any", false, true, false, 15), "value", [], "any", true, true, false, 15) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, true, false, 15), "img1", [], "any", false, true, false, 15), "value", [], "any", false, false, false, 15)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, true, false, 15), "img1", [], "any", false, true, false, 15), "value", [], "any", false, false, false, 15), "html", null, true))) : (print ("/assets/images/default-product.jpg")));
            echo "\"></a>
\t\t    \t\t<div class=\"product-content\">
\t\t    \t\t\t<a href=\"";
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
            echo "\"><h4 class=\"product-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17), "html", null, true);
            echo "</h4></a>
\t\t    \t\t\t<p class=\"product-price\">\$ ";
            // line 18
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 18), "price", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18), 2, ".", ","), "html", null, true);
            echo "</p>
\t\t    \t\t</div>
\t\t    \t</div>
\t\t    </div>
\t\t   ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "            <div class=\"item text-center p-4\">
              <p>No best seller products available at this time.</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "BestSeller.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 27,  102 => 23,  92 => 18,  76 => 17,  59 => 15,  55 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BestSeller.twig", "/var/www/html/excalibur/templates/BestSeller.twig");
    }
}
