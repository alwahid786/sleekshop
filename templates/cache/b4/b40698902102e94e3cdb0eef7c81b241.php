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

/* show_product.twig */
class __TwigTemplate_0d44c330aef4d5b8824a4cf152af4ec3 extends Template
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
        $this->parent = $this->loadTemplate("page.twig", "show_product.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<section class=\"detail-banner\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-md-12 col-xl-7 col-12 px-0 me-n1\">
\t\t\t\t<div class=\"lightbox-gallery\">
\t\t\t\t\t<div class=\"photos\">
\t\t\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "\t\t\t\t\t\t\t";
            $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "attributes", [], "any", false, false, false, 11), ("img" . $context["i"]), [], "any", false, false, false, 11);
            // line 12
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "width", [], "any", false, false, false, 12) > 0)) {
                // line 13
                echo "\t\t\t\t\t\t\t<div class=\"image-wrapper\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "value", [], "any", false, false, false, 14), "html", null, true);
                echo "\" data-lightbox=\"photos\">
\t\t\t\t\t\t\t\t\t<figure class=\"mb-0 h-100\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "value", [], "any", false, false, false, 16), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div class=\"lightbox-overlay\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/images/zoom-in-icon.svg\" width=\"38\" height=\"38\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 col-md-12 col-xl-5 col-12\">
\t\t\t\t<div class=\"detail-summary\">
\t\t\t\t\t<h2 class=\"product-title crimson-regular font-30\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "attributes", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "html", null, true);
        echo "</h2>
\t\t\t\t\t<div class=\"rating d-flex pt-1 pb-4 border-bottom align-items-center\">
\t\t\t\t\t\t<div class=\"stars\">
\t\t\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 34
            echo "\t\t\t\t\t\t\t\t<span class=\"";
            if (($context["i"] <= 3)) {
                echo "checked";
            }
            echo "\"><img src=\"/assets/images/star-icon.svg\"></span>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"review-no ms-2 mt-1 font-12 text-dark\">No reviews</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"price-wrapper d-flex justify-content-between py-4\">
\t\t\t\t\t\t<span class=\"product-price hind-bold\">€";
        // line 40
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "attributes", [], "any", false, false, false, 40), "price", [], "any", false, false, false, 40), "value", [], "any", false, false, false, 40), 2), "html", null, true);
        echo "</span>
\t\t\t\t\t\t<span class=\"product-instock d-flex\">
\t\t\t\t\t\t\t<img src=\"/assets/images/instock-icon.svg\" class=\"me-2\">
\t\t\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "attributes", [], "any", false, true, false, 43), "stock_status", [], "any", false, true, false, 43), "value", [], "any", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "attributes", [], "any", false, true, false, 43), "stock_status", [], "any", false, true, false, 43), "value", [], "any", false, false, false, 43), "In stock")) : ("In stock")), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"description-top border-top\">
\t\t\t\t\t\t<p class=\"font-13\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "attributes", [], "any", false, false, false, 47), "short_description", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<form class=\"product-size\">
\t\t\t\t\t\t";
        // line 50
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "sizes", [], "any", false, false, false, 50))) {
            // line 51
            echo "\t\t\t\t\t\t<p class=\"select-text float-start mb-0\">Select Size:</p>
\t\t\t\t\t\t<div class=\"btn-group size-group\" role=\"group\">
\t\t\t\t\t\t\t";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "sizes", [], "any", false, false, false, 53));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["label"] => $context["value"]) {
                // line 54
                echo "\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"size\" id=\"size-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 54), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 54)) {
                    echo "checked";
                }
                echo " />
\t\t\t\t\t\t\t\t<label class=\"btn btn-outline-primary\" for=\"size-";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 55), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t\t</form>
\t\t\t\t\t<form method=\"POST\" action=\"/add_to_cart\" class=\"add-to-cart-form\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"id_product\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"pic\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "attributes", [], "any", false, false, false, 62), "img1", [], "any", false, false, false, 62), "value", [], "any", false, false, false, 62), "html", null, true);
        echo "\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"action d-flex\">
