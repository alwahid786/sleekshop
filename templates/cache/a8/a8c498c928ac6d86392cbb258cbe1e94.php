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

/* page_checkout.twig */
class __TwigTemplate_5017037a2f3597526faf72f5988a68a0 extends Template
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
<html lang=\"en\">
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["res"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        echo " Checkout</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" type=\"image\" href=\"assets/images/site-logo.png\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/admin.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/style.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/responsive.css\">
</head>
<body>
    <section class=\"checkout\">
        <div class=\"container-fluid\">
            <div class=\"row\">
      ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        echo " 
      ";
        // line 18
        $this->displayBlock('head', $context, $blocks);
        echo " 
      ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "          </div>
        </div> 
    </section>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/custom.js\"></script>
    <script src=\"/js/main.js\" defer></script>
</body>
</html>";
    }

    // line 17
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 18
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " HERE OUR CONTENT ";
    }

    public function getTemplateName()
    {
        return "page_checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 19,  90 => 18,  83 => 17,  71 => 20,  69 => 19,  65 => 18,  61 => 17,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "page_checkout.twig", "/var/www/html/excalibur/templates/page_checkout.twig");
    }
}
