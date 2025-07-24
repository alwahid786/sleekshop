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

/* login.twig */
class __TwigTemplate_2f420cdaccc7d7cefbdf04efd1fa747e extends Template
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
        $this->parent = $this->loadTemplate("page.twig", "login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<section class=\"login-section py-5\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6 col-md-8 col-12\">
                <div class=\"login-wrapper bg-white shadow rounded p-5\">
                    <div class=\"text-center mb-4\">
                        <h2 class=\"crimson-semibold font-40 text-dark mb-2\">";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Welcome Back", [], "messages");
        echo "</h2>
                        <p class=\"hind-regular font-16 text-muted\">";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign in to your account", [], "messages");
        echo "</p>
                    </div>

                    ";
        // line 13
        if ((($context["error"] ?? null) == 1)) {
            // line 14
            echo "                    <div class=\"alert alert-danger border-0 mb-4\" role=\"alert\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        ";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username and password does not match", [], "messages");
            echo ".
                    </div>
                    ";
        }
        // line 19
        echo "
                    <form method=\"POST\" action=\"login\" class=\"login-form\">
                        <div class=\"form-group mb-4\">
                            <label class=\"form-label hind-medium font-14 text-dark mb-2\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email Address", [], "messages");
        echo "</label>
                            <input type=\"text\" 
                                   class=\"form-control form-control-lg border-2 rounded-3 py-3 px-4\" 
                                   name=\"username\" 
                                   placeholder=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enter your email", [], "messages");
        echo "\"
                                   required>
                        </div>
                        
                        <div class=\"form-group mb-4\">
                            <label class=\"form-label hind-medium font-14 text-dark mb-2\">";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", [], "messages");
        echo "</label>
                            <input type=\"password\" 
                                   class=\"form-control form-control-lg border-2 rounded-3 py-3 px-4\" 
                                   name=\"password\" 
                                   placeholder=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enter your password", [], "messages");
        echo "\"
                                   required>
                        </div>

                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"rememberMe\">
                                <label class=\"form-check-label hind-regular font-14 text-muted\" for=\"rememberMe\">
                                    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remember me", [], "messages");
        // line 44
        echo "                                </label>
                            </div>
                            <a href=\"#\" class=\"text-decoration-none hind-medium font-14\">";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Forgot Password?", [], "messages");
        echo "</a>
                        </div>

                        <div class=\"form-group mb-4\">
                            <input type=\"hidden\" name=\"profile\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["profile"] ?? null), "html", null, true);
        echo "\">
                            <button type=\"submit\" class=\"btn btn-dark btn-lg w-100 py-3 hind-bold font-16 text-uppercase\">
                                ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign In", [], "messages");
        // line 53
        echo "                            </button>
                        </div>

                        <div class=\"text-center\">
                            <p class=\"hind-regular font-14 text-muted mb-0\">
                                ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Don't have an account?", [], "messages");
        echo " 
                                <a href=\"/register\" class=\"text-dark text-decoration-none hind-medium\">";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign Up", [], "messages");
        echo "</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.login-section {
    min-height: 70vh;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
}

.login-wrapper {
    border: none;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
}

.form-control:focus {
    border-color: #212529;
    box-shadow: 0 0 0 0.2rem rgba(33, 37, 41, 0.25);
}

.btn-dark:hover {
    background-color: #000;
    transform: translateY(-2px);
    transition: all 0.3s ease;
}
</style>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 59,  145 => 58,  138 => 53,  136 => 52,  131 => 50,  124 => 46,  120 => 44,  118 => 43,  107 => 35,  100 => 31,  92 => 26,  85 => 22,  80 => 19,  74 => 16,  70 => 14,  68 => 13,  62 => 10,  58 => 9,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.twig", "/var/www/html/excalibur/templates/login.twig");
    }
}