\t\t\t\t\t\t\t<div class=\"quantity-btn d-flex\">
\t\t\t\t\t\t\t\t<div class=\"btn-minus\">-</div>
\t\t\t\t\t\t\t\t<input name=\"quantity\" value=\"1\" min=\"1\" max=\"99\">
\t\t\t\t\t\t\t\t<div class=\"btn-plus\">+</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark add-cart-bt\">
\t\t\t\t\t\t\t\t<img class=\"mb-1 me-2\" src=\"/assets/images/shopping-bag-icon.svg\"> 
\t\t\t\t\t\t\t\t";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add to cart", [], "messages");
        // line 73
        echo "\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"accordion accordion-flush\" id=\"accordionFlushExample\">
\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t<h2 class=\"accordion-header\">
\t\t\t\t\t\t\t\t<button class=\"accordion-button px-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseOne\">
\t\t\t\t\t\t\t\t\tDescription
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<div id=\"flush-collapseOne\" class=\"accordion-collapse collapse show\">
\t\t\t\t\t\t\t\t<div class=\"accordion-body px-0 py-4\">";
        // line 84
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "attributes", [], "any", false, false, false, 84), "description", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

";
        // line 94
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "attributes", [], "any", false, false, false, 94), "related_items", [], "any", false, false, false, 94), "value", [], "any", false, false, false, 94))) {
            // line 95
            echo "<section class=\"related-products pb-4\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t<h2 class=\"heading font-30 text-dark my-1\">Related Products</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "attributes", [], "any", false, false, false, 103), "related_items", [], "any", false, false, false, 103), "value", [], "any", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 104
                echo "\t\t\t<div class=\"col-sm-6 col-md-3 col-12 px-0\">
\t\t\t\t<div class=\"product-wrap\">
\t\t\t\t\t<a href=\"/product/";
                // line 106
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["item"], "permalink", [], "any", false, false, false, 106)) ? (twig_get_attribute($this->env, $this->source, $context["item"], "permalink", [], "any", false, false, false, 106)) : (twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 106))), "html", null, true);
                echo "\">
\t\t\t\t\t\t<figure class=\"product-img\">
\t\t\t\t\t\t\t<img class=\"display-img\" src=\"";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 108), "img1", [], "any", false, false, false, 108), "value", [], "any", false, false, false, 108), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<img class=\"hover-img\" src=\"";
                // line 109
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, true, false, 109), "img2", [], "any", false, true, false, 109), "value", [], "any", true, true, false, 109)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, true, false, 109), "img2", [], "any", false, true, false, 109), "value", [], "any", false, false, false, 109), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 109), "img1", [], "any", false, false, false, 109), "value", [], "any", false, false, false, 109))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 109), "img1", [], "any", false, false, false, 109), "value", [], "any", false, false, false, 109))), "html", null, true);
                echo "\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t<a href=\"/product/";
                // line 113
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["item"], "permalink", [], "any", false, false, false, 113)) ? (twig_get_attribute($this->env, $this->source, $context["item"], "permalink", [], "any", false, false, false, 113)) : (twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 113))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<h2 class=\"product-name\">";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 114), "name", [], "any", false, false, false, 114), "value", [], "any", false, false, false, 114), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p class=\"product-price\">€";
                // line 116
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 116), "price", [], "any", false, false, false, 116), "value", [], "any", false, false, false, 116), 2), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "\t\t</div>
\t</div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "show_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 121,  296 => 116,  291 => 114,  287 => 113,  280 => 109,  276 => 108,  271 => 106,  267 => 104,  263 => 103,  253 => 95,  251 => 94,  238 => 84,  225 => 73,  223 => 72,  210 => 62,  206 => 61,  202 => 59,  198 => 57,  180 => 55,  169 => 54,  152 => 53,  148 => 51,  146 => 50,  140 => 47,  133 => 43,  127 => 40,  121 => 36,  110 => 34,  106 => 33,  100 => 30,  93 => 25,  87 => 24,  76 => 16,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  58 => 10,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "show_product.twig", "/var/www/html/excalibur/templates/show_product.twig");
    }
}
