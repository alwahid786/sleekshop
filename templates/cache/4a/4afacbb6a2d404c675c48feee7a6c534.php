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

/* userdata.twig */
class __TwigTemplate_982df7e3f756d49c1ca9c62565c95dd9 extends Template
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
        $this->parent = $this->loadTemplate("page.twig", "userdata.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Information", [], "messages");
        echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8 mx-auto\">
\t\t\t\t<div class=\"helena-card p-4 mt-4\">
\t\t\t\t\t";
        // line 17
        if ((($context["error_count"] ?? null) > 0)) {
            // line 18
            echo "\t\t\t\t\t<div class=\"alert alert-danger mb-4\" role=\"alert\">
\t\t\t\t\t\t<strong>";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please fill in all required fields", [], "messages");
            echo "</strong>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t
\t\t\t\t\t<form method=\"POST\" action=\"userdata\" class=\"helena-form\" id=\"submit\">
\t\t\t\t\t\t<h3 class=\"crimson-regular font-24 mb-4\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Billing Information", [], "messages");
        echo "</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group mb-3 ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "email", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email Address", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control form-control-lg\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "email", [], "any", false, false, false, 28), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Salutation", [], "messages");
        echo "</label>
\t\t\t\t\t\t\t<select name=\"salutation\" class=\"form-control form-control-lg\">
\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please select", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Mrs\" ";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "salutation", [], "any", false, false, false, 35) == "Mrs")) {
            echo "selected";
        }
        echo ">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mrs", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Mr\" ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "salutation", [], "any", false, false, false, 36) == "Mr")) {
            echo "selected";
        }
        echo ">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mr", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group mb-3 ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "firstname", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First Name", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" class=\"form-control form-control-lg\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "firstname", [], "any", false, false, false, 44), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group mb-3 ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "lastname", [], "any", false, false, false, 48), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Name", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" class=\"form-control form-control-lg\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "lastname", [], "any", false, false, false, 50), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Company", [], "messages");
        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"companyname\" class=\"form-control form-control-lg\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "companyname", [], "any", false, false, false, 59), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Department", [], "messages");
        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"department\" class=\"form-control form-control-lg\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "department", [], "any", false, false, false, 65), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t<div class=\"form-group mb-3 ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "street", [], "any", false, false, false, 72), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Street", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"street\" class=\"form-control form-control-lg\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "street", [], "any", false, false, false, 74), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t<div class=\"form-group mb-3 ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "number", [], "any", false, false, false, 78), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"number\" class=\"form-control form-control-lg\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "number", [], "any", false, false, false, 80), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group mb-3 ";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "city", [], "any", false, false, false, 87), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("City", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"city\" class=\"form-control form-control-lg\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "city", [], "any", false, false, false, 89), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group mb-3 ";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "zip", [], "any", false, false, false, 93), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Postal Code", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"zip\" class=\"form-control form-control-lg\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "zip", [], "any", false, false, false, 95), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group mb-3 ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "state", [], "any", false, false, false, 102), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State/Province", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"state\" class=\"form-control form-control-lg\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "state", [], "any", false, false, false, 104), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group mb-3 ";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "country", [], "any", false, false, false, 108), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t<select name=\"country\" class=\"form-control form-control-lg\" required>
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please choose your country", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["delivery_countries"] ?? null), "countries", [], "any", false, false, false, 112));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 113
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "iso", [], "any", false, false, false, 113), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "country", [], "any", false, false, false, 113) == twig_get_attribute($this->env, $this->source, $context["value"], "iso", [], "any", false, false, false, 113))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "printable_name", [], "any", false, false, false, 113), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 115
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"DE\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "country", [], "any", false, false, false, 115) == "DE")) {
                echo " selected ";
            }
            echo ">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Germany", [], "messages");
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group mb-4\">
\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order Notes", [], "messages");
        echo "</label>
\t\t\t\t\t\t\t<textarea name=\"notes\" class=\"form-control form-control-lg\" rows=\"3\" placeholder=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Optional notes about your order", [], "messages");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "notes", [], "any", false, false, false, 124), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"helena-card p-3 mb-4 helena-light-bg\">
\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" id=\"ship-box\" name=\"diffaddress\" value=\"diffadd\" onclick=\"toggleAddr()\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label hind-medium font-16\" for=\"ship-box\">
\t\t\t\t\t\t\t\t\t";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ship to a different address?", [], "messages");
        // line 132
        echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"secondaryaddr\" style=\"display:none;\">
