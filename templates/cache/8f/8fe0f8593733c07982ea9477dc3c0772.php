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

/* HomeCategory.twig */
class __TwigTemplate_a0a54a68af0d4a2becf957626f1ee914 extends Template
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
        echo "<section class=\"home-category\">
\t<div class=\"container-fluid px-0\">
\t\t<div class=\"category-wrap\">
\t\t\t";
        // line 4
        $context["shown_names"] = [];
        // line 5
        echo "\t\t\t";
        $context["count"] = 0;
        // line 6
        echo "
\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allCategories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "\t\t\t\t";
            if ((!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8), ($context["shown_names"] ?? null)) && (($context["count"] ?? null) < 5))) {
                // line 9
                echo "\t\t\t\t\t";
                $context["shown_names"] = twig_array_merge(($context["shown_names"] ?? null), [0 => twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9)]);
                // line 10
                echo "\t\t\t\t\t";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 11
                echo "
\t\t\t\t\t<div class=\"category-box\">
\t\t\t\t\t\t<a href=\"category.html\">
\t\t\t\t\t\t\t<img class=\"w-100\" src=\"assets/images/top-product-image-";
                // line 14
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 14) + 4), "html", null, true);
                echo ".jpg\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<h4 class=\"cate-title\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t</div>
\t</div>
</section>

";
    }

    public function getTemplateName()
    {
        return "HomeCategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 20,  94 => 19,  87 => 15,  81 => 14,  76 => 11,  73 => 10,  70 => 9,  67 => 8,  50 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "HomeCategory.twig", "/var/www/html/excalibur/templates/HomeCategory.twig");
    }
}
