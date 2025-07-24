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

/* cart.twig */
class __TwigTemplate_88dafb3cfbc3c818f491288a4364373b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "page.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("page.twig", "cart.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<section class=\"shipping-cart-wrap summary-wrap\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-lg-12 col-xl-12 col-12\">
\t\t\t\t\t<div class=\"top-heading-wrapper border-top border-bottom\">
\t\t\t\t\t\t<h1 class=\"font-40 text-dark crimson-regular\">Shopping Cart</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 14
        if ((($context["res"] ?? null) == 0)) {
            // line 15
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 text-center py-5\">
\t\t\t\t\t\t<h2>Your cart is empty</h2>
\t\t\t\t\t\t<a href=\"/\" class=\"btn btn-lg btn-primary mt-3\">Back to Shop</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 22
            echo "\t\t\t\t<div
\t\t\t\t\tclass=\"row pe-0\">
\t\t\t\t\t<!-- Products Table -->
\t\t\t\t\t<div class=\"col-md-12 col-lg-7 col-xl-7 col-12\">
\t\t\t\t\t\t<div class=\"products-wrapper mt-0\">
\t\t\t\t\t\t\t<h2 class=\"font-24 text-dark d-inline hind-semibold\">Products</h2>
\t\t\t\t\t\t\t<table class=\"product-table w-100 border-top mt-1\">
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
            // line 30
            $context["sum_tax"] = 0;
            // line 31
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "contents", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 32
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["sum_tax"] = (($context["sum_tax"] ?? null) + ((twig_get_attribute($this->env, $this->source, $context["value"], "sum_price", [], "any", false, false, false, 32) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 32), "sys_tax", [], "any", false, false, false, 32)) / (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 32), "sys_tax", [], "any", false, false, false, 32) + 1)));
                // line 33
                echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"product-img me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 36), "pic", [], "any", false, false, false, 36), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 36), "html", null, true);
                echo "\" width=\"80\">
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-name mb-0 font-24 text-dark crimson-regular\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 40), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-name mb-0 font-14 text-dark text-capitalize hind-regular\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "description", [], "any", false, false, false, 41), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 42
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, true, false, 42), "size", [], "any", true, true, false, 42)) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-size mb-0 text-dark hind-regular\">Size:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"size\">";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 44), "size", [], "any", false, false, false, 44), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-mini-box text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hind-bold font-18\">";
                // line 50
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "sum_price", [], "any", false, false, false, 50), 2), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\tEUR</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/del_from_cart?id=";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 52), "html", null, true);
                echo "\" class=\"remove-btn text-decoration-underline\" role=\"button\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Order Summary -->
\t\t\t\t\t<div class=\"col-md-12 col-lg-5 col-xl-5 col-12 pe-0\">
\t\t\t\t\t\t<div class=\"summary-order mt-5 mt-lg-0 hind-regular\">
\t\t\t\t\t\t\t<h2 class=\"font-30 text-dark d-inline lh-base crimson-regular\">Order Summary</h2>
\t\t\t\t\t\t\t<table class=\"checkout-subtotal w-100 mt-4\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th class=\"product-name hind-regular\">Pieces (";
            // line 69
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "contents", [], "any", false, false, false, 69)), "html", null, true);
            echo ")</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"product-total hind-regular\">";
            // line 70
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "sum", [], "any", false, false, false, 70), 2), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\tEUR</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr class=\"cart-subtotal\">
\t\t\t\t\t\t\t\t\t\t<td>Shipping
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/images/question-circle-fill-icon.svg\" width=\"16\" height=\"16\" data-bs-toggle=\"tooltip\" title=\"Shipping calculated at checkout\"></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"calculated-text font-12\">Calculated At Checkout</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>Included Tax</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 84
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sum_tax"] ?? null), 2), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\tEUR</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot class=\"border-top\">
\t\t\t\t\t\t\t\t\t<tr class=\"order-total font-18\">
\t\t\t\t\t\t\t\t\t\t<td>Total</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"check-total-price\">
\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 92
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "sum", [], "any", false, false, false, 92), 2), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\tEUR</strong>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<a class=\"btn btn-dark check-order-bt w-100 font-16\" href=\"/your-data\">Checkout</a>
\t\t\t\t\t\t\t<h6 class=\"free-shipping-text mt-4 pt-2 text-center\">Free Shipping On Orders Over 650 EUR</h6>
\t\t\t\t\t\t\t<h6 class=\"free-shipping-text text-center mt-3 mb-3\">
\t\t\t\t\t\t\t\tRead More About Our Full
\t\t\t\t\t\t\t\t<a href=\"/return-policy\" class=\"text-decoration-underline\">Return and Refunds Policy</a>
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 109
        echo "\t\t</div>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 109,  193 => 92,  182 => 84,  165 => 70,  161 => 69,  147 => 57,  136 => 52,  131 => 50,  126 => 47,  120 => 44,  117 => 43,  115 => 42,  111 => 41,  107 => 40,  98 => 36,  93 => 33,  90 => 32,  85 => 31,  83 => 30,  73 => 22,  64 => 15,  62 => 14,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart.twig", "/var/www/html/excalibur/templates/cart.twig");
    }
}