\t\t\t\t\t\t\t<h3 class=\"crimson-regular font-24 mb-4\">";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping Information", [], "messages");
        echo "</h3>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Salutation", [], "messages");
        echo "</label>
\t\t\t\t\t\t\t\t<select name=\"dsalutation\" class=\"form-control form-control-lg\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please select", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"Mrs\" ";
        // line 143
        if ((twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "salutation", [], "any", false, false, false, 143) == "Mrs")) {
            echo "selected";
        }
        echo ">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mrs", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"Mr\" ";
        // line 144
        if ((twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "salutation", [], "any", false, false, false, 144) == "Mr")) {
            echo "selected";
        }
        echo ">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mr", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First Name", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"dfirstname\" class=\"form-control form-control-lg\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "firstname", [], "any", false, false, false, 152), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Name", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"dlastname\" class=\"form-control form-control-lg\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "lastname", [], "any", false, false, false, 158), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Company", [], "messages");
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"dcompanyname\" class=\"form-control form-control-lg\" value=\"";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "companyname", [], "any", false, false, false, 167), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Department", [], "messages");
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"ddepartment\" class=\"form-control form-control-lg\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "department", [], "any", false, false, false, 173), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Street", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"dstreet\" class=\"form-control form-control-lg\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "street", [], "any", false, false, false, 182), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"dnumber\" class=\"form-control form-control-lg\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "number", [], "any", false, false, false, 188), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("City", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"dcity\" class=\"form-control form-control-lg\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "city", [], "any", false, false, false, 197), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 202
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Postal Code", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"dzip\" class=\"form-control form-control-lg\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "zip", [], "any", false, false, false, 203), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 211
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State/Province", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"dstate\" class=\"form-control form-control-lg\" value=\"";
        // line 212
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "state", [], "any", false, false, false, 212), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"hind-medium font-14 mb-2\">";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country", [], "messages");
        echo " *</label>
\t\t\t\t\t\t\t\t\t\t<select name=\"dcountry\" class=\"form-control form-control-lg\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please choose your country", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["delivery_countries"] ?? null), "countries", [], "any", false, false, false, 220));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 221
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "iso", [], "any", false, false, false, 221), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "country", [], "any", false, false, false, 221) == twig_get_attribute($this->env, $this->source, $context["value"], "iso", [], "any", false, false, false, 221))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "printable_name", [], "any", false, false, false, 221), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 223
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DE\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["userdata"] ?? null), "country", [], "any", false, false, false, 223) == "DE")) {
                echo " selected ";
            }
            echo ">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Germany", [], "messages");
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"d-grid gap-2 mt-4\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark btn-lg py-3 font-16\" id=\"btnsubmit\">
\t\t\t\t\t\t\t\t";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Continue to Payment", [], "messages");
        // line 234
        echo "\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<script>
function toggleAddr() {
\tif (document.getElementById(\"ship-box\").checked) {
\t\tdocument.getElementById(\"secondaryaddr\").style.display = \"block\";
\t} else {
\t\tdocument.getElementById(\"secondaryaddr\").style.display = \"none\";
\t}
}
</script>
";
    }

    public function getTemplateName()
    {
        return "userdata.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 234,  560 => 233,  550 => 225,  537 => 223,  523 => 221,  518 => 220,  514 => 219,  509 => 217,  501 => 212,  497 => 211,  486 => 203,  482 => 202,  474 => 197,  470 => 196,  459 => 188,  455 => 187,  447 => 182,  443 => 181,  432 => 173,  428 => 172,  420 => 167,  416 => 166,  405 => 158,  401 => 157,  393 => 152,  389 => 151,  375 => 144,  367 => 143,  363 => 142,  358 => 140,  352 => 137,  345 => 132,  343 => 131,  331 => 124,  327 => 123,  319 => 117,  306 => 115,  292 => 113,  287 => 112,  283 => 111,  278 => 109,  274 => 108,  267 => 104,  263 => 103,  259 => 102,  249 => 95,  245 => 94,  241 => 93,  234 => 89,  230 => 88,  226 => 87,  216 => 80,  212 => 79,  208 => 78,  201 => 74,  197 => 73,  193 => 72,  183 => 65,  179 => 64,  171 => 59,  167 => 58,  156 => 50,  152 => 49,  148 => 48,  141 => 44,  137 => 43,  133 => 42,  120 => 36,  112 => 35,  108 => 34,  103 => 32,  96 => 28,  92 => 27,  88 => 26,  83 => 24,  79 => 22,  73 => 19,  70 => 18,  68 => 17,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "userdata.twig", "/var/www/html/excalibur/templates/userdata.twig");
    }
}
