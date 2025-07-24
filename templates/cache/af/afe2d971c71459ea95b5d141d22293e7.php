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

/* page.twig */
class __TwigTemplate_7e0c102e72713449e5b9c29597d8242e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["tpl_vars"] = $this->macros["tpl_vars"] = $this->loadTemplate("part_tpl_vars.twig", "page.twig", 1)->unwrap();
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</title>
    <!-- Latest compiled and minified CSS -->
  
    ";
        // line 10
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("part_favicon.twig", "page.twig", 10);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 11
        echo "    <noscript>
        <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.min.css\">
    </noscript>
    
    ";
        // line 15
        if ((($context["canonical"] ?? null) != "")) {
            echo "<link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, ($context["canonical"] ?? null), "html", null, true);
            echo "\" />";
        }
        // line 16
        echo "    <base href=\"/\">
    \t<link rel=\"stylesheet\" href=\"assets/css/lightbox.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/style.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/fonts.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/responsive.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/helena-custom.css\">
    ";
        // line 24
        $__internal_compile_1 = null;
        try {
            $__internal_compile_1 =             $this->loadTemplate("part_theming.twig", "page.twig", 24);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_1) {
            $__internal_compile_1->display($context);
        }
        // line 25
        echo "    ";
        $__internal_compile_2 = null;
        try {
            $__internal_compile_2 =             $this->loadTemplate("part_header_snippets.twig", "page.twig", 25);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_2) {
            $__internal_compile_2->display($context);
        }
        // line 26
        echo "</head>
<body>
";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "contents", [], "any", false, false, false, 28), "byclass", [], "any", false, false, false, 28), "shop_banner", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 29
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 29), "color", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29), "html", null, true);
            echo " text-center\" role=\"alert\" style=\"top: 56px;\">
        ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "attributes", [], "any", false, false, false, 30), "text", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 102
        $this->displayBlock('head', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('content', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('footer', $context, $blocks);
        // line 158
        echo "

</body>
<script src=\"https://code.jquery.com/jquery-3.6.0.js\"></script>
<script src=\"assets/js/bootstrap.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
<script src=\"assets/js/custom.js\"></script>
";
        // line 165
        $__internal_compile_3 = null;
        try {
            $__internal_compile_3 =             $this->loadTemplate("part_bottom_snippets.twig", "page.twig", 165);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_3) {
            $__internal_compile_3->display($context);
        }
        // line 166
        echo "</html>
";
    }

    // line 34
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "
   <header id=\"header\" class=\"transparent-header\">
\t<nav class=\"navbar navbar-expand-lg\">
\t    <div class=\"container-fluid\">
\t    \t<a class=\"navbar-brand\" href=\"/\">
\t           ";
        // line 40
        $__internal_compile_4 = null;
        try {
            $__internal_compile_4 =             $this->loadTemplate("part_logo.twig", "page.twig", 40);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_4) {
            $__internal_compile_4->display($context);
        }
        // line 41
        echo "               </a>
\t        <div class=\"navbar-collapse collapse dual-collapse2\">
\t           <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/shop\">Shop</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/stories\">Stories</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/collection\">Collection</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/assistant\">Assistant</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/faqs\">Faq's</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/contact-us\">Contact Us</a></li>
            </ul>

\t        </div>
\t       <div class=\"header-right\">
\t\t       \t<ul class=\"header-info-box\">
\t\t        \t";
        // line 55
        $__internal_compile_5 = null;
        try {
            $__internal_compile_5 =             $this->loadTemplate("part_social_links.twig", "page.twig", 55);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_5) {
            $__internal_compile_5->display($context);
        }
        // line 56
        echo "\t\t        \t<li class=\"search-bt\"><a href=\"javascript:void(0)\"><img src=\"assets/images/search-icon.svg\"></a></li>
\t\t        \t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"userDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<img src=\"assets/images/user-icon.svg\" alt=\"User Icon\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdown\">
\t\t\t\t\t\t\t";
        // line 62
        if ((array_key_exists("username", $context) && (($context["username"] ?? null) != ""))) {
            // line 63
            echo "\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item ms-0\" href=\"/account\">👤 ";
            echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item ms-0\" href=\"/logout\">🚪 Logout</a></li>
\t\t\t\t\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item ms-0\" href=\"/login\">🔐 Login</a></li>
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item ms-0\" href=\"/register\">📝 Register</a></li>
\t\t\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t        \t<li><a class=\"cart-option\" id=\"cart-option\" href=\"javascript:void(0)\">
\t\t        \t\t<img src=\"assets/images/cart-icon.svg\">
\t\t        \t\t<span class=\"cart-count\">";
        // line 74
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "contents", [], "any", false, false, false, 74)), "html", null, true);
        echo "</span>
\t\t        \t</a></li>
\t\t        </ul>
\t\t        <button class=\"navbar-toggler\" onclick=\"myFunction(this)\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\".dual-collapse2\">
\t\t        \t<div class=\"bar1\"></div>
  \t\t\t\t\t<div class=\"bar2\"></div>
  \t\t\t\t\t<div class=\"bar3\"></div>
