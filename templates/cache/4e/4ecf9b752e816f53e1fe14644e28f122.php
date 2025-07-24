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

/* payment_methods.twig */
class __TwigTemplate_a73365131e3fb667aaa6e7161904b195 extends Template
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
        $this->parent = $this->loadTemplate("page.twig", "payment_methods.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment Method", [], "messages");
        echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8 mx-auto\">
\t\t\t\t<div class=\"helena-card p-4 mt-4\">
\t\t\t\t\t<h3 class=\"crimson-regular font-24 mb-4\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose Your Payment Method", [], "messages");
        echo "</h3>
\t\t\t\t\t
\t\t\t\t\t<form method=\"POST\" action=\"order_summary\" class=\"helena-form\" id=\"payment-form\">
\t\t\t\t\t\t<div class=\"payment-methods\">
\t\t\t\t\t\t\t<!-- PayPal -->
\t\t\t\t\t\t\t";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["payment_methods"] ?? null), "PayPal", [], "any", false, false, false, 22)) {
            // line 23
            echo "\t\t\t\t\t\t\t<div class=\"helena-card p-3 mb-3 payment-option\">
\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"id_payment\" id=\"payment_paypal\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_methods"] ?? null), "PayPal", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\" checked>
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label hind-medium font-16 d-flex align-items-center justify-content-between w-100\" for=\"payment_paypal\">
\t\t\t\t\t\t\t\t\t\t<div class=\"payment-info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"payment-name\">";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PayPal", [], "messages");
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"payment-description hind-regular font-14 text-muted\">";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pay easily with PayPal", [], "messages");
            echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"payment-icon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/paypal.png\" alt=\"PayPal\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Stripe Credit Card -->
\t\t\t\t\t\t\t";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["payment_methods"] ?? null), "Stripe", [], "any", false, false, false, 40)) {
            // line 41
            echo "\t\t\t\t\t\t\t<div class=\"helena-card p-3 mb-3 payment-option\">
\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"id_payment\" id=\"payment_stripe\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_methods"] ?? null), "Stripe", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label hind-medium font-16 d-flex align-items-center justify-content-between w-100\" for=\"payment_stripe\">
\t\t\t\t\t\t\t\t\t\t<div class=\"payment-info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"payment-name\">";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Credit Card", [], "messages");
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"payment-description hind-regular font-14 text-muted\">";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pay with your credit card", [], "messages");
            echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"payment-icon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/stripe.png\" alt=\"Credit Card\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Sofort -->
\t\t\t\t\t\t\t";
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["payment_methods"] ?? null), "Sofortueberweisung", [], "any", false, false, false, 58)) {
            // line 59
            echo "\t\t\t\t\t\t\t<div class=\"helena-card p-3 mb-3 payment-option\">
\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"id_payment\" id=\"payment_sofort\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_methods"] ?? null), "Sofortueberweisung", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label hind-medium font-16 d-flex align-items-center justify-content-between w-100\" for=\"payment_sofort\">
\t\t\t\t\t\t\t\t\t\t<div class=\"payment-info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"payment-name\">";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sofort Banking", [], "messages");
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"payment-description hind-regular font-14 text-muted\">";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comfortable payment with your bank account", [], "messages");
            echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"payment-icon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/sofortueberweisung.png\" alt=\"Sofort\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Pre-Payment -->
\t\t\t\t\t\t\t";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["payment_methods"] ?? null), "PrePayment", [], "any", false, false, false, 76)) {
            // line 77
            echo "\t\t\t\t\t\t\t<div class=\"helena-card p-3 mb-3 payment-option\">
\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"id_payment\" id=\"payment_prepay\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_methods"] ?? null), "PrePayment", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label hind-medium font-16 d-flex align-items-center justify-content-between w-100\" for=\"payment_prepay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"payment-info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"payment-name\">";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bank Transfer", [], "messages");
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"payment-description hind-regular font-14 text-muted\">";
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pay after receiving your invoice", [], "messages");
            echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"payment-icon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/vorkasse.jpg\" alt=\"Bank Transfer\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Credit Card Details Section -->
