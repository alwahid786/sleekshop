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

/* order_summary.twig */
class __TwigTemplate_fcac8403dc44c7757efcf194b67cafa7 extends Template
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
        $this->parent = $this->loadTemplate("page.twig", "order_summary.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<section class=\"shipping-cart-wrap summary-wrap\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-lg-12 col-xl-12 col-12\">
\t\t\t\t<div class=\"top-heading-wrapper border-top border-bottom\">
\t\t\t\t\t<h1 class=\"font-40 text-dark crimson-regular\">";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order Summary", [], "messages");
        echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"row\">
\t\t\t<!-- Order Details -->
\t\t\t<div class=\"col-lg-7\">
\t\t\t\t<div class=\"helena-card p-4 mt-4\">
\t\t\t\t\t<!-- Delivery Address -->
\t\t\t\t\t<div class=\"address-section mb-4\">
\t\t\t\t\t\t<h3 class=\"crimson-regular font-24 mb-3\">";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery Address", [], "messages");
        echo "</h3>
\t\t\t\t\t\t<div class=\"helena-card p-3 helena-light-bg\">
\t\t\t\t\t\t\t<h4 class=\"hind-medium font-18 mb-2\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_salutation", [], "any", false, false, false, 22), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_firstname", [], "any", false, false, false, 22), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_lastname", [], "any", false, false, false, 22), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_companyname", [], "any", false, false, false, 23)) {
            // line 24
            echo "\t\t\t\t\t\t\t<p class=\"hind-regular font-16 mb-1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_companyname", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t\t\t\t<p class=\"hind-regular font-16 mb-0\">
\t\t\t\t\t\t\t\t";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_street", [], "any", false, false, false, 27), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_number", [], "any", false, false, false, 27), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_zip", [], "any", false, false, false, 28), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_city", [], "any", false, false, false, 28), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_state", [], "any", false, false, false, 29), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_country", [], "any", false, false, false, 29), "html", null, true);
        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Billing Address -->
\t\t\t\t\t<div class=\"address-section mb-4\">
\t\t\t\t\t\t<h3 class=\"crimson-regular font-24 mb-3\">";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Billing Address", [], "messages");
        echo "</h3>
\t\t\t\t\t\t<div class=\"helena-card p-3 helena-light-bg\">
\t\t\t\t\t\t\t<h4 class=\"hind-medium font-18 mb-2\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "invoice_salutation", [], "any", false, false, false, 38), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "invoice_firstname", [], "any", false, false, false, 38), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "invoice_lastname", [], "any", false, false, false, 38), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "invoice_companyname", [], "any", false, false, false, 39)) {
            // line 40
            echo "\t\t\t\t\t\t\t<p class=\"hind-regular font-16 mb-1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "invoice_companyname", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t\t<p class=\"hind-regular font-16 mb-0\">
\t\t\t\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "invoice_street", [], "any", false, false, false, 43), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "invoice_number", [], "any", false, false, false, 43), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "invoice_zip", [], "any", false, false, false, 44), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "invoice_city", [], "any", false, false, false, 44), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "invoice_state", [], "any", false, false, false, 45), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "invoice_country", [], "any", false, false, false, 45), "html", null, true);
        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Payment Method -->
\t\t\t\t\t<div class=\"payment-section\">
\t\t\t\t\t\t<h3 class=\"crimson-regular font-24 mb-3\">";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment Method", [], "messages");
        echo "</h3>
\t\t\t\t\t\t<div class=\"helena-card p-3 helena-light-bg\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/creditcard.png\" alt=\"Payment\" width=\"40\" class=\"me-3\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4 class=\"hind-medium font-16 mb-1\">";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Credit Card", [], "messages");
        echo "</h4>
\t\t\t\t\t\t\t\t\t<p class=\"hind-regular font-14 text-muted mb-0\">";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Secure payment", [], "messages");
        echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Order Summary -->
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<div class=\"helena-card p-4 mt-4\">
\t\t\t\t\t<h3 class=\"crimson-regular font-24 mb-4\">";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Order", [], "messages");
        echo "</h3>
