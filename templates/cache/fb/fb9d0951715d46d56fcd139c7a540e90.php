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

/* part_cart_sidebar.twig */
class __TwigTemplate_48269fd01faa0b48fca311bb92148f23 extends Template
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
        echo "<div class=\"cart-sidebar shipping-cart-wrap summary-wrap\" id=\"cart-sidebar\">
\t<div class=\"products-wrapper mt-0\">
\t\t<div class=\"sidebar-header d-flex justify-content-between align-items-center border-top border-bottom py-4 mb-3\">
\t\t\t<h3 class=\"font-40 text-dark d-inline crimson-regular mb-0\">My Cart</h3>
\t\t\t<div class=\"cart-close ms-auto me-0\" id=\"cart-close\">
\t\t\t\t<img src=\"/assets/images/close_icon.svg\" width=\"18\" height=\"18\">
\t\t\t</div>
\t\t</div>

\t\t<h4 class=\"sub-heading font-24 hind-regular mb-0\">Order Summary</h4>

\t\t<table class=\"product-table w-100 mt-1\">
\t\t\t<tbody>
\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "contents", [], "any", false, false, false, 14));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<figure class=\"product-img me-3\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 18
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, true, false, 18), "pic", [], "any", true, true, false, 18) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, true, false, 18), "pic", [], "any", false, false, false, 18)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, true, false, 18), "pic", [], "any", false, false, false, 18), "html", null, true))) : (print ("/assets/images/default-product.jpg")));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<p class=\"product-name mb-0 font-24 text-dark crimson-regular\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", true, true, false, 23)) {
                // line 24
                echo "\t\t\t\t\t\t\t\t<p class=\"product-name mb-0 font-14 text-dark text-capitalize hind-regular\">
\t\t\t\t\t\t\t\t\t";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 25), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, true, false, 28), "size", [], "any", true, true, false, 28)) {
                // line 29
                echo "\t\t\t\t\t\t\t\t<p class=\"product-size mb-0 text-dark hind-regular\">
\t\t\t\t\t\t\t\t\tSize:
\t\t\t\t\t\t\t\t\t<span class=\"size\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 31), "size", [], "any", false, false, false, 31), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"price-mini-box text-end\">
\t\t\t\t\t\t\t\t<p class=\"hind-bold font-18\">";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "sum_price", [], "any", false, false, false, 37), 2), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tEUR</p>
\t\t\t\t\t\t\t\t<a href=\"/del_from_cart?id=";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" class=\"remove-btn text-decoration-underline\" role=\"button\">Remove</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t";
            // line 45
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub_elements", [], "any", false, false, false, 45), "contents", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 46
                echo "\t\t\t\t\t\t<tr class=\"ps-4\">
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-dark\">";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "name", [], "any", false, false, false, 49), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<p class=\"text-muted\">";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "description", [], "any", false, false, false, 50), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t<p class=\"font-14\">";
                // line 53
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "sum_price", [], "any", false, false, false, 53), 2), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\tUSD</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"3\" class=\"text-center\">Your cart is empty.</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t</tbody>
\t\t</table>

\t\t<table class=\"checkout-subtotal border-bottom w-100 mt-0 mb-4\">
\t\t\t<tbody>
\t\t\t\t<tr class=\"cart-subtotal\">
\t\t\t\t\t<td>
\t\t\t\t\t\tShipping
\t\t\t\t\t\t<img src=\"/assets/images/question-circle-fill-icon.svg\" width=\"16\" height=\"16\" data-bs-toggle=\"tooltip\" title=\"Calculated during checkout\">
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"calculated-text font-12\">Calculated At Next Step</span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t\t<tfoot class=\"border-top\">
\t\t\t\t<tr class=\"order-total\">
\t\t\t\t\t<td>Total</td>
\t\t\t\t\t<td class=\"check-total-price\">
\t\t\t\t\t\t<span>EUR</span>
\t\t\t\t\t\t<strong>";
        // line 83
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "sum", [], "any", false, false, false, 83) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "delivery_costs", [], "any", false, false, false, 83), "sum", [], "any", false, false, false, 83)), 2), "html", null, true);
        echo "
\t\t\t\t\t\t\tEUR</strong>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tfoot>
\t\t</table>

<a class=\"btn btn-dark check-order-bt w-100 font-16\" href=\"/cart\">";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To cart", [], "messages");
        echo "</a>



\t\t<h6 class=\"free-shipping-text mt-3 pt-2\">
\t\t\tFree Shipping On Orders Over 650 EUR
\t\t</h6>
\t\t<h6 class=\"free-shipping-text mt-3 mb-3\">
\t\t\tRead More About Our Full
\t\t\t<a href=\"/return-policy\" class=\"text-decoration-underline\">Return and Refunds Policy</a>
\t\t</h6>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "part_cart_sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 90,  184 => 83,  162 => 63,  153 => 59,  148 => 58,  137 => 53,  131 => 50,  127 => 49,  122 => 46,  117 => 45,  109 => 39,  104 => 37,  99 => 34,  93 => 31,  89 => 29,  86 => 28,  80 => 25,  77 => 24,  75 => 23,  71 => 22,  62 => 18,  57 => 15,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "part_cart_sidebar.twig", "/var/www/html/excalibur/templates/part_cart_sidebar.twig");
    }
}