\t\t\t\t\t\t<div id=\"credit-card-details\" class=\"helena-card p-4 mt-4 helena-light-bg\" style=\"display:none;\">
\t\t\t\t\t\t\t<h4 class=\"crimson-regular font-20 mb-3\">";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Credit Card Information", [], "messages");
        echo "</h4>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Card Number", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"card_number\" class=\"form-control form-control-lg card-number\" placeholder=\"1234 5678 9012 3456\" maxlength=\"19\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expiry Month", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t\t<select name=\"exp_month\" class=\"form-control form-control-lg card-expiry-month\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Month", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 110
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_sprintf("%02d", $context["i"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_sprintf("%02d", $context["i"]), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expiry Year", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t\t<select name=\"exp_year\" class=\"form-control form-control-lg card-expiry-year\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Year", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") + 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 121
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CVC", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cvc\" class=\"form-control form-control-lg card-cvc\" placeholder=\"123\" maxlength=\"4\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cardholder Name", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cardholder\" class=\"form-control form-control-lg card-holdername\" placeholder=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name as it appears on card", [], "messages");
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Security Notice -->
\t\t\t\t\t\t<div class=\"security-notice text-center mt-4 mb-4\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/instock-icon.svg\" width=\"20\" class=\"me-2\">
\t\t\t\t\t\t\t\t<span class=\"hind-regular font-14 text-muted\">";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your payment information is encrypted and secure", [], "messages");
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"d-grid gap-2 mt-4\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark btn-lg py-3 font-16\" id=\"payment-submit\">
\t\t\t\t\t\t\t\t";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Review Order", [], "messages");
        // line 151
        echo "\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<a href=\"/your-data\" class=\"btn btn-outline-dark btn-lg py-3 font-16\">
\t\t\t\t\t\t\t\t";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to Address", [], "messages");
        // line 154
        echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Hidden Fields -->
\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" id=\"token\" value=\"";
        // line 158
        if (twig_get_attribute($this->env, $this->source, ($context["payment_methods"] ?? null), "Stripe", [], "any", false, false, false, 158)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_methods"] ?? null), "Stripe", [], "any", false, false, false, 158), "attributes", [], "any", false, false, false, 158), "public_key", [], "any", false, false, false, 158), "html", null, true);
        }
        echo "\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"amount\" class=\"amount\" value=\"";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "sum", [], "any", false, false, false, 159), "html", null, true);
        echo "\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"currency\" class=\"currency\" value=\"EUR\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<script>
// Format card number input
document.addEventListener('DOMContentLoaded', function() {
\tconst cardNumberInput = document.querySelector('.card-number');
\tif (cardNumberInput) {
\t\tcardNumberInput.addEventListener('input', function(e) {
\t\t\tlet value = e.target.value.replace(/\\s/g, '').replace(/[^0-9]/gi, '');
\t\t\tlet formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
\t\t\te.target.value = formattedValue;
\t\t});
\t}

\t// Show/hide credit card details based on payment method
\tdocument.querySelectorAll('input[name=\"id_payment\"]').forEach(function(radio) {
\t\tradio.addEventListener('change', function() {
\t\t\tconst creditCardDetails = document.getElementById('credit-card-details');
\t\t\t
\t\t\tif (this.id === 'payment_stripe') {
\t\t\t\tcreditCardDetails.style.display = 'block';
\t\t\t} else {
\t\t\t\tcreditCardDetails.style.display = 'none';
\t\t\t}
\t\t});
\t});

\t// Initialize - check if stripe is selected
\tconst stripeRadio = document.getElementById('payment_stripe');
\tif (stripeRadio && stripeRadio.checked) {
\t\tdocument.getElementById('credit-card-details').style.display = 'block';
\t}
});
</script>
";
    }

    public function getTemplateName()
    {
        return "payment_methods.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 159,  332 => 158,  326 => 154,  324 => 153,  320 => 151,  318 => 150,  309 => 144,  298 => 136,  294 => 135,  284 => 128,  277 => 123,  266 => 121,  262 => 120,  258 => 119,  253 => 117,  246 => 112,  235 => 110,  231 => 109,  227 => 108,  222 => 106,  212 => 99,  206 => 96,  200 => 92,  188 => 83,  184 => 82,  178 => 79,  174 => 77,  172 => 76,  168 => 74,  156 => 65,  152 => 64,  146 => 61,  142 => 59,  140 => 58,  136 => 56,  124 => 47,  120 => 46,  114 => 43,  110 => 41,  108 => 40,  104 => 38,  92 => 29,  88 => 28,  82 => 25,  78 => 23,  76 => 22,  68 => 17,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "payment_methods.twig", "/var/www/html/excalibur/templates/payment_methods.twig");
    }
}