\t\t\t\t\t
\t\t\t\t\t<!-- Products -->
\t\t\t\t\t<div class=\"order-products mb-4\">
\t\t\t\t\t\t";
        // line 73
        $context["sum_tax"] = 0;
        // line 74
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "contents", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 75
            echo "\t\t\t\t\t\t\t";
            $context["sum_tax"] = (($context["sum_tax"] ?? null) + ((twig_get_attribute($this->env, $this->source, $context["value"], "sum_price", [], "any", false, false, false, 75) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 75), "sys_tax", [], "any", false, false, false, 75)) / (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 75), "sys_tax", [], "any", false, false, false, 75) + 1)));
            // line 76
            echo "\t\t\t\t\t\t\t<div class=\"product-item d-flex align-items-center mb-3 pb-3 border-bottom\">
\t\t\t\t\t\t\t\t<div class=\"product-image me-3\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 78), "pic", [], "any", false, false, false, 78), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 78), "html", null, true);
            echo "\" width=\"60\" height=\"60\" class=\"img-fluid rounded\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-details flex-grow-1\">
\t\t\t\t\t\t\t\t\t<h4 class=\"hind-medium font-16 mb-1\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "quantity", [], "any", false, false, false, 81), "html", null, true);
            echo "x ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 81), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t\t<p class=\"hind-regular font-14 text-muted mb-0\">";
            // line 82
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "description", [], "any", false, false, false, 82), 0, 50), "html", null, true);
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "description", [], "any", false, false, false, 82)) > 50)) {
                echo "...";
            }
            echo "</p>
\t\t\t\t\t\t\t\t\t";
            // line 83
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 83), "size", [], "any", false, false, false, 83)) {
                // line 84
                echo "\t\t\t\t\t\t\t\t\t<span class=\"badge bg-light text-dark font-12\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Size", [], "messages");
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 84), "size", [], "any", false, false, false, 84), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<span class=\"hind-bold font-16\">";
            // line 88
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "sum_price", [], "any", false, false, false, 88), 2), "html", null, true);
            echo " EUR</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Sub-elements (if any) -->
\t\t\t\t\t\t\t";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "sub_elements", [], "any", false, false, false, 93), "contents", [], "any", false, false, false, 93));
            foreach ($context['_seq'] as $context["_key"] => $context["sub_value"]) {
                // line 94
                echo "\t\t\t\t\t\t\t<div class=\"product-item d-flex align-items-center mb-3 pb-3 border-bottom ms-3\">
\t\t\t\t\t\t\t\t<div class=\"product-image me-3\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub_value"], "attributes", [], "any", false, false, false, 96), "pic", [], "any", false, false, false, 96), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_value"], "name", [], "any", false, false, false, 96), "html", null, true);
                echo "\" width=\"40\" height=\"40\" class=\"img-fluid rounded\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-details flex-grow-1\">
\t\t\t\t\t\t\t\t\t<h4 class=\"hind-medium font-14 mb-1\">";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_value"], "name", [], "any", false, false, false, 99), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t<p class=\"hind-regular font-12 text-muted mb-0\">";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_value"], "description", [], "any", false, false, false, 100), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<span class=\"hind-bold font-14\">";
                // line 103
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_value"], "sum_price", [], "any", false, false, false, 103), 2), "html", null, true);
                echo " EUR</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Order Totals -->
\t\t\t\t\t<div class=\"order-totals\">
\t\t\t\t\t\t<table class=\"checkout-subtotal w-100 mb-3\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr class=\"cart-subtotal\">
\t\t\t\t\t\t\t\t\t<td class=\"hind-regular font-16\">";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subtotal", [], "messages");
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end hind-medium font-16\">";
        // line 116
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "sum", [], "any", false, false, false, 116) - ($context["sum_tax"] ?? null)), 2), "html", null, true);
        echo " EUR</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"cart-tax\">
