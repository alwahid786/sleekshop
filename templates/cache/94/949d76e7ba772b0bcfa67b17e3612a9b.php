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

/* herosection.twig */
class __TwigTemplate_e4142c9d6825af3f4e5d083e3c8e58be extends Template
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
        echo "<section class=\"hero-banner\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-lg-12 col-xl-12 col-12 text-center\">
\t\t\t\t<h1 class=\"text-white hero-text\">EXPLORE THE NEW RANGE</h1>
\t\t\t\t<h2 class=\"text-white hero-text-secondary crimson-semibold mb-3\">BEST PRICE, BEST SELECTION!</h2>
\t\t\t\t<p class=\"gilmer-regular font-24 text-white\">Get up to 20% off on New Arrivals</p>
\t\t\t</div>
\t\t</div>
\t</div>
</section> <!-- product-slide -->";
    }

    public function getTemplateName()
    {
        return "herosection.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "herosection.twig", "/var/www/html/excalibur/templates/herosection.twig");
    }
}