\t\t        </button>
\t       </div>
\t    </div>
\t</nav>
</header>
<section class=\"search-wrapper\">
\t<a class=\"close-bt\" href=\"javascript:void(0)\"><img src=\"assets/images/close.png\"></a>
\t<div class=\"container\">\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<form>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"search\" name=\"Search\"  value=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
        echo "\" placeholder=\"Search here..\">
\t\t\t\t\t</div>
\t\t\t\t</form> 
\t\t\t</div>
\t\t</div>
\t</div>
</section>

";
    }

    // line 102
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "
";
    }

    // line 106
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " HERE  OUR CONTENT ";
    }

    // line 108
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "<footer id=\"footer\">
\t<div class=\"container footer-top-row varticle-arrow\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 col-lg-4 col-xl-4 col-12 footer-left-border order-2 order-lg-1 mt-5 mt-lg-0\">
\t\t\t\t<h4 class=\"footer-title text-uppercase\">DISCOVER</h4>
\t\t\t\t ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 115
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 115) == "footer")) {
                // line 116
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 116));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 117
                    echo "                            <a href=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 117) != "")) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 117), "html", null, true);
                    } else {
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "permalink", [], "any", false, false, false, 117) != "")) {
                            echo "/";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "permalink", [], "any", false, false, false, 117), "html", null, true);
                        } else {
                            echo "/";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 117), "html", null, true);
                        }
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 117), "html", null, true);
                    echo "</a>
                            <br>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "                    ";
            }
            // line 121
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-xl-4 col-12 footer-middle-border order-1 order-lg-2\">
\t\t\t\t<figure class=\"text-center footer-logo\"><a href=\"index.html\">  ";
        // line 124
        $__internal_compile_6 = null;
        try {
            $__internal_compile_6 =             $this->loadTemplate("part_logo.twig", "page.twig", 124);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_6) {
            $__internal_compile_6->display($context);
        }
        echo "</a></figure>
\t\t\t\t  ";
        // line 125
        $__internal_compile_7 = null;
        try {
            $__internal_compile_7 =             $this->loadTemplate((("part_about_us_footer_" . twig_slice($this->env, ($context["language"] ?? null), 0, 2)) . ".twig"), "page.twig", 125);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_7) {
            $__internal_compile_7->display($context);
        }
        // line 126
        echo "\t\t\t\t<ul class=\"list-group list-group-horizontal footer-social justify-content-center\">
\t\t\t\t\t ";
        // line 127
        $__internal_compile_8 = null;
        try {
            $__internal_compile_8 =             $this->loadTemplate("part_social_links.twig", "page.twig", 127);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_8) {
            $__internal_compile_8->display($context);
        }
        // line 128
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 col-lg-4 col-xl-4 col-12 footer-right-border order-3 order-lg-3 mt-5 mt-lg-0\">
\t\t\t\t<h4 class=\"footer-title text-uppercase text-md-end text-start\">HELP & INFORMATION</h4>
\t\t\t\t<ul class=\"list-group footer-list text-md-end text-start\">
\t\t\t\t  <li class=\"list-group-item\">CALL US : <a href=\"tel:+123456789\">+123-456-789</a></li>
\t\t\t\t  <li class=\"list-group-item\"><a href=\"mailto:info@example.com\">INFO@EXAMPLE.COM</a></li>
\t\t\t\t  <li class=\"list-group-item\">MONDAY TILL FRIDAY 10 TO 6 EST</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-bottom-row\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 col-lg-6\">
\t\t\t\t<p class=\"copyright-text mt-0 mb-3 text-center text-lg-start mb-lg-0 lh-lg\">Copyright © 2022 Helena. All Rights Reserved.</p>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-lg-6\">
\t\t\t\t<ul class=\"list-group list-group-horizontal footer-list justify-content-center justify-content-lg-end\">
\t\t\t\t  <li class=\"list-group-item\"><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t  <li class=\"list-group-item\"><a href=\"#\">Terms & Conditions</a></li>
\t\t\t\t</ul>
\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
        // line 156
        $__internal_compile_9 = null;
        try {
            $__internal_compile_9 =             $this->loadTemplate("part_cart_sidebar.twig", "page.twig", 156);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_9) {
            $__internal_compile_9->display($context);
        }
    }

    public function getTemplateName()
    {
        return "page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 156,  392 => 128,  382 => 127,  379 => 126,  369 => 125,  357 => 124,  353 => 122,  347 => 121,  344 => 120,  322 => 117,  317 => 116,  314 => 115,  310 => 114,  303 => 109,  299 => 108,  292 => 106,  287 => 103,  283 => 102,  270 => 93,  248 => 74,  241 => 69,  236 => 66,  229 => 63,  227 => 62,  219 => 56,  209 => 55,  193 => 41,  183 => 40,  176 => 35,  172 => 34,  167 => 166,  157 => 165,  148 => 158,  146 => 108,  143 => 107,  141 => 106,  138 => 105,  136 => 102,  134 => 34,  131 => 33,  122 => 30,  117 => 29,  113 => 28,  109 => 26,  98 => 25,  88 => 24,  78 => 16,  72 => 15,  66 => 11,  56 => 10,  50 => 7,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "page.twig", "/var/www/html/excalibur/templates/page.twig");
    }
}