\t\t\t\t\t\t\t\t\t<td class=\"hind-regular font-16\">";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax", [], "messages");
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end hind-medium font-16\">";
        // line 120
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sum_tax"] ?? null), 2), "html", null, true);
        echo " EUR</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"cart-shipping\">
\t\t\t\t\t\t\t\t\t<td class=\"hind-regular font-16\">";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping", [], "messages");
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end hind-medium font-16\">";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Calculated at checkout", [], "messages");
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot class=\"border-top\">
\t\t\t\t\t\t\t\t<tr class=\"order-total\">
\t\t\t\t\t\t\t\t\t<td class=\"hind-bold font-18\">";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "messages");
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end hind-bold font-18\">";
        // line 130
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "sum", [], "any", false, false, false, 130), 2), "html", null, true);
        echo " EUR</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Order Actions -->
\t\t\t\t\t<div class=\"order-actions d-grid gap-2\">
\t\t\t\t\t\t<form method=\"POST\" action=\"checkout\" id=\"final-order-form\">
\t\t\t\t\t\t\t<!-- Hidden payment fields -->
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"card_number\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, ($context["card_number"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"exp_month\" value=\"";
        // line 142
        echo twig_escape_filter($this->env, ($context["exp_month"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"exp_year\" value=\"";
        // line 143
        echo twig_escape_filter($this->env, ($context["exp_year"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cvc\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, ($context["cvc"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark btn-lg py-3 font-16 order-btn\" onclick=\"OrderPlaced()\">
\t\t\t\t\t\t\t\t";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Place Order", [], "messages");
        // line 148
        echo "\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"wait-msg\" style=\"display:none;\" class=\"text-center\">
\t\t\t\t\t\t\t<div class=\"spinner-border text-dark\" role=\"status\">
\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Processing...", [], "messages");
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"hind-regular font-16 mt-2\">";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Processing your order...", [], "messages");
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"/payment-methods\" class=\"btn btn-outline-dark btn-lg py-3 font-16\">
\t\t\t\t\t\t\t";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to Payment", [], "messages");
        // line 160
        echo "\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Security Badge -->
\t\t\t\t\t<div class=\"security-notice text-center mt-4\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t<img src=\"assets/images/instock-icon.svg\" width=\"20\" class=\"me-2\">
\t\t\t\t\t\t\t<span class=\"hind-regular font-12 text-muted\">";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Secure 256-bit SSL encryption", [], "messages");
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<script>
function OrderPlaced() {
\tdocument.querySelector('.order-btn').style.display = 'none';
\tdocument.getElementById('wait-msg').style.display = 'block';
}
</script>
";
    }

    public function getTemplateName()
    {
        return "order_summary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 167,  402 => 160,  400 => 159,  393 => 155,  388 => 153,  381 => 148,  379 => 147,  373 => 144,  369 => 143,  365 => 142,  361 => 141,  357 => 140,  344 => 130,  340 => 129,  332 => 124,  328 => 123,  322 => 120,  318 => 119,  312 => 116,  308 => 115,  299 => 108,  293 => 107,  283 => 103,  277 => 100,  273 => 99,  265 => 96,  261 => 94,  257 => 93,  249 => 88,  245 => 86,  237 => 84,  235 => 83,  228 => 82,  222 => 81,  214 => 78,  210 => 76,  207 => 75,  202 => 74,  200 => 73,  193 => 69,  179 => 58,  175 => 57,  167 => 52,  155 => 45,  149 => 44,  143 => 43,  140 => 42,  134 => 40,  132 => 39,  124 => 38,  119 => 36,  107 => 29,  101 => 28,  95 => 27,  92 => 26,  86 => 24,  84 => 23,  76 => 22,  71 => 20,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order_summary.twig", "/var/www/html/excalibur/templates/order_summary.twig");
    }
}
