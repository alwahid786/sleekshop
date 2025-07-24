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

/* show_category.twig */
class __TwigTemplate_8c6b25aaffabfb21435ae0be681fee9e extends Template
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
        $this->parent = $this->loadTemplate("page.twig", "show_category.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<div class=\"container\">
";
        // line 6
        $this->loadTemplate("content_block.twig", "show_category.twig", 6)->display($context);
        // line 7
        echo "<div style=\"clear:left;\"></div>
</div>

";
        // line 10
        if ((($context["res"] ?? null) != 0)) {
            // line 11
            $this->loadTemplate("product_listing.twig", "show_category.twig", 11)->display($context);
        } else {
            // line 13
            echo "
    <div class=\"col-md-12\">
        Keine Produkte gefunden
    </div>

";
        }
        // line 19
        echo "
";
    }

    public function getTemplateName()
    {
        return "show_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  66 => 13,  63 => 11,  61 => 10,  56 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "show_category.twig", "/var/www/html/excalibur/templates/show_category.twig");
    }
}
