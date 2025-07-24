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

/* page_checkout_simple.twig */
class __TwigTemplate_da2ccd4298fab405d49fbeb97e4fa404 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
    <!-- Latest compiled and minified CSS -->
    <link
      rel=\"preload\"
      href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
      as=\"style\"
      onload=\"this.onload=null;this.rel='stylesheet'\"
    />
    <noscript
      ><link
        rel=\"stylesheet\"
        href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
    /></noscript>
    <link
      rel=\"preload\"
      href=\"/css/checkout.css\"
      as=\"style\"
      onload=\"this.onload=null;this.rel='stylesheet'\"
    />
    <noscript><link rel=\"stylesheet\" href=\"/css/checkout.css\" /></noscript>
    <link
      rel=\"preload\"
      href=\"https://fonts.googleapis.com/css?family=Montserrat+Alternates\"
      as=\"style\"
      onload=\"this.onload=null;this.rel='stylesheet'\"
    />
    <noscript
      ><link
        rel=\"stylesheet\"
        href=\"https://fonts.googleapis.com/css?family=Montserrat+Alternates\"
    /></noscript>
    <script src=\"https://js.stripe.com/v3/\"></script>
    <base href=\"/\" />
  </head>
  <body>
    <div class=\"container\">
      ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        echo " 
      ";
        // line 43
        $this->displayBlock('head', $context, $blocks);
        echo " 
      ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "    </div>
  </body>
  <script src=\"/js/jquery/jquery.min.js\" defer></script>
  <script
    src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
    integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
    crossorigin=\"anonymous\"
    defer
  ></script>
  <script src=\"/js/jquery/jquery.imageLens.js\" defer></script>
  <script src=\"/js/mayalist/mayalist.js\" defer></script>
  <script src=\"/js/main.js\" defer></script>
</html>
";
    }

    // line 42
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 43
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " HERE OUR CONTENT ";
    }

    public function getTemplateName()
    {
        return "page_checkout_simple.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  120 => 43,  113 => 42,  96 => 45,  94 => 44,  90 => 43,  86 => 42,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "page_checkout_simple.twig", "/var/www/html/excalibur/templates/page_checkout_simple.twig");
    }
}
