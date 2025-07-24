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

/* product_listing.twig */
class __TwigTemplate_80cdea8039e852c2caf2b2eb384ef491 extends Template
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
        echo "<div class=\"container\">
<div class=\"row\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "products", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 4
            echo "    <div class=\"col-md-4\" data-price=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 4), "price", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4), "html", null, true);
            echo "\" style=\"min-height:430px;\">
        <div class=\"product-column\">

            <p align=\"center\">
                <a class=\"\" href=\"";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "permalink", [], "any", false, false, false, 8) != "")) {
                echo "/";
                echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "permalink", [], "any", false, false, false, 8), "html", null, true);
            } else {
                echo "/";
                echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 8), "html", null, true);
            }
            echo "\">
                    <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 9), "img1", [], "any", false, false, false, 9), "value", [], "any", false, false, false, 9), "html", null, true);
            echo "\" height=\"300\" align=\"center\">
                </a>
            </p>
        </div>
        <div class=\"product-name\">
            <a class=\"\" href=\"";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "permalink", [], "any", false, false, false, 14) != "")) {
                echo "/";
                echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "permalink", [], "any", false, false, false, 14), "html", null, true);
            } else {
                echo "/";
                echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 14), "html", null, true);
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14), "html", null, true);
            echo "</a>
        </div>
        <div class=\"product-price\">
            <a class=\"\" href=\"";
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
            echo "\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 17), "price", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17), 2), "html", null, true);
            echo " EUR</a>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "product_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 21,  95 => 17,  77 => 14,  69 => 9,  55 => 8,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product_listing.twig", "/var/www/html/excalibur/templates/product_listing.twig");
    }
}
