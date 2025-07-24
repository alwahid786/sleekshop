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

/* your_data.twig */
class __TwigTemplate_922544d2b0ffe24d162460c4eaf3f235 extends Template
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
        return "page_checkout_simple.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("page_checkout_simple.twig", "your_data.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div style=\"min-height: 450px\">
  <div class=\"col-md-12\">
    <div class=\"col-md-12\" style=\"padding-top: 40px\">
      <a href=\"index.php\">";
        // line 5
        $this->loadTemplate("part_logo.twig", "your_data.twig", 5)->display($context);
        echo "</a>
    </div>
    <br />
    <h1 style=\"padding-top: 115px\">";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your data", [], "messages");
        echo "</h1>
    <br /><br />
  </div>
  <div
    class=\"col-md-4\"
    style=\"background-color: #f7f7f7; border-radius: 8px; min-height: 250px\"
  >
    <div>
      <h3>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("I am already registered", [], "messages");
        echo ":</h3>
      ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Do you have a user account? Click the \"login\" button to login
      with your data.", [], "messages");
        // line 18
        echo "<br /><br />
      <a
        href=\"login\"
        class=\"btn btn-lg btn-primary pull-right\"
        style=\"margin-top: 60px; border-radius: 10px\"
        >";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login", [], "messages");
        echo "</a
      >
    </div>
  </div>
  <div class=\"col-md-4\">
    <div>
      <h3>";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("I want to create an account", [], "messages");
        echo ":</h3>
      ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you haven't a useraccount yet you can create one by clicking
      on register", [], "messages");
        // line 31
        echo "<br /><br />
      <a
        href=\"register\"
        class=\"btn btn-lg btn-primary pull-right\"
        style=\"margin-top: 60px; border-radius: 10px\"
        >";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Register now", [], "messages");
        echo "</a
      >
    </div>
  </div>
  <div
    class=\"col-md-4\"
    style=\"background-color: #f7f7f7; border-radius: 8px; min-height: 250px\"
  >
    <div>
      <h3>";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("I want to continue as a guest", [], "messages");
        echo ":</h3>
      ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can continue as a guest. Just click the button \"continue as a
      guest\".", [], "messages");
        // line 47
        echo "<br /><br />
      <a
        href=\"userdata\"
        class=\"btn btn-lg btn-primary pull-right\"
        style=\"margin-top: 60px; border-radius: 10px\"
        >";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Continue as a guest", [], "messages");
        echo "</a
      >
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "your_data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 52,  127 => 47,  124 => 46,  120 => 45,  108 => 36,  101 => 31,  98 => 30,  94 => 29,  85 => 23,  78 => 18,  75 => 17,  71 => 16,  60 => 8,  54 => 5,  49 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "your_data.twig", "/var/www/html/excalibur/templates/your_data.twig");
    }
}
