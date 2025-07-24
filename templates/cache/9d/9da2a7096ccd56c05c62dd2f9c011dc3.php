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

/* content_block.twig */
class __TwigTemplate_7a671e87eef1dd53b6098f6522e9c59b extends Template
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "contents", [], "any", false, false, false, 2), "byclass", [], "any", false, false, false, 2), "content_block", [], "any", false, false, false, 2));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 4), "layout", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4) == "saturn")) {
                // line 5
                $this->loadTemplate("layout_saturn.twig", "content_block.twig", 5)->display($context);
            }
            // line 7
            echo "
";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 9), "layout", [], "any", false, false, false, 9), "value", [], "any", false, false, false, 9) == "mars")) {
                // line 10
                $this->loadTemplate("layout_mars.twig", "content_block.twig", 10)->display($context);
            }
            // line 12
            echo "
";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 14), "layout", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14) == "mercur")) {
                // line 15
                $this->loadTemplate("layout_mercur.twig", "content_block.twig", 15)->display($context);
            }
            // line 17
            echo "
";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 19), "layout", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19) == "neptun")) {
                // line 20
                $this->loadTemplate("layout_neptun.twig", "content_block.twig", 20)->display($context);
            }
            // line 22
            echo "
";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 24), "layout", [], "any", false, false, false, 24), "value", [], "any", false, false, false, 24) == "pluto")) {
                // line 25
                $this->loadTemplate("layout_pluto.twig", "content_block.twig", 25)->display($context);
            }
            // line 27
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "content_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  91 => 25,  89 => 24,  86 => 22,  83 => 20,  81 => 19,  78 => 17,  75 => 15,  73 => 14,  70 => 12,  67 => 10,  65 => 9,  62 => 7,  59 => 5,  57 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "content_block.twig", "/var/www/html/excalibur/templates/content_block.twig");
    }
}
