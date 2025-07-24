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

/* checkout.twig */
class __TwigTemplate_561ca9c53c691063bcda06a669661cd8 extends Template
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
        $this->parent = $this->loadTemplate("page.twig", "checkout.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if ((($context["error"] ?? null) == 1)) {
            // line 5
            echo "<section class=\"shipping-cart-wrap summary-wrap\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-lg-12 col-xl-12 col-12\">
\t\t\t\t<div class=\"top-heading-wrapper border-top border-bottom\">
\t\t\t\t\t<h1 class=\"font-40 text-dark crimson-regular\">Payment Failed</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-center py-5\">
\t\t\t\t<div class=\"helena-card p-5\">
\t\t\t\t\t<img src=\"assets/images/close_icon.svg\" alt=\"Error\" class=\"img-fluid mb-4\" width=\"64\">
\t\t\t\t\t<h2 class=\"crimson-regular font-30 mb-3\">";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment Error", [], "messages");
            echo "</h2>
\t\t\t\t\t<p class=\"hind-regular font-16 mb-4\">";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Something went wrong with the payment, but we have received your order.", [], "messages");
            echo "</p>
\t\t\t\t\t<a href=\"/\" class=\"btn btn-dark px-4 py-3 font-16\">BACK TO SHOP</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        } else {
            // line 27
            echo "<section class=\"shipping-cart-wrap summary-wrap\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-lg-12 col-xl-12 col-12\">
\t\t\t\t<div class=\"top-heading-wrapper border-top border-bottom\">
\t\t\t\t\t<h1 class=\"font-40 text-dark crimson-regular\">";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order Confirmed", [], "messages");
            echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-center py-5\">
\t\t\t\t<div class=\"helena-card p-5\">
\t\t\t\t\t<img src=\"assets/images/instock-icon.svg\" alt=\"Success\" class=\"img-fluid mb-4\" width=\"64\">
\t\t\t\t\t<h2 class=\"crimson-regular font-30 mb-3\">";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Thank you for your order!", [], "messages");
            echo "</h2>
\t\t\t\t\t<p class=\"hind-regular font-16 mb-4\">";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your order has been successfully placed and you will receive a confirmation email shortly.", [], "messages");
            echo "</p>
\t\t\t\t\t<a href=\"/\" class=\"btn btn-dark px-4 py-3 font-16\">CONTINUE SHOPPING</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<script>
";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "redirect", [], "any", false, false, false, 50) != "")) {
                // line 51
                echo "\twindow.location.href=\"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["redirect"] ?? null), "js"), "html", null, true);
                echo "\";
";
            } else {
                // line 53
                echo "\tvar stripe = Stripe('";
                echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
                echo "');
\tstripe.redirectToCheckout({
\t\tsessionId: '";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "token", [], "any", false, false, false, 55), "html", null, true);
                echo "'
\t}).then(function (result) {
\t\tif (result.error) {
\t\t\tconsole.error('Stripe error:', result.error.message);
\t\t}
\t});
";
            }
            // line 62
            echo "</script>
";
        }
    }

    public function getTemplateName()
    {
        return "checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 62,  130 => 55,  124 => 53,  118 => 51,  116 => 50,  104 => 41,  100 => 40,  89 => 32,  82 => 27,  71 => 19,  67 => 18,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "checkout.twig", "/var/www/html/excalibur/templates/checkout.twig");
    }
}
