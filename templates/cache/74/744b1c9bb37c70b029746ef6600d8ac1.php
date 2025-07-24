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

/* index.twig */
class __TwigTemplate_7be0bacfc5a51387e58ceca468808d48 extends Template
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
        $this->parent = $this->loadTemplate("page.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $this->loadTemplate("herosection.twig", "index.twig", 4)->display($context);
        // line 5
        echo "<section class=\"product-slide\">
  <div class=\"container-fluid px-0\">
    <div class=\"row mx-0\">
      <div class=\"col-12 text-center\">
        <h3 class=\"heading font-30 text-dark\">Top Products Collection</h3>
      </div>
    </div>

";
        // line 13
        $this->loadTemplate("OwlCarcousel.twig", "index.twig", 13)->display($context);
        // line 14
        echo "    
  </div>
</section>
";
        // line 17
        $this->loadTemplate("HomeCategory.twig", "index.twig", 17)->display($context);
        // line 18
        echo "

";
        // line 20
        $this->loadTemplate("BestSeller.twig", "index.twig", 20)->display($context);
        // line 21
        echo "    

";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  75 => 20,  71 => 18,  69 => 17,  64 => 14,  62 => 13,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/var/www/html/excalibur/templates/index.twig");
    }
}
